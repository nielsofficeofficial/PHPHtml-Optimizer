<?php 

 namespace PHPHtml\CodeOptimizer\optimizer;

 USE \PHPHtml\CodeOptimizer\merge\Html;
 USE \PHPHtml\CodeOptimizer\optimizer\Html AS Optimizer;

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

class Enhancers Extends Optimizer {
 
/**
  *
  * @method public function add breaktag html as noHTML
  * Defined as break tag no string quotes 
  * Neat and clean noHTML
  *
  **/
  public function BREAK($assoc=null) { 
 
   return function_exists(__BR__) ? parent::_isTrueBREAK_assoc($assoc) : FALSE ; 
}

/**
  *
  * @method public function add line html as noHTML
  * Defined as horizontal line tag no string quotes 
  * Neat and clean noHTML
  *
  **/
   public function LINE($assoc=null) { 

  return function_exists(__BR__) ? parent::_isTrueLine_assoc($assoc) : FALSE;     
 
 }

/**
  *
  * @method public function add add Space between text/String
  * Defined as horizontal line tag no string quotes 
  * Neat and clean noHTML
  *
  **/
public function SPACE() { 
 
  return function_exists(__SPACE__) ? parent::_tagSPACER() : FALSE;     

}

/**
  *
  * @method public function add line html as noHTML
  * Defined as print a "String" && execute function with another "" (string) line tag no string quotes
  * echo x"x"x | html::_exe(function()); 
  * Neat and clean noHTML
  *
  **/
 public function MERGE($func_merge = null ) { 

  return $this->_isTrue_SET_Merge($func_merge); 

}

 /**
  *
  * @method public Method Set File Asstes Extension within custom att HTML 
  * Defined File Image Extension | __getAssEXTENSION__
  * $extension = Html::SetExtension($argu); 
  
    function getMeIMG($src,$path, $argu=null) 
    {

       $extension = Html::SetImageExtension($argu);
        
       return $sets = [
         
           $attr_name = [$src],
           $attr_val  = [$path.$extension]
        
        ];

    }

  * Build Beautiful and Maintainable
  *
  **/  
  public function SetFileExtension($argu = null) {

  return function_exists(__FILEEXTENSION__) ? parent::Validate_extension_assets_files($argu) : FALSE;    

}

 /**
 *
 * @method public function SetElementHeaderAttr noHTML
 * @static Method Defined Element Header MEta attributes HTML  
 * Neat and clean noHTML
 * Html::_noHTML(SetElemAttr(['lang'],['en']));
 * Html::_HEAD();
 * Html::_ELEMENT('GPS-Site','meta', SetElemAttr(['charset'],['utf-8']));
 * Html::_ELEMENT('http-equiv','meta', SetElemAttr(['http-equiv','content'],['X-UA-Compatible','IE=edge']));
 *
 **/ 
 public function SetElemAttr($array_set_1 , $array_set_2) { 
   
   return parent::set_Element_Attr($array_set_1,$array_set_2); 
 
 }

