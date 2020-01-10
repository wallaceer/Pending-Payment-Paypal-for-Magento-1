<?php
/**
 * WS Pending Paypal
 *
 * @author    WS https://waltersanti.info <ws@waltersanti.info>
 * @copyright Copyright (C) 2014 WS
 *
 */

class WS_PendingPaypal_Block_PendingPaypal extends Mage_Core_Block_Template
{
    
    public function pendingPaypalIsActive(){
        #Mage::getConfig()->getModuleConfig('WS_PendingPaypal')->is('active', 'true');
    }
    
}
?>
