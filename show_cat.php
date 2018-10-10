<?php
ini_set('max_execution_time', 0);
ini_set('memory_limit', '-1');
set_time_limit(0);
$br = '</br>' ; 
// while (@ob_end_flush());
require_once ("/ssd/home/ser/zd/main/es/zdom/tst/magento/zd_main_chek/es/app/Mage.php");
include_once "/brqx/tests/spyc/Spyc.php"											; // Yaml parser include

echo "Loading Cats 02a" . $br ; 
// We have multiple versions
$PHP_VER='v56'        ;

include_once "/brqx/base/rcode/" . $PHP_VER . "/gen/v0_0_1/rphp/objects/magento/zz_list.lib"		; 
 
$app = Mage::app();
// Create a new instance of our class and run it.
echo Mage::getVersion() . $br;
$yaml_file = 'farma_cat_eng.yaml';

$categories = new mge_categories($yaml_file);

$categories->p('Before Load')					;

$categories->load()							;

$categories->p('Saving')					;
$categories->save()							;

try
{
// $catlist=$categories->getList(1);

$categories->p('---Second---Foreach')			;
foreach ($categories->arr['cat'] as $pos => $elem)
print ( $pos . ' ' . $elem ) ; 

//echo '<pre>';print_r($catlist->getData());
}catch(Exception $e){
echo $e->getMessage();
}


