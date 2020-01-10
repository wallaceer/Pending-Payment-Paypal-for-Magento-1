<?php
/**
 * WS Pending Paypal
 *
 * @author    WS https://waltersanti.info <ws@waltersanti.info>
 * @copyright Copyright (C) 2014 WS
 *
 */

class WS_PendingPaypal_Adminhtml_Model_System_Config_Source_Cmspagelist
{

    /**
     * Options getter
     *
     * @return array
     */
    
    public function toOptionArray()
    {
        return Mage::getModel('cms/page')->getCollection()->toOptionArray();
    }

}
