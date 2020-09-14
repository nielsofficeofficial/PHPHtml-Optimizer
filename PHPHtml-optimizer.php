<?php 

/**
 *
 * Check if the file optimizer is exist!
 * require associated string within Class/Methods/Function
 *
**/
if ( $GetOptimized_ = file_exists(dirname(__FILE__) . '/Html.php') &&
     $GetOptimized_ = file_exists(dirname(__FILE__) . '/on-page/Html.php') ) {
     /*
      |
      |
      |
      |
      |
      | Get CONST Associated String 
      |
      |
      |
      |
      */ 
      require_once 'cons.php';

    }  else  {

    	 // check if there's something wrong directory then return error msg!
    	 if ( (require_once __DIR__ . '/on-page/Html.php') && class_exists('Html')) {
            /*
             |
             |
             |
             |
             |
             | Perform Error handler 
             |
             |
             |
             |
             */ 
            require_once 'cons.php';             
    		Html::_PERFORM(FILE_HANDLER_MSG);
    	}
    	
    }

   # Since the file is true ? .. 
  /*
   |
   |
   |
   |
   |
   | get and required_optimizers static on page
   |
   |
   |
   |
   */ 
 
   require_once __GET_FROM_DIR_ROOT__ . __DIRECTORY_OPTIMIZER__ . __HTMLOPTIMIZER__ ; 
  

