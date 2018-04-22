<?php

/*
 * @copyright  Copyright (c) 2013 by  ESS-UA.
 */

class Ess_M2ePro_Block_Adminhtml_Common_Amazon_Account_Edit_Tabs_General extends Mage_Adminhtml_Block_Widget
{
    public function __construct()
    {
        parent::__construct();

        // Initialization block
        //------------------------------
        $this->setId('amazonAccountEditTabsGeneral');
        //------------------------------

        $this->setTemplate('M2ePro/common/amazon/account/tabs/general.phtml');
    }

    protected function _beforeToHtml()
    {
        $this->isMarketplaceLocked = false;
        $this->synchronizeProcessing = false;

        if (Mage::helper('M2ePro/Data_Global')->getValue('temp_data') &&
            Mage::helper('M2ePro/Data_Global')->getValue('temp_data')->getId()) {

            /** @var $accountObj Ess_M2ePro_Model_Account */
            $accountObj = Mage::helper('M2ePro/Data_Global')->getValue('temp_data');

            $this->synchronizeProcessing = $accountObj->isLockedObject('server_synchronize');

            if (!$this->synchronizeProcessing) {
                $accountId = $accountObj->getId();

                Mage::helper('M2ePro/Data_Global')->unsetValue('temp_data');
                Mage::helper('M2ePro/Data_Global')->setValue(
                    'temp_data',
                    Mage::helper('M2ePro/Component_Amazon')->getCachedObject('Account',$accountId)
                );
            }

            $this->isMarketplaceLocked = (bool)(int)Mage::getModel('M2ePro/Listing')->getCollection()
                                           ->addFieldToFilter('account_id',$accountObj->getId())
                                           ->getSize();
        }

        $marketplaces = Mage::helper('M2ePro/Component_Amazon')->getCollection('Marketplace')
                                           ->addFieldToFilter('status',Ess_M2ePro_Model_Marketplace::STATUS_ENABLE)
                                           ->addFieldToFilter('developer_key',array('notnull' => true))
                                           ->toArray();

        $this->marketplaces = $marketplaces['items'];
        //var_dump($this->marketplaces); exit();

        return parent::_beforeToHtml();
    }
}