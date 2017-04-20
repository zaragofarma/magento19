<?php
//test
ini_set('max_execution_time', 0);
ini_set('memory_limit', '-1');
set_time_limit(0);
while (@ob_end_flush());
require_once ("../app/Mage.php");
$app = Mage::app();
class Allfunctions
{
   // Implement abstract function getUsers for user list
   public function getUsers($storeId)
   {
	$user=array();
    //$user = Mage::getModel('customer/customer')->getCollection()->addStoreFilter($storeId)->getData();//->setStoreId($storeId)
	$collection = Mage::getResourceModel('customer/customer_collection');
	$collection->addAttributeToFilter('customer_activated', 0);
	$collection->addAttributeToFilter('store_id',$storeId);
	return $collection;
   }
   //get active customer list
   public function activeUsers($storeId)
   {
	$user=array();
    //$user = Mage::getModel('customer/customer')->getCollection()->addStoreFilter($storeId)->getData();//->setStoreId($storeId)
	$collection = Mage::getResourceModel('customer/customer_collection');
	$collection->addAttributeToFilter('customer_activated', 1);
	$collection->addAttributeToFilter('store_id',$storeId);
	return $collection;
   }
   
   //get active customer list
   public function unactiveUsers($storeId)
   {
	$user=array();
    //$user = Mage::getModel('customer/customer')->getCollection()->addStoreFilter($storeId)->getData();//->setStoreId($storeId)
	$collection = Mage::getResourceModel('customer/customer_collection');
	$collection->addAttributeToFilter('customer_activated', 0);
	$collection->addAttributeToFilter('store_id',$storeId);
	return $collection;
   }
   public function getUsersbyId($storeId,$id)
   {
	$user=array();
    //$user = Mage::getModel('customer/customer')->getCollection()->addStoreFilter($storeId)->getData();//->setStoreId($storeId)
	//$collection = Mage::getResourceModel('customer/customer_collection');
	$collection = Mage::getModel('customer/customer')->load($id);
	$collection->setStoreId($storeId);
	//$collection->addFieldToFilter('store_id',$storeId);
	//$collection->addStoreFilter($storeId);
	return $collection;
   }
   public function activeUsersbyId($storeId,$id)
   {
	$user=array();
    //$user = Mage::getModel('customer/customer')->getCollection()->addStoreFilter($storeId)->getData();//->setStoreId($storeId)
	//$collection = Mage::getResourceModel('customer/customer_collection');
	$collection = Mage::getModel('customer/customer')->load($id);
	//$collection->addAttributeToFilter('firstname', 'ftest');
	$collection->setStoreId($storeId);
	//$collection->addFieldToFilter('store_id',$storeId);
	//$collection->addStoreFilter($storeId);
	return $collection;
   }
   public function unactiveUsersbyId($storeId,$id)
   {
	$user=array();
    //$user = Mage::getModel('customer/customer')->getCollection()->addStoreFilter($storeId)->getData();//->setStoreId($storeId)
	//$collection = Mage::getResourceModel('customer/customer_collection');
	$collection = Mage::getModel('customer/customer')->load($id);
	$collection->setStoreId($storeId);
	//$collection->addFieldToFilter('store_id',$storeId);
	//$collection->addStoreFilter($storeId);
	return $collection;
   }
   //get all categories
   public function getCategories($storeId)
   {
	$collection=array();
    $collection = Mage::getModel('catalog/category')->getCollection()->setStoreId($storeId);//->setStoreId($storeId)
	//$collection = Mage::getResourceModel('customer/customer_collection');
	//$collection->addAttributeToFilter('store_id',1);
	return $collection;
   }
   //get all active categories
   public function getactiveCategories($storeId)
   {
	$collection=array();
    $collection = Mage::getModel('catalog/category')->getCollection()->addAttributeToFilter('is_active', 1)->setStoreId($storeId);//->setStoreId($storeId)
	//$collection = Mage::getResourceModel('customer/customer_collection');
	//$collection->addAttributeToFilter('store_id',1);
	return $collection;
   }
   public function getCategoryById($storeId,$id)
   {
	$collection=array();
    $collection = Mage::getModel('catalog/category')->load($id)->setStoreId($storeId);//->setStoreId($storeId)
	//$collection = Mage::getResourceModel('customer/customer_collection');
	//$collection->addAttributeToFilter('store_id',1);
	return $collection;
   }
   
   public function getallProducts($storeId)
   {
	$collection=array();
    $collection = Mage::getModel('catalog/product')->getCollection()->setStoreId($storeId);//->setStoreId($storeId)
	//$collection = Mage::getResourceModel('customer/customer_collection');
	//$collection->addAttributeToFilter('store_id',1);
	return $collection;
   }
   public function getallactiveProducts($storeId)
   {
	$collection=array();
    $collection = Mage::getModel('catalog/product')->getCollection()->setStoreId($storeId);//->setStoreId($storeId)
	$collection->addAttributeToFilter('status',1);
	//$collection = Mage::getResourceModel('customer/customer_collection');
	//$collection->addAttributeToFilter('store_id',1);
	return $collection;
   }
   public function getProductById($storeId,$id)
   {
	$collection=array();
    $collection = Mage::getModel('catalog/product')->load($id)->setStoreId($storeId);//->setStoreId($storeId)
	//$collection = Mage::getResourceModel('customer/customer_collection');
	//$collection->addAttributeToFilter('store_id',1);
	return $collection;
   }
   public function getNewsletterlist($storeId)
   {
	$collection=array();
    $collection = Mage::getModel('newsletter/subscriber')->getCollection()->addFieldToFilter('store_id',$storeId);//->setStoreId($storeId)sssss
	return $collection;
   }
   
   public function deletProductById($id)
   {
    $product = Mage::getModel('catalog/product')->load($id);
	$product->delete();
   }
   public function deletCategoryById($id)
   {
    $category = Mage::getModel('catalog/category')->load($id);
	$category->delete();
   }
}
 
// Create a new instance of our class and run it.
//$users = new Allfunctions();
//$showlist=$users->getUsers();
//print_r($showlist);
?>