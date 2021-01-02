<?php 

USE \PHPHtml\CodeOptimizer\merge\Html;
USE \PHPHtml\CodeOptimizer\optimizer\Html AS Optimzer;
USE \PHPHtml\CodeOptimizer\optimizer\Enhancers AS PHPFileHandler;

/**
 * @copyright (c) 2020-2021 PHPFILEnhancer v1 Cooked by nielsoffice
 *
 * PHPFILEnhancer v1 free software: you can redistribute it and/or modify
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
 * @version   v1
 *
 *
 * @method belongs_to(); 
 * @method KeyFolderPath();  
 *
 */

/**
  *
  * @since 22.11.2020
  * @category PHPFileEnhancer
  * @method Defined bring_to(GETFROM(['PATH','KEY']), 'file',__PHP__, OPTIONAL);
  * 
  *
  **/
function bring_to(

   $config
  ,$fileName    =  null
  ,$extension   =  null
  ,$Optional    =  null

 )
 {
  
 /**
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : $FileEnhance->bring_to(GETFROM(['PATH','F']), 'file',__PHP__, OPTIONAL); "Optional" // REQUIRE | INCLUDES | INCLUDES ONCE | REQUIREONCE DEFAULT
   *
   *
   *
   **/  
 $Enhancer = new PHPFileHandler();
 
 return method_exists($Enhancer, 'bring_to') ? 
    
    $Enhancer->bring_to($config, $fileName, $extension, $Optional) : 
    
       PERFORM(erorrMessage());
} 

/**
  *
  * @since 22.11.2020
  * @category PHPFileEnhancer
  * @method Defined view_to(GETFROM(['PATH','KEY']), 'about' );
  * 
  *
  **/
function view_to(

   $config
  ,$fileName

)
{
  
 /**
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : $FileEnhance->bring_to(GETFROM(['PATH','F']), 'file',__PHP__, OPTIONAL); "Optional" // REQUIRE | INCLUDES | INCLUDES ONCE | REQUIREONCE DEFAULT
   *
   *
   *
   **/  
  $Enhancer = new PHPFileHandler();

  return method_exists($Enhancer, 'view_to') ? 

     $Enhancer->view_to($config, $fileName) : 

        PERFORM(erorrMessage());
 
} 

/**
  *
  * @since 22.11.2020
  * @category PHPFileEnhancer
  * @method Defined send_to($uri);
  * 
  *
  **/
function send_to(

  $uri

 )
 {
  
 /**
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : $FileEnhance->bring_to(GETFROM(['PATH','F']), 'file',__PHP__, OPTIONAL); "Optional" // REQUIRE | INCLUDES | INCLUDES ONCE | REQUIREONCE DEFAULT
   *
   *
   *
   **/  
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'send_to') ? 

    $Enhancer->send_to($uri) : 

       PERFORM(erorrMessage());
 
} 

/**
  *
  * @since 22.11.2020
  * @category PHPFileEnhancer
  * @method Defined 'UNIQUE_KEY' => SET_DIR_PATH('dir');  
  * 
  *
  **/
