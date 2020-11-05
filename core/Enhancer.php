<?php 

USE \PHPHtml\CodeOptimizer\merge\Html;
USE \PHPHtml\CodeOptimizer\optimizer\Html AS Optimzer;
USE \PHPHtml\CodeOptimizer\optimizer\Enhancers AS PHPFileHandler;

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

/**
  *
  * @since 20.19.2020
  * @category PHPFileEnhancer
  * @method Defined isbelong()  noHTML  
  *
  **/
function isbelong($page=null, $path_num=null) {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : $FileEnhance->belongs_to('index',  4)
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();
 return $Enhancer->belongs_to($page, $path_num);

}

/**
  *
  * @since 20.19.2020
  * @category PHPFileEnhancer
  * @method Defined isbelong()  noHTML  
  *
  **/
function mapPath() {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : MapFolderPath()
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();
 return $Enhancer->MapFolderPath();

}

/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined Break tag Optinal ASSOC  
  *
  **/
function __BR($optional_assoc = null) {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : BR()
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();
 return $Enhancer->BREAK($optional_assoc);

}

/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined HR   
  *
  **/
function __HR($optional_assoc = null) {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : HR()
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();
 return $Enhancer->LINE($optional_assoc);

}

/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined __space  
  *
  **/
function __space() {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : __space()
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();
 return $Enhancer->SPACE();

}

/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined SetFileEx  
  *
  **/
function SetFileExT($argu) {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : SetFileEx()
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();
 return $Enhancer->SetFileExtension($argu);

}























