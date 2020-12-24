<?php 
// Select array directory ex. 
$PATH['REGISTERED'] = [
   
  'Library' => SET_DIR_PATH('library'),
  'FT'      => SET_DIR_PATH('files/TEST'),
  'F'       => SET_DIR_PATH('files')

];

//var_dump(array_keys($PATH['REGISTERED']));
function SET_DIR_PATH($uri) {
   
 return __DIR__ . DIRECTORY_SEPARATOR . $uri . '/' ;

}

function bring_to($config, $fileName=null, $extension=null, $PARAM=null) {
   
 require_once $config.$fileName;

}

// bring_to(GETFORM[0],);    
function  GETFROM(string $param = null) {  

 global $PATH;
 return $PATH['REGISTERED'][$param];

}
