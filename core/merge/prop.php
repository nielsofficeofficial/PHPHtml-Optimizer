 <?php 

/**
 * @copyright (c) 2020-2021 PHPHtml-Merge v1.3 Cooked by nielsoffice
 *
 * PHPHtml-Merge v1.3 free software: you can redistribute it and/or modify
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
 * @version   v1.3
 *
 */

require_once __DIR__ . '/../../prop.php';

if ( __CHECK_MAIN_MERGE_ON_PAGE__ &&  __CHECK_MAIN_MERGE_ON_CLASS__ ) {
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
       require_once __GET_LOAD_MERGE__;
      // require __GET_LOAD_MERGEBOX__;
      // require __GET_LOAD_MERGEELEMENT__;   

             

  }  elseif ( __GET_PROPERTY_ITSELF__ ) {
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
           require __GET_PROPERTY_ITSELF__;            
           Html::_PERFORM(FILE_HANDLER_MSG);

      } else {

        return false;
      
      }
      
  

