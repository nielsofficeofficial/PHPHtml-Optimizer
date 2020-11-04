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
   | Get Root file DIR
   |
   |
   |
   |
   */ 
  define('__ROOTPATH__', __DIR__ . DIRECTORY_SEPARATOR . '../../' ); 

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
<<<<<<< HEAD
  define('__SELF_REQUEST__',explode('/', $_SERVER['PHP_SELF']));
=======
<<<<<<< HEAD
  define('__SELF_REQUEST__',explode('/', $_SERVER['PHP_SELF']);
=======
<<<<<<< HEAD
  define('__SELF_REQUEST__',explode('/', isset($_SERVER['PHP_SELF']));
=======
  define('__SELF_REQUEST__',explode('/', $_SERVER['PHP_SELF']));
>>>>>>> 85e1e2ec7551426b0b17d6f2b8b3dbdca36d855c
>>>>>>> 2760dad15704373ba66d02fa605c97910e516ad6
>>>>>>> 9d7e5d7b9aaf21a47cb476d880b0d89e9c8d1d97

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
  define('__MAP_FOLDER_PATH__','MapFolderPath');  
  