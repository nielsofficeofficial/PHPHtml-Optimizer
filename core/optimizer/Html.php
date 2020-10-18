<?php 

  namespace PHPHtml\CodeOptimizer\optimizer;

/**
 * @copyright (c) 2020-2021 PHPHtml-Optimizer v1.3 Cooked by nielsoffice
 *
 * PHPHtml-Optimizer v1.3 free software: you can redistribute it and/or modify
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
 * noHTML dynamic  structure 
 * non/WITH CLASS|METHOD|FUNCTION ASSOCIATED  
 *
 * @method $noHtml->REAK(); 
 * @method $noHtml->LINE();  
 * @method $noHtml->STRING();    
 * @method $noHtml->H1();
 * @method $noHtml->H3();
 * @method $noHtml->H2();
 * @method $noHtml->H4();
 * @method $noHtml->H5();
 * @method $noHtml->H6();
 * @method $noHtml->DIV();
 * @method $noHtml->P();
 * @method $noHtml->BUTTON();
 * @method $noHtml->A();
 * @method $noHtml->IFRAME();
 * @method $noHtml->MAIN();
 * @method $noHtml->NAV();
 * @method $noHtml->SELECT();
 * @method $noHtml->FORM();
 * @method $noHtml->PICTURE();
 * @method $noHtml->SECTION();
 * @method $noHtml->TEXTAREA();
 * @method $noHtml->AUDIO();
 * @method $noHtml->VIDEO();
 * @method $noHtml->ADDRESS();
 * @method $noHtml->COLGROUP();
 * @method $noHtml->BDI();
 * @method $noHtml->BDO();
 * @method $noHtml->BLOCKQUOTE();
 * @method $noHtml->CAPTION();
 * @method $noHtml->LABEL();
 * @method $noHtml->DATALIST();
 * @method $noHtml->DETAILS();
 * @method $noHtml->SUMMARY();
 * @method $noHtml->DIALOG();
 * @method $noHtml->OPTION();
 * @method $noHtml->FIGURE();
 * @method $noHtml->FIGCAPTION();
 * @method $noHtml->METER();
 * @method $noHtml->OBJECT();
 * @method $noHtml->OPTGROUP();
 * @method $noHtml->OUTPUT();
 * @method $noHtml->PROGRESS();
 * @method $noHtml->SVG();
 * @method $noHtml->TEMPLATE();
 * @method $noHtml->TIME();
 * @method $noHtml->VAR();
 * @method $noHtml->UL();
 * @method $noHtml->OL();
 * @method $noHtml->LI();
 * @method $noHtml->TABLE();
 * @method $noHtml->TR();
 * @method $noHtml->TD();
 * @method $noHtml->TH();
 * @method $noHtml->LEGEND();
 * @method $noHtml->FIELDSET();
 * @method $noHtml->TBODY();
 * @method $noHtml->TFOOT();
 * @method $noHtml->THEAD();
 * @method $noHtml->SPAN();
 * @method $noHtml->EM();
 * @method $noHtml->B();
 * @method $noHtml->I();
 * @method $noHtml->SMALL();
 * @method $noHtml->MARQUEE();
 * @method $noHtml->CENTER();
 * @method $noHtml->CODE();
 * @method $noHtml->ABBR();
 * @method $noHtml->MAP();
 * @method $noHtml->CANVAS();
 * @method $noHtml->CITE();
 * @method $noHtml->DATA();
 * @method $noHtml->DL();
 * @method $noHtml->DT();
 * @method $noHtml->DD();
 * @method $noHtml->DFN();
 * @method $noHtml->INS();
 * @method $noHtml->DEL();
 * @method $noHtml->KBD();
 * @method $noHtml->MARK();
 * @method $noHtml->PRE();
 * @method $noHtml->RT();
 * @method $noHtml->RP();
 * @method $noHtml->S();
 * @method $noHtml->SAMP();
 * @method $noHtml->STRONG();
 * @method $noHtml->SUB();
 * @method $noHtml->SUP();
 * @method $noHtml->WBR();
 * @method $noHtml->Q();
 * @method $noHtml->HEAD();
 * @method $noHtml->TITLE();
 * @method $noHtml->BODY();
 * @method $noHtml->noHTML();
 *
 * noHTML dynamic structure 
 * w/ CLASS|METHOD|FUNCTION ASSOCIATED
 *
 * @method $noHtml->ELEMENT('H1');
 * @method $noHtml->ELEMENT('H2');
 * @method $noHtml->ELEMENT('H3');
 * @method $noHtml->ELEMENT('H4');
 * @method $noHtml->ELEMENT('H5');
 * @method $noHtml->ELEMENT('H6');
 * @method $noHtml->ELEMENT('H1');
 * @method $noHtml->ELEMENT('BUTTON');
 * @method $noHtml->ELEMENT('A');
 * @method $noHtml->ELEMENT('IFRAME');
 * @method $noHtml->ELEMENT('MAIN');
 * @method $noHtml->ELEMENT('NAV');
 * @method $noHtml->ELEMENT('SELECT');
 * @method $noHtml->ELEMENT('FORM');
 * @method $noHtml->ELEMENT('PICTURE');
 * @method $noHtml->ELEMENT('SECTION');
 * @method $noHtml->ELEMENT('TEXTAREA');
 * @method $noHtml->ELEMENT('AUDIO');
 * @method $noHtml->ELEMENT('VIDEO');
 * @method $noHtml->ELEMENT('ADDRESS');
 * @method $noHtml->ELEMENT('COLGROUP');
 * @method $noHtml->ELEMENT('BDI');
 * @method $noHtml->ELEMENT('BDO');
 * @method $noHtml->ELEMENT('CAPTION');
 * @method $noHtml->ELEMENT('LABEL');
 * @method $noHtml->ELEMENT('DATALIST');
 * @method $noHtml->ELEMENT('DETAILS');
 * @method $noHtml->ELEMENT('SUMMARY');
 * @method $noHtml->ELEMENT('DIALOG');
 * @method $noHtml->ELEMENT('OPTION');
 * @method $noHtml->ELEMENT('FIGURE');
 * @method $noHtml->ELEMENT('FIGCAPTION');
 * @method $noHtml->ELEMENT('METER');
 * @method $noHtml->ELEMENT('OBJECT');
 * @method $noHtml->ELEMENT('OPTGROUP');
 * @method $noHtml->ELEMENT('OUTPUT');
 * @method $noHtml->ELEMENT('PROGRESS');
 * @method $noHtml->ELEMENT('SVG');
 * @method $noHtml->ELEMENT('TEMPLATE');
 * @method $noHtml->ELEMENT('TIME');
 * @method $noHtml->ELEMENT('VAR');
 * @method $noHtml->ELEMENT('UL');
 * @method $noHtml->ELEMENT('OL');
 * @method $noHtml->ELEMENT('LI');
 * @method $noHtml->ELEMENT('TABLE');
 * @method $noHtml->ELEMENT('TR');
 * @method $noHtml->ELEMENT('TD');
 * @method $noHtml->ELEMENT('TH');
 * @method $noHtml->ELEMENT('LEGEND');
 * @method $noHtml->ELEMENT('FIELDSET');
 * @method $noHtml->ELEMENT('TBODY');
 * @method $noHtml->ELEMENT('TFOOT');
 * @method $noHtml->ELEMENT('THEAD');
 * @method $noHtml->ELEMENT('SPAN');
 * @method $noHtml->ELEMENT('EM');
 * @method $noHtml->ELEMENT('B');
 * @method $noHtml->ELEMENT('I');
 * @method $noHtml->ELEMENT('SMALL');
 * @method $noHtml->ELEMENT('MARQUEE');
 * @method $noHtml->ELEMENT('CENTER');
 * @method $noHtml->ELEMENT('CODE');
 * @method $noHtml->ELEMENT('ABBR');
 * @method $noHtml->ELEMENT('MAP');
 * @method $noHtml->ELEMENT('CANVAS');
 * @method $noHtml->ELEMENT('CITE');
 * @method $noHtml->ELEMENT('DATA');
 * @method $noHtml->ELEMENT('DL');
 * @method $noHtml->ELEMENT('DT');
 * @method $noHtml->ELEMENT('DD');
 * @method $noHtml->ELEMENT('INS');
 * @method $noHtml->ELEMENT('DEL');
 * @method $noHtml->ELEMENT('KBD');
 * @method $noHtml->ELEMENT('MARK');
 * @method $noHtml->ELEMENT('PRE');
 * @method $noHtml->ELEMENT('RT');
 * @method $noHtml->ELEMENT('RP');
 * @method $noHtml->ELEMENT('S');
 * @method $noHtml->ELEMENT('SAMP');
 * @method $noHtml->ELEMENT('STRONG');
 * @method $noHtml->ELEMENT('SUB');
 * @method $noHtml->ELEMENT('SUP');
 * @method $noHtml->ELEMENT('WBR');
 * @method $noHtml->ELEMENT('Q');
 * @method $noHtml->ELEMENT('HEAD');
 * @method $noHtml->ELEMENT('TITLE');
 * @method $noHtml->ELEMENT('BODY');
 * @method $noHtml->ELEMENT('HTML');
 * @method $noHtml->ELEMENT('BLOCKQUOTE');
 *
 * noHTML dynamic  structure 
 * non/WITH CLASS|METHOD|FUNCTION ASSOCIATED noHTML Form no x tag
 * 
 * @method $noHtml->_ELEMENT('my_input','INPUT');
 * @method $noHtml->_ELEMENT('my_track','track');
 * @method $noHtml->_ELEMENT('my_circle','circle');
 * @method $noHtml->_ELEMENT('my_param','param');
 * @method $noHtml->_ELEMENT('my_meta','meta');
 * @method $noHtml->_ELEMENT('my_link','link');
 * @method $noHtml->_ELEMENT('my_img','img');
 * @method $noHtml->_ELEMENT('my_embed','embed');
 * @method $noHtml->_ELEMENT('my_option','option');
 * @method $noHtml->_ELEMENT('my_col','col');
 * @method $noHtml->_ELEMENT('my_base','base');
 * @method $noHtml->_ELEMENT('my_aside','aside');
 * @method $noHtml->_ELEMENT('my_area','area');
 * @method $noHtml->_ELEMENT('my_DOCTYPE','DOCTYPE');
 *  
 * noHTML  structure non CLASS|METHOD|FUNCTION ASSOCIATED
 * noHTML  structure w/ closing tag
 *
 * @method $noHtml->_H1();
 * @method $noHtml->xH1();
 * @method $noHtml->_H2();
 * @method $noHtml->xH2();
 * @method $noHtml->_H3();
 * @method $noHtml->xH3();
 * @method $noHtml->_H4();
 * @method $noHtml->xH4();
 * @method $noHtml->_H5();
 * @method $noHtml->xH5();
 * @method $noHtml->_H6();
 * @method $noHtml->xH6();
 * @method $noHtml->_DIV();
 * @method $noHtml->xDIV();
 * @method $noHtml->_P();
 * @method $noHtml->xP();
 * @method $noHtml->_BUTTON();
 * @method $noHtml->xBUTTON();
 * @method $noHtml->_A();
 * @method $noHtml->xA();
 * @method $noHtml->_IFRAME();
 * @method $noHtml->xIFRAME();
 * @method $noHtml->_MAIN();
 * @method $noHtml->xMAIN();
 * @method $noHtml->_NAV();
 * @method $noHtml->xNAV();
 * @method $noHtml->_SELECT();
 * @method $noHtml->xSELECT();
 * @method $noHtml->_FORM();
 * @method $noHtml->xFORM();
 * @method $noHtml->_PICTURE();
 * @method $noHtml->xPICTURE();
 * @method $noHtml->_SECTION();
 * @method $noHtml->xSECTION();
 * @method $noHtml->_TEXTAREA();
 * @method $noHtml->xTEXTAREA();
 * @method $noHtml->_AUDIO();
 * @method $noHtml->xAUDIO();
 * @method $noHtml->_VIDEO();
 * @method $noHtml->xVIDEO();
 * @method $noHtml->_ADDRESS();
 * @method $noHtml->xADDRESS();
 * @method $noHtml->_COLGROUP();
 * @method $noHtml->xCOLGROUP();
 * @method $noHtml->_BDI();
 * @method $noHtml->xBDI();
 * @method $noHtml->_BDO();
 * @method $noHtml->xBDO();
 * @method $noHtml->_BLOCKQUOTE();
 * @method $noHtml->xBLOCKQUOTE();
 * @method $noHtml->_CAPTION();
 * @method $noHtml->xCAPTION();
 * @method $noHtml->_LABEL();
 * @method $noHtml->xLABEL();
 * @method $noHtml->_DATALIST();
 * @method $noHtml->xDATALIST();
 * @method $noHtml->_DETAILS();
 * @method $noHtml->xDETAILS();
 * @method $noHtml->_SUMMARY();
 * @method $noHtml->xSUMMARY();
 * @method $noHtml->_DIALOG();
 * @method $noHtml->xDIALOG();
 * @method $noHtml->_OPTION();
 * @method $noHtml->xOPTION();
 * @method $noHtml->_FIGURE();
 * @method $noHtml->xFIGURE();
 * @method $noHtml->_FIGCAPTION();
 * @method $noHtml->xFIGCAPTION();
 * @method $noHtml->_METER();
 * @method $noHtml->xMETER();
 * @method $noHtml->_OBJECT();
 * @method $noHtml->xOBJECT();
 * @method $noHtml->_OPTGROUP();
 * @method $noHtml->xOPTGROUP();
 * @method $noHtml->_OUTPUT();
 * @method $noHtml->xOUTPUT();
 * @method $noHtml->_PROGRESS();
 * @method $noHtml->xPROGRESS();
 * @method $noHtml->_SVG();
 * @method $noHtml->xSVG();
 * @method $noHtml->_TEMPLATE();
 * @method $noHtml->xTEMPLATE();
 * @method $noHtml->_TIME();
 * @method $noHtml->xTIME();
 * @method $noHtml->_VAR();
 * @method $noHtml->xVAR();
 * @method $noHtml->_UL();
 * @method $noHtml->xUL();
 * @method $noHtml->_OL();
 * @method $noHtml->xOL();
 * @method $noHtml->_LI();
 * @method $noHtml->xLI();
 * @method $noHtml->_TABLE();
 * @method $noHtml->xTABLE();
 * @method $noHtml->_TR();
 * @method $noHtml->xTR();
 * @method $noHtml->_TD();
 * @method $noHtml->xTD();
 * @method $noHtml->_TH();
 * @method $noHtml->xTH();
 * @method $noHtml->_LEGEND();
 * @method $noHtml->xLEGEND();
 * @method $noHtml->_FIELDSET();
 * @method $noHtml->xFIELDSET();
 * @method $noHtml->_TBODY();
 * @method $noHtml->xTBODY();
 * @method $noHtml->_TFOOT();
 * @method $noHtml->xTFOOT();
 * @method $noHtml->_THEAD();
 * @method $noHtml->xTHEAD();
 * @method $noHtml->_SPAN();
 * @method $noHtml->xSPAN();
 * @method $noHtml->_EM();
 * @method $noHtml->xEM();
 * @method $noHtml->_B();
 * @method $noHtml->xB();
 * @method $noHtml->_I();
 * @method $noHtml->xI();
 * @method $noHtml->_SMALL();
 * @method $noHtml->xSMALL();
 * @method $noHtml->_STRIKE();
 * @method $noHtml->xSTRIKE();
 * @method $noHtml->_MARQUEE();
 * @method $noHtml->xMARQUEE();
 * @method $noHtml->_CENTER();
 * @method $noHtml->xCENTER();
 * @method $noHtml->_ABBR();
 * @method $noHtml->xABBR();
 * @method $noHtml->_MAP();
 * @method $noHtml->xMAP();
 * @method $noHtml->_CANVAS();
 * @method $noHtml->xCANVAS();
 * @method $noHtml->_CITE();
 * @method $noHtml->xCITE();
 * @method $noHtml->_DATA();
 * @method $noHtml->xDATA();
 * @method $noHtml->_DL();
 * @method $noHtml->xDL();
 * @method $noHtml->_DT();
 * @method $noHtml->xDT();
 * @method $noHtml->_DD();
 * @method $noHtml->xDD();
 * @method $noHtml->_DFN();
 * @method $noHtml->xDFN();
 * @method $noHtml->_INS();
 * @method $noHtml->xINS();
 * @method $noHtml->_DEL();
 * @method $noHtml->xDEL();
 * @method $noHtml->_KBD();
 * @method $noHtml->xKBD();
 * @method $noHtml->_MARK();
 * @method $noHtml->xMARK();
 * @method $noHtml->_PRE();
 * @method $noHtml->xPRE();
 * @method $noHtml->_RT();
 * @method $noHtml->xRT();
 * @method $noHtml->_RP();
 * @method $noHtml->xRP();
 * @method $noHtml->_S();
 * @method $noHtml->xS();
 * @method $noHtml->_SAMP();
 * @method $noHtml->xSAMP();
 * @method $noHtml->_STRONG();
 * @method $noHtml->xSTRONG();
 * @method $noHtml->_SUB();
 * @method $noHtml->xSUB();
 * @method $noHtml->_SUP();
 * @method $noHtml->xSUP();
 * @method $noHtml->_WBR();
 * @method $noHtml->xWBR();
 * @method $noHtml->_Q();
 * @method $noHtml->xQ();
 * @method $noHtml->_HEAD();
 * @method $noHtml->xHEAD();
 * @method $noHtml->_TITLE();
 * @method $noHtml->xTITLE();
 * @method $noHtml->_BODY();
 * @method $noHtml->xBODY();
 * @method $noHtml->_noHTML();
 * @method $noHtml->xnoHTML();
 *
 */

