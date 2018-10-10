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
$PHP_VER='v56'        ;

include_once "/brqx/base/rcode/" . $PHP_VER . "/gen/v0_0_1/rphp/objects/magento/zz_list.lib"		; 
//$app = Mage::app();
Mage::app('admin');
Mage::register('isSecureArea', 1);
// Create a new instance of our class and run it.
//echo Mage::getVersion();
$yaml_file = 'farma_cat_eng.yaml';

$categories = new mge_categories();

/*$list = $categories->getcategorylist(0)->getData();

foreach ($list as $pos => $arr_value)
{
	$path 			= $arr_value['path']						;  // url path ?
	$level 			= $arr_value['level']							;  
	$num_children 	= $arr_value['children_count']				;  // num children	
	$categories->p('P ' . $pos . ' L ' . $level .  ' Uri ' . $path . ' Children ' . $num_children ) ;
}*/
$catIds=$categories->getAllCategoryByLevel(2);
foreach($catIds as $cId){
	echo $categories->getCategoryNameById($cId);
}

try {
echo '-----------------------------------------------' . $br;	
	//$childcat=$categories->get_children('Cosmetics and Beauty');
	//$categories->parr($childcat);
	$catlistHtml = $categories->getTreeCategories(2, true);
	echo '<pre>';print_r($catlistHtml);
	
	
echo '-----------------------------------------------' . $br;
//$categories->create_parent('Cosmetics and Beauty');
//$categories->delete_parent('Cosmetics and Beauty');
//$categories->create_children('Cosmetics and Beauty','Sun');
//$categories->delete_children('Cosmetics and Beauty','Sun');
}
catch(Exception $e){
echo $e->getMessage();
}

