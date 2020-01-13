# Pending Payment Paypal for Magento 1

The default Magento configuration doesn't show the orders with pending payment into the customer's orders list.

This module activates the orders with pending payment into the customer's orders list and allows the customer to proceed with the payment.

The customer can to pay an old order placed with paypal payment method with simple click on link in the payment section of order.

When payment has been received the system changes the status of the order, assigning one set in the configuration panel, creates the invoice and redirects the client on the page of e-commerce set in the configuration panel.

The module provides a small configuration panel where you can:
    
    • Enable / Disable the module
    • Set the order status after payment is received
    • Set the landing page to the user's payment. The page can be selected from the list of pages in the CMS.

#Requisites

    - Magento 1.7, 1.8, 1.9
    - Paypal Pro

#Setup

The installation of the module is very simple:

    1. Go to your Magento Admin Panel and disable cache
    2. Unzip the package on your computer
    3. Log in to the magento website via ftp
    4. Upload the folder "app" and "skin” in the root of your magento site.
 
Check if module work:

    1. Go to your Magento Admin Panel
    2. Go to System → Configuration → IMSEO → Pending Paypal Payment → Configuration
 
If the module doesn’t work refresh the cache.

####See the full setup description in doc/INSTALL.txt

#Configuration

The module Pending Paypal provide a configuration panel from which it is possibile to set:

    • the order state after payment
    • the landing page after payment
