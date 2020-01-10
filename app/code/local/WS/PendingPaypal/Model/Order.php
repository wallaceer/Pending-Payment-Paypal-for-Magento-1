<?php
/**
 * WS Pending Paypal
 *
 * @author    WS https://waltersanti.info <ws@waltersanti.info>
 * @copyright Copyright (C) 2014 WS
 *
 */
class WS_PendingPaypal_Model_Order extends Mage_Sales_Model_Order
{
/**
     * Whether specified state can be set from outside
     * core method rewrite
     * self::STATE_COMPLETE is not protected anymore
     * @param $state
     * @return bool
     */
    public function isStateProtected($state)
    {
        if (empty($state)) {
            return false;
        }
        return self::STATE_CLOSED == $state;
    }
}
?>
