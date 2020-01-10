<?php
/*------------------------------------------------------------------------
# Websites: http://www.WSlab.it/
-------------------------------------------------------------------------*/ 
$installer = $this;

$installer->startSetup();

$installer->run("

-- 
INSERT INTO ".Mage::getConfig()->getTablePrefix()."cms_page (title, root_template, identifier, content_heading, content, is_active) 
values ('Landing Page after Payment from PendingPayment','one_column','paymentok','Thank you for your order','Thank you for your order!','1'
);


");

$installer->endSetup();
