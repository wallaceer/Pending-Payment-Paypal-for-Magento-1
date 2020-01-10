<?php
/**
 * WS Pending Paypal
 *
 * @author    WS https://waltersanti.info <ws@waltersanti.info>
 * @copyright Copyright (C) 2014 WS
 *
 */
class WS_PendingPaypal_Model_Mysql4_PendingPaypal_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
 {
     public function _construct()
     {
         parent::_construct();
         $this->_init('pendingpaypal/pendingpaypal');
     }
}