  /**
  *
  * @method public function __magicELEMENT noHTML
  * @static Method Defined single call through param html element no closing tag  
  * Neat and clean noHTML
  * .__magicELSE( $par == TRUE ,'Yes','NO','FUNC_ASSOC'); // within the function
  * html::_PERFORM(__magicELSE( $par == TRUE ,'Yes','NO','FUNC_ASSOC')); // without the function 
  *
  **/
  public function __magicELSE($condition=null, $if_result=null, $else_result=null, $assoc=null) { 

  return parent::return_method_concat_else( $condition, $if_result, $else_result, $assoc); 

}


/**
  *
  * @method public function __magicELEMENT noHTML
  * @static Method Defined single call through param html element no closing tag  
  * Neat and clean noHTML
  * .__magicIF( $par == TRUE ,'Yes','FUNC_ASSOC'); // within the function
  * html::_PERFORM(__magicIF( $par == TRUE ,'Yes','FUNC_ASSOC')); // without the function 
  *
  **/
  public function __magicIF($condition=null, $if_result=null, $assoc=null) { 

  return parent::return_method_concat_else( $condition, $if_result, null, $assoc); 

}
 
/**
  *
  * @method public function add line html as noHTML
  * Defined as print a "String" line tag no string quotes 
  * Neat and clean noHTML
  *
  **/
   public function PERFORM($str=null, $assoc=null) { 

    return parent::_isTrue_SET_STRING($str, $assoc); 

 }


/**
  *
  * @method public function add line html as noHTML
  * Defined as print a "String" line tag no string quotes 
  * Neat and clean noHTML
  *
  **/
   public function STRING($str=null, $assoc=null) { 

    return parent::_isTrue_SET_STRING($str, $assoc); 

 }

/**
  *
  * @method protected function PHPFileEnhancer
  * @static Method Defined Usage: belong_to() 
  * RETURN TRUE IF YOU ARE IN CURRENT PAGE BASE ON CONFIG.PHP
  * @since 27.10.2020
  *
  * belong_to('PageName', __MAP_FOLDER_PATH__ ) ||  belong_to('PageName', 'MapFolderPath' ) // MAPFOLDERPATH
  * belong_to('PageName', 4 ) // ASSIGN MAP  || IN ARRAY  belong_to(['PageName1','PageName2']', [4,5] ) 
  * belong_to('PageName') //  DEFAULT PAGE 
  *
  */
public function belongs_to($thisPage = null, $page_array = null) {
   
  return function_exists(__ISBELONG__) ? $this->cpe_xib6_FileHandler_belongs_to($thisPage, $page_array) : $this->PERFORM($this->Enhacer_ErrorMsg());  
 
}

/**
  *
  * @method public function PHPFileEnhancer
  * @static Method Defined Usage: CountFolderFromPath 
  * RETURN DATA FROM ARRAY PRINT FROM PAGE TO GET THE VALUE 
  * NEED TO BE REGISTER TO CONFIGP.HP
  * @since 27.10.2020
  *
  * $Enhancer->MapFolderPath() // MAPFOLDERPATH
  *
  */
public function MapFolderPath() {
 
  return function_exists(__MAPPATH__) ? $this->cpe_xib6_FileHandler_count() : $this->PERFORM($this->Enhacer_ErrorMsg()); 

}

/**
  *
  * @method protected function PHPFileEnhancer
  * @static Method Defined defineCurrentPage() 
  * RETURN FOLDER Check CurrentPage 
  * 
  * @since 27.10.2020
  *
  **/
Protected function cpe_xib6_FileHandler_belongs_to($page, $Page_file)  {
 
 // INPUT_CURRENT_PAGE_NAME_VALIDATE
 // CHECL_INPUT_IF_IT_IS_AN_ARRAY | IF_TRUE_THEN_RETURN_AS_ARRAY_IF_FALSE_RETURN_AS_SIGNLE_POST
 $GetMultiPage__ = is_array($page) ? $IsMultiPage__ = $page :  $IsCurrentPage__  = $page; 

 // INPUT_CURRENT_PAGE_NAME_VALIDATE
 // CHECL_INPUT_IF_IT_IS_AN_ARRAY | IF_TRUE_THEN_RETURN_AS_ARRAY_IF_FALSE_RETURN_AS_SIGNLE_POST
 $GetMultiPagesFile__ = is_array($Page_file) ? $IsMultiPagesFile__ = $Page_file :  $Page_file__  = $Page_file; 

 // CHECK_WHICH_PAGE_YOU_ARE_CUURENT_REQUEST
 // THEN_GET_THE_FILE_PAGE
 $CheckCurrentPage__ = __SELF_REQUEST__;
   
   // CHECK_IF_SECOND_PARAM_IS_EQUAL_TO_MapFolderPath_OR___MAP_FOLDER_PATH__THEN_RETURN_FOLDER_MAP
   // ELSE_RETURN_TRUE_AS_BASE_ON_INT_PARAM_ASSIGNED_TO_BE_TRUE
   if ($Page_file === 'MapFolderPath' || $Page_file === __MAP_FOLDER_PATH__) {  $this->PERFORM($this->MapFolderPath());  exit();
      
       // IF_THE_PAGE_FILE_IS_NULL_OR_EMPTY_THEN_DEFAULT_LEVEL_3
       // IF_IT_IS_TRUE_RETURN_DEFAULT 
     } elseif ( empty($Page_file) || $Page_file == NULL ) {  $TheCurrentPage__  = $CheckCurrentPage__[3];  
     
    // ELSE_CHECK_IF_NOT_THEN_ASSIGN_
    // THE_RETURN_ASSIGN_FROM_PARAMETER_THEN_REPLACE_DEFAULT
    }  else { 
      
      // CHECK_IF_THE_PATH_IS_IN_ARRAY_THE_IF_TRUE_RETURN_ARRAYS_IF_FALSE_RETURN_SINGLE_PAGE 
      $TheCurrentPage__ = $this->cpe_xib6_FileHandler_mulipath_array($GetMultiPagesFile__, $CheckCurrentPage__, $Page_file);

  // REMOVE_PHP_EXTENSION_VALIDATE_FROM_PAGE_PARAM
  // IF_PARAM_AND_GIVE_IS_EQUAL_TRUE 
  $GetTheCurrentPage__ = str_replace( __PHPFILE__ , __EMPTY__ , $TheCurrentPage__);
  
  }  // END OF / IF STATEMENT

   // CHECK_IF_THE_PAGE_IS_IN_ARRAY_THE_IF_TRUE_RETURN_ARRAYS_IF_FALSE_RETURN_SINGLE_PAGE 
  return $this->cpe_xib6_FileHandler_MultiPage_array($GetMultiPage__, $GetTheCurrentPage__);
  
} // End of Method 

/**
  * 
  * @method protected function PHPFileEnhancer
  * @static Method Defined cpe_xib6_FileHandler_mulipage_array() 
  * RETURN FOLDER CONFIG FROM FCONFIG.PHP
  * 
  * @since 03.11.2020
  *
  **/
final private function cpe_xib6_FileHandler_mulipath_array($MultiPagefile__, $CheckCP__, $Pf__) {
   
  // ASSIGNED_VARIABLE_ARRAY 
  $GetPagePath__ = [];
  
  // CHECK_IF_IT_IS_ARRAY_THEN_ // $MultiPagefile__
  // CHECK_THE_PATH
  if (is_array($MultiPagefile__) ) {
     
     // LOOP_THE_PATH_ASSIGN_IN_ARRAY_VALUES 
     foreach ($MultiPagefile__ as $CurrentPath__ )
     {
       
       // CHECK_AND_RETURN_VALUE_FROM_ARRAY_IF_LAST_KEY_IS_EQUAL_TO_VALUE_CURRENTPATH     
       $CurrentPath__ == array_key_last($CheckCP__) ?  $GetPagePath__[] = $CurrentPath__ : false; 
        
     }
     
     // ASSIGNED_IN_VAR_THEN_IMPLODE_RETURN_PATH
     $TheCurrentPage__ =  $CheckCP__[implode('', $GetPagePath__)];        
     
     // ELSE PATH_AS_SINGLE_PATH
     } else { $TheCurrentPage__  = $CheckCP__[$Pf__];

   }
   
   // RETURN_ASSGINED _BASE_PATH
   return $TheCurrentPage__;  

} // cpe_xib6_FileHandler_mulipath_array

/**
  *
  * @method protected function PHPFileEnhancer
  * @static Method Defined cpe_xib6_FileHandler_mulipage_array() 
  * RETURN FOLDER CONFIG FROM FCONFIG.PHP
  * 
  * @since 03.11.2020
  *
  **/
final private function cpe_xib6_FileHandler_MultiPage_array($GMultiP__, $GTCP__) {
  
  // ASSIGNED VARIABLE ARRAY CONTAINER EMPTY
  $GetPage__ = [];

  // CHECK_IF_IT_IS_TRUE // THEN_IF_IT_IS_TRUE_THE_RETURN_TRUE  
  // return $ReturnTrue = $GetTheCurrentPage__ === $GetMultiPage__ ? TRUE : FALSE;
  if (is_array($GMultiP__)) 
  {
    
     // LOOP_THE_PATH_ASSIGN_IN_ARRAY_VALUES 
    foreach ($GMultiP__ as $GetAssigned) {
     
     // CHECK_AND_RETURN_VALUE_FROM_ARRAY_IF_EQUAL_TO_VAUE_WHICH_$GetAssigned
     // STORE IN EMPTY ARRAY VARIABLE  $GetPage__[]
     // IF_TRUE THE RETURN TRUE ELSE RETURN FALSE      
     $GetPage__[] = $GTCP__ === $GetAssigned ? TRUE : FALSE;

    }
    
    // IMPLODE THEN RETURN VALUE ARRAY
    return implode('', $GetPage__);

  } else {

     // ELSE RETURN TRUE NON ARRAY VALUE
     return $GTCP__ === $GMultiP__ ? TRUE : FALSE;
  }

} // END OF THE METHOD cpe_xib6_FileHandler_getMultiPage_array

/**
  *
  * @method protected function PHPFileEnhancer
  * @static Method Defined enhancer_folder_count() 
  * GET PAGE DIRECTORY VALUE TO BE REGISTER IN  CONFIG.PHP
  * RETURN FOLDER CONFIG FROM FCONFIG.PHP
  * 
  * $PHPEnhancer['PAGE_FILE'] = ''; // Default
  * @since 27.10.2020
  *
  **/
final private function cpe_xib6_FileHandler_count() {
 
 /**
  * @var $Folder : Define Main Folder
  * @var $Folder : Secondary Folder
  * @var $Folder : Rrrquest file
  **/ 
 $Folder          = 'Main-forder';
 $subFolder       = 'Sub-forder';
 $PathValue       =  __SELF_REQUEST__;  
  
 // CHECK IF THE FILE IS TRUE 
 if (  $PathValue == TRUE ) {
   
   // LOOP THE FILE IF IT IS TRUE THEN RETURN THEY KEY AND VALUE
  foreach ($PathValue  as $key => $val) 
  {
    
    // THEN COUNT RETURN NUMBER DESIGNATION WITH ARRAY VALUE
    for ($i = $key; $i <= $key; $i++) 
    { 
     
     // CONCAT HTML WITH MERGE VERSION
     // EMTPY ARRAY 
     $Merge    = "";
     // BEGIN MERGE
     $Merge   .=  _MERGE('PRE') .  $i . '  => '; 
      
     // THEN CHECK i IF EQUAL ZERO MEANS WEB ROOT 
     if( $i === 0 ) {
       
       // RETURN WEB ROOT
       $Merge .= '[\'Web-root, localhost\']'; 
       
      // ELSE THAT IS SECONDARY FOLDER SHOWS FOR MAPPING 
      } elseif ( $i >= 2 )  { 
       
       // RETURN SUB FOLDER MAPPING
       $Merge .= '[\''. $subFolder . ' -> ' . $val . '\']'; 
     
     // RETURN OTHER DIRECTORY FOLDER FOR MAPPING
     }  else { $Merge .=  '[\''. $Folder . ' -> ' .$val . '\']'; } 
     
     // END OF MERGE
     $Merge .= xMERGE('PRE');
     
     // THEN PERFORM MAPPING
     $this->PERFORM($Merge);

    }

  } 
  
  // RETURN MAP 
  $this->LINE();
  $this->PERFORM('$[PAGE_FILE] = ' . array_key_last($PathValue));
  $this->LINE();
  
  } else {
   
   // ELSE RETURN ERROR HANDLER MSG
   $this->PERFORM($this->Enhacer_ErrorMsg());

  }

}

/**
  *
  * @method protected function PHPFileEnhancer
  * @static Method Defined HANDLER ERROR MESSAGE 
  * RETURN FOLDER FILE CONFIG>PHP
  * @since 27.10.2020
  *
  */
final private function Enhacer_ErrorMsg() {
        
  $ERROR_MSG  = " ";
  $ERROR_MSG .= " Check Method Instantiate <br />";
  $ERROR_MSG .= " For Developer support visit github submit issue: ".parent::ELEMENT('a','Submit Github Support', parent::IssueSubmitAttr()).$this->BREAK(METHOD_ASSOC);   
  $ERROR_MSG .= " Recomendation: ".parent::ELEMENT('a','Read Documentation Click Here',parent::DocxEnahncerSubmitAttr());      

  return ($ERROR_MSG);  

}


} // End of class
