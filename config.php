<?php $Care = NEW \PHPHtml\CodeOptimizer\optimizer\Enhancers();  ?>
<?php 
/*
|
| Register Current PATH - Require/includes
|--------------------------------------------------------------------------
| CONFIG FILE | PHPHtml-Optimizer 
|--------------------------------------------------------------------------
|   
|  Ex. Project Folder root: Includes/   
|  'Library' => SET_DIR_PATH('Includes')   // you can get all file within this folder
|
*/
 
$PATH['REGISTERED'] = [
   
  'Library' => SET_DIR_PATH('library'),
  'FT'      => SET_DIR_PATH('files/TEST'),
  'F'       => SET_DIR_PATH('files'),
  'PTest'	=> SET_DIR_PATH('Test/test1/test2')

];

/*
|
| Register Current DIRECTORY - views
|--------------------------------------------------------------------------
| CONFIG FILE | PHPHtml-Optimizer 
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
 
  'Views'        => SET_DIR_PATH('saver/views/'),
  'VTemplates'   => SET_DIR_PATH('saver/views/templates')        

];

/*
|
| Register Current URI / LOCALHOST - Redirect
|--------------------------------------------------------------------------
| CONFIG FILE | PHPHtml-Optimizer 
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
  'redirect'   => SET_DIR_PATH('files')     

];
