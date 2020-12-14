<?php $Care = NEW \PHPHtml\CodeOptimizer\optimizer\Enhancers();  ?>
<?php 
/*
|
| Register Current PATH - Require/includes
|--------------------------------------------------------------------------
| CONFIG FILE | PHPHtml-Optimizer  :: TEMPLATES
|--------------------------------------------------------------------------
|   
|  Ex. Project Folder root: Includes/   
|  'Library' => SET_DIR_PATH('Includes')   // you can get all file within this folder
|
*/
$PATH['REGISTERED'] = [
   
 'Includes' => SET_DIR_PATH('Includes')

];

/*
|
| Register Current URI / LOCALHOST - Redirect
|--------------------------------------------------------------------------
| CONFIG FILE | PHPHtml-Optimizer :: TEMPLATES
|--------------------------------------------------------------------------
|   
|  ex. Project Folder root: saver/views/   
|  'Views' => SET_DIR_PATH('saver/views/')   // you can get all file within this folder
|	
|  ex. Project Folder root: saver/views/templates	
|  'Views' => SET_DIR_PATH('saver/views/templates')  // you can get all file within this folder
|
*/
$VIEWS['REGISTERED'] = [
 
  'Views'        => SET_DIR_PATH('saver/views'),
  'VTemplates'   => SET_DIR_PATH('saver/views/templates')        

];

/*
|
| Register Current URI / LOCALHOST - Redirect
|--------------------------------------------------------------------------
| CONFIG FILE | PHPHtml-Optimizer :: TEMPLATES
|--------------------------------------------------------------------------
|   
|  ex. Project Folder root: saver/views/   
|  'Views' => SET_DIR_PATH('saver/views/')   // you can get all file within this folder
|	
|  ex. Project Folder root: saver/views/templates	
|  'Views' => SET_DIR_PATH('saver/views/templates')  // you can get all file within this folder
|
*/
$RURI['REGISTERED'] = [
  
  // For LocalHost 
  'redirect'   => SET_DIR_PATH('404')     

];



