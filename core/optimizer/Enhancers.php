<?php 

 namespace PHPHtml\CodeOptimizer\optimizer;

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
 
// public function bring_to($fileName, $directory, $Extension, $optional ='REQUIRE_OR_INCLUDE') {
 

//  // Param __ONE__ , __INCLUDE_ONCE__ , __REQUIRE_ONCE__
 
//  // File Name
 
//  // FIle Directory

//  // File Extention   


// }

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
    
  return $this->cpe_xib6_FileHandler_belongs_to($thisPage, $page_array); 
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
  
 if ( $this->cpe_xib6_FileHandler_count() == TRUE) {
  
    return $this->cpe_xib6_FileHandler_count(); 
 
   } else { return false; }

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
final private function cpe_xib6_FileHandler_belongs_to($page, $Page_file)  {
 
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
   if ($Page_file === 'MapFolderPath' || $Page_file === __MAP_FOLDER_PATH__) {  parent::_PERFORM($this->MapFolderPath());
      
       // IF_THE_PAGE_FILE_IS_NULL_OR_EMPTY_THEN_DEFAULT_LEVEL_3
       // IF_IT_IS_TRUE_RETURN_DEFAULT 
     } elseif ( empty($Page_file) || $Page_file == NULL ) {  $TheCurrentPage__  = $CheckCurrentPage__[3]; } 
     
    // ELSE_CHECK_IF_NOT_THEN_ASSIGN_
    // THE_RETURN_ASSIGN_FROM_PARAMETER_THEN_REPLACE_DEFAULT
    else { 
      
      // CHECK_IF_THE_PATH_IS_IN_ARRAY_THE_IF_TRUE_RETURN_ARRAYS_IF_FALSE_RETURN_SINGLE_PAGE 
      $TheCurrentPage__ = $this->cpe_xib6_FileHandler_mulipath_array($GetMultiPagesFile__, $CheckCurrentPage__, $Page_file);

   }  // END OF / IF STATEMENT
 
  // REMOVE_PHP_EXTENSION_VALIDATE_FROM_PAGE_PARAM
  // IF_PARAM_AND_GIVE_IS_EQUAL_TRUE 
  $GetTheCurrentPage__ = str_replace( __PHPFILE__ , __EMPTY__ , $TheCurrentPage__);
  
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
private function cpe_xib6_FileHandler_mulipath_array($MultiPagefile__, $CheckCP__, $Pf__) {
   
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
private function cpe_xib6_FileHandler_MultiPage_array($GMultiP__, $GTCP__) {
  
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
     parent::_PERFORM($Merge);

    }

  } 
  
  // RETURN MAP 
  parent::LINE();
  parent::_PERFORM('$[PAGE_FILE] = ' . array_key_last($PathValue));
  parent::LINE();
  
  } else {
   
   // ELSE RETURN ERROR HANDLER MSG
   parent::_PERFORM($this->Enhacer_ErrorMsg());

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
  $ERROR_MSG .= " For Developer support visit github submit issue: ".self::ELEMENT('a','Submit Github Support',self::IssueSubmitAttr()).parent::BREAK(METHOD_ASSOC);   
  $ERROR_MSG .= " Recomendation: ".self::ELEMENT('a','Read Documentation Click Here',self::DocxSubmitAttr());      

  return ($ERROR_MSG);  

}


} // End of class