class Html {

/**
  * @var @property Private 
  * defined Properties
  * minify optimized html attribute
  *
  * Each Property dedicated to html
  * Create Beautiful Clean Codes 
  * 
  **/
 private $sq;

/**
  * @var @property Private 
  * defined double quotes
  * minify optimized html attribute 
  **/
 private $dq;

/**
  * @var @property Private 
  * defined less than sign
  * minify optimized html attribute 
  **/
 private $lt; 

/**
  * @var @property Private 
  * defined greather than sign 
  * minify optimized html attribute 
  **/
 private $gt;

/**
  * @var @property Private 
  * defined equal sign
  * minify optimized html attribute 
  **/
 private $es;

/**
  * @var @property Private 
  * defined html end sign
  * minify optimized html attribute 
  **/
 private $ends;

/**
  * @var @property Private 
  * defined comment begin sign
  * minify optimized html attribute 
  **/
 private $comBEGIN;

/**
  * @var @property Private 
  * defined comment end sign
  * minify optimized html attribute 
  **/
 private $comEND;

/**
  * @var @property Private 
  * defined empty space
  * minify optimized html attribute 
  **/
 private $sHTML;

/**
  * @var @property Private 
  * defined exclamation mark sign
  * minify optimized html attribute 
  **/
 private $exSymbol;

/**
  * @var @property Private 
  * defined execute string no tag
  * minify optimized html attribute 
  **/
 private $str;

/**
  * @var @property CONST | FUNC_ASSOC  
  * defined Assigned associsated dstring within the function/Class/Method
  * minify optimized html attribute 
  **/
 CONST FUNC_ASSOC       = 'FUNC_ASSOC';

/**
  * @var @property CONST | CLASS_ASSOC  
  * defined Assigned associsated dstring within the function/Class/Method
  * minify optimized html attribute 
  **/
 CONST CLASS_ASSOC      = 'CLASS_ASSOC';
 
/**
  * @var @property CONST | METHOD_ASSOC  
  * defined Assigned associsated dstring within the function/Class/Method
  * minify optimized html attribute 
  **/
 CONST METHOD_ASSOC      = 'METHOD_ASSOC';

/**
  * @var @property @static CONST | __SetPHP__  
  * @since 16.10.2020
  * defined Assigned Asset Extenstion File as .PHP
  **/
 CONST __PHP__       = '__PHP__';
 
/**
  * @var @property @static CONST | __SetHTML__  
  * @since 16.10.2020
  * defined Assigned Asset Extenstion File as .HTML
  **/ 
 CONST __HTML__      = '__HTML__';

/**
  * @var @property @static CONST | __SetCSS__  
  * @since 16.10.2020
  * defined Assigned Asset Extenstion File as .CSS
  **/ 
 CONST __CSS__       = '__CSS__'; 

/**
  * @var @property @static CONST | __SetJS__  
  * @since 16.10.2020
  * defined Assigned Asset Extenstion File as .JS
  **/ 
 CONST __JS__        = '__JS__'; 

/**
  * @var @property @static CONST | __SetJPG__  
  * @since 16.10.2020
  * defined Assigned Image Extenstion as .JPG
  **/ 
 CONST __JPG__       = '__JPG__';

/**
  * @var @property @static CONST | __SetJPEG__  
  * @since 16.10.2020
  * defined Assigned Image Extenstion as .JPEG
  **/ 
 CONST __JPEG__      = '__JPEG__';   

/**
  * @var @property @static CONST | __SetPNG__  
  * @since 16.10.2020
  * defined Assigned Image Extenstion as .JPEG
  **/  
 CONST __PNG__       = '__PNG_';

/**
  * @var @property @static CONST | __SetGIF__  
  * @since 16.10.2020
  * defined Assigned Image Extenstion as .GIF
  **/  
 CONST __GIF__       = '__GIF__'; 

/**
  * @var @property @static CONST | __SetBMP__  
  * @since 16.10.2020
  * defined Assigned Image Extenstion as .BMP
  **/  
 CONST __BMP__       = '__BMP__';

/**
  * @var @property @static CONST | __SetTEX__  
  * @since 16.10.2020
  * defined Assigned Image Extenstion as .TEX
  **/  
 CONST __TEX__       = '__TEX__';

/**
  * @var @property @static CONST | __SetXLS__  
  * @since 16.10.2020
  * defined Assigned Image Extenstion as .XLS
  **/  
 CONST __XLS__       = '__XLS__'; 

/**
  * @var @property @static CONST | __SetXLSX__  
  * @since 16.10.2020
  * defined Assigned Image Extenstion as .XLSX_
  **/ 
 CONST __XLSX__      = '__XLSX__';  

/**
  * @var @property @static CONST | __SetDOC__  
  * @since 16.10.2020
  * defined Assigned Image Extenstion as .DOC
  **/ 
 CONST __DOC__       = '__DOC__';

/**
  * @var @property @static CONST | __SetDOCX__  
  * @since 16.10.2020
  * defined Assigned Image Extenstion as .DOCX
  **/ 
 CONST __DOCX__      = '__DOCX__';    

/**
  * @var @property @static CONST | __SetPPT__  
  * @since 16.10.2020
  * defined Assigned Image Extenstion as .PPT
  **/ 
 CONST __PPT__       = '__PPT__';

/**
  * @var @property @static CONST | __SetPPTX__  
  * @since 16.10.2020
  * defined Assigned Image Extenstion as .PPTX
  **/ 
 CONST __PPTX__      = '__PPTX__';

/**
  * @var @property @static CONST | __SetODT__  
  * @since 16.10.2020
  * defined Assigned Image Extenstion as .ODT
  **/ 
 CONST __ODT__       = '__ODT__'; 

/**
  * @var @property @static CONST | __SetTXT__  
  * @since 16.10.2020
  * defined Assigned Image Extenstion as ._TXT
  **/ 
 CONST __TXT__       = '__TXT__';  

/**
  * @var @property @static CONST | __SetRTF__  
  * @since 16.10.2020
  * defined Assigned Image Extenstion as ._RTF
  **/ 
 CONST __RTF__       = '__RTF__'; 

/**
  * @var @property Array of data 
  * defined CONST ARRAY EXNTION FILES
  *
  * @var @__getAssEXTENSION__ 
  *
  **/
 CONST __FILEEXTENSION__  = [ __PHP__  => 'php',  __HTML__ => 'html', __CSS__  => 'css',  __JS__   =>'js',   __JPG__ => 'jpg', 
                              __JPEG__ => 'jpeg', __PNG__  => 'png',  __GIF__  => 'gif',  __BMP__  =>'bmp',  __TEX__ => 'tex',
                              __XLS__  => 'xls',  __XLSX__ => 'xlsx', __DOCX__ => 'doc',  __DOCX__ =>'docx', __PPT__ => 'ppt',
                              __PPTX__ => 'pptx', __ODT__  => 'odt',  __TXT__  => 'txt',  __RTF__  =>'rtf']; 

/**
  * @var @property Array of data 
  * defined html names
  * minify optimized html attribute 
  *
  * @var @PRIMARY_VARIABLE 
  * @var @SECONDAY_VARIABLE 
  * @var @LIST_VARIABLE
  * @var @FORMAT_VARIABLE
  * @var @INLINE_VARIABLE
  * @var @STRUCTURE_VARIABLE
  * @var @BREAKTAG_ARRAY
  *
  **/

