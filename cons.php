<?php 

/**
 *
 * @method return define constant
 * @since  28.08.2020 
 *
 **/

  /*
   |
   |
   |
   |
   |
   | get function associated by FUNCTION ASSOCIATED
   |
   |
   |
   |
   */ 
 define('FUNC_ASSOC','FUNC_ASSOC');
 
  /*
   |
   |
   |
   |
   |
   | get function associated by METHOD ASSOCIATED
   |
   |
   |
   |
   */  
  define('METHOD_ASSOC','METHOD_ASSOC');
 
  /*
   |
   |
   |
   |
   |
   | get function associated by CLASS ASSOCIATED
   |
   |
   |
   |
   */ 
  define('CLASS_ASSOC','CLASS_ASSOC');

  /*
   |
   |
   |
   |
   |
   | get directory
   |
   |
   |
   |
   */ 
  define('__DIRECTORY_OPTIMIZER_PAGE__','/onPage/');

  define('__DIRECTORY_OPTIMIZER_CLASS__','/onClass/');


  /*
   |
   |
   |
   |
   |
   | get file
   |
   |
   |
   |
   */ 
  define('__HTMLOPTIMIZER__','Html.php');

  /*
   |
   |
   |
   |
   |
   | get validate file exist
   |
   |
   |
   |
   */ 
  define('__GET_VALIDATE_FILE_PAGE_EXIST__', '/onPage/Html.php');  
  
  /*
   |
   |
   |
   |
   |
   | get Project suffix
   |
   |
   |
   |
   */ 
  define('__GET_LOADER_PROJECT_SUFFIX__', 'PHPHtml' );

  /*
   |
   |
   |
   |
   |
   | get class suffix
   |
   |
   |
   |
   */ 
  define('__GET_LOADER_CLASS_SUFFIX__', 'CodeOptimizer');

   /*
   |
   |
   |
   |
   |
   | get root file
   |
   |
   |
   |
   */ 
  define('__GET_FROM_DIR_ROOT__', __DIR__ );
  
 
 /**
 *
 * @var $path_defined
 * @package cpx_
 * @since  06.08.2020 
 *
 **/
function loader_framwork() {

/*
|
|
|
|
|  
| get Project PrefixName
|
|
|
|
*/     
/**
*@since 06.082020
**/
 $project_Name   = __GET_LOADER_PROJECT_SUFFIX__;

/*
|
|
|
|
|  
| get Project Class PrefixName
|
|
|
|
*/     
/**
*@since 06.082020
**/     
 $project_Folder = __GET_LOADER_CLASS_SUFFIX__;

/*
|
|
|
|
|  
| get commit ferform name
|
|
|
|
*/  
 return $framework_prefix 

/**
 *@since 06.082020
 **/ 
 
 = "{$project_Name}\\{$project_Folder}\\";
  
} 

// Get Error Msg
const FILE_HANDLER_MSG = 'Directory or files is not exist';
