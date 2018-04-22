<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="http://atlantasofas.co.uk/skin/frontend/fortis/default/css/_config/design_default.css" type="text/css" rel="stylesheet">
<link href="http://atlantasofas.co.uk/skin/frontend/fortis/default/css/styles.css" type="text/css" rel="stylesheet">
<link href="http://atlantasofas.co.uk/skin/frontend/fortis/default/css/infortis/_shared/generic-cck.css" type="text/css" rel="stylesheet">
<link href="http://atlantasofas.co.uk/skin/frontend/fortis/default/css/_config/grid_default.css" type="text/css" rel="stylesheet">

<link href="http://atlantasofas.co.uk/skin/frontend/fortis/default/css/infortis/_shared/grid12.css" type="text/css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">

<link href="http://atlantasofas.co.uk/skin/frontend/fortis/default/css/override-modules.css" type="text/css" rel="stylesheet">
<link href="http://atlantasofas.co.uk/skin/frontend/fortis/default/css/infortis/_shared/accordion.css" type="text/css" rel="stylesheet">
<link href="http://atlantasofas.co.uk/skin/frontend/fortis/default/css/_config/layout_default.css" type="text/css" rel="stylesheet">
<link href="http://atlantasofas.co.uk/skin/frontend/fortis/default/css/common.css" type="text/css" rel="stylesheet">
<link href="http://atlantasofas.co.uk/skin/frontend/fortis/default/css/override-theme.css" type="text/css" rel="stylesheet">
<link href="http://atlantasofas.co.uk/skin/frontend/fortis/default/css/icons-social.css" type="text/css" rel="stylesheet">
<link href="http://atlantasofas.co.uk/skin/frontend/fortis/default/css/infortis/_shared/icons.css" type="text/css" rel="stylesheet">



<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <div class="header-top-container">
        <div class="header-top header container clearer">
            <div class="grid-full">
                 				
                                                    <div class="block_header_top_left2 item item-left"><div class="links-wrapper-separators">
<ul class="links">
<li class="first hide-below-480"><a title="About Us" href="http://atlantasofas.co.uk/about-us">About Us</a></li>
<li class="hide-below-768"><a title="Showroom" href="http://atlantasofas.co.uk/showroom">Showroom</a></li>
<li class="last hide-below-480"><a title="Location" href="http://atlantasofas.co.uk/location">Location</a></li>
<li class="hide-below-768"><a title="Delivery" href="http://atlantasofas.co.uk/delivery">Delivery</a></li>
<li class="hide-below-768"><a title="Family Run Business" href="http://atlantasofas.co.uk/familyrunbusiness">Family Run Business</a></li>
<li class="hide-below-768"><a title="Guarantees" href="http://atlantasofas.co.uk/guarantee">Guarantees</a></li>
</ul>
</div></div>
                				<div class="cart-header">
<div class="block block-cart">
        <div class="block-title">
        <a class="btn_checkout" href="http://atlantasofas.co.uk/checkout/cart/"><span><strong>Checkout »</strong></span></a>
    </div>
    <div class="block-content">
            <p class="empty"><span class="header_cart_price" id="cart_information_span2">£0</span><a class="item_lnk" href="http://atlantasofas.co.uk/checkout/cart/"><strong> <span class="cart_information_span1">0</span></strong></a>
        </p></div>
</div>
</div>                                


                


                            </div> <!-- end: grid-full -->
                    </div> <!-- end: header-top -->
    </div> <!-- end: header-top-container -->

    <div class="header-primary-container">
        <div class="header-primary header container stretched">
            <div class="grid-full">
                 <div class="search-wrapper search-wrapper-mobile search-wrapper-inline search-wrapper-small item item-right">                    <form id="search_mini_form" action="http://atlantasofas.co.uk/catalogsearch/result/" method="get">
    <div class="form-search">
        <label for="search">Search:</label>
        <input id="search" type="text" name="q" value="" placeholder="Search entire store here..." class="input-text" maxlength="128" autocomplete="off">
        <!--<button type="submit" title="Search" class="button"><span><span>Search</span></span></button>-->		<input type="submit" id="searchsubmit" value="Search" class="search_submit">
        <div id="search_autocomplete" class="search-autocomplete" style="display: none;"></div>
        <script type="text/javascript">
        //<![CDATA[
            var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Search entire store here...');
            searchForm.initAutocomplete('http://atlantasofas.co.uk/catalogsearch/ajax/suggest/', 'search_autocomplete');
        //]]>
        </script>
    </div>
</form><div class="header-card">
                 
                 All major credit/debit cards and cash on delivery we accept<br>
<img src="http://atlantasofas.co.uk/skin/frontend/fortis/default/images/payment-card.jpg" alt="All major credit/debit cards and cash on delivery we accept" >
                 </div>
                </div>
                <div class="v-grid-container">
                    
                    <div class="logo-wrapper grid12-4 v-grid">
                                            <h1 class="logo"><strong>Atlanta sofas</strong><a href="http://atlantasofas.co.uk/" title="Atlanta sofas"><img src="http://atlantasofas.co.uk/skin/frontend/fortis/default/images/logo.png" alt="Atlanta sofas"></a></h1>
                                        </div> <!-- end: logo-wrapper -->
                </div> <!-- end: v-grid-container -->
        
            </div> <!-- end: grid-full -->
        </div> <!-- end: header-primary -->
    </div> <!-- end: header-primary-container -->

            
     <!-- end: nav-container -->
    

  
                
                
	
        <div class="nav-container">
        <div class="nav container clearer stretched has-bg show-bg">



    


    
	<header id="masthead" class="site-header" role="banner">

		<?php //get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->


</div>
    




        </div> <!-- end: nav -->
   

