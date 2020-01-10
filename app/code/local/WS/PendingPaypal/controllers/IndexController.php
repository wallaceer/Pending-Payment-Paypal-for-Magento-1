<?php
/**
 * WS Pending Paypal
 *
 * @author    WS https://waltersanti.info <ws@waltersanti.info>
 * @copyright Copyright (C) 2014 WS
 *
 */
class WS_PendingPaypal_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
    
    /**
     * Update Order status
     * 
     * STATE_COMPLETE
     * STATE_PROCESSING
     * STATE_CLOSED
     * STATE_CANCELED
     * STATE_HOLDED
     * STATE_NEW
     * STATE_PAYMENT_REVIEW
     * STATE_PENDING_PAYMENT
     * STATUS_FRAUD
     */
    public function setordercompletedAction(){
        
        $this->getPendingPaypalStoreConfig();
        
        #echo $this->orderState;
        #exit;
        //Get order increment id
        $orderId = $this->getOrderIdAction();
        $order = Mage::getModel('sales/order')->loadByIncrementId($orderId);
        
        //Create Invoice
        $this->createOrderInvoiceAfterPaypalPayment($order);
        
        //Update Order status
        $order->setState($this->orderState, true)->save();
        
        #echo $this->landingPage;
        #exit;
        //Redirect to customer's account
        $this->_redirect($this->landingPage);
    }
    
    
    /**
     *return order id by url
     * /PendingPaypal/index/setordercompleted/order_id/$id/
     */
    function getOrderIdAction(){
        $params = $this->getRequest()->getParams();
        return $params['order_id'];
    }
    
  
    function getPendingPaypalStoreConfig(){
        $this->orderState = Mage::getStoreConfig('pending_paypal/pending_paypal_settings/pending_paypal_state');
        $this->landingPage = Mage::getStoreConfig('pending_paypal/pending_paypal_settings/pending_paypal_landingpage');
    }
    
    
    /**
     * Create order's invoice
     */
    function createOrderInvoiceAfterPaypalPayment($order){
        try {
            if(!$order->canInvoice())
            {
                Mage::throwException(Mage::helper('core')->__('Cannot create an invoice.'));
            }
        
            $invoice = Mage::getModel('sales/service_order', $order)->prepareInvoice();
        
            if (!$invoice->getTotalQty()) {
                Mage::throwException(Mage::helper('core')->__('Cannot create an invoice without products.'));
            }
        
            $invoice->setRequestedCaptureCase(Mage_Sales_Model_Order_Invoice::CAPTURE_ONLINE);
            $invoice->register();
            $transactionSave = Mage::getModel('core/resource_transaction')
            ->addObject($invoice)
            ->addObject($invoice->getOrder());
        
            $transactionSave->save();
        }
        catch (Mage_Core_Exception $e) {
        
        }
        
    }
    
}

?>
