<?php 


if ( $GetOptimized_ = file_exists(dirname(__FILE__) . '/../onPage/Html.php' ) &&
     $GetOptimized_ = file_exists(dirname(__FILE__) . '/../onClass/Html.php') ) {
     /*
      |
      |
      |
      |
      |
      | Return Merge files
      |
      |
      |
      |
      */ 
      require_once __DIR__ . '/Merge.php';
      require_once __DIR__ . '/MergeBox.php';
      require_once __DIR__ . '/MergeElements.php';      

  }  elseif ( (require_once __DIR__ . '/../../prop.php') && class_exists('Html')) {
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
           require_once __DIR__ . '/../../prop.php';            
            Html::_PERFORM(FILE_HANDLER_MSG);

      } else {

        return false;
      
      }
      
  

