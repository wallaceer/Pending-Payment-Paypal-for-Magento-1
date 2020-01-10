<?php
/**
 * WS Pending Paypal
 *
 * @author    WS https://waltersanti.info <ws@waltersanti.info>
 * @copyright Copyright (C) 2014 WS
 *
 */
class WS_PendingPaypal_Adminhtml_Model_System_Config_Source_Mycustomoptions
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => Mage_Sales_Model_Order::STATE_COMPLETE, 'label'=>Mage::helper('adminhtml')->__('Complete')),
            array('value' => Mage_Sales_Model_Order::STATE_PROCESSING, 'label'=>Mage::helper('adminhtml')->__('Processing')),
            array('value' => Mage_Sales_Model_Order::STATE_CLOSED, 'label'=>Mage::helper('adminhtml')->__('Closed')),
            array('value' => Mage_Sales_Model_Order::STATE_CANCELED, 'label'=>Mage::helper('adminhtml')->__('Canceled')),
            array('value' => Mage_Sales_Model_Order::STATE_NEW, 'label'=>Mage::helper('adminhtml')->__('New')),
            array('value' => Mage_Sales_Model_Order::STATE_PAYMENT_REVIEW, 'label'=>Mage::helper('adminhtml')->__('Payment Review')),
            array('value' => Mage_Sales_Model_Order::STATE_PENDING_PAYMENT, 'label'=>Mage::helper('adminhtml')->__('Pending Payment')),
            array('value' => Mage_Sales_Model_Order::STATUS_FRAUD, 'label'=>Mage::helper('adminhtml')->__('Fraud'))
        );
    }

}