function SET_DIR_PATH(

   $uri
  ,$serverHost     = null

  )
  {
 
  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : $FileEnhance->SET_DIR_PATH(['path','dir'])
   *
   *
   *
   **/  
 $Enhancer = new PHPFileHandler();
 
 return method_exists($Enhancer, 'SET_DIR_PATH') ? 

    $Enhancer->SET_DIR_PATH($uri, $serverHost) : 

      PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPFileEnhancer
  * @method Defined GETFROM(['array'])  
  * GETFROM(['PATH','DIR']) //  SUPPRTED/VALID PARAM  : PATH | VIEWS | RURI 
  *
  **/
function  GETFROM( 

    $array_realpath_dir   = null

 )
 {  
 
  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : $FileEnhance->GETFROM(['path','dir'])
   *
   *
   *
   **/ 
 $array_realpath_dir = !is_array($array_realpath_dir) ? FILE_HANDLER_MSG_STR : $array_realpath_dir ;
  
 $getValues = array_values($array_realpath_dir);
 $REAL_PATH = strtolower($getValues[0]);

 $Enhancer  = new PHPFileHandler();

 return method_exists($Enhancer, 'GETFROM') ? 

    $Enhancer->GETFROM($REAL_PATH, $array_realpath_dir[1]) : 

      PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPFileEnhancer
  * @method Defined isbelong()  noHTML  
  *
  **/
function isbelongs(

    $page               = null 
   ,$_GETKEYFOLDERPATH_ = null 

 )
 {
 
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

 return method_exists($Enhancer, 'belongs_to') ? 

    $Enhancer->belongs_to($page, $_GETKEYFOLDERPATH_) : 

       PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPFileEnhancer
  * @method Defined getKeyPath() noHTML  
  *
  **/
function getKeyPath() {

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

 return method_exists($Enhancer, 'GetKeyFolderPath') ? 

    $Enhancer->GetKeyFolderPath() : 

      PERFORM(erorrMessage());

}

/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined Break tag Optinal ASSOC  
  *
  **/
function __BR(

    $optional_assoc     = null

)
{

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

 return method_exists($Enhancer, 'BREAK') ? 

    $Enhancer->BREAK($optional_assoc) : 

       PERFORM(erorrMessage());

}

/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined HR   
  *
  **/
function __HR(

   $optional_assoc     = null

 )
 {

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

 return method_exists($Enhancer, 'LINE') ? 

    $Enhancer->LINE($optional_assoc) :

      PERFORM(erorrMessage());

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

 return method_exists($Enhancer, 'SPACE') ? 

    $Enhancer->SPACE() :

      PERFORM(erorrMessage());

}

/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined SetFileEx  
  *
  **/
function SetFileExT(

   $argu

 )
 {

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

 return method_exists($Enhancer, 'SetFileExtension') ? 

    $Enhancer->SetFileExtension($argu) :

      PERFORM(erorrMessage());

}

/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined SetElemAttr  
  *
  **/
function SetElemAttr(

    $array_set_1
   ,$array_set_2

 )
 {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : SetElemAttr()
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'SetElemAttr') ? 

    $Enhancer->SetElemAttr($array_set_1, $array_set_2) : 

       PERFORM(erorrMessage());

}

/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined ATTR  
  *
  **/
function ATTR(

   $PARAM__
  ,$quickStart__

 )
 {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : ATTR()
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();
 
 return method_exists($Enhancer, 'ATTR') ? 

    $Enhancer->ATTR($PARAM__, $quickStart__) : 

       PERFORM(erorrMessage());

}

/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined MODIFIED ELEM HTML  
  *
  **/
function ELEM(

    $Element__    =  null
   ,$value__      =  null
   ,$elemAttr__   =  null
   ,$elemId__     =  null
   ,$elemClass__  =  null

 )
 {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : MODIFIED ELEM() HTML
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'ELEM') ? 

    $Enhancer->ELEM($Element__, $value__, $elemAttr__, $elemId__, $elemClass__) : 

      PERFORM(erorrMessage());

}

/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined DOELSE()  
  *
  **/
function DOELSE(

    $condition     =  null
   ,$if_result     =  null
   ,$else_result   =  null
   ,$assoc         =  null

 )
 {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : DOELSE()
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, '__magicELSE') ? 

    $Enhancer->__magicELSE($condition, $if_result, $else_result, $assoc) : 

      PERFORM(erorrMessage());

}


/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined DOIF()  
  *
  **/
function DOIF(

    $condition     =  null
   ,$if_result     =  null
   ,$assoc         =  null

 )
 {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : DOIF()
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, '__magicIF') ? 

    $Enhancer->__magicIF($condition, $if_result, $assoc) : 

       PERFORM(erorrMessage());

}

/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined MERGE()  
  *
  **/
function MERGE(

   $merge     =  null

 )
 {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : MERGE()
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'MERGE') ? 

    $Enhancer->MERGE($merge) : 

       PERFORM(erorrMessage());

}

/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined PERFORM()  
  *
  **/
function PERFORM(

     $str      =  null
    ,$assoc    =  null

 )
 {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : PERFORM()
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'PERFORM') ?

     $Enhancer->PERFORM($str, $assoc) :

        PERFORM(erorrMessage());

}

/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined STRING()  
  *
  **/
function STRING(

    $str   =  null
   ,$assoc =  null

 )
 {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : STRING()
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();
 
 return method_exists($Enhancer, 'STRING') ? 

   $Enhancer->STRING($str, $assoc) : 

     PERFORM(erorrMessage());

}



function erorrMessage() {

  return "Class can Extends but cannot be modify" . __BR();
 
}






