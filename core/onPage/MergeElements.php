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

USE  \PHPHtml\CodeOptimizer\Html AS MergeElements; 
$Html = NEW MergeElements();

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined OPTIONAL ASSOCIATED ELEMENTS  
  * NONE CLOSING TAG INLINE HTML
  *
  **/
function __HTML($label="INLINE", $elem=null, $attr=null, $id=null, $class=null, $assoc=null)  {

  /**
   *
   *
   *
   *
   *
   * @package : Merge OPTIONAL ASSOCIATED ELEMENTS 
   * @package : Static Procedural
   * @method  : Html::_ELEMENT($label, $elem, $attr=null, $id, $class, $assoc);
   *
   *
   *
   **/ 
  $Html = NEW MergeElements();
  return $Html->_ELEMENT($label, $elem, $attr=null, $id, $class, $assoc);

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined ASSOCIATED ELEMENTS  
  * WITH CLOSING TAG INLINE HTML
  *
  **/
function _xHTML($elem=null, $value=null, $attr=null, $id=null, $class=null, $label=null)  {

  /**
   *
   *
   *
   *
   *
   * @package : Merge ASSOCIATED ELEMENTS 
   * @package : Static Procedural
   * @method  : Html::ELEMENT($elem, $value, $attr=null, $id, $class, $label)
   *
   *
   *
   **/ 
  $Html = NEW MergeElements();
  return $Html->ELEMENT($elem, $value, $attr=null, $id, $class, $label); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined ASSOCIATED ELEMENTS  
  * BEGIN TAG HTML
  *
  **/
function _MERGE($elem=null, $attr=null, $id=null, $class=null) {

  /**
   *
   *
   *
   *
   *
   * @package : Merge ASSOCIATED ELEMENTS 
   * @package : Static Procedural
   * @method  : Html::__magicMERGE($elem, 'MERGE', $attr=null, $id, $class);
   *
   *
   *
   **/ 
  $Html = NEW MergeElements();
  return $Html->__magicMERGE($elem, 'MERGE', $attr=null, $id, $class);

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined ASSOCIATED ELEMENTS  
  * END TAG HTML
  *
  **/
function xMERGE($elem=null) {

 $Html = NEW MergeElements(); return $Html->__magicMERGE($elem, 'MERGE_END');
	
}


