<?php

class Intellimage_ImprovedShipping_Model_Source_ShipperType
{
    public function toOptionArray()
    {
        return array(
            array('value' => Mage_Shipping_Model_Carrier_Abstract::HANDLING_TYPE_FIXED, 'label' => Mage::helper('improvedshipping')->__('Fixed')),
            array('value' => Mage_Shipping_Model_Carrier_Abstract::HANDLING_TYPE_PERCENT, 'label' => Mage::helper('improvedshipping')->__('Percent')),
        );
    }
}
