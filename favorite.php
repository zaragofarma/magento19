<?php
ini_set('max_execution_time', 0);
ini_set('memory_limit', '-1');
set_time_limit(0);
$br = '</br>' ; 
// while (@ob_end_flush());
require_once ("/ssd/home/ser/zd/main/es/zdom/tst/magento/zd_main_chek/es/app/Mage.php");
include_once "/brqx/tests/spyc/Spyc.php"; // Yaml parser include
echo "Loading File" . $br ; 
// We have multiple versions
$PHP_VER='v56';
//echo "/brqx/base/rcode/" . $PHP_VER . "/gen/v0_0_1/rphp/objects/magento/zz_list.lib";
include_once "/brqx/base/rcode/" . $PHP_VER . "/gen/v0_0_1/rphp/objects/magento/zz_list.lib"; 
umask(0);
//Mage::init('default');
Mage::app('default');
//Mage::getSingleton('customer/session')->start();
//define('ROOT', Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_WEB));
Mage::getSingleton('core/session', array('name' => 'frontend'));
$customerSession = Mage::getSingleton("customer/session");
$favorite = new mge_favorite();
try {

$favorite->additemtofavorite('code2',1,2);

}
catch(Exception $e){
echo $e->getMessage();
}
//umask(0);

// Initialize Magento
//Mage::app("default");

// You have two options here,
// “frontend” for frontend session or “adminhtml” for admin session
//Mage::getSingleton("core/session", array("name" => "frontend"));
//$session = Mage::getSingleton("customer/session");
if($customerSession->isLoggedIn())
{
echo "Logged in";
}else{
echo "Not logged in";
}
//$shoppingcart->updatecartitem('code2',3);
//$shoppingcart->deletesingleitemcart('code2');
//$shoppingcart->deleteallitemscart();
//echo $savelater->additemtosave('code1',1,2);
