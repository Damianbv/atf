<?php
/**
* Interakting Slider
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@magentocommerce.com and you will be sent a copy immediately.
*
* @category   BusinessDecision
* @package    BusinessDecision_Interaktingslider
* @author     Business & Decision Picardie - contactmagento@interakting.com
* @copyright  Copyright (c) 2009 Business & Decision (http://www.businessdecision.com)
* @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/ 

/**
 * Gestionnaire de position des slides
 */
class BusinessDecision_Interaktingslider_Block_Admin_Position extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    public function __construct()
    {
    	$vo_Store = Mage::registry('interaktingslider_store');
    	
    	$this->_controller = 'admin_position';
        $this->_blockGroup = 'interaktingslider';
        $this->_headerText = Mage::helper('interaktingslider')->__('Slides Positions in').' '.$vo_Store->getName();
        
        parent::__construct();
        
        $this->_removeButton('add');
       
    }

}
