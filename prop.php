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
  define('__DIRECTORY_OPTIMIZER_PAGE__','/core/onPage/');

  define('__DIRECTORY_OPTIMIZER_CLASS__','/core/onClass/');

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
  define('__GET_VALIDATE_FILE_PAGE_EXIST__', '/core/onPage/Html.php');  
  
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
