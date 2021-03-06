ListingMovingHandler = Class.create(ActionHandler, {

    //----------------------------------

    // todo next (temp solution)

    options: {},

    setOptions: function(options)
    {
        this.options = Object.extend(this.options,options);
        return this;
    },

    //----------------------------------

    run: function()
    {
        this.getGridHtml(
            this.gridHandler.getSelectedProductsArray()
        );
    },

    //----------------------------------

    openPopUp: function(gridHtml,popup_title)
    {
        this.popUp = Dialog.info(null, {
            draggable: true,
            resizable: true,
            closable: true,
            className: "magento",
            windowClassName: "popup-window",
            title: popup_title,
            top: 100,
            width: 900,
            height: 500,
            zIndex: 100,
            recenterAuto: false,
            hideEffect: Element.hide,
            showEffect: Element.show
        });
        $('modal_dialog_message').insert(gridHtml).style.paddingTop = '20px';
    },

    //----------------------------------

    getGridHtml: function(selectedProducts)
    {
        this.selectedProducts = selectedProducts;

        var self = this;
        MagentoMessageObj.clearAll();

        self.gridHandler.unselectAll();

        var callback = function(response) {
            new Ajax.Request(self.options.url.getGridHtml, {
                method: 'get',
                parameters: {
                    componentMode: self.options.customData.componentMode,
                    accountId: response.accountId,
                    marketplaceId: response.marketplaceId,
                    attrSetId: Object.toJSON(response.attrSetId),
                    ignoreListings: self.options.customData.ignoreListings
                },
                onSuccess: function (transport) {
                    self.openPopUp(transport.responseText,self.options.text.popup_title);
                }
            });
        };

        new Ajax.Request(self.options.url.prepareData, {
            method: 'post',
            parameters: {
                componentMode: self.options.customData.componentMode,
                selectedProducts: Object.toJSON(self.selectedProducts)
            },
            onSuccess: function (transport) {
                if (transport.responseText == 1) {
                    alert(self.options.text.select_only_mapped_products);
                } else if (transport.responseText == 2) {
                    alert(self.options.text.select_the_same_type_products);
                } else {
                    var response = transport.responseText.evalJSON();

                    if (response.offerListingCreation) {
                        return self.offerListingCreation(
                            response.accountId,
                            response.marketplaceId,
                            function() {
                                callback.call(self,response);
                            }
                        );
                    }

                    callback.call(self,response);
                }
            }
        });
    },

    //----------------------------------

    tryToSubmit: function(listingId)
    {
        new Ajax.Request(this.options.url.tryToMoveToListing, {
            method: 'post',
            parameters: {
                componentMode: this.options.customData.componentMode,
                selectedProducts: Object.toJSON(this.selectedProducts),
                listingId: listingId
            },
            onSuccess: (function(transport) {

                var response = transport.responseText.evalJSON();

                if (response.result == 'success') {
                    return this.submit(listingId);
                }

                new Ajax.Request(this.options.url.getFailedProductsGridHtml, {
                    method: 'get',
                    parameters: {
                        componentMode: this.options.customData.componentMode,
                        failed_products: Object.toJSON(response.failed_products)
                    },
                    onSuccess: (function(transport) {

                        this.popUp.close();
                        this.openPopUp(transport.responseText,this.options.text.failed_products_popup_title);

                        $('modal_dialog_message').down('div[class=grid]').setStyle({
                            maxHeight: '300px',
                            overflow: 'auto'
                        });

                        $('failedProducts_back_button').observe('click',(function() {
                            this.popUp.close();
                            this.getGridHtml(this.selectedProducts);
                        }).bind(this));

                        $('failedProducts_continue_button').observe('click',(function() {
                            this.submit(listingId);
                        }).bind(this));

                    }).bind(this)
                });

            }).bind(this)
        });
    },

    //----------------------------------

    submit: function(listingId)
    {
        var self = this;
        new Ajax.Request(self.options.url.moveToListing, {
            method: 'post',
            parameters: {
                componentMode: self.options.customData.componentMode,
                selectedProducts: Object.toJSON(self.selectedProducts),
                listingId: listingId
            },
            onSuccess: function (transport) {
                self.popUp.close();
                self.scroll_page_to_top();

                var response = transport.responseText.evalJSON();

                if (response.result == 'success') {
                    self.gridHandler.unselectAllAndReload();
                    MagentoMessageObj.addSuccess(self.options.text.successfully_moved);
                    return;
                }

                var message = '';
                if (response.errors == self.selectedProducts.length) { // all items failed
                    message = self.options.text.products_were_not_moved;
                } else {
                    message = self.options.text.some_products_were_not_moved;
                    self.gridHandler.unselectAllAndReload();
                }

                MagentoMessageObj.addError(str_replace('%s', self.options.url.logViewUrl, message));
            }
        });
    },

    //----------------------------------

    offerListingCreation: function(accountId,marketplaceId,callback) {

        if (!confirm(this.options.text.create_listing)) {
            return callback.call(this);
        }

        new Ajax.Request(this.options.url.createDefaultListing, {
            method: 'post',
            parameters: {
                componentMode: this.options.customData.componentMode,
                accountId: accountId,
                marketplaceId: marketplaceId
            },
            onSuccess: (function (transport) {
                callback.call(this);
            }).bind(this)
        });
    }

    //----------------------------------

});