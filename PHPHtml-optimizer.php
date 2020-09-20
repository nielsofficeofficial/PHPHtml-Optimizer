<?php 

/**
 * @copyright (c) 2020-2021 PHPHtml-Merge v1.0 Cooked by nielsoffice
 *
 * PHPHtml-Merge v1.0 free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 * @category  CrownPHPExtend - core noHTML
 * @package   - corePHP ( purePHP / no html for Back End PHP DEVELOPER/PROGRAMMER)
 *            - Enjoy free templates
 *            - Docx/Reference
 *            
 * @author    nielfernandez <nieldigitalsolution@gmail.com>
 * @license   http://_source.org/licenses/gpl-3.0.html GNU Public License
 * @link      https://github.com/nielsofficeofficial/PHPHtml-Optimizer
 * @link      https://github.com/nielsofficeofficial/PHPHtml-Optimizer/blob/master/README.md
 * @link      https://www.facebook.com/nielsofficeofficial
 * @version   v1.0
 *
 */
/**
 *
 * Check if the file optimizer is exist!
 * require associated string within Class/Methods/Function
 *
**/
if ( $GetOptimized_ = file_exists(dirname(__FILE__) . '/core/onPage/Html.php' ) &&
     $GetOptimized_ = file_exists(dirname(__FILE__) . '/core/onClass/Html.php') ) {
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
      require_once 'prop.php';

    }  else  {

    	 // check if there's something wrong directory then return error msg!
    	 if ( (require_once __DIR__ .  __GET_VALIDATE_FILE_PAGE_EXIST__ ) && class_exists('Html')) {
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
            require_once 'prop.php';             
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

   require_once __GET_FROM_DIR_ROOT__ . __DIRECTORY_OPTIMIZER_PAGE__ . __HTMLOPTIMIZER__ ; 

      
   /**
    *
    * @method get return loader
    * @since  14.09.2020 
    *
    **/
    spl_autoload_register(function ($class) {

    /*
    |
    |
    |
    |
    |  
    | get commit Set Project load framework function
    |
    |
    |
    |
    */     
    /**
    *@since 06.082020
    **/

    $frameLoader  = loader_framwork();
  
    /*
    |
    |
    |
    |
    |  
    | get commit Set Project get path installed
    |
    |
    |
    |
    */     
    /**
    *@since 09.142020
    **/

    $root_file    = __GET_FROM_DIR_ROOT__ . __DIRECTORY_OPTIMIZER_CLASS__;

    /*
    |
    |
    |
    |
    |  
    | get len
    |
    |
    |
    |
    */     
    /**
    *@since  09.142020
    **/

    $Getlenght_   = strlen(loader_framwork());

    /*
    |
    |
    |
    |
    |  
    |  Set validate len
    |
    |
    |
    |
    */     
    /**
    *@since  09.142020
    **/

    if (strncmp(loader_framwork(), $class, $Getlenght_) !== 0) {

        return;
    }

    /*
    |
    |
    |
    |
    |  
    | Set merege
    |
    |
    |
    |
    */     
    /**
    *@since  09.142020
    **/

    $InterconnectedClass_ = substr($class, $Getlenght_);

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
    /**
    *@since 09.142020
    **/

    $getClass_ = $root_file . str_replace('\\', '/', $InterconnectedClass_) . '.php';

    /*
    |
    |
    |
    |
    |  
    | get return class empty
    |
    |
    |
    |
    */     
    /**
    *@since 09.142020
    **/
    if (file_exists($getClass_)) { require $getClass_;  }

  }); 