 protected $htm    = ['h1','h2','h3','h4','h5','h6','div','p','button','a','iframe','main','nav','select','form','picture','section','textarea'];
/**
  * @var 
  * @property @SECONDARY_VARIABLE 
  * defined arrays of data html 
  **/
 protected $htm_s  = ['audio','video','address','colgroup','bdi','bdo','blockquote','caption','label','datalist','details','summary','dialog','option'];

/**
  * @var 
  * @property @SUPPORT_VARIABLE 
  * defined arrays of data html 
  **/
 protected $htm_ss = ['figure','figcaption','meter','object','optgroup','output','progress','svg','template','time','var'];

/**
  * @var 
  * @property @LIST_VARIABLE 
  * defined arrays of data html 
  **/
 protected $htm_t  = ['ul','ol','li','table','tr','td','th','legend','fieldset','tbody','tfoot','thead']; 

/**
  * @var 
  * @property @FORMAT_VARIABLE 
  * defined arrays of data html 
  **/
 protected $htm_f  = ['span','em','b','i','small','strike','marquee','center','code','abbr','map','canvas','cite','data','dl','dt','dd','dfn','ins'];

/**
  * @var 
  * @property @FORMAT_VARIABLE 
  * defined arrays of data html 
  **/
 protected $htm_fc = ['del','kbd','mark','pre','rt','rp','ruby','s','samp','strong','sub','sup','wbr','q'];

/**
  * @var 
  * @property @INLINE_VARIABLE  (NO x HTML TAG)
  * defined arrays of data html 
  **/
 protected $htm_L  = ['source','track','circle','param','input','meta','link','img','embed','option','col','base','aside','area','DOCTYPE html'];

/**
  * @var 
  * @property @STRUCTURE_VARIABLE  (NO x HTML TAG)
  * defined arrays of data html 
  S**/
 protected $htm_st = ['head','title','body','html'];

/**
  * @var 
  * @property @BREAKS_VARIABLE  (NO x HTML TAG)
  * defined arrays of data html 
  **/
 protected $hBreak = ["\n","br","hr"];

/**
  * @var 
  * @property @html_extend  (register_new_html_syntax)
  * defined arrays of data html 
  **/
 protected $hextend = [];

/**
  *
  * @method public function add breaktag html as noHTML
  * Defined as break tag no string quotes 
  * Neat and clean noHTML
  *
  **/
  public function BREAK($assoc=null) { return $this->_isTrueBREAK_assoc($assoc); }

/**
  *
  * @method public function add line html as noHTML
  * Defined as horizontal line tag no string quotes 
  * Neat and clean noHTML
  *
  **/
   public function LINE($assoc=null) { return $this->_isTrueLine_assoc($assoc); }

/**
  *
  * @method public function add add Space between text/String
  * Defined as horizontal line tag no string quotes 
  * Neat and clean noHTML
  *
  **/
public function SPACE($assoc=null) { return $this->_tagSPACER(); }

/**
  *
  * @method public function add line html as noHTML
  * Defined as print a "String" && execute function with another "" (string) line tag no string quotes
  * echo x"x"x | html::_exe(function()); 
  * Neat and clean noHTML
  *
  **/
 public function _MERGE($func_merge) { return $this->_isTrue_SET_merge($func_merge); }

/**
  *
  * @method public function __magicELEMENT noHTML
  * @static Method Defined single call through param html element no closing tag  
  * Neat and clean noHTML
  * $elem  = 'HTML ELEMENT' ex. p, ul, li etc..
  * $label = 'MERGE' output: <p> | _ any tag elements html
  * $label = 'MERGE_END' output: </p> | x any tag elements html
  *
  **/
 public function __magicMERGE($elem, $label=null, $js=[], $id=null, $class=null) {
 
 return $this->_setReturnELEMENT($this->_setELEMENTS($elem), $_doCONTENT=null, $js, $id, $class, $label); 

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
   static public function SetFileExtension($argu = null) { return self::Validate_extension_assets_files($argu); }

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

  return $this->return_method_concat_else( $condition, $if_result, $else_result, $assoc); 

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

  return $this->return_method_concat_else( $condition,$if_result,$assoc); 

}

/**
  *
  * @method public function add line html as noHTML
  * Defined as print a "String" line tag no string quotes 
  * Neat and clean noHTML
  *
  **/
   public function _PERFORM($str=null, $assoc=null) { return $this->_isTrue_SET_STRING($str, $assoc); }

/**
  *
  * @method public function add line html as noHTML
  * Defined as print a "String" line tag no string quotes 
  * Neat and clean noHTML
  *
  **/
   public function STRING($str=null, $assoc=null) { return $this->_isTrue_SET_STRING($str, $assoc); }

/**
  *
  * @method public function _ELEMENT noHTML
  * @ Method Defined single html element no closing tag  
  * Neat and clean noHTML
  *
  **/
   public function _ELEMENT($inline="INLINE", $elem, $js=[], $id=null, $class=null, $assoc=null) { 
   
  if ($assoc == NULL || $assoc == FALSE || $assoc == 'DEFUALT') {

        # INLINE_OR_ANY_LABEL_REQUIRED
        # CHECK_IF_THE_PARAM_REQUIRED_IS_NOT_NULL
        # IF_IT_IS_NULL_RETURN_FLASE  
        if ( ($inline == FALSE || $inline == NULL) && ($elem == FALSE || $elem == NULL) ) 
        {
          # RETURN_REQUIRED_FIELD_PARAM
          # IF_FALSE_RUN_IF_TRUE    
          echo "Required _Element 'inLINE' & HTML Element : e.g: _ELEMENT('INLINE','input');";
        }
      
        # RETURN_INLINE_ELEMENT_NO_HTML_CLOSING_TAG 
        echo $this->_setReturnINLINELEMENT($this->_setINLINELEMENTS($elem),$js, $id, $class, NULL); 
   } else {

      # CHECK_IF_INLINE_IS_ASSOC_WITH_FUNC_ASSOC_OR_CLASS_ASSOC_OR_METHOD_ASSOC
      if ($assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC) 
      {

          # INLINE_OR_ANY_LABEL_REQUIRED
          # CHECK_IF_THE_PARAM_REQUIRED_IS_NOT_NULL
          # IF_IT_IS_NULL_RETURN_FLASE  
          if ( ($inline == FALSE || $inline == NULL) && ($elem == FALSE || $elem == NULL) ) 
          {
            
          # RETURN_REQUIRED_FIELD_PARAM
          # IF_FALSE_RUN_IF_TRUE    
          return "Required _Element 'inLINE' & HTML Element : e.g: _ELEMENT('INLINE','input');";
          }
      
          # RETURN_INLINE_ELEMENT_NO_HTML_CLOSING_TAG 
          return $this->_setReturnINLINELEMENT($this->_setINLINELEMENTS($elem),$js, $id, $class, $assoc);      
       }

  }
}

/**
  *
  * @method public function ELEMENT noHTML
  * @ Method Defined single call through param html element no closing tag  
  * Neat and clean noHTML
  *
  **/
  public function ELEMENT($elem, $_doCONTENT=null, $js=[], $id=null, $class=null, $label=null) {
 
 return  $this->_setReturnELEMENT($this->_setELEMENTS($elem), $_doCONTENT, $js, $id, $class, $label); 

} 

/**
  *
  * @method public function noHTML
  * @ Method Defined H1 _ AND x TAG noHTML  
  * RETURN HEADING _ noHTML TAG
  *
  **/
  public function _H1($js=[], $id=null, $class=null) { echo $this->get__HTML('PRIMARY', 0, $js, $id, $class); }
// CLOSING_METHOD_noHTML_HEADING_TAG 
  public function xH1($label = NULL) { echo $this->get_xHTML('PRIMARY', 0, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined H2 _ AND x TAG noHTML  
  * RETURN HEADING _ noHTML TAG
  *
  **/
  public function _H2($js=[], $id=null, $class=null) { echo $this->get__HTML('PRIMARY', 1, $js, $id, $class); }
// CLOSING_METHOD_noHTML_HEADING_TAG 
  public function xH2($label = NULL) { echo $this->get_xHTML('PRIMARY', 1, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined H3 _ AND x TAG noHTML  
  * RETURN HEADING _ noHTML TAG
  *
  **/
  public function _H3($js=[], $id=null, $class=null) { echo $this->get__HTML('PRIMARY', 2, $js, $id, $class); }
// CLOSING_METHOD_noHTML_HEADING_TAG 
  public function xH3($label = NULL) { echo $this->get_xHTML('PRIMARY', 2, $label);  }

/**
  *
  * @method public function noHTML
  * @ Method Defined H4 _ AND x TAG noHTML  
  * RETURN HEADING _ noHTML TAG
  *
  **/
  public function _H4($js=[], $id=null, $class=null) { echo $this->get__HTML('PRIMARY', 3, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_HEADING_TAG 
  public function xH4($label = NULL) { echo $this->get_xHTML('PRIMARY', 3, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined H5 _ AND x TAG noHTML  
  * RETURN HEADING _ noHTML TAG
  *
  **/
  public function _H5($js=[], $id=null, $class=null) { echo $this->get__HTML('PRIMARY', 4, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_HEADING_TAG 
  public function xH5($label = NULL) { echo $this->get_xHTML('PRIMARY', 4, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined H6 _ AND x TAG noHTML  
  * RETURN HEADING _ noHTML TAG
  *
  **/
  public function _H6($js=[], $id=null, $class=null) { echo $this->get__HTML('PRIMARY', 5, $js, $id, $class); }
// CLOSING_METHOD_noHTML_HEADING_TAG 
  public function xH6($label = NULL) {  echo $this->get_xHTML('PRIMARY', 5, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined DIV _ AND x TAG noHTML  
  * RETURN NODE DIV _ noHTML TAG
  *
  **/
  public function _DIV($js=[], $id=null, $class=null) { echo $this->get__HTML('PRIMARY', 6, $js, $id, $class); }
// CLOSING_METHOD_noHTML_TAG 
  public function xDIV($label = NULL) { echo $this->get_xHTML('PRIMARY', 6, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined PARA _ AND x TAG noHTML  
  * RETURN NODE PARAGRAPH _ noHTML TAG
  *
  **/
  public function _P($js=[], $id=null, $class=null) { echo $this->get__HTML('PRIMARY', 7, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  public function xP($label = NULL) { echo $this->get_xHTML('PRIMARY', 7, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined BUTTON _ AND x TAG noHTML  
  * RETURN NODE BUTTON _ noHTML TAG
  *
  **/
  public function _BUTTON($js=[], $id=null, $class=null) { echo $this->get__HTML('PRIMARY', 8, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  public function xBUTTON($label = NULL) { echo $this->get_xHTML('PRIMARY', 8, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined A HYPERLINK _ AND x TAG noHTML  
  * RETURN NODE HYPERLINK _ noHTML TAG
  *
  **/
  public function _A($js=[], $id=null, $class=null) { echo $this->get__HTML('PRIMARY', 9, $js, $id, $class); }
// CLOSING_METHOD_noHTML_TAG 
  public function xA($label = NULL) { echo $this->get_xHTML('PRIMARY', 9, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined IFRAME _ AND x TAG noHTML  
  * RETURN NODE IFRAME _ noHTML TAG
  *
  **/
  public function _IFRAME($js=[], $id=null, $class=null) { echo $this->get__HTML('PRIMARY', 10, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  public function xIFRAME($label = NULL) { echo $this->get_xHTML('PRIMARY', 10, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined MAIN _ AND x TAG noHTML  
  * RETURN NODE MAIN _ noHTML TAG
  *
  **/
  public function _MAIN($js=[], $id=null, $class=null) { echo $this->get__HTML('PRIMARY', 11, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  public function xMAIN($label = NULL) { echo $this->get_xHTML('PRIMARY', 11, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined NAV _ AND x TAG noHTML  
  * RETURN NODE NAV _ noHTML TAG
  *
  **/
  public function _NAV($js=[], $id=null, $class=null) { echo $this->get__HTML('PRIMARY', 12, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  public function xNAV($label = NULL) { echo $this->get_xHTML('PRIMARY', 12, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined SELECT _ AND x TAG noHTML  
  * RETURN NODE SELECT _ noHTML TAG
  *
  **/
  public function _SELECT($js=[], $id=null, $class=null) { echo $this->get__HTML('PRIMARY', 13, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG 
  public function xSELECT($label = NULL) { echo $this->get_xHTML('PRIMARY', 13, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined FORM _ AND x TAG noHTML  
  * RETURN NODE FORM _ noHTML TAG
  *
  **/
  public function _FORM($js=[], $id=null, $class=null) { echo $this->get__HTML('PRIMARY', 14, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  public function xFORM($label = NULL) { echo $this->get_xHTML('PRIMARY', 14, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined PICTURE _ AND x TAG noHTML  
  * RETURN NODE PICTURE _ noHTML TAG
  *
  **/
  public function _PICTURE($js=[], $id=null, $class=null) { echo $this->get__HTML('PRIMARY', 15, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  public function xPICTURE($label = NULL) { echo $this->get_xHTML('PRIMARY', 15, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined SECTION _ AND x TAG noHTML  
  * RETURN NODE SECTION _ noHTML TAG
  *
  **/
  public function _SECTION($js=[], $id=null, $class=null) { echo $this->get__HTML('PRIMARY', 16, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG 
  public function xSECTION($label = NULL) { echo $this->get_xHTML('PRIMARY', 16, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined TEXTAREA _ AND x TAG noHTML  
  * RETURN NODE TEXTAREA _ noHTML TAG
  *
  **/
  public function _TEXTAREA($js=[], $id=null, $class=null) { echo $this->get__HTML('PRIMARY', 17, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  public function xTEXTAREA($label = NULL) { echo $this->get_xHTML('PRIMARY', 17, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined AUDIO _ AND x TAG noHTML  
  * RETURN NODE AUDIO _ noHTML TAG
  *
  **/
  public function _AUDIO($js=[], $id=null, $class=null) { echo $this->get__HTML('SECONDARY', 0, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  public function xAUDIO($label = NULL) { echo $this->get_xHTML('SECONDARY', 0, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined VIDEO _ AND x TAG noHTML  
  * RETURN NODE VIDEO _ noHTML TAG
  *
  **/
  public function _VIDEO($js=[], $id=null, $class=null) { echo $this->get__HTML('SECONDARY', 1, $js, $id, $class); }
// CLOSING_METHOD_noHTML_TAG 
  public function xVIDEO($label = NULL) { echo $this->get_xHTML('SECONDARY', 1, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined ADDRESS _ AND x TAG noHTML  
  * RETURN NODE ADDRESS _ noHTML TAG
  *
  **/
  public function _ADDRESS($js=[], $id=null, $class=null) { echo $this->get__HTML('SECONDARY', 2, $js, $id, $class); }
// CLOSING_METHOD_noHTML_TAG 
  public function xADDRESS($label = NULL) { echo $this->get_xHTML('SECONDARY', 2, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined COLGROUP _ AND x TAG noHTML  
  * RETURN NODE COLGROUP _ noHTML TAG
  *
  **/
  public function _COLGROUP($js=[], $id=null, $class=null) { echo $this->get__HTML('SECONDARY', 3, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  public function xCOLGROUP($label = NULL) { echo $this->get_xHTML('SECONDARY', 3, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined BDI _ AND x TAG noHTML  
  * RETURN NODE BDI _ noHTML TAG
  *
  **/
  public function _BDI($js=[], $id=null, $class=null) { echo $this->get__HTML('SECONDARY', 4, $js, $id, $class); }
// CLOSING_METHOD_noHTML_TAG 
  public function xBDI($label = NULL) { echo $this->get_xHTML('SECONDARY', 4, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined BDO _ AND x TAG noHTML  
  * RETURN NODE BDO _ noHTML TAG
  *
  **/
  public function _BDO($js=[], $id=null, $class=null) { echo $this->get__HTML('SECONDARY', 5, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG 
  public function xBDO($label = NULL) { echo $this->get_xHTML('SECONDARY', 5, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined BLOCKQUOTE _ AND x TAG noHTML  
  * RETURN NODE BLOCKQUOTE _ noHTML TAG
  *
  **/
  public function _BLOCKQUOTE($js=[], $id=null, $class=null) { echo $this->get__HTML('SECONDARY', 6, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  public function xBLOCKQUOTE($label = NULL) { echo $this->get_xHTML('SECONDARY', 6, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined CAPTION _ AND x TAG noHTML  
  * RETURN NODE CAPTION _ noHTML TAG
  *
  **/
  public function _CAPTION($js=[], $id=null, $class=null) { echo $this->get__HTML('SECONDARY', 7, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  public function xCAPTION($label = NULL) { echo $this->get_xHTML('SECONDARY', 7, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined LABEL _ AND x TAG noHTML  
  * RETURN NODE LABEL _ noHTML TAG
  *
  **/
  public function _LABEL($js=[], $id=null, $class=null) { echo $this->get__HTML('SECONDARY', 8, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  public function xLABEL($label = NULL) { echo $this->get_xHTML('SECONDARY', 8, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined DATALIST _ AND x TAG noHTML  
  * RETURN NODE DATALIST _ noHTML TAG
  *
  **/
  public function _DATALIST($js=[], $id=null, $class=null) { echo $this->get__HTML('SECONDARY', 9, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  public function xDATALIST($label = NULL) { echo $this->get_xHTML('SECONDARY', 9, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined DETAILS _ AND x TAG noHTML  
  * RETURN NODE DETAILS _ noHTML TAG
  *
  **/
  public function _DETAILS($js=[], $id=null, $class=null) { echo $this->get__HTML('SECONDARY', 10, $js, $id, $class); }
// CLOSING_METHOD_noHTML_TAG 
  public function xDETAILS($label = NULL) { echo $this->get_xHTML('SECONDARY', 10, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined SUMMARY _ AND x TAG noHTML  
  * RETURN NODE SUMMARY _ noHTML TAG
  *
  **/
  public function _SUMMARY($js=[], $id=null, $class=null) { echo $this->get__HTML('SECONDARY', 11, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  public function xSUMMARY($label = NULL) { echo $this->get_xHTML('SECONDARY', 11, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined DIALOG _ AND x TAG noHTML  
  * RETURN NODE DIALOG _ noHTML TAG
  *
  **/
  public function _DIALOG($js=[], $id=null, $class=null) { echo $this->get__HTML('SECONDARY', 12, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  public function xDIALOG($label = NULL) { echo $this->get_xHTML('SECONDARY', 12, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined OPTION _ AND x TAG noHTML  
  * RETURN NODE OPTION _ noHTML TAG
  *
  **/
  public function _OPTION($js=[], $id=null, $class=null) { echo $this->get__HTML('SECONDARY', 12, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  public function xOPTION($label = NULL) { echo $this->get_xHTML('SECONDARY', 12, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined FIGURE _ AND x TAG noHTML  
  * RETURN NODE FIGURE _ noHTML TAG
  *
  **/
  public function _FIGURE($js=[], $id=null, $class=null) { echo $this->get__HTML('SUPPORT', 0, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG
  public function xFIGURE($label = NULL) { echo $this->get_xHTML('SUPPORT', 0, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined FIGCAPTION _ AND x TAG noHTML  
  * RETURN NODE FIGCAPTION _ noHTML TAG
  *
  **/
  public function _FIGCAPTION($js=[], $id=null, $class=null) { echo $this->get__HTML('SUPPORT', 1, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xFIGCAPTION($label = NULL) { echo $this->get_xHTML('SUPPORT', 1, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined METER _ AND x TAG noHTML  
  * RETURN NODE METER _ noHTML TAG
  *
  **/
  public function _METER($js=[], $id=null, $class=null) { echo $this->get__HTML('SUPPORT', 2, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xMETER($label = NULL) { echo $this->get_xHTML('SUPPORT', 2, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined OBJECT _ AND x TAG noHTML  
  * RETURN NODE OBJECT _ noHTML TAG
  *
  **/
  public function _OBJECT($js=[], $id=null, $class=null) { echo $this->get__HTML('SUPPORT', 3, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xOBJECT($label = NULL) { echo $this->get_xHTML('SUPPORT', 3, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined OPTGROUP _ AND x TAG noHTML  
  * RETURN NODE OPTGROUP _ noHTML TAG
  *
  **/
  public function _OPTGROUP($js=[], $id=null, $class=null) { echo $this->get__HTML('SUPPORT', 4, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG
  public function xOPTGROUP($label = NULL) { echo $this->get_xHTML('SUPPORT', 4, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined OUTPUT _ AND x TAG noHTML  
  * RETURN NODE OUTPUT _ noHTML TAG
  *
  **/
  public function _OUTPUT($js=[], $id=null, $class=null) { echo $this->get__HTML('SUPPORT', 5, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xOUTPUT($label = NULL) { echo $this->get_xHTML('SUPPORT', 5, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined PROGRESS _ AND x TAG noHTML  
  * RETURN NODE PROGRESS _ noHTML TAG
  *
  **/
  public function _PROGRESS($js=[], $id=null, $class=null) { echo $this->get__HTML('SUPPORT', 6, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG
  public function xPROGRESS($label = NULL) { echo $this->get_xHTML('SUPPORT', 6, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined SVG _ AND x TAG noHTML  
  * RETURN NODE SVG _ noHTML TAG
  *
  **/
  public function _SVG($js=[], $id=null, $class=null) { echo $this->get__HTML('SUPPORT', 7, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xSVG($label = NULL) { echo $this->get_xHTML('SUPPORT', 7, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined TEMPLATE _ AND x TAG noHTML  
  * RETURN NODE TEMPLATE _ noHTML TAG
  *
  **/
  public function _TEMPLATE($js=[], $id=null, $class=null) { echo $this->get__HTML('SUPPORT', 8, $js, $id, $class); }
// CLOSING_METHOD_noHTML_TAG
  public function xTEMPLATE($label = NULL) { echo $this->get_xHTML('SUPPORT', 8, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined TIME _ AND x TAG noHTML  
  * RETURN NODE TIME _ noHTML TAG
  *
  **/
  public function _TIME($js=[], $id=null, $class=null) { echo $this->get__HTML('SUPPORT', 9, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xTIME($label = NULL) { echo $this->get_xHTML('SUPPORT', 9, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined VAR _ AND x TAG noHTML  
  * RETURN NODE VAR _ noHTML TAG
  *
  **/
  public function _VAR($js=[], $id=null, $class=null) { echo $this->get__HTML('SUPPORT', 10, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xVAR($label = NULL) { echo $this->get_xHTML('SUPPORT', 10, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined UL _ AND x TAG noHTML  
  * RETURN NODE UL _ noHTML TAG
  *
  **/
  public function _UL($js=[], $id=null, $class=null) { echo $this->get__HTML('LIST', 0, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG
  public function xUL($label = NULL) { echo $this->get_xHTML('LIST', 0, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined OL _ AND x TAG noHTML  
  * RETURN NODE OL _ noHTML TAG
  *
  **/
  public function _OL($js=[], $id=null, $class=null) { echo $this->get__HTML('LIST', 1, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xOL($label = NULL) { echo $this->get_xHTML('LIST', 1, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined LI _ AND x TAG noHTML  
  * RETURN NODE LI _ noHTML TAG
  *
  **/
  public function _LI($js=[], $id=null, $class=null) { echo $this->get__HTML('LIST', 2, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  public function xLI($label = NULL) { echo $this->get_xHTML('LIST', 2, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined TABLE _ AND x TAG noHTML  
  * RETURN NODE TABLE _ noHTML TAG
  *
  **/
  public function _TABLE($js=[], $id=null, $class=null) { echo $this->get__HTML('LIST', 3, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  public function xTABLE($label = NULL) { echo $this->get_xHTML('LIST', 3, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined TR _ AND x TAG noHTML  
  * RETURN NODE TR _ noHTML TAG
  *
  **/
  public function _TR($js=[], $id=null, $class=null) { echo $this->get__HTML('LIST', 4, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xTR($label = NULL) { echo $this->get_xHTML('LIST', 4, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined TD _ AND x TAG noHTML  
  * RETURN NODE TD _ noHTML TAG
  *
  **/
  public function _TD($js=[], $id=null, $class=null) { echo $this->get__HTML('LIST', 5, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xTD($label = NULL) { echo $this->get_xHTML('LIST', 5, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined TH _ AND x TAG noHTML  
  * RETURN NODE TH _ noHTML TAG
  *
  **/
  public function _TH($js=[], $id=null, $class=null) { echo $this->get__HTML('LIST', 6, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xTH($label = NULL) { echo $this->get_xHTML('LIST', 6, $label);  }

/**
  *
  * @method public function noHTML
  * @ Method Defined LEGEND _ AND x TAG noHTML  
  * RETURN NODE LEGEND _ noHTML TAG
  *
  **/
  public function _LEGEND($js=[], $id=null, $class=null) { echo $this->get__HTML('LIST', 7, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xLEGEND($label = NULL) { echo $this->get_xHTML('LIST', 7, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined FIELDSET _ AND x TAG noHTML  
  * RETURN NODE FIELDSET _ noHTML TAG
  *
  **/
  public function _FIELDSET($js=[], $id=null, $class=null) { echo $this->get__HTML('LIST', 8, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xFIELDSET($label = NULL) { echo $this->get_xHTML('LIST', 8, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined TBODY _ AND x TAG noHTML  
  * RETURN NODE TBODY _ noHTML TAG
  *
  **/
  public function _TBODY($js=[], $id=null, $class=null) { echo $this->get__HTML('LIST', 9, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  public function xTBODY($label = NULL) { echo $this->get_xHTML('LIST', 9, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined TFOOT _ AND x TAG noHTML  
  * RETURN NODE TFOOT _ noHTML TAG
  *
  **/
  public function _TFOOT($js=[], $id=null, $class=null) { echo $this->get__HTML('LIST', 10, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  public function xTFOOT($label = NULL) { echo $this->get_xHTML('LIST', 10, $label);  }

/**
  *
  * @method public function noHTML
  * @ Method Defined THEAD _ AND x TAG noHTML  
  * RETURN NODE THEAD _ noHTML TAG
  *
  **/
  public function _THEAD($js=[], $id=null, $class=null) { echo $this->get__HTML('LIST', 11, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xTHEAD($label = NULL) { echo $this->get_xHTML('LIST', 11, $label);  }

/**
  *
  * @method public function noHTML
  * @ Method Defined SPAN _ AND x TAG noHTML  
  * RETURN NODE SPAN _ noHTML TAG
  *
  **/
  public function _SPAN($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMAT', 0, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  public function xSPAN($label = NULL) { echo $this->get_xHTML('FORMAT', 0, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined EM _ AND x TAG noHTML  
  * RETURN NODE EM _ noHTML TAG
  *
  **/
  public function _EM($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMAT', 1, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  public function xEM($label = NULL) { echo $this->get_xHTML('FORMAT', 1, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined B _ AND x TAG noHTML  
  * RETURN NODE B _ noHTML TAG
  *
  **/
  public function _B($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMAT', 2, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xB($label = NULL) { echo $this->get_xHTML('FORMAT', 2, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined I _ AND x TAG noHTML  
  * RETURN NODE I _ noHTML TAG
  *
  **/
  public function _I($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMAT', 3, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xI($label = NULL) { echo $this->get_xHTML('FORMAT', 3, $label);  }

/**
  *
  * @method public function noHTML
  * @ Method Defined SMALL _ AND x TAG noHTML  
  * RETURN NODE SMALL _ noHTML TAG
  *
  **/
  public function _SMALL($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMAT', 4, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xSMALL($label = NULL) { echo $this->get_xHTML('FORMAT', 4, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined STRIKE _ AND x TAG noHTML  
  * RETURN NODE STRIKE _ noHTML TAG
  *
  **/
  public function _STRIKE($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMAT', 5, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xSTRIKE($label = NULL) { echo $this->get_xHTML('FORMAT', 5, $label);  }

/**
  *
  * @method public function noHTML
  * @ Method Defined MARQUEE _ AND x TAG noHTML  
  * RETURN NODE MARQUEE _ noHTML TAG
  *
  **/
  public function _MARQUEE($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMAT', 6, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  public function xMARQUEE($label = NULL) { echo $this->get_xHTML('FORMAT', 6, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined CENTER _ AND x TAG noHTML  
  * RETURN NODE CENTER _ noHTML TAG
  *
  **/
  public function _CENTER($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMAT', 7, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xCENTER($label = NULL) { echo $this->get_xHTML('FORMAT', 7, $label);  }

/**
  *
  * @method public function noHTML
  * @ Method Defined CODE _ AND x TAG noHTML  
  * RETURN NODE CODE _ noHTML TAG
  *
  **/
  public function _CODE($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMAT', 8, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xCODE($label = NULL) { echo $this->get_xHTML('FORMAT', 8, $label);  }

/**
  *
  * @method public function noHTML
  * @ Method Defined ABBR _ AND x TAG noHTML  
  * RETURN NODE ABBR _ noHTML TAG
  *
  **/
  public function _ABBR($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMAT', 9, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xABBR($label = NULL) { echo $this->get_xHTML('FORMAT', 9, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined MAP _ AND x TAG noHTML  
  * RETURN NODE MAP _ noHTML TAG
  *
  **/
  public function _MAP($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMAT', 10, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xMAP($label = NULL) { echo $this->get_xHTML('FORMAT', 10, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined CANVAS _ AND x TAG noHTML  
  * RETURN NODE CANVAS _ noHTML TAG
  *
  **/
  public function _CANVAS($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMAT', 11, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  public function xCANVAS($label = NULL) { echo $this->get_xHTML('FORMAT', 11, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined CITE _ AND x TAG noHTML  
  * RETURN NODE CITE _ noHTML TAG
  *
  **/
  public function _CITE($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMAT', 12, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xCITE($label = NULL) { echo $this->get_xHTML('FORMAT', 12, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined DATA _ AND x TAG noHTML  
  * RETURN NODE DATA _ noHTML TAG
  *
  **/
  public function _DATA($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMAT', 13, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG
  public function xDATA($label = NULL) { echo $this->get_xHTML('FORMAT', 13, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined DL _ AND x TAG noHTML  
  * RETURN NODE DL _ noHTML TAG
  *
  **/
  public function _DL($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMAT', 14, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xDL($label = NULL) { echo $this->get_xHTML('FORMAT', 14, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined DT _ AND x TAG noHTML  
  * RETURN NODE DT _ noHTML TAG
  *
  **/
  public function _DT($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMAT', 15, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xDT($label = NULL) { echo $this->get_xHTML('FORMAT', 15, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined DD _ AND x TAG noHTML  
  * RETURN NODE DD _ noHTML TAG
  *
  **/
  public function _DD($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMAT', 16, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  public function xDD($label = NULL) { echo $this->get_xHTML('FORMAT', 16, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined DFN _ AND x TAG noHTML  
  * RETURN NODE DFN _ noHTML TAG
  *
  **/
  public function _DFN($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMAT', 17, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xDFN($label = NULL) { echo $this->get_xHTML('FORMAT', 17, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined INS _ AND x TAG noHTML  
  * RETURN NODE INS _ noHTML TAG
  *
  **/
  public function _INS($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMAT', 18, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  public function xINS($label = NULL) { echo $this->get_xHTML('FORMAT', 18, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined DEL _ AND x TAG noHTML  
  * RETURN NODE DEL _ noHTML TAG
  *
  **/
  public function _DEL($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMATC', 0, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  public function xDEL($label = NULL) { echo $this->get_xHTML('FORMATC', 0, $label);  }

/**
  *
  * @method public function noHTML
  * @ Method Defined KBD _ AND x TAG noHTML  
  * RETURN NODE KBD _ noHTML TAG
  *
  **/
  public function _KBD($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMATC', 1, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG
  public function xKBD($label = NULL) { echo $this->get_xHTML('FORMATC', 1, $label);  }

/**
  *
  * @method public function noHTML
  * @ Method Defined MARK _ AND x TAG noHTML  
  * RETURN NODE MARK _ noHTML TAG
  *
  **/
  public function _MARK($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMATC', 2, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xMARK($label = NULL) { echo $this->get_xHTML('FORMATC', 2, $label);  }

/**
  *
  * @method public function noHTML
  * @ Method Defined PRE _ AND x TAG noHTML  
  * RETURN NODE PRE _ noHTML TAG
  *
  **/
  public function _PRE($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMATC', 3, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  public function xPRE($label = NULL) { echo $this->get_xHTML('FORMATC', 3, $label);  }

/**
  *
  * @method public function noHTML
  * @ Method Defined RT _ AND x TAG noHTML  
  * RETURN NODE RT _ noHTML TAG
  *
  **/
  public function _RT($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMATC', 4, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xRT($label = NULL) { echo $this->get_xHTML('FORMATC', 4, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined RP _ AND x TAG noHTML  
  * RETURN NODE RP _ noHTML TAG
  *
  **/
  public function _RP($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMATC', 5, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xRP($label = NULL) { echo $this->get_xHTML('FORMATC', 5, $label);  }

/**
  *
  * @method public function noHTML
  * @ Method Defined RUBY _ AND x TAG noHTML  
  * RETURN NODE RUBY _ noHTML TAG
  *
  **/
  public function _RUBY($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMATC', 6, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  public function xRUBY($label = NULL) { echo $this->get_xHTML('FORMATC', 6, $label);  }

/**
  *
  * @method public function noHTML
  * @ Method Defined S _ AND x TAG noHTML  
  * RETURN NODE S _ noHTML TAG
  *
  **/
  public function _S($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMATC', 7, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xS($label = NULL) { echo $this->get_xHTML('FORMATC', 7, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined SAMP _ AND x TAG noHTML  
  * RETURN NODE SAMP _ noHTML TAG
  *
  **/
  public function _SAMP($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMATC', 8, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xSAMP($label = NULL) { echo $this->get_xHTML('FORMATC', 8, $label);  }

/**
  *
  * @method public function noHTML
  * @ Method Defined STRONG _ AND x TAG noHTML  
  * RETURN NODE STRONG _ noHTML TAG
  *
  **/
  public function _STRONG($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMATC', 9, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  public function xSTRONG($label = NULL) { echo $this->get_xHTML('FORMATC', 9, $label);  }

/**
  *
  * @method public function noHTML
  * @ Method Defined SUB _ AND x TAG noHTML  
  * RETURN NODE SUB _ noHTML TAG
  *
  **/
  public function _SUB($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMATC', 10, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  public function xSUB($label = NULL) { echo $this->get_xHTML('FORMATC', 10, $label);  }

/**
  *
  * @method public function noHTML
  * @ Method Defined SUP _ AND x TAG noHTML  
  * RETURN NODE SUP _ noHTML TAG
  *
  **/
  public function _SUP($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMATC', 11, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  public function xSUP($label = NULL) { echo $this->get_xHTML('FORMATC', 11, $label);  }

/**
  *
  * @method public function noHTML
  * @ Method Defined WBR _ AND x TAG noHTML  
  * RETURN NODE WBR _ noHTML TAG
  *
  **/
  public function _WBR($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMATC', 12, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xWBR($label = NULL) { echo $this->get_xHTML('FORMATC', 12, $label);  }

/**
  *
  * @method public function noHTML
  * @ Method Defined Q _ AND x TAG noHTML  
  * RETURN NODE Q _ noHTML TAG
  *
  **/
  public function _Q($js=[], $id=null, $class=null) { echo $this->get__HTML('FORMATC', 13, $js, $id, $class);     }
// CLOSING_METHOD_noHTML_TAG
  public function xQ($label = NULL) { echo $this->get_xHTML('FORMATC', 13, $label);  }

/**
  *
  * @method public function noHTML
  * @ Method Defined HEAD _ AND x TAG noHTML  
  * RETURN NODE HEAD _ noHTML TAG
  *
  **/
  public function _HEAD($js=[], $id=null, $class=null) { echo $this->get__HTML('STRUCTURE', 0, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  public function xHEAD($label = NULL) { echo $this->get_xHTML('STRUCTURE', 0, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined TITLE _ AND x TAG noHTML  
  * RETURN NODE TITLE _ noHTML TAG
  *
  **/
  public function _TITLE($js=[], $id=null, $class=null) { echo $this->get__HTML('STRUCTURE', 1, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  public function xTITLE($label = NULL) { echo $this->get_xHTML('STRUCTURE', 1, $label);  }

/**
  *
  * @method public function noHTML
  * @ Method Defined BODY _ AND x TAG noHTML  
  * RETURN NODE BODY _ noHTML TAG
  *
  **/
  public function _BODY($js=[], $id=null, $class=null) { echo $this->get__HTML('STRUCTURE', 2, $js, $id, $class);     }
// CLOSING_METHOD_noHTML_TAG
  public function xBODY($label = NULL) { echo $this->get_xHTML('STRUCTURE', 2, $label); }

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML _ AND x TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function _noHTML($js=[], $id=null, $class=null) { echo $this->get__HTML('STRUCTURE', 3, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  public function xnoHTML($label = NULL) { echo $this->get_xHTML('STRUCTURE', 3, $label); }

/**
 *
 *
 * public function inline noHTML
 * @var @property $_doCONTENT = NULL | create function and return the content my_content();
 * @var @property $js = [] | Html attribute for Js DOM such as angular and other HTML attributes
 * @var @property $id = NULL | html id in this section must be unique
 * @var @property $class = NULL | html class repared for front end framework such as bootstrap, materialize, foundation
 * @var @property $label = NULL | html comment label where you can identify your codes ib inspec elemnt or view source
 * @var @property $assoc = NULL oe 'DEFAULT'| it will return this algo as  "return" set
 * 
 * HTML Select Tag
 * NO COSE TAG
   # function my_contents() { 
   # $datas = [];

     # for ($i = 1; $i < 2; $i++) 
     # {
        # $datas[] = html::ELEMENT('LI',$i,NULL,'myID_echo_li',NULL,NULL); 
     # }
  
     # return implode('', $datas);
   # }

 # USING HTML ATTRIBUTES
 *****************************************************  
 # function my_htmattr() {

    # return $sets = [
      # $one = ['1','2'],
      # $two = ['_niel_','_fernandez_'],
    # ];
  
  # }
 
 * **************************************************** 
 * Display via echo/print
 # echo html::DIV(html::ELEMENT('UL',my_contents()), my_htmattr(),'my_id','my_class','comment_label','FUNC_ASSOC'); // will show
 #      html::DIV(html::ELEMENT('UL',my_contents()), my_htmattr(),'my_id','my_class','comment_label','FUNC_ASSOC'); // will NOT SHOW
 #      
 #      // NULL use outside of function 
 #      html::DIV(html::ELEMENT('UL',my_contents()), my_htmattr(),'my_id','my_class','comment_label', NULL);  // will show 
 *
 *
**/
/**
  *
  * @method public function noHTML
  * @ Method Defined HTML H1 TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function H1($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
  return $this->_istrue_assoc_ELEMENTINLINE('PRIMARY', 0, $_doCONTENT, $js, $id, $class, $label, $assoc);

}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML H2 TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function H2($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('PRIMARY', 1, $_doCONTENT, $js, $id, $class, $label, $assoc);

}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML H3 TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function H3($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('PRIMARY', 2, $_doCONTENT, $js, $id, $class, $label, $assoc);

}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML H4 TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function H4($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('PRIMARY', 3, $_doCONTENT, $js, $id, $class, $label, $assoc);

}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML H5 TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function H5($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('PRIMARY', 4, $_doCONTENT, $js, $id, $class, $label, $assoc);

}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML H6 TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function H6($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('PRIMARY', 5, $_doCONTENT, $js, $id, $class, $label, $assoc);

}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML DIV TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function DIV($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('PRIMARY', 6, $_doCONTENT, $js, $id, $class, $label, $assoc);

}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML P TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function P($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('PRIMARY', 7, $_doCONTENT, $js, $id, $class, $label, $assoc);

}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML BUTTON TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function BUTTON($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('PRIMARY', 8, $_doCONTENT, $js, $id, $class, $label, $assoc);

}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML A TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function A($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('PRIMARY', 9, $_doCONTENT, $js, $id, $class, $label, $assoc);

}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML IFRAME TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function IFRAME($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('PRIMARY', 10, $_doCONTENT, $js, $id, $class, $label, $assoc);

}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML MAIN TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function MAIN($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('PRIMARY', 11, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML NAV TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function NAV($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('PRIMARY', 12, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML SELECT TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function SELECT($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('PRIMARY', 13, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML FORM TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function FORM($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('PRIMARY', 14, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML PICTURE TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function PICTURE($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('PRIMARY', 15, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML SECTION TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function SECTION($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('PRIMARY', 16, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML TEXTAREA TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function TEXTAREA($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('PRIMARY', 17, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML AUDIO TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function AUDIO($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('SECONDARY', 0, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML VIDEO TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function VIDEO($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('SECONDARY', 1, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML ADDRESS TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function ADDRESS($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('SECONDARY', 2, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML COLGROUP TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function COLGROUP($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('SECONDARY', 3, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML BDI TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function BDI($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('SECONDARY', 4, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML BDO TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function BDO($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('SECONDARY', 5, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML BLOCKQUOTE TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function BLOCKQUOTE($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('SECONDARY', 6, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML CAPTION TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function CAPTION($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('SECONDARY', 7, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML LABEL TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function LABEL($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('SECONDARY', 8, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML DATALIST TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function DATALIST($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('SECONDARY', 9, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML DETAILS TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function DETAILS($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('SECONDARY', 10, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML SUMMARY TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function SUMMARY($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('SECONDARY', 11, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML DIALOG TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function DIALOG($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('SECONDARY', 12, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML OPTION TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function OPTION($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('SECONDARY', 13, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML FIGURE TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function FIGURE($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('SUPPORT', 0, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML FIGCAPTION TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function FIGCAPTION($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('SUPPORT', 1, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML METER TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function METER($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('SUPPORT', 2, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML OBJECT TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function OBJECT($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('SUPPORT', 3, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML OPTGROUP TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function OPTGROUP($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('SUPPORT', 4, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML OUTPUT TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function OUTPUT($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('SUPPORT', 5, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML PROGRESS TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function PROGRESS($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('SUPPORT', 6, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML SVG TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function SVG($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('SUPPORT', 7, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML TEMPLATE TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function TEMPLATE($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('SUPPORT', 8, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML TIME TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function TIME($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('SUPPORT', 9, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML VAR TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function VAR($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('SUPPORT', 10, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML UL TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function UL($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('LIST', 0, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML OL TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function OL($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('LIST', 1, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML LI TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function LI($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('LIST', 2, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML TABLE TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function TABLE($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('LIST', 3, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML TR TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function TR($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('LIST', 4, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML TD TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function TD($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('LIST', 5, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML TH TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function TH($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('LIST', 6, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML LEGEND TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function LEGEND($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('LIST', 7, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML FIELDSET TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function FIELDSET($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('LIST', 8, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML TBODY TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function TBODY($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('LIST', 9, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML TFOOT TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function TFOOT($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('LIST', 10, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML THEAD TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function THEAD($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('LIST', 11, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML SPAN TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function SPAN($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMAT', 0, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML EM TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function EM($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMAT', 1, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML B TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function B($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMAT', 2, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML I TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function I($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMAT', 2, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML SMALL TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function SMALL($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMAT', 3, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML STRIKE TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function STRIKE($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMAT', 4, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML MARQUEE TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function MARQUEE($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMAT', 5, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML CENTER TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function CENTER($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMAT', 6, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML CODE TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function CODE($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMAT', 7, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML ABBR TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function ABBR($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMAT', 8, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML DETAILS TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function MAP($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMAT', 9, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML CANVAS TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function CANVAS($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMAT', 10, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML CITE TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function CITE($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMAT', 11, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML DATA TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function DATA($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMAT', 12, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML DL TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function DL($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMAT', 13, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML DT TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function DT($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMAT', 14, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML DD TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function DD($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMAT', 15, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML DFN TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function DFN($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMAT', 16, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML INS TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function INS($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMAT', 17, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML DEL TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function DEL($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMATC', 0, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML KBD TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function KBD($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMATC', 1, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML MARK TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function MARK($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMATC', 2, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML PRE TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function PRE($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMATC', 3, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML RT TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function RT($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMATC', 4, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML RP TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function RP($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMATC', 5, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML RUBY TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function RUBY($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMATC', 6, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML S TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function S($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMATC', 7, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML SAMP TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function SAMP($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMATC', 8, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML STRONG TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function STRONG($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMATC', 9, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML SUB TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function SUB($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMATC', 10, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML SUP TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function SUP($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMATC', 11, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML WBR TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function WBR($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMATC', 12, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML Q TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function Q($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('FORMATC', 13, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML HEAD TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function HEAD($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('STRUCTURE', 0, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML TITLE TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function TITLE($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('STRUCTURE', 1, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML BODY TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function BODY($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('STRUCTURE',2, $_doCONTENT, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @ Method Defined HTML noHTML TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  public function noHTML($_doCONTENT=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return $this->_istrue_assoc_ELEMENTINLINE('STRUCTURE', 3, $_doCONTENT, $js, $id, $class, $label, $assoc);

} // END OF LINE HTML NO x REQUIRED

/**
  *
  * @method private function noHTML
  * @ @private Method Defined  return_inline_element
  * RETURN NODE HTML _ noHTML TAG
  * 
  **/
 private function return_inline_element($elem_val, $elem_key, $js, $id, $class, $assoc) {

   return $this->get_inline__HTML($elem_val, $elem_key, $js, $id, $class, $assoc);    
}

/**
  *
  * @method private function noHTML
  * @ @private  Method Defined  if TRUE ELEMENT TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
 private function _istrue_assoc_ELEMENTINLINE($elem_val, $elem_key, $_doCONTENT, $js, $id, $class, $label, $assoc) {
  
  # INLINE_OR_ANY_LABEL_REQUIRED
  # CHECK_IF_THE_PARAM_REQUIRED_IS_NOT_NULL
  # IF_IT_IS_NULL_RETURN_FLASE  
  if ($assoc == FALSE || $assoc == NULL || $assoc == 'DEFAULT') {
      
       # RETURN_INLINE_ELEMENT_NO_HTML_CLOSING_TAG 
     /**
       *
       * @var $elem_val, $elem_key, $_doCONTENT, $js, $id, $class, $label
       * @method function return_elementINLINE()
       *
       **/
      echo $this->return_elementINLINE($elem_val, $elem_key, $_doCONTENT, $js, $id, $class, $label);
  } 

  # INLINE_OR_ANY_LABEL_REQUIRED 
  # ELSEIF_ASSOCU_===_FUNC_ASSOC_||_CLASS_ASSOC_||_METHOD_ASSOC
  elseif( $assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC ) {
       
     /**
       * THEN_IF_IT_IS TRUE_RETURN!
       * @var  $elem_val, $elem_key, $_doCONTENT, $js, $id, $class, $label
       * @method function _elemenHTMLINLINE()
       *
       **/
     return $this->_elemenHTMLINLINE($elem_val, $elem_key, $_doCONTENT, $js, $id, $class, $label);  
  }
} 

/**
  *
  * @method private function noHTML
  * @ @private  Method Defined  if TRUE ELEMENT TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
 private function return_elementINLINE($elem_val, $elem_key, $_doCONTENT, $js, $id, $class, $label) {
   
    # IF_INLINE_ELEMENT_IS_EQUAL_TRUE_THE_RETURN_ECHO_STATIC_noHTML
    # RETURN_GET___HTML_METHOD_INCLUDED_ 
  /**
    *
    * @var | Defined var $elem_val, $elem_key, $js, $id, $class  
    * @method function get__HTML
    *
    **/ 
   echo $return_elementINLINE  = $this->get__HTML($elem_val, $elem_key, $js, $id, $class);  
   
   # WHEN_THE_LOOP_IS_TRUE_THEN
   # DO_CONTENT
   echo $return_elementINLINE  = $_doCONTENT; 
   
     # IF_INLINE_ELEMENT_IS_EQUAL_TRUE_THE_RETURN_ECHO_STATIC_noHTML
     # RETURN_GET___HTML_METHOD_INCLUDED_ 
   /**
     *
     * @var | Defined var $elem_val, $elem_key, $label  
     * @method function get_xHTML()
     *
     **/ 
   echo $return_elementINLINE  = $this->get_xHTML($elem_val, $elem_key, $label); 

}

/**
  *
  * @method private function noHTML
  * @ @private  Method Defined  if newELEMENT TRUE ELEMENT TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
 private function _elemenHTMLINLINE($elem_val, $elem_key, $_doCONTENT, $js, $id, $class, $label) {
   
     if ( $label == TRUE && $label === 'MERGE') {
     
     # IF_INLINE_ELEMENT_IS_EQUAL_NEW_ELEMENT_AND_TRUE_THE_RETURN_ECHO_STATIC_noHTML
     # RETURN_GET___HTML_METHOD_INCLUDED_ 
   /**
     *
     * @var | Defined var $elem_val, $elem_key, $js, $id, $class
     * @method function new_get__HTML();
     *
     **/ 
     
     return $return_elementINLINE = $this->new_get__HTML($elem_val, $elem_key, $js, $id, $class);  

   } elseif ($label == TRUE && $label === 'MERGE_END') {
     
      # IF_INLINE_ELEMENT_IS_EQUAL_TRUE_THE_RETURN_ECHO_STATIC_noHTML
      # RETURN_GET___HTML_METHOD_INCLUDED_ 
    /**
      *
      * @var | Defined var $elem_val, $elem_key, $label  
      * @method function new_get__HTML();
      * 
      **/    
     return $return_elementINLINE  = $this->new_get_xHTML($elem_val, $elem_key, $label); 

   } else {

     # IF_INLINE_ELEMENT_IS_EQUAL_NEW_ELEMENT_AND_TRUE_THE_RETURN_ECHO_STATIC_noHTML
     # RETURN_GET___HTML_METHOD_INCLUDED_ 
   /**
     *
     * @var | Defined var $elem_val, $elem_key, $js, $id, $class
     * @method function new_get__HTML();
     *
     **/ 
    $return_elementINLINE   = $this->new_get__HTML($elem_val, $elem_key, $js, $id, $class);  
  
  

     # WHEN_THE_LOOP_IS_TRUE_THEN
     # DO_CONTENT
     $return_elementINLINE  .= $_doCONTENT; 
   
     # IF_INLINE_ELEMENT_IS_EQUAL_TRUE_THE_RETURN_ECHO_STATIC_noHTML
     # RETURN_GET___HTML_METHOD_INCLUDED_ 
   /**
     *
     * @var | Defined var $elem_val, $elem_key, $label  
     * @method function new_get__HTML();
     * 
     **/    
    $return_elementINLINE  .= $this->new_get_xHTML($elem_val, $elem_key, $label); 
  
    # get_ELEMENT_RETURN!
    return $return_elementINLINE;

   }

}

/**
  *
  * @method private function noHTML
  * @ @private Method Defined if get_inline__HTML assoc TRUE  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
 private function get_inline__HTML($elem_val, $elem_key, $js, $id, $class, $assoc) {
  
  # ÌF_ASSOC_IS_SET_AS_NULL_THEN_RETURN_DATA_SET_ECHO
  # CHECK_IF_ASSOC_IS_FALSE_NULL_DEFAULT
  if ($assoc == FALSE || $assoc == NULL || $assoc == 'DEFAULT') 
  {
       # SET_DATA_ECHO_FOR_STATIC_DISPLAY_HTML
       # IF_DATA_IS_NOT_ASSOC_WITH_CLASS_METHOD_FUNCTION
     /**
       * 
       * @method function _setELEMENT()
       * @var $elem_val, $elem_key
       * @method function _setinLINEHTMLattr
       * @var $js, $id, $class, NULL
       *
       **/
     echo $get_inline__HTML  = $this->_setELEMENT($elem_val, $elem_key);
     echo $get_inline__HTML  = $this->_setinLINEHTMLattr($js, $id, $class, NULL);   
  
  }
  # CHECK_ASSOC_IF_IT_IS_TRUE_THEN
  # IF_ASSOC_IS_TRUE_SET_AS_FUNC_ASSC_OR_CLASS_ASSOC_OR_MTHOD_ASSOC
  # THEN_RETURN_SET_AS_IT_IS_ASSOC_WITH_CLASS-AND_METHOD_AND_FUNCTION  
  elseif ($assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC) {
    
     /**
       *
       * SET_FUNCTION-CONCAT_THEN_RETURN
       * @method function _setELEMENT()
       * @method function _setinLINEHTMLattr
       *
       **/ 
     $get_inline__HTML   = $this->_setELEMENT($elem_val, $elem_key);
     $get_inline__HTML  .= $this->_setinLINEHTMLattr($js, $id, $class, $assoc); 

     return $get_inline__HTML;    
  }
    
}

/**
  *
  * @method private function noHTML
  * @ @private Method Defined get__HTML   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
 protected function get__HTML($elem_val, $elem_key, $js, $id, $class) {
       
      # RETURN_GET__HTML_CONTAINS_OFSET_ELEMENTS_SET_HTML_ATTR
      # SET___HTML_AS_PRINT_STATIC_HTML
    /**
      *
      * SET_FUNCTION-CONCAT_THEN_RETURN
      * @method function _setELEMENT()
      * @method function _setHTMLattr()
      *
      **/     
    echo $get__HTML  = $this->_setELEMENT($elem_val, $elem_key);
    echo $get__HTML  = $this->_setHTMLattr($js, $id, $class);   

}

/**
  *
  * @method private function noHTML
  * @ @private Method Defined new_get__HTML   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
 protected function new_get__HTML($elem_val, $elem_key, $js, $id, $class) {
  
      # RETURN_GET__HTML_CONTAINS_OFSET_ELEMENTS_SET_HTML_ATTR
      # SET___HTML_AS_RETURN_DYNAMIC_ASSOC_HTML
    /**
      *
      * SET_FUNCTION-CONCAT_THEN_RETURN
      * @method function _setELEMENT()
      * @method function new_setHTMLattr()
      *
      **/      
   $get__HTML   = $this->_setELEMENT($elem_val, $elem_key);
   $get__HTML  .= $this->new_setHTMLattr($js, $id, $class);   
   
   return $get__HTML;

}

/**
  *
  * @method private function noHTML
  * @ @private Method Defined get_xHTML   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
 protected function get_xHTML($elem_val, $elem_key, $label) {
   
   # SET_VALUE_IS_TRUE_ELEMENT
   # ASIGNED-TO_SET_VAR_ELEMENT 
   $set             = $this->_isTRUELEM($elem_val); 
   
   # DEFINE_ELEMENTS_AND_EMTHODS
   # ASSIGNED_GET___TAG_SET_GETENDS_RETURN-SET_ARRAY_KEY
   # EGT_x_HTML_ASSIGNED_BREAK_TAG
   $defined_htm     = $this->_get_TAG().$this->_getENDS()
                    
                       .$set[$elem_key]
                       .$this->_getxTAG()
                       .$this->_getBREAK();
   
   # CHECK_IF_LABEL_IS_TRUE_AFTER_NODE
   # IF_LABEL_IS_TRUE_THEN_RETURN_LABEL_AFTER_NODE
   # SET_COMMENTS_AS LABEL                  
   if ($label == TRUE )  {

   $defined_htm    .= $this->_getCOMBEGIN()." ".$label." "
                    
                       .$this->_getCOMEND()
                       .$this->_getBREAK();    
   } else {

     # IF-IT_IS_FALSE_THEN
     # ELSE RETURN EMPTY_COMMENT
     echo "";
   
   }
     # IF_TRUE_EXECUTE_DEFINED
     echo $defined_htm; 
}

/**
  *
  * @method private function noHTML
  * @ @private Method Defined new_get_xHTML   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
 protected function new_get_xHTML($elem_val, $elem_key, $label) {

   $set               = $this->_isTRUELEM($elem_val); 
   
   # SAMETHING_SET_AS_RETURN
   $defined_htm       = $this->_get_TAG().$this->_getENDS()

                       .$set[$elem_key]
                       .$this->_getxTAG()
                       .$this->_getBREAK();

   # CHECK_IF_LABEL_IS_TRUE_AFTER_NODE
   # IF_LABEL_IS_TRUE_THEN_RETURN_LABEL_AFTER_NODE
   # SET_COMMENTS_AS LABEL     
   if ($label == TRUE )  {
   
   $defined_htm      .= $this->_getCOMBEGIN()." ".$label." "
                       
                       .$this->_getCOMEND()
                       .$this->_getBREAK();    
   } 
   
   # IF_DEFINE_EXECUTRE_RETURN_AS_SET
   return $defined_htm; 
}

/**
  *
  * @method private function noHTML
  * @ @private Method Defined  _setHTMLattr   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
 protected function _setHTMLattr($js = [], $id=NULL, $class=NULL) {

      # DEFINE_STATIC_SET_RETURN_TO_HTML
    # METHOD_SET_AS_PRINT
    /**
      *
      * SET_FUNCTION-CONCAT_THEN_RETURN
      * @method function _isJStrue()
      * @method function _getxTAG()
      *
      **/     
    echo $_setHTMLattr  = $this->_isJStrue($js, $id, $class);
    echo $_setHTMLattr = $this->_getxTAG().$this->_getBREAK();   
}

/**
  *
  * @method private function noHTML
  * @ @private Method Defined  _setHTMLattr   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
 protected function new_setHTMLattr($js = [], $id=NULL, $class=NULL) {
      
      # DEFINE_STATIC_SET_RETURN_TO_HTML
    # METHOD_sET_AS_RETURN
    /**
      *
      * SET_FUNCTION-CONCAT_THEN_RETURN
      * @method function new_isJStrue()
      * @method function _getxTAG()
      *
      **/ 
    $_setHTMLattr  = $this->new_isJStrue($js, $id, $class);
    $_setHTMLattr .= $this->_getxTAG().$this->_getBREAK();

    return $_setHTMLattr;
}

/**
  *
  * @method private function noHTML
  * @ @private Method Defined  _setinLINEHTMLattr  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
 protected function _setinLINEHTMLattr($js = [], $id=NULL, $class=NULL, $assoc=NULL) {
   
  # CHECK_IF_ASSOC_IS_NULL_OR_FLASE_DEFAULT
  # IF_ASSOC_IS_FALSE_THEN_SET_AS_PRINT_STATIC  
  if ($assoc == FALSE || $assoc == NULL || $assoc === 'DEFAULT') 
  {
      
      # DEFINE_STATIC_SET_AS_PRINT
    /**
      *
      * SET_FUNCTION-CONCAT_THEN_RETURN
      * @method function _isJStrue()
      * @method function _set_tagSPACER()
      *
      **/     
    echo $_setinLINEHTMLattr = $this->_isJStrue($js, $id, $class);
    echo $_setinLINEHTMLattr = $this->_set_tagSPACER().$this->_setENDS().$this->_getxTAG().$this->_getBREAK();  

  } /**
      *
      * SET_FUNCTION-CONCAT_THEN_RETURN
      * @method function isJStrue_assoc()
      * @method function _set_tagSPACER_setENDS_getxTAG_getBREAK
      *
      **/     
    elseif ($assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC) {
    
      # ELSE_CHECK_IF_THE_ASSOC_IS_TRUE_OR_FUNC_ASSOC_OR_CLASS_ASSOC_METHOD_ASSOC
      # SET_AS_DYNAMIC_ASSOCIATED_WITH_METHOD_CLASS_FUNC_ASSOC      
      $_setinLINEHTMLattr  = $this->isJStrue_assoc($js, $id, $class, $assoc);
      $_setinLINEHTMLattr .= $this->_set_tagSPACER().$this->_setENDS().$this->_getxTAG().$this->_getBREAK();  

      return $_setinLINEHTMLattr;    
  }
   
}

/**
  *
  * @method private function noHTML
  * @ @private Method Defined  isJStrue_assoc  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
 private function isJStrue_assoc($js, $id, $class, $assoc) {

  # CHECKK_IF_JS-ASSOC_IS_TRUE_THE_RETURN_SET_AS_PRINT
  # IF_ASSOC_IS_FALSE_IF_IS_NULL_IF_IS_DEFAULT  
  if ($assoc == FALSE || $assoc == NULL || $assoc == 'DEFAULT') 
  {  
     # RETURN_DEFAULT_SET_PRINT_DO_EXECUTE
   /**
     *
     * SET_FUNCTION-CONCAT_THEN_RETURN
     * @method function new_isJStrue
     *
     **/      
     $js_false = $this->_isJStrue($js, $id, $class);
     echo  $js_false;
  } 
    # ELSE_IF_IT_IS_NOT_NULL_NOT_FALSE_NOT_DEFAULT_OR_IT_IS_SET_AS_TRUE_THEN
    # CHECK_IF_IT_IS_FUNCASSOC_CLASSASSOC_METHOD_ASSOC_THE_SET_RETURN
  /**
    *
    * SET_FUNCTION-CONCAT_THEN_RETURN
    * @method function new_isJStrue
    *
    **/   
   elseif ($assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC) 
   {  
     return $this->new_isJStrue($js, $id, $class);    
   }

}

/**
  *
  * @method private function noHTML
  * @ @private Method Defined  _isJStrue  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
 private function _isJStrue($js, $id, $class) {
  
  # SET_STATIC_PRINT_IF_THE_JS_IS_NOT_ASSOC_WITH_METHOD
  # CHECK_IF_PARAM_JS_HAVE_TRUE_THEN  
  if ( $js == TRUE ) 
    {
        
       # GET_ARRAY_OF_DATA_FROM_APPS_ATT
     /**
       *
       * SET_FUNCTION-CONCAT_THEN_RETURN
       * @method function apps_att
       *
       **/          
       $apps_attributes = $this->apps_att($js);
       
       # GET_DATA_OF_ASSOCIATED_OF_ARRAY_FOR_EACH_DATA_COMBINE
       # IF_THE_JS_RETURN_TRUE_THEN_LOOP_COMBINE_DATA
       foreach ( $apps_attributes as $attr_name => $attr_value )  
       {
         
         # SET_PRINT_DATA_STATIC_LOOPING  
         echo $this->_tagSPACER().$attr_name
      
                      .$this->_getES()
                      .$this->_getDQUOTE()
      
                      .$attr_value
      
                      .$this->_getDQUOTE()
                      .$this->_tagSPACER();
        }
    }
    
    # SET_JOIN_HTML_ATTRIBUTE_AT_THE_SAME_TIME
  /**
    *
    * SET_FUNCTION-CONCAT_THEN_RETURN
    * @method function html_attr
    *
    **/        
    echo $html_attributes = $this->html_attr($id, $class);
}

/**
  *
  * @method private function noHTML
  * @ @private Method Defined  _isJStrue  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
 private function new_isJStrue($js, $id, $class) {
   
  # SET_EMPTY_ARRAY_OF_DATA_IF_DATA_IS_ASSOC
  # CHECK_DATA_IF_ASSOC_WITH_METHOD_AND_CLASS 
  $htmlattr = [];
  
  # SET_STATIC_PRINT_IF_THE_JS_IS_NOT_ASSOC_WITH_METHOD
  # CHECK_IF_PARAM_JS_HAVE_TRUE_THEN
  if ( $js == TRUE ) 
    {
        # GET_ARRAY_OF_DATA_FROM_APPS_ATT_COMBINE
      /**
        *
        * SET_FUNCTION_CONCAT_THEN_RETURN
        * @method function apps_att
        *
        **/  
        $apps_attributes = $this->apps_att($js);

        foreach ( $apps_attributes as $attr_name => $attr_value )  
        {
         
         # SET_RETUNR_DATA_EMPTY_ARRAY
         $htmlattr[] = $this->_tagSPACER().$attr_name
                      
                      .$this->_getES()
                      .$this->_getDQUOTE()
   
                      .$attr_value
                      
                      .$this->_getDQUOTE()
                      .$this->_tagSPACER();
        }
    }

    # SET_JOIN_HTML_ATTRIBUTE_AT_THE_SAME_TIME
  /**
    *
    * SET_FUNCTION-CONCAT_THEN_RETURN
    * @method function new_html_attr
    *
    **/      
    $html_attributes = $this->new_html_attr($id, $class);
    
    #THE_RETURN_DATA_OF_ARRAY_WITH_ASSOC-IN_CLASS_METHOD
    return implode('', $htmlattr).$html_attributes;
}


/**
  *
  * @method private function noHTML
  * @ @private Method Defined  _setELEMENT  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
 protected function _setELEMENT($_variable, $set_tag) {
   # CHECK_ELEMENT_IF_IT_IS_TRUE
   # SET_RETURN_IF_TRUE
  /**
    *
    * SET_FUNCTION-CONCAT_THEN_RETURN
    * @method function _isTRUELEM
    * @method function _get_TAG
    *
    **/     
   $set =  $this->_isTRUELEM($_variable);
   return  $this->_get_TAG().$set[$set_tag];

}

/**
  *
  * @method private function noHTML
  * @ @private Method Defined  apps_att  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
 protected function apps_att($js = []) {
    
    # COLLECT_DATA_ARRAY_ATTRIBUTE_CALL_BACK_FUNCTION
    # IF_CALL_BACK_IS_TRUE_THEN_SET_ARRAY_aSSOC
    $set_apps_names = $js[0];
    $set_apps_value = $js[1];
    
  /**
    *
    * SET_FUNCTION-CONCAT_THEN_RETURN
    * @PHP function array_combine
    *
    **/       
    return $combineSet = array_combine($set_apps_names, $set_apps_value); 
}

/**
  *
  * @method private function noHTML
  * @ @private Method Defined html_attr  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
 private function html_attr($id=null, $class=null) {
   
   # CHECK_HTML_ATTR_IF_ID_AND_CLASS_IF_TRUE_STATIC
   # IF_ID_SET_AS_TRUE_THEN_RETURN_ID
   # IF_CLASS_SET_AS_TRUE_THEN_RETURN_CLASS
   # IF_BOT_SET_AS_TRUE_THEN_RETURN_BOTH 
  /**
    *
    * SET_FUNCTION-CONCAT_THEN_RETURN
    * @method function have_id_class
    *
    **/  
   if ($id == TRUE && $class == TRUE)         {   echo  $this->_tagSPACER().$this->have_id_class($id, $class); 
   }  

  /**
    *
    * SET_FUNCTION-CONCAT_THEN_RETURN
    * @method function haveId
    *
    **/       
    elseif ($id == TRUE  && $class == FALSE )  {   echo  $this->_tagSPACER().$this->haveId($id);
   }

 /**
   *
   * SET_FUNCTION-CONCAT_THEN_RETURN
   * @method function haveClass
   *
   **/       
   elseif ($id == FALSE && $class == TRUE  )    {   echo  $this->_tagSPACER().$this->haveClass($class); 
   }  
  
 /**
   *
   * SET_FUNCTION-CONCAT_THEN_RETURN
   * @method function "" | EMPTY
   *
   **/          
   else {
   
      return "";
   }
}


/**
  *
  * @method private function noHTML
  * @ @private Method Defined new_html_attr 
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
 private function new_html_attr($id=null, $class=null) {
   
   # CHECK_HTML_ATTR_IF_ID_AND_CLASS_IF_TRUE_METHOD_ASSOC
   # IF_ID_SET_AS_TRUE_THEN_RETURN_ID
   # IF_CLASS_SET_AS_TRUE_THEN_RETURN_CLASS
   # IF_BOT_SET_AS_TRUE_THEN_RETURN_BOTH 
  /**
    *
    * SET_FUNCTION-CONCAT_THEN_RETURN | METHOD_ASSOC
    * @method function have_id_class
    *
    **/    
   if ($id == TRUE && $class == TRUE)          {   return  $this->_tagSPACER().$this->have_id_class($id, $class); 
   } 

  /**
    *
    * SET_FUNCTION-CONCAT_THEN_RETURN
    * @method function haveId | METHOD_ASSOC
    *
    **/ 
   elseif ($id == TRUE  && $class == FALSE )   {   return  $this->_tagSPACER().$this->haveId($id);
   }  

  /**
    *
    * SET_FUNCTION-CONCAT_THEN_RETURN
    * @method function haveClass | METHOD_ASSOC
    *
    **/ 
   elseif ($id == FALSE && $class == TRUE  )   {   return  $this->_tagSPACER().$this->haveClass($class); 
   }  
 /**
   *
   * SET_FUNCTION-CONCAT_THEN_RETURN
   * @method function "" | EMPTY
   *
   **/    
   else {
    
      return "";
  }
}

/**
  *
  * @method private function noHTML
  * @ @private Method Defined _isTRUELEM 
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
 protected function _isTRUELEM($elements) {
   
   if ($elements == 'PRIMARY')            
    {
      return  $this->htm; 
    } 

   /**
     *
     * @var elements 
     * @method _isTRUELEM
     * RETURN NODE HTML _ noHTML TAG
     *
     **/
    elseif  ($elements == 'SECONDARY') 
    {
      return  $this->htm_s; 
    } 

   /**
     *
     * @var elements 
     * @var $htm_ss 
     * @method _isTRUELEM
     * RETURN NODE HTML _ noHTML TAG
     *
     **/
    elseif  ($elements == 'SUPPORT')   
    {
      return  $this->htm_ss;  
    }

   /**
     *
     * @var elements 
     * @var $htm_t
     * @method _isTRUELEM
     * RETURN NODE HTML _ noHTML TAG
     *
     **/ 
    elseif  ($elements == 'LIST')      
    {
      return  $this->htm_t;   
    } 

   /**
     *
     * @var elements 
     * @var $htm_f
     * @method _isTRUELEM
     * RETURN NODE HTML _ noHTML TAG
     *
     **/
    elseif  ($elements == 'FORMAT')    
    {
      return  $this->htm_f; 
    }

   /**
     *
     * @var elements
     * @var $htm_fc 
     * @method _isTRUELEM
     * RETURN NODE HTML _ noHTML TAG
     *
     **/
     elseif  ($elements == 'FORMATC')   
    {
      return  $this->htm_fc;    
    } 

   /**
     *
     * @var elements 
     * @var $htm_L
     * @method _isTRUELEM
     * RETURN NODE HTML _ noHTML TAG
     *
     **/

    elseif  ($elements == 'INLINE')    
    {
      return  $this->htm_L;     
    } 

   /**
     *
     * @var elements
     * @var $htm_st 
     * @method _isTRUELEM
     * RETURN NODE HTML _ noHTML TAG
     *
     **/
    elseif  ( $elements == 'STRUCTURE') 
    {
      return  $this->htm_st;
    }
} 

/**
  *
  * @method private function noHTML
  * @ @private Method Defined haveClass   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
 private function haveClass($class) {

 return  $gethtml_attr = "class".$this->_getES().$this->_getDQUOTE().$class.$this->_getDQUOTE()."";
}

/**
  *
  * @method private function noHTML
  * @ @private Method Defined haveId   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
 private function haveId($id) {

 return  $gethtml_attr = "id".$this->_getES().$this->_getDQUOTE().$id.$this->_getDQUOTE()."";
}

/**
  *
  * @method private function noHTML
  * @ @private Method Defined have_id_class   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
 private function have_id_class($id, $class) {
  
  # IF_HAVE_CLASS_RETURN_VALUE_SET
  # CHECK_IF_BOTH_PARA_IS_TRUE  
  $gethtml_attr   = "id".$this->_getES().$this->_getDQUOTE().$id.$this->_getDQUOTE().$this->_tagSPACER()."";
  $gethtml_attr  .= "class".$this->_getES().$this->_getDQUOTE().$class.$this->_getDQUOTE()."";

  return $gethtml_attr;
}

/**
  *
  * @method private function noHTML
  * @ @private Method Defined _isTrueBREAK_assoc  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
 private function _isTrueBREAK_assoc($assoc) {
  
  if ($assoc == NULL || $assoc == FALSE || $assoc == 'DEFUALT') 
   {
     
    # CHECK_IF_aSSOC_IS_NOT_TRUE_OR_IF_IT_IS_FALSE
    # SET_AS_PRINT_STATIC_HTML 
    echo $this->_get_TAG().$this->_doBREAK().$this->_tagSPACER().$this->_getENDS().$this->_getxTAG().$this->_getBREAK(); 
   } 

    # ELSE_IF_THE_ASSOC_PARA_IS_TRUE_THEN_SET_RETURN 
    elseif ($assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC) {
    # RETURN_METHOD_ASSOC
    return $this->_get_TAG().$this->_doBREAK().$this->_tagSPACER().$this->_getENDS().$this->_getxTAG().$this->_getBREAK();       
   }
}

/**
  *
  * @method private function noHTML
  * @ @private Method Defined _isTrueLine_assoc  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
 private function _isTrueLine_assoc($assoc) {
  
  if ($assoc == NULL || $assoc == FALSE || $assoc == 'DEFUALT') 
   {

    # CHECK_IF_aSSOC_IS_NOT_TRUE_OR_IF_IT_IS_FALSE
    # SET_AS_PRINT_STATIC_HTML    
    echo $this->_get_TAG().$this->_makeLine().$this->_tagSPACER().$this->_getENDS().$this->_getxTAG().$this->_getBREAK();
      
   } 
    
    # ELSE_IF_THE_ASSOC_PARA_IS_TRUE_THEN_SET_RETURN 
    elseif ($assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC) {
    # RETURN_METHOD_ASSOC
    return $this->_get_TAG().$this->_makeLine().$this->_tagSPACER().$this->_getENDS().$this->_getxTAG().$this->_getBREAK();      
   
   }
}

/**
  *
  * @method private function noHTML
  * @package @private Method Defined __magicELSE() // use alternaive if else statement inside function
  *
  **/
private function return_method_concat_else($con,$res1,$res2,$as) {
 
  # SET_FOR_IF_CONDITION  
  $condition_statements = $con;
  
  # SET_FOR_IF_RESULT
  $get_if_result_       = $res1;
  
  # SET_FOR_ELSE_RESULT
  $get_else_result_     = $res2;
  
  # SET_FANC_ASSOC
  $assoc                = $as;
  
  # CHECK_IF_THE_FUNCTION_IS_WITHIN_METHOD
  # THEN SET RETURN
  if ( ($assoc == TRUE || $assoc !== NULL) && ($assoc === FUNC_ASSOC || $assoc === METHOD_ASSOC || $assoc === CLASS_ASSOC) ) 
  {
    
    if ($condition_statements) 
    {  return $get_if_result_;   } else  { return $get_else_result_; }      
 
  } elseif ($assoc == FALSE || $assoc == NULL ) {
     
    if ($condition_statements) 
    {  $this->_PERFORM($get_if_result_); } else { $this->_PERFORM($get_else_result_); } 
  }

}

/**
  *
  * @method private function noHTML
  * @package @private Method Defined HTML FOUNDATION _isTrue_SET_STRING
  *
  **/
 final private function _isTrue_SET_merge($merge=null) {
    
    #_GET_RESUKT_SET_AS_RETURN_TO_MERGE
    return $merge; 
 } 

// Attrbute for redirect github submit issue 
static private function IssueSubmitAttr() {

    return $sets = [
         
      $attr_name = ['href'],
      $attr_val  = ['https://github.com/nielsofficeofficial/PHPHtml-Optimizer/issues']
        
   ];
   
}

// Attrbute for redirect github submit issue 
static private function DocxSubmitAttr() {

    return $sets = [
         
      $attr_name = ['href'],
      $attr_val  = ['https://github.com/nielsofficeofficial/PHPHtml-Optimizer']
        
   ];
}

/**
  *
  * @method protected function Validate_extension_file_Img
  * @static @protected Method Defined IMAGE FILE EXTENSION
  *
  **/
static protected function Validate_extension_assets_files($Extension__) {
  
  // GET_ALL_AVAILABLE_EXTENSION_FILES 
  $currentSet_Ext     = self::__FILEEXTENSION__;

  // SET_DONT_EXTENSION_POINT
  $InsertDotOperation = '.';

  // CHECK_IF_THE_CONSTANT_KEY_IS_IN_ARRAY
  if ($getArray = array_key_exists($Extension__, $currentSet_Ext))  
  {
      
      // IF_KEY_IS_TRUE_OR_IN_ARRAY
      // RETURN_SELECTED_KET_CCORDING_TO_PARAM
      foreach ($currentSet_Ext as $SetExtensionKey__ => $SetExtensionValue__) 
      {
        
        // IF_IT_IS_TRUE_THEN_GET_ARRAY
        if ( $SetExtensionKey__ === $Extension__ ) 
        {
         
         // STORE_AND_DO_MERGE 
         $merge = $InsertDotOperation.$SetExtensionValue__;
         
         // RETURN_MERGE_VARIABLE
         return $merge;
         break;

        } 
      
      }
  
  } else {

      self::_PERFORM('Extention is not yet registered or undefine!').self::BREAK();
      self::_PERFORM('For Developer support visit github submit issue: '.self::ELEMENT('a','Submit Github Support',self::IssueSubmitAttr()));  
      self::_PERFORM('Read Documentation: '.self::ELEMENT('a','Submit Github Support',self::DocxSubmitAttr()));     
      exit();
          
      exit();
    
    
  }
  
} 

/**
  *
  * @method private function noHTML
  * @ @private Method Defined HTML FOUNDATION _getBREAK
  *
  **/
 private function _getBREAK()      { 

   # SET_RETURN_PRIVATE_PROPERTY_GET_VALUE_ARRAY_ZERO
   /**
     *
     * @var $hBreak
     * @var private property array() 
     * @method ""
     *
     **/   
    return $this->hBreak[0];    }

/**
  *
  * @method private function noHTML
  * @ @private Method Defined HTML FOUNDATION _doBREAK 
  *
  **/
 private function _doBREAK()       { 

   # SET_RETURN_PRIVATE_PROPERTY_GET_VALUE_ARRAY_ONE
   /**
     *
     * @var $hBreak
     * @var private property array() 
     * @method ""
     *
     **/  
    return $this->hBreak[1];    }

/**
  *
  * @method private function noHTML
  * @ @private Method Defined HTML FOUNDATION _makeLine 
  *
  **/
 private function _makeLine()      { 

   # SET_RETURN_PRIVATE_PROPERTY_GET_VALUE_ARRAY_TWO
   /**
     *
     * @var $hBreak
     * @var private property array() 
     * @method ""
     *
     **/    
    return $this->hBreak[2];    }

/**
  *
  * @method private function noHTML
  * @ @private Method Defined HTML FOUNDATION _getSQUOTE 
  *
  **/
 private function _getSQUOTE()     { 

   /**
     *
     * @var private property \
     * @method _setSQ()
     *
     **/  
    return $this->_setSQ();      }
 private function _setSQ()         { 
   /**
     *
     * @var private property $sq
     *
     **/  
    return $this->sq = '\'';    }

/**
  *
  * @method private function noHTML
  * @ @private Method Defined HTML FOUNDATION _getDQUOTE 
  *
  **/
 private function _getDQUOTE()     { 

   /**
     *
     * @var private property \ 
     * @method _setDQ()
     *
     **/  
    return $this->_setDQ();      }
 private function _setDQ()         { 
   
   /**
     *
     * @var private property $dq 
     *
     **/
    return $this->dq = "\"";    }

/**
  *
  * @method private function noHTML
  * @ @private Method Defined HTML FOUNDATION _getxTAG 
  *
  **/
 private function _getxTAG()   { 

   /**
     *
     * @var private property >
     * @method _setENDGATE()
     *
     **/  
    return $this->_setENDGATE();     }
 private function _setENDGATE()    { 

   /**
     *
     * @var private property $lt
     *
     **/  
    return $this->lt = ">";         }

/**
  *
  * @method private function noHTML
  * @ @private Method Defined HTML FOUNDATION _get_TAG 
  *
  **/
 private function _get_TAG()    { 

   /**
     *
     * @var private property >
     * @method _setGATE
     *
     **/
    return $this->_setGATE();        }
 private function _setGATE()       { 
   
   /**
     *
     * @var private property $gt
     *
     **/
    return $this->gt = "<";         }

/**
  *
  * @method private function noHTML
  * @ @private Method Defined HTML FOUNDATION _getES 
  *
  **/
 private function _getES()         { 

   /**
     *
     * @var private property =  
     * @method  _setES
     *
     **/  
    return $this->_setES();          }
 private function _setES()         { 

   /**
     *
     * @var private property $es
     *
     **/
    return $this->es = "=";         }

/**
  *
  * @method private function noHTML
  * @ @private Method Defined HTML FOUNDATION _getENDS
  *
  **/
 private function _getENDS()       { 

   /**
     *
     * @var private property / 
     * @method  _setES
     *
     **/  
    return $this->_setENDS();        }
 private function _setENDS()       { 

   /**
     *
     * @var private property $ends
     *
     **/
    return $this->ends = "/";       }

/**
  *
  * @method private function noHTML
  * @ @private Method Defined HTML FOUNDATION _tagSYMBOL
  *
  **/
 private function _tagSYMBOL()     { 

   /**
     *
     * @var private property !
     * @method  _set_exSYMBOL()
     *
     **/
    return $this->_set_exSYMBOL();   }
 private function _set_exSYMBOL()  { 

   /**
     *
     * @var private property $exSymbol
     *
     **/  
    return $this->exSymbol = "!";   }

/**
  *
  * @method private function noHTML
  * @ @private Method Defined HTML FOUNDATION _getCOMEND
  *
  **/
 private function _getCOMEND()     {

   /**
     *
     * @var private property -->
     * @method  _setCOMEND
     *
     **/ 
    return $this->_setCOMEND();      } 
 private function _setCOMEND()     {

   /**
     *
     * @var private property $comEND
     *
     **/  
    return $this->comEND = "-->";   }

/**
  *
  * @method private function noHTML
  * @ @private Method Defined HTML FOUNDATION _getTRING
  *
  **/
 private function _getTRING($str)  { 

   /**
     *
     * @method  _setSTRING
     *
     **/  
    return $this->_setSTRING($str);  } 
 private function _setSTRING($str) {

   /**
     *
     * @var private property $str
     *
     **/
    return $this->str = $str;   }

/**
  *
  * @method private function noHTML
  * @ @private Method Defined HTML FOUNDATION _tagSPACER
  *
  **/
 private function _tagSPACER()     { 

   /**
     *
     * @method  _set_tagSPACER
     *
     **/    
    return $this->_set_tagSPACER();  }
 private function _set_tagSPACER() {

   /**
     *
     * @var private property $sHTML
     *
     **/
    return $this->sHTML = " ";
}

/**
  *
  * @method private function noHTML
  * @ @private Method Defined HTML FOUNDATION _getCOMBEGIN
  *
  **/
 private function _getCOMBEGIN() { 

   /**
     *
     * @method  _set_tagSPACER
     *
     **/  
     return $this->_setCOMBEGIN();  }
 private function _setCOMBEGIN() { 

   /**
     *
     * @var private property $sHTML
     *
     **/
     return $this->comBEGIN = $this->_get_TAG().$this->_tagSYMBOL()."--";
}

/**
  *
  * @method private function noHTML
  * @ @private Method Defined HTML FOUNDATION _isTrue_SET_STRING
  *
  **/
 private function _isTrue_SET_STRING($str=null, $assoc=null) {

   if ($assoc == NULL || $assoc == FALSE || $assoc == 'DEFUALT') 
   {

     echo  $this->_getTRING($str);
   
   } 
   
   # CHECK_IF_INLINE_IS_ASSOC_WITH_FUNC_ASSOC_OR_CLASS_ASSOC_OR_METHOD_ASSOC
   elseif ($assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC) 
   { 
   
     return $this->_getTRING($str);  
   
   } 
 
 }

/**
  *
  * @method private function noHTML
  * @ @private Method Defined HTML FOUNDATION _setELEMENTS
  *
  **/
 protected function _setELEMENTS($elem) {
 
    /**
      *
      * @method private function noHTML _setELEMENTS
      * CHECK_IF_WHICH_ELEMT_WILL_RETURN
      *
      **/
      # VALIDATE HTML ELEMENTS THE RETURN BASE ON ELEMENT HTML
      # CHECK_IF_P_PARA_PARANGRAPH_IS_TRUE_THEN_RETURN_ELEMENTS_ARRAY
      # IF_IT_IS_TRUE_THE_EXECUTE_ELEMENT_ACCORDING_TO_PARAM_SET
 
   if ( $elem === 'p' || $elem === 'P' || $elem === 'parangrap' || $elem === 'PARANGRAP' || $elem === 'para' || $elem === 'PARA' ) {
       
     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_P 
       *
       *
       *
      **/
       return $elem = 'p';
    
    } elseif ( $elem === 'div' || $elem === 'DIV') {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_DIV 
       *
       *
       *
      **/
      return $elem = 'div'; 
    
    } elseif ( $elem === 'h1'  || $elem === 'H1') {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_DH1
       *
       *
       *
      **/    
      return $elem = 'h1';    
    
    } elseif ( $elem === 'h2'  || $elem === 'H2' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_H2 
       *
       *
       *
      **/    
      return $elem = 'h2';  
    
    } elseif ( $elem === 'h3'  || $elem === 'H3' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_H2
       *
       *
       *
      **/
      return $elem = 'h3';
    
    } elseif ( $elem === 'h4'  || $elem === 'H4' ) {
    
     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_H4
       *
       *
       *
      **/
      return $elem = 'h4';
    
    } elseif ( $elem === 'h5'  || $elem === 'H5' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_H5
       *
       *
       *
      **/
      return $elem = 'h5';
    
    } elseif ( $elem === 'h6'  || $elem === 'H6' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_H6
       *
       *
       *
      **/
      return $elem = 'h6';
    
    } elseif ( $elem === 'button' || $elem === 'BUTTON' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_BUTTON
       *
       *
       *
      **/
      return $elem = 'button';
    
    } elseif ( $elem === 'a' || $elem === 'A' || $elem == 'LINK' || $elem === 'hyperlink' || $elem === 'HYPERLINK') {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_LINK
       *
       *
       *
      **/
      return $elem = 'a';
    
    } elseif ( $elem === 'iframe' || $elem === 'IFRAME' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_IFRAME
       *
       *
       *
      **/    
      return $elem = 'iframe';
    
    } elseif ( $elem === 'main'   || $elem === 'MAIN' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_MAIN 
       *
       *
       *
      **/
      return $elem = 'main';
    
    } elseif ( $elem === 'nav'    || $elem === 'NAV' || $elem === 'NAVIGATION' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_NAV
       *
       *
       *
      **/
      return $elem = 'nav';
    
    } elseif ( $elem === 'select' || $elem === 'SELECT' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_SELECT
       *
       *
       *
      **/
      return $elem = 'select';
    
    } elseif ( $elem === 'form'   || $elem === 'FORM' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_FORM
       *
       *
       *
      **/
      return $elem = 'form';
    
    } elseif ( $elem === 'picture'  || $elem === 'PICTURE' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_PICTURE
       *
       *
       *
      **/
      return $elem = 'picture';
    
    } elseif ( $elem === 'section'  || $elem === 'SECTION' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_SECTION 
       *
       *
       *
      **/
      return $elem = 'section';
    
    } elseif ( $elem === 'textarea' || $elem === 'TEXTAREA' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_TEXTAREA 
       *
       *
       *
      **/
      return $elem = 'textarea';
    
    } elseif ( $elem === 'audio'    || $elem === 'AUDIO' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_AUDIO 
       *
       *
       *
      **/
      return $elem = 'audio';
    
    } elseif ( $elem === 'video' || $elem === 'VIDEO' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_VIDEO 
       *
       *
       *
      **/
      return $elem = 'video';
    
    } elseif ( $elem === 'address'  || $elem === 'ADDRESS' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ADDRESS 
       *
       *
       *
      **/
      return $elem = 'address';
    
    } elseif ( $elem === 'colgroup' || $elem === 'COLGROUP' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_COLGROUP 
       *
       *
       *
      **/
      return $elem = 'colgroup';
    
    } elseif ( $elem === 'bdi'      || $elem === 'BDI' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_BDI 
       *
       *
       *
      **/
      return $elem = 'bdi';
    
    } elseif ( $elem === 'bdo'        || $elem === 'BDO' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_BDO 
       *
       *
       *
      **/    
      return $elem = 'bdo';
    
    } elseif ( $elem === 'blockquote' || $elem === 'BLOCKQUOTE' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_BLOCKQUOTE 
       *
       *
       *
      **/    
      return $elem = 'blockquote';
    
    } elseif ( $elem === 'caption'    || $elem === 'CAPTION' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_CAPTION 
       *
       *
       *
      **/    
      return $elem = 'caption';
    
    } elseif ( $elem === 'label'      || $elem === 'LABEL' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_LABEL 
       *
       *
       *
      **/    
      return $elem = 'label';
    
    } elseif ( $elem === 'datalist'   || $elem === 'DATALIST' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_DATALIST 
       *
       *
       *
      **/    
      return $elem = 'datalist';
    
    } elseif ( $elem === 'details'    || $elem === 'DETAILS' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_DETAILS 
       *
       *
       *
      **/    
      return $elem = 'details';
    
    } elseif ( $elem === 'summary'    || $elem === 'SUMMARY' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_SUMMARY 
       *
       *
       *
      **/    
      return $elem = 'summary';
    
    } elseif ( $elem === 'dialog'     || $elem === 'DIALOG' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_DIALOG 
       *
       *
       *
      **/    
      return $elem = 'dialog';
    
    } elseif ( $elem === 'option'     || $elem === 'OPTION' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_OPTION 
       *
       *
       *
      **/    
      return $elem = 'option';
    
    } elseif ( $elem === 'figure'     || $elem === 'FIGURE' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_FIGURE 
       *
       *
       *
      **/    
      return $elem = 'figure';
    
    } elseif ( $elem === 'figcaption' || $elem === 'FIGCAPTION' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_FIGCAPTION 
       *
       *
       *
      **/    
      return $elem = 'figcaption';
    
    } elseif ( $elem === 'meter'      || $elem === 'METER' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_METER 
       *
       *
       *
      **/    
      return $elem = 'meter';
    
    } elseif ( $elem === 'object'     || $elem === 'OBJECT' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_OBJECT 
       *
       *
       *
      **/    
      return $elem = 'object';
    
    } elseif ( $elem === 'optgroup'   || $elem === 'OPTGROUP' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_OPTGROUP 
       *
       *
       *
      **/    
      return $elem = 'optgroup';
    
    } elseif ( $elem === 'output'     || $elem === 'OUTPUT' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_OUTPUT 
       *
       *
       *
      **/    
      return $elem = 'output';
    
    } elseif ( $elem === 'progress'   || $elem === 'PROGRESS' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_PROGRESS 
       *
       *
       *
      **/    
      return $elem = 'progress';
    
    } elseif ( $elem === 'svg'        || $elem === 'SVG' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_SVG 
       *
       *
       *
      **/    
      return $elem = 'svg';
    
    } elseif ( $elem === 'template'   || $elem === 'TEMPLATE' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_TEMPLATE 
       *
       *
       *
      **/    
      return $elem = 'template';
    
    } elseif ( $elem === 'time'       || $elem === 'TIME' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_TIME 
       *
       *
       *
      **/
      return $elem = 'time';
    
    } elseif ( $elem === 'var'        || $elem === 'VAR' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_VAR 
       *
       *
       *
      **/    
      return $elem = 'var';
    
    } elseif ( $elem === 'ul'         || $elem === 'UL' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_UL 
       *
       *
       *
      **/    
      return $elem = 'ul';  
    
    } elseif ( $elem === 'ol'         || $elem === 'OL' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_OL 
       *
       *
       *
      **/    
      return $elem = 'ol';
    
    } elseif ( $elem === 'li'         || $elem === 'LI' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_LI 
       *
       *
       *
      **/    
      return $elem = 'li';
    
    } elseif ( $elem === 'table'      || $elem === 'TABLE' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_TABLE 
       *
       *
       *
      **/    
      return $elem = 'table';
    
    } elseif ( $elem === 'tr'         || $elem === 'TR' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_TR
       *
       *
       *
      **/    
      return $elem = 'tr';
    
    } elseif ( $elem === 'td'         || $elem === 'TD' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_TD
       *
       *
       *
      **/    
      return $elem = 'td';
    
    } elseif ( $elem === 'th'         || $elem === 'TH' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_TH
       *
       *
       *
      **/    
      return $elem = 'th';
    
    } elseif ( $elem === 'legend'     || $elem === 'LEGEND' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_LEGEND
       *
       *
       *
      **/    
      return $elem = 'legend';
    
    } elseif ( $elem === 'fieldset'   || $elem === 'FIELDSET' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_FIELDSET
       *
       *
       *
      **/    
      return $elem = 'fieldset';
    
    } elseif ( $elem === 'tbody'      || $elem === 'TBODY' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_TBODY
       *
       *
       *
      **/    
      return $elem = 'tbody';
    
    } elseif ( $elem === 'tfoot'      || $elem === 'TFOOT' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_TFOOT 
       *
       *
       *
      **/    
      return $elem = 'tfoot';
    
    } elseif ( $elem === 'thead'      || $elem === 'THEAD' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_THEAD 
       *
       *
       *
      **/    
      return $elem = 'thead';
    
    } elseif ( $elem === 'span'       || $elem === 'SPAN' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_SPAN 
       *
       *
       *
      **/    
      return $elem = 'span';
    
    } elseif ( $elem === 'em'       || $elem === 'EM' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_EM 
       *
       *
       *
      **/    
      return $elem = 'em';
    
    } elseif ( $elem === 'b'        || $elem === 'B' || $elem === 'BOLD' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_B 
       *
       *
       *
      **/
      return $elem = 'b';
    
    } elseif ( $elem === 'i'        || $elem === 'I' || $elem === 'ITALIC' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_I 
       *
       *
       *
      **/    
      return $elem = 'i';
    
    } elseif ( $elem === 'small'      || $elem === 'SMALL' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_EMAIL 
       *
       *
       *
      **/    
      return $elem = 'small';
    
    } elseif ( $elem === 'strike'     || $elem === 'STRIKE' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_STRIKE 
       *
       *
       *
      **/    
      return $elem = 'strike';
    
    } elseif ( $elem === 'marquee'   || $elem === 'MARQUEE' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_MARQUEE 
       *
       *
       *
      **/    
      return $elem = 'marquee';
    
    } elseif ( $elem === 'center'    || $elem === 'CENTER' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_CENTER 
       *
       *
       *
      **/    
      return $elem = 'center';
    
    } elseif ( $elem === 'code'      || $elem === 'CODE' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_CODE 
       *
       *
       *
      **/    
      return $elem = 'code';
    
    } elseif ( $elem === 'abbr'      || $elem === 'ABBR' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ABBR 
       *
       *
       *
      **/    
      return $elem = 'abbr';
    
    } elseif ( $elem === 'map'       || $elem === 'MAP' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_MAP 
       *
       *
       *
      **/    
      return $elem = 'map';
    
    } elseif ( $elem === 'canvas'    || $elem === 'CANVAS' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_CANVAS 
       *
       *
       *
      **/    
      return $elem = 'canvas';
    
    } elseif ( $elem === 'cite'      || $elem === 'CITE' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_CITE 
       *
       *
       *
      **/    
      return $elem = 'cite';
    
    } elseif ( $elem === 'data'      || $elem === 'DATA' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_DATA 
       *
       *
       *
      **/    
      return $elem = 'data';
    
    } elseif ( $elem === 'dl'        || $elem === 'DL' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_DL 
       *
       *
       *
      **/    
      return $elem = 'dl';
    
    } elseif ( $elem === 'dt'        || $elem === 'DT' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_DT 
       *
       *
       *
      **/    
      return $elem = 'dt';
    
    } elseif ( $elem === 'dd'        || $elem === 'DD' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_DD 
       *
       *
       *
      **/    
      return $elem = 'dd';
    
    } elseif ( $elem === 'dfn'       || $elem === 'DFN' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_DFN 
       *
       *
       *
      **/    
      return $elem = 'dfn';
    
    } elseif ( $elem === 'ins'       || $elem === 'INS' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_INS 
       *
       *
       *
      **/    
      return $elem = 'ins';
    
    } elseif ( $elem === 'del'       || $elem === 'DEL' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_DEL 
       *
       *
       *
      **/    
      return $elem = 'del';
    
    } elseif ( $elem === 'kbd'       || $elem === 'KBD' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_KBD 
       *
       *
       *
      **/    
      return $elem = 'kbd';
    
    } elseif ( $elem === 'mark'      || $elem === 'MARK' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_MARK 
       *
       *
       *
      **/    
      return $elem = 'mark';
    
    } elseif ( $elem === 'pre'       || $elem === 'PRE' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_PRE 
       *
       *
       *
      **/    
      return $elem = 'pre';
    
    } elseif ( $elem === 'rt'        || $elem === 'RT' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_RT 
       *
       *
       *
      **/    
      return $elem = 'rt';
    
    } elseif ( $elem === 'rp'        || $elem === 'RP' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_RP 
       *
       *
       *
      **/    
      return $elem = 'rp';
    
    } elseif ( $elem === 'ruby'      || $elem === 'RUBY' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_RUBY 
       *
       *
       *
      **/    
      return $elem = 'ruby';
    
    } elseif ( $elem === 's'         || $elem === 'S' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_S 
       *
       *
       *
      **/    
      return $elem = 's';
    
    } elseif ( $elem === 'samp'      || $elem === 'SAMP' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_SAMP 
       *
       *
       *
      **/    
      return $elem = 'samp';
    
    } elseif ( $elem === 'strong'    || $elem === 'STRONG' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_STRONG 
       *
       *
       *
      **/    
      return $elem = 'strong';
    
    } elseif ( $elem === 'sub'       || $elem === 'SUB' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_SUB 
       *
       *
       *
      **/
      return $elem = 'sub';
    
    } elseif ( $elem === 'sup'       || $elem === 'SUP' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_SUP 
       *
       *
       *
      **/    
      return $elem = 'sup';
    
    } elseif ( $elem === 'wbr'       || $elem === 'WBR' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_WBR 
       *
       *
       *
      **/    
      return $elem = 'wbr';
    
    } elseif ( $elem === 'q'         || $elem === 'Q' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_q 
       *
       *
       *
      **/    
      return $elem = 'q';
    
    } elseif ( $elem === 'head'      || $elem === 'HEAD' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_HEAD 
       *
       *
       *
      **/    
      return $elem = 'head';
    
    } elseif ( $elem === 'title'  || $elem === 'TITLE' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_TITLE 
       *
       *
       *
      **/    
      return $elem = 'title';
    
    } elseif ( $elem === 'body'  || $elem === 'BODY' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_BODY 
       *
       *
       *
      **/    
      return $elem = 'body';
    
    } elseif ( $elem === 'html'  || $elem === 'HTML' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_HTML 
       *
       *
       *
      **/    
      return $elem = 'html';
    }

}

 protected function _setINLINELEMENTS($elem) {
    // VALIDATE HTML ELEMENTS THE RETURN BASE ON ELEMENT HTML !

   if ( $elem === 'source'        || $elem === 'SOURCE' )  { 

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_source 
       *
       *
       *
      **/         
      return $elem = 'source';  } 
     
      elseif ( $elem === 'track'  || $elem === 'TRACK')    { 

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_TRACK 
       *
       *
       *
      **/      
      return $elem = 'track';   } 
     
      elseif ( $elem === 'circle' || $elem === 'CIRCLE')   { 

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_CIRCLE 
       *
       *
       *
      **/     
      return $elem = 'circle';  } 

      elseif ( $elem === 'param' || $elem === 'PARAM')    { 

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_PARAM 
       *
       *
       *
      **/       
      return $elem = 'param';   } 
      
      elseif ( $elem === 'input' || $elem === 'INPUT')    { 

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_INPUT 
       *
       *
       *
      **/      
      return $elem = 'input';   } 
      
      elseif ( $elem === 'meta'   || $elem === 'META')     { 

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_META 
       *
       *
       *
      **/       
      return $elem = 'meta';    } 
      
      elseif ( $elem === 'link'   || $elem === 'LINK')     { 

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_LINK 
       *
       *
       *
      **/      
      return $elem = 'link';    } 
      
      elseif ( $elem === 'img'    || $elem === 'IMG')      { 

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_IMG 
       *
       *
       *
      **/           
      return $elem = 'img';     } 
      
      elseif ( $elem === 'embed'  || $elem === 'EMBED')    { 

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_EMBED 
       *
       *
       *
      **/               
      return $elem = 'embed';   } 
      
      elseif ( $elem === 'option' || $elem === 'OPTION')   { 

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_OPTION 
       *
       *
       *
      **/      
      return $elem = 'option';  } 
      
      elseif ( $elem === 'col'    || $elem === 'COL')      { 

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_COL 
       *
       *
       *
      **/      
      return $elem = 'col';     } 
      
      elseif ( $elem === 'base'   || $elem === 'BASE')     { 

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_BASE 
       *
       *
       *
      **/  
      return $elem = 'base';    } 
      
      elseif ( $elem === 'aside'  || $elem === 'ASIDE')    { 

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ASIDE 
       *
       *
       *
      **/      
      return $elem = 'aside';   }
      
      elseif ( $elem === 'area'   || $elem === 'AREA')     { 

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_AREA 
       *
       *
       *
      **/      
      return $elem = 'area';    }
      
      elseif ( $elem === 'doctype'   || $elem === 'DOCTYPE' ) {

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_DOCTYPE 
       *
       *
       *
      **/        
      return $elem = 'DOCTYPE';
    } 

} # END OF SET ELEMENTS


 protected function _setReturnELEMENT($elem, $_doCONTENT, $js, $id, $class, $label) {

  $elem = $this->_setELEMENTS($elem); 
  switch ($elem) {

    case "head":
    
     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_HEAD_STRUCTURE_0 
       *
       *
       *
      **/      
       return $this->_elemenHTMLINLINE('STRUCTURE', 0, $_doCONTENT, $js, $id, $class, $label);
      break;  
    case "title":
    
     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_TITLE_STRUCTURE_1 
       *
       *
       *
      **/      
       return $this->_elemenHTMLINLINE('STRUCTURE', 1, $_doCONTENT, $js, $id, $class, $label);
      break;  
    case "body":

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_BODY_STRUCTURE_2 
       *
       *
       *
      **/    
       return $this->_elemenHTMLINLINE('STRUCTURE', 2, $_doCONTENT, $js, $id, $class, $label);
      break;  
    case "html":

     /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_HTML_STRUCTURE_3 
       *
       *
       *
      **/     
       return $this->_elemenHTMLINLINE('STRUCTURE', 3, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "del":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_DEL_FORMATC_0
       *
       *
       *
      **/    
       return $this->_elemenHTMLINLINE('FORMATC', 0, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "kbd":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_KBD_FORMATC_1 
       *
       *
       *
      **/     
       return $this->_elemenHTMLINLINE('FORMATC', 1, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "mark":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_MARK_FORMATC_2 
       *
       *
       *
      **/     
       return $this->_elemenHTMLINLINE('FORMATC', 2, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "pre":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_PRE_FORMATC_3 
       *
       *
       *
      **/   
       return $this->_elemenHTMLINLINE('FORMATC', 3, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "rt":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_RT_FORMATC_4
       *
       *
       *
      **/     
       return $this->_elemenHTMLINLINE('FORMATC', 4, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "rp":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_RP_FORMATC_5
       *
       *
       *
      **/  
       return $this->_elemenHTMLINLINE('FORMATC', 5, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "ruby":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_RUBY_FORMATC_6
       *
       *
       *
      **/  
       return $this->_elemenHTMLINLINE('FORMATC', 6, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "s":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_S_FORMATC_7
       *
       *
       *
      **/  
       return $this->_elemenHTMLINLINE('FORMATC', 7, $_doCONTENT, $js, $id, $class, $label);
      break;        
    case "samp":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_SAMP_FORMATC_8
       *
       *
       *
      **/     
       return $this->_elemenHTMLINLINE('FORMATC', 8, $_doCONTENT, $js, $id, $class, $label);
      break; 
    case "strong":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_STRONG_FORMATC_9
       *
       *
       *
      **/ 
       return $this->_elemenHTMLINLINE('FORMATC', 9, $_doCONTENT, $js, $id, $class, $label);
      break; 
    case "sub":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_SUB_FORMATC_10
       *
       *
       *
      **/ 
       return $this->_elemenHTMLINLINE('FORMATC', 10, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "sup":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_SUP_FORMATC_11
       *
       *
       *
      **/ 
       return $this->_elemenHTMLINLINE('FORMATC', 11, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "wbr":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_WBR_FORMATC_12
       *
       *
       *
      **/ 
       return $this->_elemenHTMLINLINE('FORMATC', 12, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "q":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_Q_FORMATC_13
       *
       *
       *
      **/ 
       return $this->_elemenHTMLINLINE('FORMATC', 13, $_doCONTENT, $js, $id, $class, $label);
      break;

    case "span":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_SPAN_FORMAT_0
       *
       *
       *
      **/ 
       return $this->_elemenHTMLINLINE('FORMAT', 0, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "em":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_EM_FORMAT_1
       *
       *
       *
      **/ 
       return $this->_elemenHTMLINLINE('FORMAT', 1, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "b":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_B_FORMAT_2
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('FORMAT', 2, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "i":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_I_FORMAT_3
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('FORMAT', 3, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "small":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_SMALL_FORMAT_4
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('FORMAT', 4, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "strike":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_STRIKE_FORMAT_5
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('FORMAT', 5, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "marquee":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_MARQUEE_FORMAT_6
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('FORMAT', 6, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "center":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_CENTER_FORMAT_7
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('FORMAT', 7, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "code":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_CODE_FORMAT_8
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('FORMAT', 8, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "abbr":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_ABBR_FORMAT_9
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('FORMAT', 9, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "map":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_MAP_FORMAT_10
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('FORMAT', 10, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "canvas":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_CANVAS_FORMAT_11
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('FORMAT', 11, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "cite":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_CITE_FORMAT_12
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('FORMAT', 12, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "data":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_DATA_FORMAT_13
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('FORMAT', 13, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "dl":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_DL_FORMAT_14
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('FORMAT', 14, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "dt":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_DT_FORMAT_15
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('FORMAT', 15, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "dd":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_DD_FORMAT_16
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('FORMAT', 16, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "dfn":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_DFN_FORMAT_17
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('FORMAT', 17, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "ins":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_INS_FORMAT_18
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('FORMAT', 18, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "ul":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_UL_LIST_0
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('LIST', 0, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "ol":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_OL_LIST_1
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('LIST', 1, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "li":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_LI_LIST_2
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('LIST', 2, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "table":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_TABLE_LIST_3
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('LIST', 3, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "tr":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_TR_LIST_4
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('LIST', 4, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "td":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_TD_LIST_5
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('LIST', 5, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "th":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_TH_LIST_6
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('LIST', 6, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "legend":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_LEGEND_LIST_7
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('LIST', 7, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "fieldset":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_FIELDSET_LIST_8
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('LIST', 8, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "tbody":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_TBODY_LIST_9
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('LIST', 9, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "tfoot":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_TFOOT_LIST_10
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('LIST', 10, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "thead":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_THEAD_LIST_11
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('LIST', 11, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "figure":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_FIGURE_SUPPORT_0
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('SUPPORT', 0, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "figcaption":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_FIGCAPTION_SUPPORT_1
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('SUPPORT', 1, $_doCONTENT, $js, $id, $class, $label);
      break;      
    case "meter":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_METER_SUPPORT_2
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('SUPPORT', 2, $_doCONTENT, $js, $id, $class, $label);
      break;      
    case "object":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_OBJECT_SUPPORT_3
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('SUPPORT', 3, $_doCONTENT, $js, $id, $class, $label);
      break;     
    case "optgroup":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_OPTGROUP_SUPPORT_4
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('SUPPORT', 4, $_doCONTENT, $js, $id, $class, $label);
      break;     
    case "output":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_OPTGROUP_SUPPORT_4
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('SUPPORT', 5, $_doCONTENT, $js, $id, $class, $label);
      break;  
    case "progress":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_PROGRESS_SUPPORT_6
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('SUPPORT', 6, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "svg":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_SVG_SUPPORT_7
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('SUPPORT', 7, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "template":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_TEMPLATE_SUPPORT_8
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('SUPPORT', 8, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "time":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_TIME_SUPPORT_9
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('SUPPORT', 9, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "var":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_VAR_SUPPORT_10
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('SUPPORT', 10, $_doCONTENT, $js, $id, $class, $label);
      break;

    case "audio":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_AUDIO_SECONDARY_0
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('SECONDARY', 0, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "video":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_VIDEO_SECONDARY_1
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('SECONDARY', 1, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "address":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_ADDRESS_SECONDARY_2
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('SECONDARY', 2, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "colgroup":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_COLGROUP_SECONDARY_3
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('SECONDARY', 3, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "bdi":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_BDI_SECONDARY_4
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('SECONDARY', 4, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "bdo":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_BDO_SECONDARY_5
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('SECONDARY', 5, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "blockquote":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_BLOCKQUOTE_SECONDARY_6
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('SECONDARY', 6, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "caption":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_CAPTION_SECONDARY_7
       *
       *
       *
      **/
       return $this->_elemenHTMLINLINE('SECONDARY', 7, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "label":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_LABEL_SECONDARY_8
       *
       *
      **/
       return $this->_elemenHTMLINLINE('SECONDARY', 8, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "datalist":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_DATALIST_SECONDARY_9
       *
       *
      **/
       return $this->_elemenHTMLINLINE('SECONDARY', 9, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "details":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_DETAILS_SECONDARY_10
       *
       *
      **/
       return $this->_elemenHTMLINLINE('SECONDARY', 10, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "summary":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_SUMMARY_SECONDARY_11
       *
       *
      **/
       return $this->_elemenHTMLINLINE('SECONDARY', 11, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "dialog":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_DIALOG_SECONDARY_12
       *
       *
      **/
       return $this->_elemenHTMLINLINE('SECONDARY', 12, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "option":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_OPTION_SECONDARY_13
       *
       *
      **/
       return $this->_elemenHTMLINLINE('SECONDARY', 13, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "h1":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_H1_SECONDARY_0
       *
       *
      **/
       return $this->_elemenHTMLINLINE('PRIMARY', 0, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "h2":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_H2_SECONDARY_1
       *
       *
      **/
      return $this->_elemenHTMLINLINE('PRIMARY', 1, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "h3":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_H3_SECONDARY_2
       *
       *
      **/
      return $this->_elemenHTMLINLINE('PRIMARY', 2, $_doCONTENT, $js, $id, $class, $label);
      break; 
    case "h4":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_H4_SECONDARY_3
       *
       *
      **/
      return $this->_elemenHTMLINLINE('PRIMARY', 3, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "h5":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_H5_SECONDARY_4
       *
       *
      **/
      return $this->_elemenHTMLINLINE('PRIMARY', 4, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "h6":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_H6_SECONDARY_6
       *
       *
      **/
      return $this->_elemenHTMLINLINE('PRIMARY', 5, $_doCONTENT, $js, $id, $class, $label);
      break;                 
  case "div":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_DIV_SECONDARY_6
       *
       *
      **/
      return $this->_elemenHTMLINLINE('PRIMARY', 6, $_doCONTENT, $js, $id, $class, $label);
      break;       
    case "p":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_PARAGRAPH_SECONDARY_7
       *
       *
      **/ 
       return $this->_elemenHTMLINLINE('PRIMARY', 7, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "button":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_BUTTON_SECONDARY_8
       *
       *
      **/ 
       return $this->_elemenHTMLINLINE('PRIMARY', 8, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "a":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_A_SECONDARY_9
       *
       *
      **/ 
      return $this->_elemenHTMLINLINE('PRIMARY', 9, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "iframe":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_IFRAME_SECONDARY_10
       *
       *
      **/ 
       return $this->_elemenHTMLINLINE('PRIMARY', 10, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "main":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_MAIN_SECONDARY_11
       *
       *
      **/ 
      return $this->_elemenHTMLINLINE('PRIMARY', 11, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "nav":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_NAV_SECONDARY_12
       *
       *
      **/ 
       return $this->_elemenHTMLINLINE('PRIMARY', 12, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "select":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_SELECT_SECONDARY_13
       *
       *
      **/ 
      return $this->_elemenHTMLINLINE('PRIMARY', 13, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "form":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_FORM_SECONDARY_14
       *
       *
      **/ 
       return $this->_elemenHTMLINLINE('PRIMARY', 14, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "picture":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_PICTURE_SECONDARY_15
       *
       *
      **/ 
      return $this->_elemenHTMLINLINE('PRIMARY', 15, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "section":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_SECTION_SECONDARY_16
       *
       *
      **/ 
       return $this->_elemenHTMLINLINE('PRIMARY', 16, $_doCONTENT, $js, $id, $class, $label);
      break;
    case "textarea":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_TEXTAREA_SECONDARY_17
       *
       *
      **/ 
      return $this->_elemenHTMLINLINE('PRIMARY', 17, $_doCONTENT, $js, $id, $class, $label);
      break;
    default:
      
      # RETURN_DEFUALT_IF_EXCECUTED_BUT_NOT_SET
      $ERROR_MSG  = " ";
      $ERROR_MSG .= " Required Element HTML: e.g: html::ELEMENT('p'); ";
      $ERROR_MSG .= " For Developer support visit github submit issue: ".self::ELEMENT('a','Submit Github Support',self::IssueSubmitAttr());   
      $ERROR_MSG .= " Recomendation: ".self::ELEMENT('a','Read Documentation Click Here',self::DocxSubmitAttr());      
      
      return $ERROR_MSG;  

  }
} # END OF SET ELEMENT

 protected function _setReturnINLINELEMENT($elem, $js, $id, $class,$assoc){

   $elem = $this->_setINLINELEMENTS($elem);

   switch ($elem) {
    case "source":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_SOURCE_INLINE_0
       *
       *
      **/ 
       return $this->return_inline_element('INLINE', 0, $js, $id, $class, $assoc);
      break;
    case "track":

      /**
       *
       *
       * 
       * @var SET RETURN ELEMT_AS_ARRAY_TRACK_INLINE_1
       *
       *
      **/ 
       return $this->return_inline_element('INLINE', 1, $js, $id, $class, $assoc);
      break;
    case "circle":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_CIRCLE_INLINE_2
       *
       *
      **/ 
       return $this->return_inline_element('INLINE', 2, $js, $id, $class, $assoc);
      break;
    case "param":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_PARAM_INLINE_3
       *
       *
      **/ 
       return $this->return_inline_element('INLINE', 3, $js, $id, $class, $assoc);
      break;
    case "input":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_INPUT_INLINE_4
       *
       *
      **/ 
       return $this->return_inline_element('INLINE', 4, $js, $id, $class, $assoc);
      break;
    case "meta":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_META_INLINE_5
       *
       *
      **/ 
       return $this->return_inline_element('INLINE', 5, $js, $id, $class, $assoc);
      break;
    case "link":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_LINK_INLINE_6
       *
       *
      **/ 
       return $this->return_inline_element('INLINE', 6, $js, $id, $class, $assoc);
      break;
    case "img":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_IMG_INLINE_7
       *
       *
      **/ 
       return $this->return_inline_element('INLINE', 7, $js, $id, $class, $assoc);
      break;      
    case "embed":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_EMBED_INLINE_8
       *
       *
      **/ 
       return $this->return_inline_element('INLINE', 8, $js, $id, $class, $assoc);
      break;
    case "option":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_OPTION_INLINE_9
       *
       *
      **/ 
       return $this->return_inline_element('INLINE', 9, $js, $id, $class, $assoc);
      break;
    case "col":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_COL_INLINE_10
       *
       *
      **/ 
       return $this->return_inline_element('INLINE', 10, $js, $id, $class, $assoc);
      break;
    case "base":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_BASE_INLINE_11
       *
       *
      **/ 
       return $this->return_inline_element('INLINE', 11, $js, $id, $class, $assoc);
      break;
    case "aside":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_ASIDE_INLINE_12
       *
       *
      **/ 
       return $this->return_inline_element('INLINE', 12, $js, $id, $class, $assoc);
      break;
    case "area":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_AREA_INLINE_13
       *
       *
      **/ 
       return $this->return_inline_element('INLINE', 13, $js, $id, $class, $assoc);
      break;
  case "DOCTYPE":

      /**
       *
       *
       *
       * @var SET RETURN ELEMT_AS_ARRAY_DOCTYPE_INLINE_14
       *
       *
      **/ 
       return $this->return_inline_element('INLINE', 14, $js, $id, $class, $assoc);
      break;
    default:
    
      # RETURN_DEFAULT_INLINE_HTML_ELEMENT
      $ERROR_MSG  = " ";
      $ERROR_MSG .= " Required _Element 'inLINE' & HTML Element : e.g: _ELEMENT('inLINE','input'); ";
      $ERROR_MSG .= " For Developer support visit github submit issue: ".self::ELEMENT('a','Submit Github Support',self::IssueSubmitAttr());   
      $ERROR_MSG .= " Recomendation: ".self::ELEMENT('a','Read Documentation Click Here',self::DocxSubmitAttr()); 

      return $ERROR_MSG;   
 
  }

 } #END OF SET RETURN ELEMENT

}  

/**
  * NOTE! This library is fully FREE NO WARRANTY (for more info. read license on the top of this page)*  
  * PHPHtml-Optimizer cooked by nielsoffice
  * Developer Support  $FREE
  * Freelancer Support $Free
  * Agency Support     $500 USD Get support Valid for 30 days / 50% will developer recieved from nielsoffice  
  * 
  * @author nielfernandez
  * <nieldigitalsolution@gmail.com>
  * www.nielsoffice.com
  * https://www.facebook.com/nielsofficeofficial
  * 
  **/