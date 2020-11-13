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

  /*
   |
   |
   |
   |
   |
   | Get File DIR
   |
   |
   |
   |
   */    
  define('__PATH__', __DIR__ . DIRECTORY_SEPARATOR );

  /*
   |
   |
   |
   |
   |
   | Get Root file DIR
   |
   |
   |
   |
   */ 
  define('__ROOTPATH__', __PATH__ . '../../' ); 

  /*
   |
   |
   |
   |
   |
   | Get Extension
   |
   |
   |
   |
   */   
  define('__PHPFILE__','.php');

  /*
   |
   |
   |
   |
   |
   | Get SELF_REQUEST
   |
   |
   |
   |
   */   
  define('__SELF_REQUEST__', explode('/', $GetKey = isset( $_SERVER['PHP_SELF'] ) || $_SERVER['PHP_SELF'] !== NULL ? $_SERVER['PHP_SELF'] : FALSE ));

  /*
   |
   |
   |
   |
   |
   | Set Empty
   |
   |
   |
   |
   */ 
  define('__EMPTY__','');

  /*
   |
   |
   |
   |
   |
   | Return Map Path
   |
   |
   |
   |
   */   
  define('__GET_KEY_FOLDER_PATH__','GetKeyFolderPath');  
  
  /*
   |
   |
   |
   |
   |
   | Set Function ISBELONG
   |
   |
   |
   |
   */ 
  define('__ISBELONG__', 'isbelongs' ); 

  /*
   |
   |
   |
   |
   |
   | Set Function MAP PATH
   |
   |
   |
   |
   */ 
  define('__KEYPATH__', 'GetKeyPath' ); 

  /*
   |
   |
   |
   |
   |
   | Set Function Break Tag
   |
   |
   |
   |
   */ 
  define('__BR__', '__BR' ); 

  /*
   |
   |
   |
   |
   |
   | Set Function HR Tag
   |
   |
   |
   |
   */ 
  define('__HR__', '__HR' ); 

  /*
   |
   |
   |
   |
   |
   | Set Function space
   |
   |
   |
   |
   */ 
  define('__SPACE__', '__space' ); 

  /*
   |
   |
   |
   |
   |
   | Set Function SetFileEx
   |
   |
   |
   |
   */ 
  define('__FILEEXTENSION__', 'SetFileExT' );         

  /*
   |
   |
   |
   |
   |
   | Set PARAM META
   |
   |
   |
   |
   */ 
  define('__META__', 'META' );

  /*
   |
   |
   |
   |
   |
   | Set PARAM LNIKS
   |
   |
   |
   |
   */ 
  define('__LINK__', 'LINK' );

  /*
   |
   |
   |
   |
   |
   | Set PARAM SCRIPTS
   |
   |
   |
   |
   */ 
  define('__SCRIPT__', 'SCRIPT' );

  /*
   |
   |
   |
   |
   |
   | Set PARAM TITLE
   |
   |
   |
   |
   */ 
  define('__TITLE__', 'TITLE' );

  /*
   |
   |
   |
   |
   |
   | Set PARAM CUSTOM_END
   |
   |
   |
   |
   */
  define('__CUSTOM_END__', 'CUSTOM_END' );
    
  /*
   |
   |
   |
   |
   |
   | Set PARAM BEGIN_CUSTOM_END
   |
   |
   |
   |
   */
  define('__BEGIN_CUSTOM_END__', 'BEGIN_CUSTOM_END' );

  /*
   |
   |
   |
   |
   |
   | Set PARAM MERGE
   |
   |
   |
   |
   */    
  define('__MERGE__', 'MERGE' );

  /*
   |
   |
   |
   |
   |
   | Set PARAM SetElemAttr
   |
   |
   |
   |
   */
  define('__SetElemAttr__', 'SetElemAttr' );
  
  /*
   |
   |
   |
   |
   |
   | Set PARAM DOELSE
   |
   |
   |
   |
   */
  define('__DOELSE__', 'DOELSE' );

  /*
   |
   |
   |
   |
   |
   | Set PARAM DOIF
   |
   |
   |
   |
   */
  define('__DOIF__', 'DOIF' );

    /*
   |
   |
   |
   |
   |
   | Set PARAM PERFORM
   |
   |
   |
   |
   */
  define('__PERFORM__', 'PERFORM' );

  /*
   |
   |
   |
   |
   |
   | Set PARAM STRING
   |
   |
   |
   |
   */
  define('__STRING__', 'STRING' );

  /*
   |
   |
   |
   |
   |
   | Set PARAM ATTR
   |
   |
   |
   |
   */
   define('__ATTR__', 'ATTR' );

  /*
   |
   |
   |
   |
   |
   | Set PARAM ELEM
   |
   |
   |
   |
   */
  define('__ELEM__', 'ELEM' );

  /*
   |
   |
   |
   |
   |
   | Set PARAM ELEM
   |
   |
   |
   |
   */
  define('__DOCTYPE__', 'DOCTYPE' );
