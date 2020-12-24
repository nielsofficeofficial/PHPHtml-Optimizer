<?php 

USE \PHPHtml\CodeOptimizer\merge\Html;
USE \PHPHtml\CodeOptimizer\optimizer\Html AS Optimzer;
USE \PHPHtml\CodeOptimizer\optimizer\Enhancer AS PHPFileHandler;

/**
 * @copyright (c) 2020-2021 PHPFILEnhancer v0 Cooked by nielsoffice
 *
 * PHPFILEnhancer v0 free software: you can redistribute it and/or modify
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
 * @package   - corePHP ( PHPFileEnhancer for Back End PHP DEVELOPER/PROGRAMMER)
 *            - Enjoy free templates
 *            - Docx/Reference
 *            
 * @author    nielfernandez <nieldigitalsolution@gmail.com>
 * @license   http://_source.org/licenses/gpl-3.0.html GNU Public License
 * @link      https://github.com/nielsofficeofficial/PHPHtml-Optimizer
 * @link      https://github.com/nielsofficeofficial/PHPHtml-Optimizer/blob/master/README.md
 * @link      https://www.facebook.com/nielsofficeofficial
 * @version   v0
 *
 *
 * @method belongs_to(); 
 * @method MapFolderPath();  
 *
 */

  
  define('__PATH__', __DIR__ . DIRECTORY_SEPARATOR ); // Set DIR PATH Default
  define('__ROOTPATH__', __PATH__ . '../../' ); // Get Root file DIR 
  define('__PHPFILE__','.php'); // Get Extension
  define('__SELF_REQUEST__', empty( explode('/',$_SERVER['PHP_SELF'])) ); // Get SELF_REQUEST
  define('__EMPTY__',''); // Set Empty  
  define('__GET_KEY_FOLDER_PATH__','GetKeyFolderPath');  // Return Map Path
  define('__ISBELONG__', 'isbelongs' ); // Set Function ISBELONG
  define('__KEYPATH__', 'GetKeyPath' ); // Set Function MAP PATH
  define('__BR__', '__BR' ); // Set Function Break Tag
  define('__HR__', '__HR' ); //  Set Function HR Tag
  define('__SPACE__', '__space' ); // Set Function space
  define('__FILEEXTENSION__', 'SetFileExT' );  // Set Function SetFileEx       
  define('__META__', 'META' ); // Set PARAM META
  define('__LINK__', 'LINK' ); //  Set PARAM LNIKS
  define('__SCRIPT__', 'SCRIPT' ); // Set PARAM SCRIPTS
  define('__TITLE__', 'TITLE' ); // Set PARAM TITLE
  define('__CUSTOM_END__', 'CUSTOM_END' ); // Set PARAM CUSTOM_END
  define('__BEGIN_CUSTOM_END__', 'BEGIN_CUSTOM_END' ); // Set PARAM BEGIN_CUSTOM_END   
  define('__MERGE__', 'MERGE' ); // Set PARAM MERGE
  define('__SetElemAttr__', 'SetElemAttr' ); // Set PARAM SetElemAttr
  define('__DOELSE__', 'DOELSE' ); // Set PARAM DOELSE
  define('__DOIF__', 'DOIF' ); // Set PARAM DOIF
  define('__PERFORM__', 'PERFORM' ); // Set PARAM PERFORM
  define('__STRING__', 'STRING' ); // Set PARAM STRING
  define('__ATTR__', 'ATTR' ); // Set PARAM ATTR
  define('__ELEM__', 'ELEM' ); // Set PARAM ELEM
  define('__GETFROM__', 'GETFROM' ); // Set PARAM GETFROM
  define('__BRINGTO__', 'bring_to' ); // Set PARAM GETFROM
  define('__SETDIRPATH__', 'SET_DIR_PATH' ); // Set PARAM SET_PATH_DIR
  define('__DOCTYPE__', 'DOCTYPE' ); // Set PARAM ELEM
  define('__REPLACE_ABSOLUTE_PATH__', '\library\PHPHtml-Optimizer\core\optimizer' ); // Set PARAM __REPLACE_ABSOLUTE_PATH__ SET_PAT_DIR
  define('__INC__', '' ); // Set PARAM SWICTH TO OPTIONAL INCLUDES
  define('__INCONCE__', '' ); // Set PARAM SWICTH TO OPTIONAL INCLUDES ONCE 
  define('__REQUIRE__', '' ); // Set PARAM SWICTH TO OPTIONAL REQUIRE
  define('__ARRPATH__', 'path' ); // Set PARAM ARRAY PATH valid/supported global variable
  define('__ARRVIEWS__', 'views' ); // Set PARAM ARRAY VIEWS valid/supported global variable
  define('__ARRVRURI__', 'ruri' ); // Set PARAM ARRAY RURI valid/supported global variable


