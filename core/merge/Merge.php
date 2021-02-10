<?php 

USE \PHPHtml\CodeOptimizer\merge\Html;
USE \PHPHtml\CodeOptimizer\optimizer\Html AS Merge; 
USE \PHPHtml\CodeOptimizer\optimizer\Enhancers AS PHPFileHandler;

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

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H1 TAG noHTML  
  * Inline Heading tag H1
  *
  **/
function _xH1( 

   $value           =  null 
  ,$attr            =  null 
  ,$element_id      =  null 
  ,$element_class   =  null 
  ,$label           =  null 
  ,$assoc           =  null 

) 
{ 
 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag H1
   * @package : Static Procedural
   * @method  : Html::H1($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/ 
	$Html = NEW Merge(); 
  return method_exists($Html, 'H1') ? $Html->H1($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H2 TAG noHTML  
  * Inline Heading tag H2
  *
  **/
function _xH2( 

   $value          =  null 
  ,$attr           =  null 
  ,$element_id     =  null 
  ,$element_class  =  null 
  ,$label          =  null 
  ,$assoc          =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag H2
   * @package : Static Procedural
   * @method  : Html::H2($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/ 
   $Html = NEW Merge(); 
   return method_exists($Html, 'H2') ? $Html->H2($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H3 TAG noHTML  
  * Inline Heading tag H3
  *
  **/
function _xH3( 

   $value          = null 
  ,$attr           = null 
  ,$element_id     = null 
  ,$element_class  = null 
  ,$label          = null 
  ,$assoc          = null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag H3
   * @package : Static Procedural
   * @method  : Html::H3($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/ 
   $Html = NEW Merge(); 
   return method_exists($Html, 'H3') ? $Html->H3($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H4 TAG noHTML  
  * Inline Heading tag H4
  *
  **/
function _xH4( 

      $value         =  null
     ,$attr          =  null
     ,$element_id    =  null
     ,$element_class =  null
     ,$label         =  null
     ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag H3
   * @package : Static Procedural
   * @method  : Html::H3($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/ 
   $Html = NEW Merge(); 
   return method_exists($Html, 'H4') ? $Html->H4($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());   

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H5 TAG noHTML  
  * Inline Heading tag H5
  *
  **/
function _xH5( 

      $value         =  null
     ,$attr          =  null
     ,$element_id    =  null
     ,$element_class =  null
     ,$label         =  null
     ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag H5
   * @package : Static Procedural
   * @method  : Html::H5($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
   $Html = NEW Merge(); 
   return method_exists($Html, 'H5') ? $Html->H5($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H6 TAG noHTML  
  * Inline Heading tag H6
  *
  **/
function _xH6( 

      $value         =  null
     ,$attr          =  null
     ,$element_id    =  null
     ,$element_class =  null
     ,$label         =  null
     ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag H6
   * @package : Static Procedural
   * @method  : Html::H6($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
   $Html = NEW Merge(); 
   return method_exists($Html,'H6') ? $Html->H6($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DIV TAG noHTML  
  * Inline Heading tag DIV
  *
  **/
function _xDIV( 

      $value         =  null
     ,$attr          =  null
     ,$element_id    =  null
     ,$element_class =  null
     ,$label         =  null
     ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag H6
   * @package : Static Procedural
   * @method  : Html::DIV($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
   $Html = NEW Merge(); 
   return method_exists($Html,'DIV') ? $Html->DIV($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML PARAGRAPH TAG noHTML  
  * Inline Heading tag PARAGRAPH
  *
  **/
function _xP( 

       $value         =  null
      ,$attr          =  null
      ,$element_id    =  null
      ,$element_class =  null
      ,$label         =  null
      ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag PARAGRAPH
   * @package : Static Procedural
   * @method  : Html::P($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
   $Html = NEW Merge(); 
   return method_exists($Html,'P') ? $Html->P($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML BUTTON noHTML  
  * Inline Heading tag BUTTON
  *
  **/
function _xBUTTON( 

       $value         =  null
      ,$attr          =  null
      ,$element_id    =  null
      ,$element_class =  null
      ,$label         =  null
      ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag BUTTON
   * @package : Static Procedural
   * @method  : Html::BUTTON($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
   $Html = NEW Merge(); 
   return method_exists($Html,'BUTTON') ? $Html->BUTTON($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML ANCHOR noHTML  
  * Inline Heading tag ANCHOR
  *
  **/
function _xA( 

      $value          =  null
     ,$attr           =  null
     ,$element_id     =  null
     ,$element_class  =  null
     ,$label          =  null
     ,$assoc          =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag A LINK
   * @package : Static Procedural
   * @method  : Html::A($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
   $Html = NEW Merge(); 
   return method_exists($Html,'A') ? $Html->A($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());
   
}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML IFRAME noHTML  
  * Inline Heading tag IFRAME
  *
  **/
function _xIFRAME( 

      $value          =  null
     ,$attr           =  null
     ,$element_id     =  null
     ,$element_class  =  null
     ,$label          =  null
     ,$assoc          =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag A IFRAME
   * @package : Static Procedural
   * @method  : Html::IFRAME($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
   $Html = NEW Merge(); 
   return method_exists($Html,'IFRAME') ? $Html->IFRAME($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML MAIN noHTML  
  * Inline Heading tag MAIN
  *
  **/
function _xMAIN( 

       $value         =  null
      ,$attr          =  null
      ,$element_id    =  null
      ,$element_class =  null
      ,$label         =  null
      ,$assoc         =  null 

 ) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag MAIN
   * @package : Static Procedural
   * @method  : Html::MAIN($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'MAIN') ? $Html->MAIN($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML NAV noHTML  
  * Inline Heading tag NAV
  *
  **/
function _xNAV( 

       $value         =  null
      ,$attr          =  null
      ,$element_id    =  null
      ,$element_class =  null
      ,$label         =  null
      ,$assoc         =  null 

 ) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag NAV
   * @package : Static Procedural
   * @method  : Html::NAV($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
   $Html = NEW Merge(); 
   return method_exists($Html,'NAV') ? $Html->NAV($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SELECT noHTML  
  * Inline Heading tag SELECT
  *
  **/
function _xSELECT( 

      $value          =  null
     ,$attr           =  null
     ,$element_id     =  null
     ,$element_class  =  null
     ,$label          =  null
     ,$assoc          =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag SELECT
   * @package : Static Procedural
   * @method  : Html::SELECT($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
   $Html = NEW Merge(); 
   return method_exists($Html,'SELECT') ? $Html->SELECT($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML FORM noHTML  
  * Inline Heading tag FORM
  *
  **/
function _xFORM( 

      $value          =  null
     ,$attr           =  null
     ,$element_id     =  null
     ,$element_class  =  null
     ,$label          =  null
     ,$assoc          =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag FORM
   * @package : Static Procedural
   * @method  : Html::FORM($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
   $Html = NEW Merge(); 
   return method_exists($Html,'FORM') ? $Html->FORM($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML PICTURE noHTML  
  * Inline Heading tag PICTURE
  *
  **/
function _xPICTURE( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag PICTURE
   * @package : Static Procedural
   * @method  : Html::PICTURE($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'PICTURE') ? $Html->PICTURE($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SECTION noHTML  
  * Inline Heading tag SECTION
  *
  **/
function _xSECTION( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag SECTION
   * @package : Static Procedural
   * @method  : Html::SECTION($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
   $Html = NEW Merge(); 
   return method_exists($Html,'SECTION') ? $Html->SECTION($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TEXTAREA noHTML  
  * Inline Heading tag TEXTAREA
  *
  **/
function _xTEXTAREA( 

     $value          =  null
    ,$attr           =  null
    ,$element_id     =  null
    ,$element_class  =  null
    ,$label          =  null
    ,$assoc          =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag TEXTAREA
   * @package : Static Procedural
   * @method  : Html::TEXTAREA($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'TEXTAREA') ? $Html->TEXTAREA($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML FOOTER noHTML  
  * Inline Heading tag TEXTAREA
  *
  **/
function _xFOOTER( 

     $value          =  null
    ,$attr           =  null
    ,$element_id     =  null
    ,$element_class  =  null
    ,$label          =  null
    ,$assoc          =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag TEXTAREA
   * @package : Static Procedural
   * @method  : Html::TEXTAREA($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'FOOTER') ? $Html->FOOTER($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML AUDIO noHTML  
  * Inline Heading tag AUDIO
  *
  **/
function _xAUDIO( 

      $value         =  null
     ,$attr          =  null
     ,$element_id    =  null
     ,$element_class =  null
     ,$label         =  null
     ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag AUDIO
   * @package : Static Procedural
   * @method  : Html::AUDIO($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'AUDIO') ? $Html->AUDIO($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML VIDEO noHTML  
  * Inline Heading tag VIDEO
  *
  **/
function _xVIDEO( 

      $value         =  null
     ,$attr          =  null
     ,$element_id    =  null
     ,$element_class =  null
     ,$label         =  null
     ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag VIDEO
   * @package : Static Procedural
   * @method  : Html::VIDEO($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'VIDEO') ? $Html->VIDEO($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML ADDRESS noHTML  
  * Inline Heading tag ADDRESS
  *
  **/
function _xADDRESS( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag ADDRESS
   * @package : Static Procedural
   * @method  : Html::ADDRESS($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'ADDRESS') ? $Html->ADDRESS($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML COLGROUP noHTML  
  * Inline Heading tag COLGROUP
  *
  **/
function _xCOLGROUP( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag COLGROUP
   * @package : Static Procedural
   * @method  : Html::COLGROUP($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'COLGROUP') ? $Html->COLGROUP($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML BDI noHTML  
  * Inline Heading tag BDI
  *
  **/
function _xBDI( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag BDI
   * @package : Static Procedural
   * @method  : Html::BDI($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'COLGROUP') ? $Html->BDI($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML BDO noHTML  
  * Inline Heading tag BDO
  *
  **/
function _xBDO( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag BDO
   * @package : Static Procedural
   * @method  : Html::BDO($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'BDO') ? $Html->BDO($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML BLOCKQUOTE noHTML  
  * Inline Heading tag BLOCKQUOTE
  *
  **/
function _xBLOCKQUOTE( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag BLOCKQUOTE
   * @package : Static Procedural
   * @method  : Html::BLOCKQUOTE($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'BLOCKQUOTE') ? $Html->BLOCKQUOTE($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML CAPTION noHTML  
  * Inline Heading tag CAPTION
  *
  **/
function _xCAPTION( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag CAPTION
   * @package : Static Procedural
   * @method  : Html::CAPTION($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'CAPTION') ? $Html->CAPTION($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML LABEL noHTML  
  * Inline Heading tag LABEL
  *
  **/
function _xLABEL( 

       $value         =  null
      ,$attr          =  null
      ,$element_id    =  null
      ,$element_class =  null
      ,$label         =  null
      ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag LABEL
   * @package : Static Procedural
   * @method  : Html::LABEL($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'LABEL') ? $Html->LABEL($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DATALIST noHTML  
  * Inline Heading tag DATALIST
  *
  **/
function _xDATALIST( 

       $value         =  null
      ,$attr          =  null
      ,$element_id    =  null
      ,$element_class =  null
      ,$label         =  null
      ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag DATALIST
   * @package : Static Procedural
   * @method  : Html::DATALIST($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'DATALIST') ? $Html->DATALIST($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DETAILS noHTML  
  * Inline Heading tag DETAILS
  *
  **/
function _xDETAILS( 

       $value         =  null
      ,$attr          =  null
      ,$element_id    =  null
      ,$element_class =  null
      ,$label         =  null
      ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag DETAILS
   * @package : Static Procedural
   * @method  : Html::DETAILS($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'DETAILS') ? $Html->DETAILS($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SUMMARY noHTML  
  * Inline Heading tag SUMMARY
  *
  **/
function _xSUMMARY( 

       $value         =  null
      ,$attr          =  null
      ,$element_id    =  null
      ,$element_class =  null
      ,$label         =  null
      ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag SUMMARY
   * @package : Static Procedural
   * @method  : Html::SUMMARY($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'SUMMARY') ? $Html->SUMMARY($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DIALOG noHTML  
  * Inline Heading tag DIALOG
  *
  **/
function _xDIALOG( 

      $value         =  null
     ,$attr          =  null
     ,$element_id    =  null
     ,$element_class =  null
     ,$label         =  null
     ,$assoc         =  null

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag DIALOG
   * @package : Static Procedural
   * @method  : Html::DIALOG($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'DIALOG') ? $Html->DIALOG($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());   

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML OPTION noHTML  
  * Inline Heading tag OPTION
  *
  **/
function _xOPTION( 

      $value         =  null
     ,$attr          =  null
     ,$element_id    =  null
     ,$element_class =  null
     ,$label         =  null
     ,$assoc         =  null

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag OPTION
   * @package : Static Procedural
   * @method  : Html::OPTION($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'OPTION') ? $Html->OPTION($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML FIGURE noHTML  
  * Inline Heading tag FIGURE
  *
  **/
function _xFIGURE( 

      $value         =  null
     ,$attr          =  null
     ,$element_id    =  null
     ,$element_class =  null
     ,$label         =  null
     ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag FIGURE
   * @package : Static Procedural
   * @method  : Html::FIGURE($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'FIGURE') ? $Html->FIGURE($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML FIGCAPTION noHTML  
  * Inline Heading tag FIGCAPTION
  *
  **/
function _xFIGCAPTION( 

      $value         =  null
     ,$attr          =  null
     ,$element_id    =  null
     ,$element_class =  null
     ,$label         =  null
     ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag FIGCAPTION
   * @package : Static Procedural
   * @method  : Html::FIGCAPTION($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'FIGCAPTION') ? $Html->FIGCAPTION($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML METER noHTML  
  * Inline Heading tag METER
  *
  **/
function _xMETER( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag METER
   * @package : Static Procedural
   * @method  : Html::METER($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'METER') ? $Html->METER($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML OBJECT noHTML  
  * Inline Heading tag OBJECT
  *
  **/
function _xOBJECT( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag OBJECT
   * @package : Static Procedural
   * @method  : Html::OBJECT($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'OBJECT') ? $Html->OBJECT($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML OPTGROUP noHTML  
  * Inline Heading tag OPTGROUP
  *
  **/
function _xOPTGROUP( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag OPTGROUP
   * @package : Static Procedural
   * @method  : Html::OPTGROUP($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'OPTGROUP') ? $Html->OPTGROUP($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());   

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML OUTPUT noHTML  
  * Inline Heading tag OUTPUT
  *
  **/
function _xOUTPUT( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag OUTPUT
   * @package : Static Procedural
   * @method  : Html::OUTPUT($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'OUTPUT') ? $Html->OUTPUT($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML PROGRESS noHTML  
  * Inline Heading tag PROGRESS
  *
  **/
function _xPROGRESS( 

      $value         =  null
     ,$attr          =  null
     ,$element_id    =  null
     ,$element_class =  null
     ,$label         =  null
     ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag PROGRESS
   * @package : Static Procedural
   * @method  : Html::PROGRESS($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'PROGRESS') ? $Html->PROGRESS($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SVG noHTML  
  * Inline Heading tag SVG
  *
  **/
function _xSVG( 

      $value         =  null
     ,$attr          =  null
     ,$element_id    =  null
     ,$element_class =  null
     ,$label         =  null
     ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag SVG
   * @package : Static Procedural
   * @method  : Html::SVG($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'SVG') ? $Html->SVG($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TEMPLATE noHTML  
  * Inline Heading tag TEMPLATE
  *
  **/
function _xTEMPLATE( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag TEMPLATE
   * @package : Static Procedural
   * @method  : Html::TEMPLATE($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'TEMPLATE') ? $Html->TEMPLATE($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML UL noHTML  
  * Inline Heading tag UL
  *
  **/
function _xUL( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag UL
   * @package : Static Procedural
   * @method  : Html::UL($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'UL') ? $Html->UL($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML OL noHTML  
  * Inline Heading tag OL
  *
  **/
function _xOL( 

      $value         =  null
     ,$attr          =  null
     ,$element_id    =  null
     ,$element_class =  null
     ,$label         =  null
     ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag OL
   * @package : Static Procedural
   * @method  : Html::OL($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'OL') ? $Html->OL($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML LI noHTML  
  * Inline Heading tag LI
  *
  **/
function _xLI( 

      $value         =  null
     ,$attr          =  null
     ,$element_id    =  null
     ,$element_class =  null
     ,$label         =  null
     ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag LI
   * @package : Static Procedural
   * @method  : Html::LI($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'LI') ? $Html->LI($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TABLE noHTML  
  * Inline Heading tag TABLE
  *
  **/
function _xTABLE( 

      $value         =  null
     ,$attr          =  null
     ,$element_id    =  null
     ,$element_class =  null
     ,$label         =  null
     ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag TABLE
   * @package : Static Procedural
   * @method  : Html::TABLE($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'TABLE') ? $Html->TABLE($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TR noHTML  
  * Inline Heading tag TR
  *
  **/
function _xTR( 

      $value         =  null
     ,$attr          =  null
     ,$element_id    =  null
     ,$element_class =  null
     ,$label         =  null
     ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag TR
   * @package : Static Procedural
   * @method  : Html::TR($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'TR') ? $Html->TR($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TD noHTML  
  * Inline Heading tag TD
  *
  **/
function _xTD( 

    $value         =  null
   ,$attr          =  null
   ,$element_id    =  null
   ,$element_class =  null
   ,$label         =  null
   ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag TD
   * @package : Static Procedural
   * @method  : Html::TD($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'TD') ? $Html->TD($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TH noHTML  
  * Inline Heading tag TH
  *
  **/
function _xTH( 

    $value         =  null
   ,$attr          =  null
   ,$element_id    =  null
   ,$element_class =  null
   ,$label         =  null
   ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag TH
   * @package : Static Procedural
   * @method  : Html::TH($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'TH') ? $Html->TH($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML LEGEND noHTML  
  * Inline Heading tag LEGEND
  *
  **/
function _xLEGEND( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag LEGEND
   * @package : Static Procedural
   * @method  : Html::LEGEND($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'LEGEND') ? $Html->LEGEND($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML FIELDSET noHTML  
  * Inline Heading tag FIELDSET
  *
  **/
function _xFIELDSET( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag FIELDSET
   * @package : Static Procedural
   * @method  : Html::FIELDSET($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'FIELDSET') ? $Html->FIELDSET($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TBODY noHTML  
  * Inline Heading tag TBODY
  *
  **/
function _xTBODY( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag TBODY
   * @package : Static Procedural
   * @method  : Html::TBODY($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'TBODY') ? $Html->TBODY($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TFOOT noHTML  
  * Inline Heading tag TFOOT
  *
  **/
function _xTFOOT( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag TBODY
   * @package : Static Procedural
   * @method  : Html::TBODY($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'TFOOT') ? $Html->TFOOTER($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML THEAD noHTML  
  * Inline Heading tag THEAD
  *
  **/
function _xTHEAD( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag THEAD
   * @package : Static Procedural
   * @method  : Html::THEAD($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'THEAD') ? $Html->THEAD($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SPAN noHTML  
  * Inline Heading tag SPAN
  *
  **/
function _xSPAN( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag SPAN
   * @package : Static Procedural
   * @method  : Html::SPAN($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'SPAN') ? $Html->SPAN($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML EM noHTML  
  * Inline Heading tag EM
  *
  **/
function _xEM( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag EM
   * @package : Static Procedural
   * @method  : Html::EM($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'EM') ? $Html->EM($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML B noHTML  
  * Inline Heading tag B
  *
  **/
function _xB( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag B
   * @package : Static Procedural
   * @method  : Html::B($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'B') ? $Html->B($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML I noHTML  
  * Inline Heading tag I
  *
  **/
function _xI( 

      $value         =  null
     ,$attr          =  null
     ,$element_id    =  null
     ,$element_class =  null
     ,$label         =  null
     ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag I
   * @package : Static Procedural
   * @method  : Html::I($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'I') ? $Html->I($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SMALL noHTML  
  * Inline Heading tag SMALL
  *
  **/
function _xSMALL( 

      $value         =  null
     ,$attr          =  null
     ,$element_id    =  null
     ,$element_class =  null
     ,$label         =  null
     ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag SMALL
   * @package : Static Procedural
   * @method  : Html::SMALL($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'SMALL') ? $Html->SMALL($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML MARQUEE noHTML  
  * Inline Heading tag MARQUEE
  *
  **/
function _xMARQUEE( 

       $value         =  null
      ,$attr          =  null
      ,$element_id    =  null
      ,$element_class =  null
      ,$label         =  null
      ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag MARQUEE
   * @package : Static Procedural
   * @method  : Html::MARQUEE($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'MARQUEE') ? $Html->MARQUEE($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML CENTER noHTML  
  * Inline Heading tag CENTER
  *
  **/
function _xCENTER( 

       $value         =  null
      ,$attr          =  null
      ,$element_id    =  null
      ,$element_class =  null
      ,$label         =  null
      ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag CENTER
   * @package : Static Procedural
   * @method  : Html::CENTER($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'CENTER') ? $Html->CENTER($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML CODE noHTML  
  * Inline Heading tag CODE
  *
  **/
function _xCODE( 

       $value         =  null
      ,$attr          =  null
      ,$element_id    =  null
      ,$element_class =  null
      ,$label         =  null
      ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag CODE
   * @package : Static Procedural
   * @method  : Html::CODE($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'CODE') ? $Html->CODE($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML ABBR noHTML  
  * Inline Heading tag ABBR
  *
  **/
function _xABBR( 

       $value         =  null
      ,$attr          =  null
      ,$element_id    =  null
      ,$element_class =  null
      ,$label         =  null
      ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag ABBR
   * @package : Static Procedural
   * @method  : Html::ABBR($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'ABBR') ? $Html->ABBR($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML MAP noHTML  
  * Inline Heading tag MAP
  *
  **/
function _xMAP( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag ABBR
   * @package : Static Procedural
   * @method  : Html::ABBR($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'MAP') ? $Html->MAP($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML CANVAS noHTML  
  * Inline Heading tag CANVAS
  *
  **/
function _xCANVAS( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag ABBR
   * @package : Static Procedural
   * @method  : Html::ABBR($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'CANVAS') ? $Html->CANVAS($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());   

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SITE noHTML  
  * Inline Heading tag SITE
  *
  **/
function _xSITE( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag SITE
   * @package : Static Procedural
   * @method  : Html::SITE($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'SITE') ? $Html->SITE($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DATA noHTML  
  * Inline Heading tag DATA
  *
  **/
function _xDATA( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag DATA
   * @package : Static Procedural
   * @method  : Html::DATA($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'DATA') ? $Html->DATA($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DL noHTML  
  * Inline Heading tag DL
  *
  **/
function _xDL( 

      $value         =  null
     ,$attr          =  null
     ,$element_id    =  null
     ,$element_class =  null
     ,$label         =  null
     ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag DL
   * @package : Static Procedural
   * @method  : Html::DL($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'DL') ? $Html->DL($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DT noHTML  
  * Inline Heading tag DT
  *
  **/
function _xDT( 

      $value         =  null
     ,$attr          =  null
     ,$element_id    =  null
     ,$element_class =  null
     ,$label         =  null
     ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag DT
   * @package : Static Procedural
   * @method  : Html::DT($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'DT') ? $Html->DT($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DD noHTML  
  * Inline Heading tag DD
  *
  **/
function _xDD( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag DD
   * @package : Static Procedural
   * @method  : Html::DD($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'DD') ? $Html->DD($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DFN noHTML  
  * Inline Heading tag DFN
  *
  **/
function _xDFN( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag DD
   * @package : Static Procedural
   * @method  : Html::DD($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'DFN') ? $Html->DFN($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML INS noHTML  
  * Inline Heading tag INS
  *
  **/
function _xINS( 

      $value         =  null
     ,$attr          =  null
     ,$element_id    =  null
     ,$element_class =  null
     ,$label         =  null
     ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag INS
   * @package : Static Procedural
   * @method  : Html::INS($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'INS') ? $Html->INS($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DEL noHTML  
  * Inline Heading tag DEL
  *
  **/
function _xDEL( 

      $value         =  null
     ,$attr          =  null
     ,$element_id    =  null
     ,$element_class =  null
     ,$label         =  null
     ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag DEL
   * @package : Static Procedural
   * @method  : Html::DEL($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'DEL') ? $Html->DEL($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML KBD noHTML  
  * Inline Heading tag KBD
  *
  **/
function _xKBD( 

      $value         =  null
     ,$attr          =  null
     ,$element_id    =  null
     ,$element_class =  null
     ,$label         =  null
     ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag KBD
   * @package : Static Procedural
   * @method  : Html::KBD($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'KBD') ? $Html->KBD($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML MARK noHTML  
  * Inline Heading tag MARK
  *
  **/
function _xMARK( 

      $value         =  null
     ,$attr          =  null
     ,$element_id    =  null
     ,$element_class =  null
     ,$label         =  null
     ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag MARK
   * @package : Static Procedural
   * @method  : Html::MARK($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'MARK') ? $Html->MARK($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML PRE noHTML  
  * Inline Heading tag PRE
  *
  **/
function _xPRE( 

     $value          =  null
    ,$attr           =  null
    ,$element_id     =  null
    ,$element_class  =  null
    ,$label          =  null
    ,$assoc          =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag PRE
   * @package : Static Procedural
   * @method  : Html::PRE($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'PRE') ? $Html->PRE($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML RT noHTML  
  * Inline Heading tag RT
  *
  **/
function _xRT( 

     $value          =  null
    ,$attr           =  null
    ,$element_id     =  null
    ,$element_class  =  null
    ,$label          =  null
    ,$assoc          =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag PRE
   * @package : Static Procedural
   * @method  : Html::PRE($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'RT') ? $Html->RT($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML S noHTML  
  * Inline Heading tag S
  *
  **/
function _xS( 

     $value           =  null
    ,$attr            =  null
    ,$element_id      =  null
    ,$element_class   =  null
    ,$label           =  null
    ,$assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag S
   * @package : Static Procedural
   * @method  : Html::S($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'S') ? $Html->S($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SAMP noHTML  
  * Inline Heading tag SAMP
  *
  **/
function _xSAMP( 

     $value           =  null
    ,$attr            =  null
    ,$element_id      =  null
    ,$element_class   =  null
    ,$label           =  null
    ,$assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag SAMP
   * @package : Static Procedural
   * @method  : Html::SAMP($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'SAMP') ? $Html->SAMP($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML STRONG noHTML  
  * Inline Heading tag STRONG
  *
  **/
function _xSTRONG( 

     $value          =  null
    ,$attr           =  null
    ,$element_id     =  null
    ,$element_class  =  null
    ,$label          =  null
    ,$assoc          =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag STRONG
   * @package : Static Procedural
   * @method  : Html::STRONG($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'STRONG') ? $Html->STRONG($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SUB noHTML  
  * Inline Heading tag SUB
  *
  **/
function _xSUB( 

     $value          =  null
    ,$attr           =  null
    ,$element_id     =  null
    ,$element_class  =  null
    ,$label          =  null
    ,$assoc          =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag SUB
   * @package : Static Procedural
   * @method  : Html::SUB($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'SUB') ? $Html->SUB($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SUP noHTML  
  * Inline Heading tag SUP
  *
  **/
function _xSUP( 

     $value          =  null
    ,$attr           =  null
    ,$element_id     =  null
    ,$element_class  =  null
    ,$label          =  null
    ,$assoc          =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag SUP
   * @package : Static Procedural
   * @method  : Html::SUP($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'SUP') ? $Html->SUP($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML WBR noHTML  
  * Inline Heading tag WBR
  *
  **/
function _xWBR( 

     $value          =  null
    ,$attr           =  null
    ,$element_id     =  null
    ,$element_class  =  null
    ,$label          =  null
    ,$assoc          =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag WBR
   * @package : Static Procedural
   * @method  : Html::WBR($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'WBR') ? $Html->WBR($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML Q noHTML  
  * Inline Heading tag Q
  *
  **/
function _xQ( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag WBR
   * @package : Static Procedural
   * @method  : Html::WBR($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'Q') ? $Html->Q($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML HEAD noHTML  
  * Inline Heading tag HEAD
  *
  **/
function _xHEAD( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag HEAD
   * @package : Static Procedural
   * @method  : Html::HEAD($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'HEAD') ? $Html->HEAD($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TITLE noHTML  
  * Inline Heading tag TITLE
  *
  **/
function _xTITLE( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag TITLE
   * @package : Static Procedural
   * @method  : Html::TITLE($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'TITLE') ? $Html->TITLE($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML BODY noHTML  
  * Inline Heading tag BODY
  *
  **/
function _xBODY( 

     $value         =  null
    ,$attr          =  null
    ,$element_id    =  null
    ,$element_class =  null
    ,$label         =  null
    ,$assoc         =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag BODY
   * @package : Static Procedural
   * @method  : Html::BODY($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'BODY') ? $Html->BODY($value, $attr, $element_id, $element_class, $label, $assoc) : PERFORM(erorrMessage());  

}

