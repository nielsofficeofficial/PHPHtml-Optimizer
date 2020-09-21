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
      
  

