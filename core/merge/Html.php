<?php 

 namespace PHPHtml\CodeOptimizer\merge;

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
 *
 * noHTML dynamic static structure _
 * non/WITH CLASS|METHOD|FUNCTION ASSOCIATED  
 *
 * @method html::BREAK(); 
 * @method html::LINE();   
 * @method html::STRING();     
 * @method html::H1();
 * @method html::H3();
 * @method html::H2();
 * @method html::H4();
 * @method html::H5();
 * @method html::H6();
 * @method html::DIV();
 * @method html::P();
 * @method html::BUTTON();
 * @method html::A();
 * @method html::IFRAME();
 * @method html::MAIN();
 * @method html::NAV();
 * @method html::SELECT();
 * @method html::FORM();
 * @method html::PICTURE();
 * @method html::SECTION();
 * @method html::TEXTAREA();
 * @method html::AUDIO();
 * @method html::VIDEO();
 * @method html::ADDRESS();
 * @method html::COLGROUP();
 * @method html::BDI();
 * @method html::BDO();
 * @method html::BLOCKQUOTE();
 * @method html::CAPTION();
 * @method html::LABEL();
 * @method html::DATALIST();
 * @method html::DETAILS();
 * @method html::SUMMARY();
 * @method html::DIALOG();
 * @method html::OPTION();
 * @method html::FIGURE();
 * @method html::FIGCAPTION();
 * @method html::METER();
 * @method html::OBJECT();
 * @method html::OPTGROUP();
 * @method html::OUTPUT();
 * @method html::PROGRESS();
 * @method html::SVG();
 * @method html::TEMPLATE();
 * @method html::TIME();
 * @method html::VAR();
 * @method html::UL();
 * @method html::OL();
 * @method html::LI();
 * @method html::TABLE();
 * @method html::TR();
 * @method html::TD();
 * @method html::TH();
 * @method html::LEGEND();
 * @method html::FIELDSET();
 * @method html::TBODY();
 * @method html::TFOOT();
 * @method html::THEAD();
 * @method html::SPAN();
 * @method html::EM();
 * @method html::B();
 * @method html::I();
 * @method html::SMALL();
 * @method html::MARQUEE();
 * @method html::CENTER();
 * @method html::CODE();
 * @method html::ABBR();
 * @method html::MAP();
 * @method html::CANVAS();
 * @method html::CITE();
 * @method html::DATA();
 * @method html::DL();
 * @method html::DT();
 * @method html::DD();
 * @method html::DFN();
 * @method html::INS();
 * @method html::DEL();
 * @method html::KBD();
 * @method html::MARK();
 * @method html::PRE();
 * @method html::RT();
 * @method html::RP();
 * @method html::S();
 * @method html::SAMP();
 * @method html::STRONG();
 * @method html::SUB();
 * @method html::SUP();
 * @method html::WBR();
 * @method html::Q();
 * @method html::HEAD();
 * @method html::TITLE();
 * @method html::BODY();
 * @method html::noHTML();
 *
 * noHTML dynamic structure 
 * w/ CLASS|METHOD|FUNCTION ASSOCIATED
 *
 * @method html::ELEMENT('H1');
 * @method html::ELEMENT('H2');
 * @method html::ELEMENT('H3');
 * @method html::ELEMENT('H4');
 * @method html::ELEMENT('H5');
 * @method html::ELEMENT('H6');
 * @method html::ELEMENT('H1');
 * @method html::ELEMENT('BUTTON');
 * @method html::ELEMENT('A');
 * @method html::ELEMENT('IFRAME');
 * @method html::ELEMENT('MAIN');
 * @method html::ELEMENT('NAV');
 * @method html::ELEMENT('SELECT');
 * @method html::ELEMENT('FORM');
 * @method html::ELEMENT('PICTURE');
 * @method html::ELEMENT('SECTION');
 * @method html::ELEMENT('TEXTAREA');
 * @method html::ELEMENT('AUDIO');
 * @method html::ELEMENT('VIDEO');
 * @method html::ELEMENT('ADDRESS');
 * @method html::ELEMENT('COLGROUP');
 * @method html::ELEMENT('BDI');
 * @method html::ELEMENT('BDO');
 * @method html::ELEMENT('CAPTION');
 * @method html::ELEMENT('LABEL');
 * @method html::ELEMENT('DATALIST');
 * @method html::ELEMENT('DETAILS');
 * @method html::ELEMENT('SUMMARY');
 * @method html::ELEMENT('DIALOG');
 * @method html::ELEMENT('OPTION');
 * @method html::ELEMENT('FIGURE');
 * @method html::ELEMENT('FIGCAPTION');
 * @method html::ELEMENT('METER');
 * @method html::ELEMENT('OBJECT');
 * @method html::ELEMENT('OPTGROUP');
 * @method html::ELEMENT('OUTPUT');
 * @method html::ELEMENT('PROGRESS');
 * @method html::ELEMENT('SVG');
 * @method html::ELEMENT('TEMPLATE');
 * @method html::ELEMENT('TIME');
 * @method html::ELEMENT('VAR');
 * @method html::ELEMENT('UL');
 * @method html::ELEMENT('OL');
 * @method html::ELEMENT('LI');
 * @method html::ELEMENT('TABLE');
 * @method html::ELEMENT('TR');
 * @method html::ELEMENT('TD');
 * @method html::ELEMENT('TH');
 * @method html::ELEMENT('LEGEND');
 * @method html::ELEMENT('FIELDSET');
 * @method html::ELEMENT('TBODY');
 * @method html::ELEMENT('TFOOT');
 * @method html::ELEMENT('THEAD');
 * @method html::ELEMENT('SPAN');
 * @method html::ELEMENT('EM');
 * @method html::ELEMENT('B');
 * @method html::ELEMENT('I');
 * @method html::ELEMENT('SMALL');
 * @method html::ELEMENT('MARQUEE');
 * @method html::ELEMENT('CENTER');
 * @method html::ELEMENT('CODE');
 * @method html::ELEMENT('ABBR');
 * @method html::ELEMENT('MAP');
 * @method html::ELEMENT('CANVAS');
 * @method html::ELEMENT('CITE');
 * @method html::ELEMENT('DATA');
 * @method html::ELEMENT('DL');
 * @method html::ELEMENT('DT');
 * @method html::ELEMENT('DD');
 * @method html::ELEMENT('INS');
 * @method html::ELEMENT('DEL');
 * @method html::ELEMENT('KBD');
 * @method html::ELEMENT('MARK');
 * @method html::ELEMENT('PRE');
 * @method html::ELEMENT('RT');
 * @method html::ELEMENT('RP');
 * @method html::ELEMENT('S');
 * @method html::ELEMENT('SAMP');
 * @method html::ELEMENT('STRONG');
 * @method html::ELEMENT('SUB');
 * @method html::ELEMENT('SUP');
 * @method html::ELEMENT('WBR');
 * @method html::ELEMENT('Q');
 * @method html::ELEMENT('HEAD');
 * @method html::ELEMENT('TITLE');
 * @method html::ELEMENT('BODY');
 * @method html::ELEMENT('HTML');
 * @method html::ELEMENT('BLOCKQUOTE');
 *
 * noHTML dynamic static structure 
 * non/WITH CLASS|METHOD|FUNCTION ASSOCIATED noHTML Form no x tag
 * 
 * @method html::_ELEMENT('my_input','INPUT');
 * @method html::_ELEMENT('my_track','track');
 * @method html::_ELEMENT('my_circle','circle');
 * @method html::_ELEMENT('my_param','param');
 * @method html::_ELEMENT('my_meta','meta');
 * @method html::_ELEMENT('my_link','link');
 * @method html::_ELEMENT('my_img','img');
 * @method html::_ELEMENT('my_embed','embed');
 * @method html::_ELEMENT('my_option','option');
 * @method html::_ELEMENT('my_col','col');
 * @method html::_ELEMENT('my_base','base');
 * @method html::_ELEMENT('my_aside','aside');
 * @method html::_ELEMENT('my_area','area');
 * @method html::_ELEMENT('my_DOCTYPE','DOCTYPE');
 *  
 * noHTML static structure non CLASS|METHOD|FUNCTION ASSOCIATED
 * noHTML static structure w/ closing tag
 *
 * @method html::_H1();
 * @method html::xH1();
 * @method html::_H2();
 * @method html::xH2();
 * @method html::_H3();
 * @method html::xH3();
 * @method html::_H4();
 * @method html::xH4();
 * @method html::_H5();
 * @method html::xH5();
 * @method html::_H6();
 * @method html::xH6();
 * @method html::_DIV();
 * @method html::xDIV();
 * @method html::_P();
 * @method html::xP();
 * @method html::_BUTTON();
 * @method html::xBUTTON();
 * @method html::_A();
 * @method html::xA();
 * @method html::_IFRAME();
 * @method html::xIFRAME();
 * @method html::_MAIN();
 * @method html::xMAIN();
 * @method html::_NAV();
 * @method html::xNAV();
 * @method html::_SELECT();
 * @method html::xSELECT();
 * @method html::_FORM();
 * @method html::xFORM();
 * @method html::_PICTURE();
 * @method html::xPICTURE();
 * @method html::_SECTION();
 * @method html::xSECTION();
 * @method html::_TEXTAREA();
 * @method html::xTEXTAREA();
 * @method html::_AUDIO();
 * @method html::xAUDIO();
 * @method html::_VIDEO();
 * @method html::xVIDEO();
 * @method html::_ADDRESS();
 * @method html::xADDRESS();
 * @method html::_COLGROUP();
 * @method html::xCOLGROUP();
 * @method html::_BDI();
 * @method html::xBDI();
 * @method html::_BDO();
 * @method html::xBDO();
 * @method html::_BLOCKQUOTE();
 * @method html::xBLOCKQUOTE();
 * @method html::_CAPTION();
 * @method html::xCAPTION();
 * @method html::_LABEL();
 * @method html::xLABEL();
 * @method html::_DATALIST();
 * @method html::xDATALIST();
 * @method html::_DETAILS();
 * @method html::xDETAILS();
 * @method html::_SUMMARY();
 * @method html::xSUMMARY();
 * @method html::_DIALOG();
 * @method html::xDIALOG();
 * @method html::_OPTION();
 * @method html::xOPTION();
 * @method html::_FIGURE();
 * @method html::xFIGURE();
 * @method html::_FIGCAPTION();
 * @method html::xFIGCAPTION();
 * @method html::_METER();
 * @method html::xMETER();
 * @method html::_OBJECT();
 * @method html::xOBJECT();
 * @method html::_OPTGROUP();
 * @method html::xOPTGROUP();
 * @method html::_OUTPUT();
 * @method html::xOUTPUT();
 * @method html::_PROGRESS();
 * @method html::xPROGRESS();
 * @method html::_SVG();
 * @method html::xSVG();
 * @method html::_TEMPLATE();
 * @method html::xTEMPLATE();
 * @method html::_TIME();
 * @method html::xTIME();
 * @method html::_VAR();
 * @method html::xVAR();
 * @method html::_UL();
 * @method html::xUL();
 * @method html::_OL();
 * @method html::xOL();
 * @method html::_LI();
 * @method html::xLI();
 * @method html::_TABLE();
 * @method html::xTABLE();
 * @method html::_TR();
 * @method html::xTR();
 * @method html::_TD();
 * @method html::xTD();
 * @method html::_TH();
 * @method html::xTH();
 * @method html::_LEGEND();
 * @method html::xLEGEND();
 * @method html::_FIELDSET();
 * @method html::xFIELDSET();
 * @method html::_TBODY();
 * @method html::xTBODY();
 * @method html::_TFOOT();
 * @method html::xTFOOT();
 * @method html::_THEAD();
 * @method html::xTHEAD();
 * @method html::_SPAN();
 * @method html::xSPAN();
 * @method html::_EM();
 * @method html::xEM();
 * @method html::_B();
 * @method html::xB();
 * @method html::_I();
 * @method html::xI();
 * @method html::_SMALL();
 * @method html::xSMALL();
 * @method html::_STRIKE();
 * @method html::xSTRIKE();
 * @method html::_MARQUEE();
 * @method html::xMARQUEE();
 * @method html::_CENTER();
 * @method html::xCENTER();
 * @method html::_ABBR();
 * @method html::xABBR();
 * @method html::_MAP();
 * @method html::xMAP();
 * @method html::_CANVAS();
 * @method html::xCANVAS();
 * @method html::_CITE();
 * @method html::xCITE();
 * @method html::_DATA();
 * @method html::xDATA();
 * @method html::_DL();
 * @method html::xDL();
 * @method html::_DT();
 * @method html::xDT();
 * @method html::_DD();
 * @method html::xDD();
 * @method html::_DFN();
 * @method html::xDFN();
 * @method html::_INS();
 * @method html::xINS();
 * @method html::_DEL();
 * @method html::xDEL();
 * @method html::_KBD();
 * @method html::xKBD();
 * @method html::_MARK();
 * @method html::xMARK();
 * @method html::_PRE();
 * @method html::xPRE();
 * @method html::_RT();
 * @method html::xRT();
 * @method html::_RP();
 * @method html::xRP();
 * @method html::_S();
 * @method html::xS();
 * @method html::_SAMP();
 * @method html::xSAMP();
 * @method html::_STRONG();
 * @method html::xSTRONG();
 * @method html::_SUB();
 * @method html::xSUB();
 * @method html::_SUP();
 * @method html::xSUP();
 * @method html::_WBR();
 * @method html::xWBR();
 * @method html::_Q();
 * @method html::xQ();
 * @method html::_HEAD();
 * @method html::xHEAD();
 * @method html::_TITLE();
 * @method html::xTITLE();
 * @method html::_BODY();``
 * @method html::xBODY();
 * @method html::_noHTML();
 * @method html::xnoHTML();
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
static private $sq;

/**
  * @var @property Private 
  * defined double quotes
  * minify optimized html attribute 
  **/
static private $dq;

/**
  * @var @property Private 
  * defined less than sign
  * minify optimized html attribute 
  **/
static private $lt; 

/**
  * @var @property Private 
  * defined greather than sign 
  * minify optimized html attribute 
  **/
static private $gt;

/**
  * @var @property Private 
  * defined equal sign
  * minify optimized html attribute 
  **/
static private $es;

/**
  * @var @property Private 
  * defined html end sign
  * minify optimized html attribute 
  **/
static private $ends;

/**
  * @var @property Private 
  * defined comment begin sign
  * minify optimized html attribute 
  **/
static private $comBEGIN;

/**
  * @var @property Private 
  * defined comment end sign
  * minify optimized html attribute 
  **/
static private $comEND;

/**
  * @var @property Private 
  * defined empty space
  * minify optimized html attribute 
  **/
static private $sHTML;

/**
  * @var @property Private 
  * defined exclamation mark sign
  * minify optimized html attribute 
  **/
static private $exSymbol;

/**
  * @var @property Private 
  * defined execute string no tag
  * minify optimized html attribute 
  **/
static private $str;

/**
  * @var @property CONST | FUNC_ASSOC  
  * defined Assigned associsated dstring within the function/Class/Method
  * minify optimized html attribute 
  **/
 CONST FUNC_ASSOC       = 'FUNC_ASSOC';

/**
  * @var @property @static CONST | CLASS_ASSOC  
  * defined Assigned associsated dstring within the function/Class/Method
  * minify optimized html attribute 
  **/
 CONST CLASS_ASSOC      = 'CLASS_ASSOC';
 
/**
  * @var @property @static CONST | METHOD_ASSOC  
  * defined Assigned associsated dstring within the function/Class/Method
  * minify optimized html attribute 
  **/
 CONST METHOD_ASSOC     = 'METHOD_ASSOC';

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
static protected $htm    = ['h1','h2','h3','h4','h5','h6','div','p','button','a','iframe','main','nav','select','form','picture','section','textarea'];
/**
  * @var 
  * @property @SECONDARY_VARIABLE 
  * defined arrays of data html 
  **/
static protected $htm_s  = ['audio','video','address','colgroup','bdi','bdo','blockquote','caption','label','datalist','details','summary','dialog','option'];

/**
  * @var 
  * @property @SUPPORT_VARIABLE 
  * defined arrays of data html 
  **/
static protected $htm_ss = ['figure','figcaption','meter','object','optgroup','output','progress','svg','template','time','var'];

/**
  * @var 
  * @property @LIST_VARIABLE 
  * defined arrays of data html 
  **/
static protected $htm_t  = ['ul','ol','li','table','tr','td','th','legend','fieldset','tbody','tfoot','thead']; 

/**
  * @var 
  * @property @FORMAT_VARIABLE 
  * defined arrays of data html 
  **/
static protected $htm_f  = ['span','em','b','i','small','strike','marquee','center','code','abbr','map','canvas','cite','data','dl','dt','dd','dfn','ins'];

/**
  * @var 
  * @property @FORMAT_VARIABLE 
  * defined arrays of data html 
  **/
static protected $htm_fc = ['del','kbd','mark','pre','rt','rp','ruby','s','samp','strong','sub','sup','wbr','q'];

/**
  * @var 
  * @property @INLINE_VARIABLE  (NO x HTML TAG)
  * defined arrays of data html 
  **/
static protected $htm_L  = ['source','track','circle','param','input','meta','link','img','embed','option','col','base','aside','area','DOCTYPE html'];

/**
  * @var 
  * @property @STRUCTURE_VARIABLE  (NO x HTML TAG)
  * defined arrays of data html 
  S**/
static protected $htm_st = ['head','title','body','html'];

/**
  * @var 
  * @property @BREAKS_VARIABLE  (NO x HTML TAG)
  * defined arrays of data html 
  **/
static protected $hBreak = ["\n","br","hr"];

/**
  * @var 
  * @property @html_extend  (register_new_html_syntax)
  * defined arrays of data html 
  **/
static protected $hextend = [];

/**
  *
  * @method public function add breaktag html as noHTML
  * Defined as break tag no string quotes 
  * Neat and clean noHTML
  *
  **/
  static public function BREAK($assoc=null) { return self::_isTrueBREAK_assoc($assoc); }

/**
  *
  * @method public function add line html as noHTML
  * Defined as horizontal line tag no string quotes 
  * Neat and clean noHTML
  *
  **/
  static public function LINE($assoc=null) { return self::_isTrueLine_assoc($assoc); }

/**
  *
  * @method public function add add Space between text/String
  * Defined as horizontal line tag no string quotes 
  * Neat and clean noHTML
  *
  **/
  static public function SPACE($assoc=null) { return self::_tagSPACER(); }

/**
  *
  * @method public function add line html as noHTML
  * Defined as print a "String" && execute function with another "" (string) line tag no string quotes
  * echo x"x"x | html::_PERFORM(function()); 
  * Neat and clean noHTML
  *
  **/
  static public function _PERFORM($str=null, $assoc=null) { return self::_isTrue_SET_STRING($str, $assoc); }

/**
  *
  * @method public function add line html as noHTML
  * Defined as print a "String" && execute function with another "" (string) line tag no string quotes
  * echo x"x"x | html::_exe(function()); 
  * Neat and clean noHTML
  *
  **/
   static public function _MERGE($func_merge) { return self::_isTrue_SET_merge($func_merge); }

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
  * @method public function SetElementHeaderAttr noHTML
  * @static Method Defined Element Header MEta attributes HTML  
  * Neat and clean noHTML
  * Html::_noHTML(SetElemAttr(['lang'],['en']));
  * Html::_HEAD();
  * Html::_ELEMENT('GPS-Site','meta', SetElemAttr(['charset'],['utf-8']));
  * Html::_ELEMENT('http-equiv','meta', SetElemAttr(['http-equiv','content'],['X-UA-Compatible','IE=edge']));
  *
  **/ 
  static public function SetElemAttr($array_set_1,$array_set_2) { return self::Set_Element_Attr($array_set_1,$array_set_2); }

/**
  *
  * @method public function __magicELEMENT noHTML
  * @static Method Defined single call through param html element no closing tag  
  * Neat and clean noHTML
  * $elem  = 'HTML ELEMENT' ex. p, ul, li etc..
  * $label = 'MAGIC' output: <p> | _ any tag elements html
  * $label = 'MAGIC_END' output: </p> | x any tag elements html
  *
  **/
  static public function __magicELEMENT($elem, $label=null, $js=[], $id=null, $class=null) {
 
 return  self::_setReturnELEMENT(self::_setELEMENTS($elem), $value=null, $js, $id, $class, $label); 

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
  static public function __magicELSE($condition=null, $if_result=null, $else_result=null, $assoc=null) { 

  return self::return_method_concat_else( $condition, $if_result, $else_result, $assoc); 

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
  static public function __magicIF($condition=null, $if_result=null, $assoc=null) { 

  return self::return_method_concat_else($condition,$if_result,NULL,$assoc); 

}

/**
  *
  * @method public function _ELEMENT noHTML
  * @static Method Defined single html element no closing tag  
  * Neat and clean noHTML
  *
  **/
  static public function _ELEMENT($inline="INLINE", $elem, $js=[], $id=null, $class=null, $assoc=null) { 
   
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
        echo self::_setReturnINLINELEMENT(self::_setINLINELEMENTS($elem),$js, $id, $class, NULL); 
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
          return self::_setReturnINLINELEMENT(self::_setINLINELEMENTS($elem),$js, $id, $class, $assoc);      
       }
  }
}

/**
  *
  * @method public function add line html as noHTML
  * Defined as print a "String" line tag no string quotes 
  * Neat and clean noHTML
  *
  **/
  static public function STRING($str=null, $assoc=null) { return self::_isTrue_SET_STRING($str, $assoc); }

/**
  *
  * @method public function ELEMENT noHTML
  * @static Method Defined single call through param html element no closing tag  
  * Neat and clean noHTML
  *
  **/
  static public function ELEMENT($elem, $value=null, $js=[], $id=null, $class=null, $label=null) {
 
 return  self::_setReturnELEMENT(self::_setELEMENTS($elem), $value, $js, $id, $class, $label); 

} 

/**
  *
  * @method public function noHTML
  * @static Method Defined H1 _ AND x TAG noHTML  
  * RETURN HEADING _ noHTML TAG
  *
  **/
  static public function _H1($js=[], $id=null, $class=null) { echo self::get__HTML('PRIMARY', 0, $js, $id, $class); }
// CLOSING_METHOD_noHTML_HEADING_TAG 
  static public function xH1($label = NULL) { echo self::get_xHTML('PRIMARY', 0, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined H2 _ AND x TAG noHTML  
  * RETURN HEADING _ noHTML TAG
  *
  **/
  static public function _H2($js=[], $id=null, $class=null) { echo self::get__HTML('PRIMARY', 1, $js, $id, $class); }
// CLOSING_METHOD_noHTML_HEADING_TAG 
  static public function xH2($label = NULL) { echo self::get_xHTML('PRIMARY', 1, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined H3 _ AND x TAG noHTML  
  * RETURN HEADING _ noHTML TAG
  *
  **/
  static public function _H3($js=[], $id=null, $class=null) { echo self::get__HTML('PRIMARY', 2, $js, $id, $class); }
// CLOSING_METHOD_noHTML_HEADING_TAG 
  static public function xH3($label = NULL) { echo self::get_xHTML('PRIMARY', 2, $label);  }

/**
  *
  * @method public function noHTML
  * @static Method Defined H4 _ AND x TAG noHTML  
  * RETURN HEADING _ noHTML TAG
  *
  **/
  static public function _H4($js=[], $id=null, $class=null) { echo self::get__HTML('PRIMARY', 3, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_HEADING_TAG 
  static public function xH4($label = NULL) { echo self::get_xHTML('PRIMARY', 3, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined H5 _ AND x TAG noHTML  
  * RETURN HEADING _ noHTML TAG
  *
  **/
  static public function _H5($js=[], $id=null, $class=null) { echo self::get__HTML('PRIMARY', 4, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_HEADING_TAG 
  static public function xH5($label = NULL) { echo self::get_xHTML('PRIMARY', 4, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined H6 _ AND x TAG noHTML  
  * RETURN HEADING _ noHTML TAG
  *
  **/
  static public function _H6($js=[], $id=null, $class=null) { echo self::get__HTML('PRIMARY', 5, $js, $id, $class); }
// CLOSING_METHOD_noHTML_HEADING_TAG 
  static public function xH6($label = NULL) {  echo self::get_xHTML('PRIMARY', 5, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined DIV _ AND x TAG noHTML  
  * RETURN NODE DIV _ noHTML TAG
  *
  **/
  static public function _DIV($js=[], $id=null, $class=null) { echo self::get__HTML('PRIMARY', 6, $js, $id, $class); }
// CLOSING_METHOD_noHTML_TAG 
  static public function xDIV($label = NULL) { echo self::get_xHTML('PRIMARY', 6, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined PARA _ AND x TAG noHTML  
  * RETURN NODE PARAGRAPH _ noHTML TAG
  *
  **/
  static public function _P($js=[], $id=null, $class=null) { echo self::get__HTML('PRIMARY', 7, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  static public function xP($label = NULL) { echo self::get_xHTML('PRIMARY', 7, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined BUTTON _ AND x TAG noHTML  
  * RETURN NODE BUTTON _ noHTML TAG
  *
  **/
  static public function _BUTTON($js=[], $id=null, $class=null) { echo self::get__HTML('PRIMARY', 8, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  static public function xBUTTON($label = NULL) { echo self::get_xHTML('PRIMARY', 8, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined A HYPERLINK _ AND x TAG noHTML  
  * RETURN NODE HYPERLINK _ noHTML TAG
  *
  **/
  static public function _A($js=[], $id=null, $class=null) { echo self::get__HTML('PRIMARY', 9, $js, $id, $class); }
// CLOSING_METHOD_noHTML_TAG 
  static public function xA($label = NULL) { echo self::get_xHTML('PRIMARY', 9, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined IFRAME _ AND x TAG noHTML  
  * RETURN NODE IFRAME _ noHTML TAG
  *
  **/
  static public function _IFRAME($js=[], $id=null, $class=null) { echo self::get__HTML('PRIMARY', 10, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  static public function xIFRAME($label = NULL) { echo self::get_xHTML('PRIMARY', 10, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined MAIN _ AND x TAG noHTML  
  * RETURN NODE MAIN _ noHTML TAG
  *
  **/
  static public function _MAIN($js=[], $id=null, $class=null) { echo self::get__HTML('PRIMARY', 11, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  static public function xMAIN($label = NULL) { echo self::get_xHTML('PRIMARY', 11, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined NAV _ AND x TAG noHTML  
  * RETURN NODE NAV _ noHTML TAG
  *
  **/
  static public function _NAV($js=[], $id=null, $class=null) { echo self::get__HTML('PRIMARY', 12, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  static public function xNAV($label = NULL) { echo self::get_xHTML('PRIMARY', 12, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined SELECT _ AND x TAG noHTML  
  * RETURN NODE SELECT _ noHTML TAG
  *
  **/
  static public function _SELECT($js=[], $id=null, $class=null) { echo self::get__HTML('PRIMARY', 13, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG 
  static public function xSELECT($label = NULL) { echo self::get_xHTML('PRIMARY', 13, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined FORM _ AND x TAG noHTML  
  * RETURN NODE FORM _ noHTML TAG
  *
  **/
  static public function _FORM($js=[], $id=null, $class=null) { echo self::get__HTML('PRIMARY', 14, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  static public function xFORM($label = NULL) { echo self::get_xHTML('PRIMARY', 14, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined PICTURE _ AND x TAG noHTML  
  * RETURN NODE PICTURE _ noHTML TAG
  *
  **/
  static public function _PICTURE($js=[], $id=null, $class=null) { echo self::get__HTML('PRIMARY', 15, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  static public function xPICTURE($label = NULL) { echo self::get_xHTML('PRIMARY', 15, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined SECTION _ AND x TAG noHTML  
  * RETURN NODE SECTION _ noHTML TAG
  *
  **/
  static public function _SECTION($js=[], $id=null, $class=null) { echo self::get__HTML('PRIMARY', 16, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG 
  static public function xSECTION($label = NULL) { echo self::get_xHTML('PRIMARY', 16, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined TEXTAREA _ AND x TAG noHTML  
  * RETURN NODE TEXTAREA _ noHTML TAG
  *
  **/
  static public function _TEXTAREA($js=[], $id=null, $class=null) { echo self::get__HTML('PRIMARY', 17, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  static public function xTEXTAREA($label = NULL) { echo self::get_xHTML('PRIMARY', 17, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined AUDIO _ AND x TAG noHTML  
  * RETURN NODE AUDIO _ noHTML TAG
  *
  **/
  static public function _AUDIO($js=[], $id=null, $class=null) { echo self::get__HTML('SECONDARY', 0, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  static public function xAUDIO($label = NULL) { echo self::get_xHTML('SECONDARY', 0, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined VIDEO _ AND x TAG noHTML  
  * RETURN NODE VIDEO _ noHTML TAG
  *
  **/
  static public function _VIDEO($js=[], $id=null, $class=null) { echo self::get__HTML('SECONDARY', 1, $js, $id, $class); }
// CLOSING_METHOD_noHTML_TAG 
  static public function xVIDEO($label = NULL) { echo self::get_xHTML('SECONDARY', 1, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined ADDRESS _ AND x TAG noHTML  
  * RETURN NODE ADDRESS _ noHTML TAG
  *
  **/
  static public function _ADDRESS($js=[], $id=null, $class=null) { echo self::get__HTML('SECONDARY', 2, $js, $id, $class); }
// CLOSING_METHOD_noHTML_TAG 
  static public function xADDRESS($label = NULL) { echo self::get_xHTML('SECONDARY', 2, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined COLGROUP _ AND x TAG noHTML  
  * RETURN NODE COLGROUP _ noHTML TAG
  *
  **/
  static public function _COLGROUP($js=[], $id=null, $class=null) { echo self::get__HTML('SECONDARY', 3, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  static public function xCOLGROUP($label = NULL) { echo self::get_xHTML('SECONDARY', 3, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined BDI _ AND x TAG noHTML  
  * RETURN NODE BDI _ noHTML TAG
  *
  **/
  static public function _BDI($js=[], $id=null, $class=null) { echo self::get__HTML('SECONDARY', 4, $js, $id, $class); }
// CLOSING_METHOD_noHTML_TAG 
  static public function xBDI($label = NULL) { echo self::get_xHTML('SECONDARY', 4, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined BDO _ AND x TAG noHTML  
  * RETURN NODE BDO _ noHTML TAG
  *
  **/
  static public function _BDO($js=[], $id=null, $class=null) { echo self::get__HTML('SECONDARY', 5, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG 
  static public function xBDO($label = NULL) { echo self::get_xHTML('SECONDARY', 5, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined BLOCKQUOTE _ AND x TAG noHTML  
  * RETURN NODE BLOCKQUOTE _ noHTML TAG
  *
  **/
  static public function _BLOCKQUOTE($js=[], $id=null, $class=null) { echo self::get__HTML('SECONDARY', 6, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  static public function xBLOCKQUOTE($label = NULL) { echo self::get_xHTML('SECONDARY', 6, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined CAPTION _ AND x TAG noHTML  
  * RETURN NODE CAPTION _ noHTML TAG
  *
  **/
  static public function _CAPTION($js=[], $id=null, $class=null) { echo self::get__HTML('SECONDARY', 7, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  static public function xCAPTION($label = NULL) { echo self::get_xHTML('SECONDARY', 7, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined LABEL _ AND x TAG noHTML  
  * RETURN NODE LABEL _ noHTML TAG
  *
  **/
  static public function _LABEL($js=[], $id=null, $class=null) { echo self::get__HTML('SECONDARY', 8, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  static public function xLABEL($label = NULL) { echo self::get_xHTML('SECONDARY', 8, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined DATALIST _ AND x TAG noHTML  
  * RETURN NODE DATALIST _ noHTML TAG
  *
  **/
  static public function _DATALIST($js=[], $id=null, $class=null) { echo self::get__HTML('SECONDARY', 9, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  static public function xDATALIST($label = NULL) { echo self::get_xHTML('SECONDARY', 9, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined DETAILS _ AND x TAG noHTML  
  * RETURN NODE DETAILS _ noHTML TAG
  *
  **/
  static public function _DETAILS($js=[], $id=null, $class=null) { echo self::get__HTML('SECONDARY', 10, $js, $id, $class); }
// CLOSING_METHOD_noHTML_TAG 
  static public function xDETAILS($label = NULL) { echo self::get_xHTML('SECONDARY', 10, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined SUMMARY _ AND x TAG noHTML  
  * RETURN NODE SUMMARY _ noHTML TAG
  *
  **/
  static public function _SUMMARY($js=[], $id=null, $class=null) { echo self::get__HTML('SECONDARY', 11, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  static public function xSUMMARY($label = NULL) { echo self::get_xHTML('SECONDARY', 11, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined DIALOG _ AND x TAG noHTML  
  * RETURN NODE DIALOG _ noHTML TAG
  *
  **/
  static public function _DIALOG($js=[], $id=null, $class=null) { echo self::get__HTML('SECONDARY', 12, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  static public function xDIALOG($label = NULL) { echo self::get_xHTML('SECONDARY', 12, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined OPTION _ AND x TAG noHTML  
  * RETURN NODE OPTION _ noHTML TAG
  *
  **/
  static public function _OPTION($js=[], $id=null, $class=null) { echo self::get__HTML('SECONDARY', 12, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG 
  static public function xOPTION($label = NULL) { echo self::get_xHTML('SECONDARY', 12, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined FIGURE _ AND x TAG noHTML  
  * RETURN NODE FIGURE _ noHTML TAG
  *
  **/
  static public function _FIGURE($js=[], $id=null, $class=null) { echo self::get__HTML('SUPPORT', 0, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG
  static public function xFIGURE($label = NULL) { echo self::get_xHTML('SUPPORT', 0, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined FIGCAPTION _ AND x TAG noHTML  
  * RETURN NODE FIGCAPTION _ noHTML TAG
  *
  **/
  static public function _FIGCAPTION($js=[], $id=null, $class=null) { echo self::get__HTML('SUPPORT', 1, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xFIGCAPTION($label = NULL) { echo self::get_xHTML('SUPPORT', 1, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined METER _ AND x TAG noHTML  
  * RETURN NODE METER _ noHTML TAG
  *
  **/
  static public function _METER($js=[], $id=null, $class=null) { echo self::get__HTML('SUPPORT', 2, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xMETER($label = NULL) { echo self::get_xHTML('SUPPORT', 2, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined OBJECT _ AND x TAG noHTML  
  * RETURN NODE OBJECT _ noHTML TAG
  *
  **/
  static public function _OBJECT($js=[], $id=null, $class=null) { echo self::get__HTML('SUPPORT', 3, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xOBJECT($label = NULL) { echo self::get_xHTML('SUPPORT', 3, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined OPTGROUP _ AND x TAG noHTML  
  * RETURN NODE OPTGROUP _ noHTML TAG
  *
  **/
  static public function _OPTGROUP($js=[], $id=null, $class=null) { echo self::get__HTML('SUPPORT', 4, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG
  static public function xOPTGROUP($label = NULL) { echo self::get_xHTML('SUPPORT', 4, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined OUTPUT _ AND x TAG noHTML  
  * RETURN NODE OUTPUT _ noHTML TAG
  *
  **/
  static public function _OUTPUT($js=[], $id=null, $class=null) { echo self::get__HTML('SUPPORT', 5, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xOUTPUT($label = NULL) { echo self::get_xHTML('SUPPORT', 5, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined PROGRESS _ AND x TAG noHTML  
  * RETURN NODE PROGRESS _ noHTML TAG
  *
  **/
  static public function _PROGRESS($js=[], $id=null, $class=null) { echo self::get__HTML('SUPPORT', 6, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG
  static public function xPROGRESS($label = NULL) { echo self::get_xHTML('SUPPORT', 6, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined SVG _ AND x TAG noHTML  
  * RETURN NODE SVG _ noHTML TAG
  *
  **/
  static public function _SVG($js=[], $id=null, $class=null) { echo self::get__HTML('SUPPORT', 7, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xSVG($label = NULL) { echo self::get_xHTML('SUPPORT', 7, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined TEMPLATE _ AND x TAG noHTML  
  * RETURN NODE TEMPLATE _ noHTML TAG
  *
  **/
  static public function _TEMPLATE($js=[], $id=null, $class=null) { echo self::get__HTML('SUPPORT', 8, $js, $id, $class); }
// CLOSING_METHOD_noHTML_TAG
  static public function xTEMPLATE($label = NULL) { echo self::get_xHTML('SUPPORT', 8, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined TIME _ AND x TAG noHTML  
  * RETURN NODE TIME _ noHTML TAG
  *
  **/
  static public function _TIME($js=[], $id=null, $class=null) { echo self::get__HTML('SUPPORT', 9, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xTIME($label = NULL) { echo self::get_xHTML('SUPPORT', 9, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined VAR _ AND x TAG noHTML  
  * RETURN NODE VAR _ noHTML TAG
  *
  **/
  static public function _VAR($js=[], $id=null, $class=null) { echo self::get__HTML('SUPPORT', 10, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xVAR($label = NULL) { echo self::get_xHTML('SUPPORT', 10, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined UL _ AND x TAG noHTML  
  * RETURN NODE UL _ noHTML TAG
  *
  **/
  static public function _UL($js=[], $id=null, $class=null) { echo self::get__HTML('LIST', 0, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG
  static public function xUL($label = NULL) { echo self::get_xHTML('LIST', 0, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined OL _ AND x TAG noHTML  
  * RETURN NODE OL _ noHTML TAG
  *
  **/
  static public function _OL($js=[], $id=null, $class=null) { echo self::get__HTML('LIST', 1, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xOL($label = NULL) { echo self::get_xHTML('LIST', 1, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined LI _ AND x TAG noHTML  
  * RETURN NODE LI _ noHTML TAG
  *
  **/
  static public function _LI($js=[], $id=null, $class=null) { echo self::get__HTML('LIST', 2, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  static public function xLI($label = NULL) { echo self::get_xHTML('LIST', 2, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined TABLE _ AND x TAG noHTML  
  * RETURN NODE TABLE _ noHTML TAG
  *
  **/
  static public function _TABLE($js=[], $id=null, $class=null) { echo self::get__HTML('LIST', 3, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  static public function xTABLE($label = NULL) { echo self::get_xHTML('LIST', 3, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined TR _ AND x TAG noHTML  
  * RETURN NODE TR _ noHTML TAG
  *
  **/
  static public function _TR($js=[], $id=null, $class=null) { echo self::get__HTML('LIST', 4, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xTR($label = NULL) { echo self::get_xHTML('LIST', 4, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined TD _ AND x TAG noHTML  
  * RETURN NODE TD _ noHTML TAG
  *
  **/
  static public function _TD($js=[], $id=null, $class=null) { echo self::get__HTML('LIST', 5, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xTD($label = NULL) { echo self::get_xHTML('LIST', 5, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined TH _ AND x TAG noHTML  
  * RETURN NODE TH _ noHTML TAG
  *
  **/
  static public function _TH($js=[], $id=null, $class=null) { echo self::get__HTML('LIST', 6, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xTH($label = NULL) { echo self::get_xHTML('LIST', 6, $label);  }

/**
  *
  * @method public function noHTML
  * @static Method Defined LEGEND _ AND x TAG noHTML  
  * RETURN NODE LEGEND _ noHTML TAG
  *
  **/
  static public function _LEGEND($js=[], $id=null, $class=null) { echo self::get__HTML('LIST', 7, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xLEGEND($label = NULL) { echo self::get_xHTML('LIST', 7, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined FIELDSET _ AND x TAG noHTML  
  * RETURN NODE FIELDSET _ noHTML TAG
  *
  **/
  static public function _FIELDSET($js=[], $id=null, $class=null) { echo self::get__HTML('LIST', 8, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xFIELDSET($label = NULL) { echo self::get_xHTML('LIST', 8, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined TBODY _ AND x TAG noHTML  
  * RETURN NODE TBODY _ noHTML TAG
  *
  **/
  static public function _TBODY($js=[], $id=null, $class=null) { echo self::get__HTML('LIST', 9, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  static public function xTBODY($label = NULL) { echo self::get_xHTML('LIST', 9, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined TFOOT _ AND x TAG noHTML  
  * RETURN NODE TFOOT _ noHTML TAG
  *
  **/
  static public function _TFOOT($js=[], $id=null, $class=null) { echo self::get__HTML('LIST', 10, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  static public function xTFOOT($label = NULL) { echo self::get_xHTML('LIST', 10, $label);  }

/**
  *
  * @method public function noHTML
  * @static Method Defined THEAD _ AND x TAG noHTML  
  * RETURN NODE THEAD _ noHTML TAG
  *
  **/
  static public function _THEAD($js=[], $id=null, $class=null) { echo self::get__HTML('LIST', 11, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xTHEAD($label = NULL) { echo self::get_xHTML('LIST', 11, $label);  }

/**
  *
  * @method public function noHTML
  * @static Method Defined SPAN _ AND x TAG noHTML  
  * RETURN NODE SPAN _ noHTML TAG
  *
  **/
  static public function _SPAN($js=[], $id=null, $class=null) { echo self::get__HTML('FORMAT', 0, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  static public function xSPAN($label = NULL) { echo self::get_xHTML('FORMAT', 0, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined EM _ AND x TAG noHTML  
  * RETURN NODE EM _ noHTML TAG
  *
  **/
  static public function _EM($js=[], $id=null, $class=null) { echo self::get__HTML('FORMAT', 1, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  static public function xEM($label = NULL) { echo self::get_xHTML('FORMAT', 1, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined B _ AND x TAG noHTML  
  * RETURN NODE B _ noHTML TAG
  *
  **/
  static public function _B($js=[], $id=null, $class=null) { echo self::get__HTML('FORMAT', 2, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xB($label = NULL) { echo self::get_xHTML('FORMAT', 2, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined I _ AND x TAG noHTML  
  * RETURN NODE I _ noHTML TAG
  *
  **/
  static public function _I($js=[], $id=null, $class=null) { echo self::get__HTML('FORMAT', 3, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xI($label = NULL) { echo self::get_xHTML('FORMAT', 3, $label);  }

/**
  *
  * @method public function noHTML
  * @static Method Defined SMALL _ AND x TAG noHTML  
  * RETURN NODE SMALL _ noHTML TAG
  *
  **/
  static public function _SMALL($js=[], $id=null, $class=null) { echo self::get__HTML('FORMAT', 4, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xSMALL($label = NULL) { echo self::get_xHTML('FORMAT', 4, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined STRIKE _ AND x TAG noHTML  
  * RETURN NODE STRIKE _ noHTML TAG
  *
  **/
  static public function _STRIKE($js=[], $id=null, $class=null) { echo self::get__HTML('FORMAT', 5, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xSTRIKE($label = NULL) { echo self::get_xHTML('FORMAT', 5, $label);  }

/**
  *
  * @method public function noHTML
  * @static Method Defined MARQUEE _ AND x TAG noHTML  
  * RETURN NODE MARQUEE _ noHTML TAG
  *
  **/
  static public function _MARQUEE($js=[], $id=null, $class=null) { echo self::get__HTML('FORMAT', 6, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  static public function xMARQUEE($label = NULL) { echo self::get_xHTML('FORMAT', 6, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined CENTER _ AND x TAG noHTML  
  * RETURN NODE CENTER _ noHTML TAG
  *
  **/
  static public function _CENTER($js=[], $id=null, $class=null) { echo self::get__HTML('FORMAT', 7, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xCENTER($label = NULL) { echo self::get_xHTML('FORMAT', 7, $label);  }

/**
  *
  * @method public function noHTML
  * @static Method Defined CODE _ AND x TAG noHTML  
  * RETURN NODE CODE _ noHTML TAG
  *
  **/
  static public function _CODE($js=[], $id=null, $class=null) { echo self::get__HTML('FORMAT', 8, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xCODE($label = NULL) { echo self::get_xHTML('FORMAT', 8, $label);  }

/**
  *
  * @method public function noHTML
  * @static Method Defined ABBR _ AND x TAG noHTML  
  * RETURN NODE ABBR _ noHTML TAG
  *
  **/
  static public function _ABBR($js=[], $id=null, $class=null) { echo self::get__HTML('FORMAT', 9, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xABBR($label = NULL) { echo self::get_xHTML('FORMAT', 9, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined MAP _ AND x TAG noHTML  
  * RETURN NODE MAP _ noHTML TAG
  *
  **/
  static public function _MAP($js=[], $id=null, $class=null) { echo self::get__HTML('FORMAT', 10, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xMAP($label = NULL) { echo self::get_xHTML('FORMAT', 10, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined CANVAS _ AND x TAG noHTML  
  * RETURN NODE CANVAS _ noHTML TAG
  *
  **/
  static public function _CANVAS($js=[], $id=null, $class=null) { echo self::get__HTML('FORMAT', 11, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  static public function xCANVAS($label = NULL) { echo self::get_xHTML('FORMAT', 11, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined CITE _ AND x TAG noHTML  
  * RETURN NODE CITE _ noHTML TAG
  *
  **/
  static public function _CITE($js=[], $id=null, $class=null) { echo self::get__HTML('FORMAT', 12, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xCITE($label = NULL) { echo self::get_xHTML('FORMAT', 12, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined DATA _ AND x TAG noHTML  
  * RETURN NODE DATA _ noHTML TAG
  *
  **/
  static public function _DATA($js=[], $id=null, $class=null) { echo self::get__HTML('FORMAT', 13, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG
  static public function xDATA($label = NULL) { echo self::get_xHTML('FORMAT', 13, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined DL _ AND x TAG noHTML  
  * RETURN NODE DL _ noHTML TAG
  *
  **/
  static public function _DL($js=[], $id=null, $class=null) { echo self::get__HTML('FORMAT', 14, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xDL($label = NULL) { echo self::get_xHTML('FORMAT', 14, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined DT _ AND x TAG noHTML  
  * RETURN NODE DT _ noHTML TAG
  *
  **/
  static public function _DT($js=[], $id=null, $class=null) { echo self::get__HTML('FORMAT', 15, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xDT($label = NULL) { echo self::get_xHTML('FORMAT', 15, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined DD _ AND x TAG noHTML  
  * RETURN NODE DD _ noHTML TAG
  *
  **/
  static public function _DD($js=[], $id=null, $class=null) { echo self::get__HTML('FORMAT', 16, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  static public function xDD($label = NULL) { echo self::get_xHTML('FORMAT', 16, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined DFN _ AND x TAG noHTML  
  * RETURN NODE DFN _ noHTML TAG
  *
  **/
  static public function _DFN($js=[], $id=null, $class=null) { echo self::get__HTML('FORMAT', 17, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xDFN($label = NULL) { echo self::get_xHTML('FORMAT', 17, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined INS _ AND x TAG noHTML  
  * RETURN NODE INS _ noHTML TAG
  *
  **/
  static public function _INS($js=[], $id=null, $class=null) { echo self::get__HTML('FORMAT', 18, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  static public function xINS($label = NULL) { echo self::get_xHTML('FORMAT', 18, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined DEL _ AND x TAG noHTML  
  * RETURN NODE DEL _ noHTML TAG
  *
  **/
  static public function _DEL($js=[], $id=null, $class=null) { echo self::get__HTML('FORMATC', 0, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  static public function xDEL($label = NULL) { echo self::get_xHTML('FORMATC', 0, $label);  }

/**
  *
  * @method public function noHTML
  * @static Method Defined KBD _ AND x TAG noHTML  
  * RETURN NODE KBD _ noHTML TAG
  *
  **/
  static public function _KBD($js=[], $id=null, $class=null) { echo self::get__HTML('FORMATC', 1, $js, $id, $class);  }
// CLOSING_METHOD_noHTML_TAG
  static public function xKBD($label = NULL) { echo self::get_xHTML('FORMATC', 1, $label);  }

/**
  *
  * @method public function noHTML
  * @static Method Defined MARK _ AND x TAG noHTML  
  * RETURN NODE MARK _ noHTML TAG
  *
  **/
  static public function _MARK($js=[], $id=null, $class=null) { echo self::get__HTML('FORMATC', 2, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xMARK($label = NULL) { echo self::get_xHTML('FORMATC', 2, $label);  }

/**
  *
  * @method public function noHTML
  * @static Method Defined PRE _ AND x TAG noHTML  
  * RETURN NODE PRE _ noHTML TAG
  *
  **/
  static public function _PRE($js=[], $id=null, $class=null) { echo self::get__HTML('FORMATC', 3, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  static public function xPRE($label = NULL) { echo self::get_xHTML('FORMATC', 3, $label);  }

/**
  *
  * @method public function noHTML
  * @static Method Defined RT _ AND x TAG noHTML  
  * RETURN NODE RT _ noHTML TAG
  *
  **/
  static public function _RT($js=[], $id=null, $class=null) { echo self::get__HTML('FORMATC', 4, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xRT($label = NULL) { echo self::get_xHTML('FORMATC', 4, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined RP _ AND x TAG noHTML  
  * RETURN NODE RP _ noHTML TAG
  *
  **/
  static public function _RP($js=[], $id=null, $class=null) { echo self::get__HTML('FORMATC', 5, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xRP($label = NULL) { echo self::get_xHTML('FORMATC', 5, $label);  }

/**
  *
  * @method public function noHTML
  * @static Method Defined RUBY _ AND x TAG noHTML  
  * RETURN NODE RUBY _ noHTML TAG
  *
  **/
  static public function _RUBY($js=[], $id=null, $class=null) { echo self::get__HTML('FORMATC', 6, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  static public function xRUBY($label = NULL) { echo self::get_xHTML('FORMATC', 6, $label);  }

/**
  *
  * @method public function noHTML
  * @static Method Defined S _ AND x TAG noHTML  
  * RETURN NODE S _ noHTML TAG
  *
  **/
  static public function _S($js=[], $id=null, $class=null) { echo self::get__HTML('FORMATC', 7, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xS($label = NULL) { echo self::get_xHTML('FORMATC', 7, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined SAMP _ AND x TAG noHTML  
  * RETURN NODE SAMP _ noHTML TAG
  *
  **/
  static public function _SAMP($js=[], $id=null, $class=null) { echo self::get__HTML('FORMATC', 8, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xSAMP($label = NULL) { echo self::get_xHTML('FORMATC', 8, $label);  }

/**
  *
  * @method public function noHTML
  * @static Method Defined STRONG _ AND x TAG noHTML  
  * RETURN NODE STRONG _ noHTML TAG
  *
  **/
  static public function _STRONG($js=[], $id=null, $class=null) { echo self::get__HTML('FORMATC', 9, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  static public function xSTRONG($label = NULL) { echo self::get_xHTML('FORMATC', 9, $label);  }

/**
  *
  * @method public function noHTML
  * @static Method Defined SUB _ AND x TAG noHTML  
  * RETURN NODE SUB _ noHTML TAG
  *
  **/
  static public function _SUB($js=[], $id=null, $class=null) { echo self::get__HTML('FORMATC', 10, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  static public function xSUB($label = NULL) { echo self::get_xHTML('FORMATC', 10, $label);  }

/**
  *
  * @method public function noHTML
  * @static Method Defined SUP _ AND x TAG noHTML  
  * RETURN NODE SUP _ noHTML TAG
  *
  **/
  static public function _SUP($js=[], $id=null, $class=null) { echo self::get__HTML('FORMATC', 11, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  static public function xSUP($label = NULL) { echo self::get_xHTML('FORMATC', 11, $label);  }

/**
  *
  * @method public function noHTML
  * @static Method Defined WBR _ AND x TAG noHTML  
  * RETURN NODE WBR _ noHTML TAG
  *
  **/
  static public function _WBR($js=[], $id=null, $class=null) { echo self::get__HTML('FORMATC', 12, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xWBR($label = NULL) { echo self::get_xHTML('FORMATC', 12, $label);  }

/**
  *
  * @method public function noHTML
  * @static Method Defined Q _ AND x TAG noHTML  
  * RETURN NODE Q _ noHTML TAG
  *
  **/
  static public function _Q($js=[], $id=null, $class=null) { echo self::get__HTML('FORMATC', 13, $js, $id, $class);     }
// CLOSING_METHOD_noHTML_TAG
  static public function xQ($label = NULL) { echo self::get_xHTML('FORMATC', 13, $label);  }

/**
  *
  * @method public function noHTML
  * @static Method Defined HEAD _ AND x TAG noHTML  
  * RETURN NODE HEAD _ noHTML TAG
  *
  **/
  static public function _HEAD($js=[], $id=null, $class=null) { echo self::get__HTML('STRUCTURE', 0, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  static public function xHEAD($label = NULL) { echo self::get_xHTML('STRUCTURE', 0, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined TITLE _ AND x TAG noHTML  
  * RETURN NODE TITLE _ noHTML TAG
  *
  **/
  static public function _TITLE($js=[], $id=null, $class=null) { echo self::get__HTML('STRUCTURE', 1, $js, $id, $class);    }
// CLOSING_METHOD_noHTML_TAG
  static public function xTITLE($label = NULL) { echo self::get_xHTML('STRUCTURE', 1, $label);  }

/**
  *
  * @method public function noHTML
  * @static Method Defined BODY _ AND x TAG noHTML  
  * RETURN NODE BODY _ noHTML TAG
  *
  **/
  static public function _BODY($js=[], $id=null, $class=null) { echo self::get__HTML('STRUCTURE', 2, $js, $id, $class);     }
// CLOSING_METHOD_noHTML_TAG
  static public function xBODY($label = NULL) { echo self::get_xHTML('STRUCTURE', 2, $label); }

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML _ AND x TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function _noHTML($js=[], $id=null, $class=null) { echo self::get__HTML('STRUCTURE', 3, $js, $id, $class);   }
// CLOSING_METHOD_noHTML_TAG
  static public function xnoHTML($label = NULL) { echo self::get_xHTML('STRUCTURE', 3, $label); }

/**
 *
 *
 * public function inline noHTML
 * @var @property $value = NULL | create function and return the content my_content();
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
  * @static Method Defined HTML H1 TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function H1($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
  return self::_istrue_assoc_ELEMENTINLINE('PRIMARY', 0, $value, $js, $id, $class, $label, $assoc);

}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML H2 TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function H2($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('PRIMARY', 1, $value, $js, $id, $class, $label, $assoc);

}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML H3 TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function H3($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('PRIMARY', 2, $value, $js, $id, $class, $label, $assoc);

}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML H4 TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function H4($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('PRIMARY', 3, $value, $js, $id, $class, $label, $assoc);

}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML H5 TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function H5($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('PRIMARY', 4, $value, $js, $id, $class, $label, $assoc);

}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML H6 TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function H6($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('PRIMARY', 5, $value, $js, $id, $class, $label, $assoc);

}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML DIV TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function DIV($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('PRIMARY', 6, $value, $js, $id, $class, $label, $assoc);

}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML P TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function P($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('PRIMARY', 7, $value, $js, $id, $class, $label, $assoc);

}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML BUTTON TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function BUTTON($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('PRIMARY', 8, $value, $js, $id, $class, $label, $assoc);

}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML A TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function A($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('PRIMARY', 9, $value, $js, $id, $class, $label, $assoc);

}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML IFRAME TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function IFRAME($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('PRIMARY', 10, $value, $js, $id, $class, $label, $assoc);

}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML MAIN TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function MAIN($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('PRIMARY', 11, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML NAV TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function NAV($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('PRIMARY', 12, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML SELECT TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function SELECT($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('PRIMARY', 13, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML FORM TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function FORM($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('PRIMARY', 14, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML PICTURE TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function PICTURE($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('PRIMARY', 15, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML SECTION TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function SECTION($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('PRIMARY', 16, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML TEXTAREA TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function TEXTAREA($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('PRIMARY', 17, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML AUDIO TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function AUDIO($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('SECONDARY', 0, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML VIDEO TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function VIDEO($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('SECONDARY', 1, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML ADDRESS TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function ADDRESS($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('SECONDARY', 2, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML COLGROUP TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function COLGROUP($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('SECONDARY', 3, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML BDI TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function BDI($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('SECONDARY', 4, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML BDO TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function BDO($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('SECONDARY', 5, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML BLOCKQUOTE TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function BLOCKQUOTE($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('SECONDARY', 6, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML CAPTION TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function CAPTION($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('SECONDARY', 7, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML LABEL TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function LABEL($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('SECONDARY', 8, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML DATALIST TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function DATALIST($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('SECONDARY', 9, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML DETAILS TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function DETAILS($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('SECONDARY', 10, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML SUMMARY TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function SUMMARY($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('SECONDARY', 11, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML DIALOG TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function DIALOG($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('SECONDARY', 12, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML OPTION TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function OPTION($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('SECONDARY', 13, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML FIGURE TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function FIGURE($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('SUPPORT', 0, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML FIGCAPTION TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function FIGCAPTION($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('SUPPORT', 1, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML METER TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function METER($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('SUPPORT', 2, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML OBJECT TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function OBJECT($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('SUPPORT', 3, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML OPTGROUP TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function OPTGROUP($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('SUPPORT', 4, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML OUTPUT TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function OUTPUT($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('SUPPORT', 5, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML PROGRESS TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function PROGRESS($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('SUPPORT', 6, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML SVG TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function SVG($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('SUPPORT', 7, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML TEMPLATE TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function TEMPLATE($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('SUPPORT', 8, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML TIME TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function TIME($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('SUPPORT', 9, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML VAR TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function VAR($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('SUPPORT', 10, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML UL TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function UL($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('LIST', 0, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML OL TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function OL($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('LIST', 1, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML LI TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function LI($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('LIST', 2, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML TABLE TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function TABLE($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('LIST', 3, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML TR TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function TR($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('LIST', 4, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML TD TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function TD($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('LIST', 5, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML TH TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function TH($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('LIST', 6, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML LEGEND TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function LEGEND($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('LIST', 7, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML FIELDSET TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function FIELDSET($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('LIST', 8, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML TBODY TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function TBODY($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('LIST', 9, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML TFOOT TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function TFOOT($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('LIST', 10, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML THEAD TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function THEAD($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('LIST', 11, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML SPAN TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function SPAN($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMAT', 0, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML EM TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function EM($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMAT', 1, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML B TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function B($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMAT', 2, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML I TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function I($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMAT', 2, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML SMALL TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function SMALL($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMAT', 3, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML STRIKE TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function STRIKE($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMAT', 4, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML MARQUEE TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function MARQUEE($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMAT', 5, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML CENTER TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function CENTER($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMAT', 6, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML CODE TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function CODE($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMAT', 7, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML ABBR TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function ABBR($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMAT', 8, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML DETAILS TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function MAP($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMAT', 9, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML CANVAS TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function CANVAS($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMAT', 10, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML CITE TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function CITE($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMAT', 11, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML DATA TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function DATA($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMAT', 12, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML DL TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function DL($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMAT', 13, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML DT TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function DT($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMAT', 14, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML DD TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function DD($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMAT', 15, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML DFN TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function DFN($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMAT', 16, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML INS TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function INS($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMAT', 17, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML DEL TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function DEL($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMATC', 0, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML KBD TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function KBD($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMATC', 1, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML MARK TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function MARK($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMATC', 2, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML PRE TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function PRE($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMATC', 3, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML RT TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function RT($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMATC', 4, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML RP TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function RP($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMATC', 5, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML RUBY TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function RUBY($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMATC', 6, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML S TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function S($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMATC', 7, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML SAMP TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function SAMP($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMATC', 8, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML STRONG TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function STRONG($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMATC', 9, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML SUB TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function SUB($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMATC', 10, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML SUP TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function SUP($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMATC', 11, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML WBR TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function WBR($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMATC', 12, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML Q TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function Q($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('FORMATC', 13, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML HEAD TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function HEAD($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('STRUCTURE', 0, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML TITLE TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function TITLE($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('STRUCTURE', 1, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML BODY TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function BODY($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('STRUCTURE',2, $value, $js, $id, $class, $label, $assoc);
}

/**
  *
  * @method public function noHTML
  * @static Method Defined HTML noHTML TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function noHTML($value=null, $js=[], $id=null, $class=null, $label=null, $assoc=null) {
  
 return self::_istrue_assoc_ELEMENTINLINE('STRUCTURE', 3, $value, $js, $id, $class, $label, $assoc);

} // END OF LINE HTML NO x REQUIRED

/**
  *
  * @method private function noHTML
  * @static @private Method Defined  return_inline_element
  * RETURN NODE HTML _ noHTML TAG
  * 
  **/
static private function return_inline_element($elem_val, $elem_key, $js, $id, $class, $assoc) {

   return self::get_inline__HTML($elem_val, $elem_key, $js, $id, $class, $assoc);    
}

/**
  *
  * @method private function noHTML
  * @static @private  Method Defined  if TRUE ELEMENT TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function _istrue_assoc_ELEMENTINLINE($elem_val, $elem_key, $value, $js, $id, $class, $label, $assoc) {
  
  # INLINE_OR_ANY_LABEL_REQUIRED
  # CHECK_IF_THE_PARAM_REQUIRED_IS_NOT_NULL
  # IF_IT_IS_NULL_RETURN_FLASE  
  if ($assoc == FALSE || $assoc == NULL || $assoc == 'DEFAULT') {
      
       # RETURN_INLINE_ELEMENT_NO_HTML_CLOSING_TAG 
     /**
       *
       * @var $elem_val, $elem_key, $value, $js, $id, $class, $label
       * @method function return_elementINLINE()
       *
       **/
      echo self::return_elementINLINE($elem_val, $elem_key, $value, $js, $id, $class, $label);
  } 

  # INLINE_OR_ANY_LABEL_REQUIRED 
  # ELSEIF_ASSOCU_===_FUNC_ASSOC_||_CLASS_ASSOC_||_METHOD_ASSOC
  elseif( $assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC ) {
       
     /**
       * THEN_IF_IT_IS TRUE_RETURN!
       * @var  $elem_val, $elem_key, $value, $js, $id, $class, $label
       * @method function _elemenHTMLINLINE()
       *
       **/
     return self::_elemenHTMLINLINE($elem_val, $elem_key, $value, $js, $id, $class, $label);  
  }
} 

/**
  *
  * @method private function noHTML
  * @static @private  Method Defined  if TRUE ELEMENT TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function return_elementINLINE($elem_val, $elem_key, $value, $js, $id, $class, $label) {
   
    # IF_INLINE_ELEMENT_IS_EQUAL_TRUE_THE_RETURN_ECHO_STATIC_noHTML
    # RETURN_GET___HTML_METHOD_INCLUDED_ 
  /**
    *
    * @var | Defined var $elem_val, $elem_key, $js, $id, $class  
    * @method function get__HTML
    *
    **/ 
   echo $return_elementINLINE  = self::get__HTML($elem_val, $elem_key, $js, $id, $class);  
   
   # WHEN_THE_LOOP_IS_TRUE_THEN
   # DO_CONTENT
   echo $return_elementINLINE  = $value; 
   
     # IF_INLINE_ELEMENT_IS_EQUAL_TRUE_THE_RETURN_ECHO_STATIC_noHTML
     # RETURN_GET___HTML_METHOD_INCLUDED_ 
   /**
     *
     * @var | Defined var $elem_val, $elem_key, $label  
     * @method function get_xHTML()
     *
     **/ 
   echo $return_elementINLINE  = self::get_xHTML($elem_val, $elem_key, $label); 

}

/**
  *
  * @method private function noHTML
  * @static @private  Method Defined  if newELEMENT TRUE ELEMENT TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function _elemenHTMLINLINE($elem_val, $elem_key, $value, $js, $id, $class, $label) {
   
  if ( $label == TRUE && $label === 'MAGIC') {
     
     # IF_INLINE_ELEMENT_IS_EQUAL_NEW_ELEMENT_AND_TRUE_THE_RETURN_ECHO_STATIC_noHTML
     # RETURN_GET___HTML_METHOD_INCLUDED_ 
   /**
     *
     * @var | Defined var $elem_val, $elem_key, $js, $id, $class
     * @method function new_get__HTML();
     *
     **/ 
     
     return $return_elementINLINE = self::new_get__HTML($elem_val, $elem_key, $js, $id, $class);  

   } elseif ($label == TRUE && $label === 'MAGIC_END') {
     
      # IF_INLINE_ELEMENT_IS_EQUAL_TRUE_THE_RETURN_ECHO_STATIC_noHTML
      # RETURN_GET___HTML_METHOD_INCLUDED_ 
    /**
      *
      * @var | Defined var $elem_val, $elem_key, $label  
      * @method function new_get__HTML();
      * 
      **/    
     return $return_elementINLINE  = self::new_get_xHTML($elem_val, $elem_key, $label); 

   } else {

     # IF_INLINE_ELEMENT_IS_EQUAL_NEW_ELEMENT_AND_TRUE_THE_RETURN_ECHO_STATIC_noHTML
     # RETURN_GET___HTML_METHOD_INCLUDED_ 
   /**
     *
     * @var | Defined var $elem_val, $elem_key, $js, $id, $class
     * @method function new_get__HTML();
     *
     **/ 
    $return_elementINLINE   = self::new_get__HTML($elem_val, $elem_key, $js, $id, $class);  
  
  

     # WHEN_THE_LOOP_IS_TRUE_THEN
     # DO_CONTENT
     $return_elementINLINE  .= $value; 
   
     # IF_INLINE_ELEMENT_IS_EQUAL_TRUE_THE_RETURN_ECHO_STATIC_noHTML
     # RETURN_GET___HTML_METHOD_INCLUDED_ 
   /**
     *
     * @var | Defined var $elem_val, $elem_key, $label  
     * @method function new_get__HTML();
     * 
     **/    
    $return_elementINLINE  .= self::new_get_xHTML($elem_val, $elem_key, $label); 
  
    # get_ELEMENT_RETURN!
    return $return_elementINLINE;

   }

}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined if get_inline__HTML assoc TRUE  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function get_inline__HTML($elem_val, $elem_key, $js, $id, $class, $assoc) {
  
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
     echo $get_inline__HTML  = self::_setELEMENT($elem_val, $elem_key);
     echo $get_inline__HTML  = self::_setinLINEHTMLattr($js, $id, $class, NULL);   
  
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
     $get_inline__HTML   = self::_setELEMENT($elem_val, $elem_key);
     $get_inline__HTML  .= self::_setinLINEHTMLattr($js, $id, $class, $assoc); 

     return $get_inline__HTML;    
  }
    
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined get__HTML   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static protected function get__HTML($elem_val, $elem_key, $js, $id, $class) {
       
      # RETURN_GET__HTML_CONTAINS_OFSET_ELEMENTS_SET_HTML_ATTR
      # SET___HTML_AS_PRINT_STATIC_HTML
    /**
      *
      * SET_FUNCTION-CONCAT_THEN_RETURN
      * @method function _setELEMENT()
      * @method function _setHTMLattr()
      *
      **/     
    echo $get__HTML  = self::_setELEMENT($elem_val, $elem_key);
    echo $get__HTML  = self::_setHTMLattr($js, $id, $class);   

}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined new_get__HTML   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static protected function new_get__HTML($elem_val, $elem_key, $js, $id, $class) {
  
      # RETURN_GET__HTML_CONTAINS_OFSET_ELEMENTS_SET_HTML_ATTR
      # SET___HTML_AS_RETURN_DYNAMIC_ASSOC_HTML
    /**
      *
      * SET_FUNCTION-CONCAT_THEN_RETURN
      * @method function _setELEMENT()
      * @method function new_setHTMLattr()
      *
      **/      
   $get__HTML   = self::_setELEMENT($elem_val, $elem_key);
   $get__HTML  .= self::new_setHTMLattr($js, $id, $class);   
   
   return $get__HTML;

}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined get_xHTML   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static protected function get_xHTML($elem_val, $elem_key, $label) {
   
   # SET_VALUE_IS_TRUE_ELEMENT
   # ASIGNED-TO_SET_VAR_ELEMENT 
   $set             = self::_isTRUELEM($elem_val); 
   
   # DEFINE_ELEMENTS_AND_EMTHODS
   # ASSIGNED_GET___TAG_SET_GETENDS_RETURN-SET_ARRAY_KEY
   # EGT_x_HTML_ASSIGNED_BREAK_TAG
   $defined_htm     = self::_get_TAG().self::_getENDS()
                    
                       .$set[$elem_key]
                       .self::_getxTAG()
                       .self::_getBREAK();
   
   # CHECK_IF_LABEL_IS_TRUE_AFTER_NODE
   # IF_LABEL_IS_TRUE_THEN_RETURN_LABEL_AFTER_NODE
   # SET_COMMENTS_AS LABEL                  
   if ($label == TRUE )  {

   $defined_htm    .= self::_getCOMBEGIN()." ".$label." "
                    
                       .self::_getCOMEND()
                       .self::_getBREAK();    
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
  * @static @private Method Defined new_get_xHTML   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static protected function new_get_xHTML($elem_val, $elem_key, $label) {
   
   $defined_htm       = "";

   $set               = self::_isTRUELEM($elem_val); 
   
   # SAMETHING_SET_AS_RETURN
   $defined_htm       = self::_get_TAG().self::_getENDS()

                       .$set[$elem_key]
                       .self::_getxTAG()
                       .self::_getBREAK();

   # CHECK_IF_LABEL_IS_TRUE_AFTER_NODE
   # IF_LABEL_IS_TRUE_THEN_RETURN_LABEL_AFTER_NODE
   # SET_COMMENTS_AS LABEL     
   if ($label == TRUE )  {
   
   $defined_htm       .= self::_getCOMBEGIN()." ".$label." "
                       
                       .self::_getCOMEND()
                       .self::_getBREAK();    
   } 
   
   # IF_DEFINE_EXECUTRE_RETURN_AS_SET
   return $defined_htm; 
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined  _setHTMLattr   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static protected function _setHTMLattr($js = [], $id=NULL, $class=NULL) {

      # DEFINE_STATIC_SET_RETURN_TO_HTML
    # METHOD_SET_AS_PRINT
    /**
      *
      * SET_FUNCTION-CONCAT_THEN_RETURN
      * @method function _isJStrue()
      * @method function _getxTAG()
      *
      **/     
    echo $_setHTMLattr  = self::_isJStrue($js, $id, $class);
    echo $_setHTMLattr = self::_getxTAG().self::_getBREAK();   
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined  _setHTMLattr   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static protected function new_setHTMLattr($js = [], $id=NULL, $class=NULL) {
      
      # DEFINE_STATIC_SET_RETURN_TO_HTML
    # METHOD_sET_AS_RETURN
    /**
      *
      * SET_FUNCTION-CONCAT_THEN_RETURN
      * @method function new_isJStrue()
      * @method function _getxTAG()
      *
      **/ 
    $_setHTMLattr  = self::new_isJStrue($js, $id, $class);
    $_setHTMLattr .= self::_getxTAG().self::_getBREAK();

    return $_setHTMLattr;
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined  _setinLINEHTMLattr  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static protected function _setinLINEHTMLattr($js = [], $id=NULL, $class=NULL, $assoc=NULL) {
   
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
    echo $_setinLINEHTMLattr = self::_isJStrue($js, $id, $class);
    echo $_setinLINEHTMLattr = self::_set_tagSPACER().self::_setENDS().self::_getxTAG().self::_getBREAK();  

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
      $_setinLINEHTMLattr  = self::isJStrue_assoc($js, $id, $class, $assoc);
      $_setinLINEHTMLattr .= self::_set_tagSPACER().self::_setENDS().self::_getxTAG().self::_getBREAK();  

      return $_setinLINEHTMLattr;    
  }
   
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined  isJStrue_assoc  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function isJStrue_assoc($js, $id, $class, $assoc) {

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
     $js_false = self::_isJStrue($js, $id, $class);
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
     return self::new_isJStrue($js, $id, $class);    
   }

}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined  _isJStrue  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function _isJStrue($js, $id, $class) {
  
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
       $apps_attributes = self::apps_att($js);
       
       # GET_DATA_OF_ASSOCIATED_OF_ARRAY_FOR_EACH_DATA_COMBINE
       # IF_THE_JS_RETURN_TRUE_THEN_LOOP_COMBINE_DATA
       foreach ( $apps_attributes as $attr_name => $attr_value )  
       {
         
         # SET_PRINT_DATA_STATIC_LOOPING  
         echo self::_tagSPACER().$attr_name
      
                      .self::_getES()
                      .self::_getDQUOTE()
      
                      .$attr_value
      
                      .self::_getDQUOTE()
                      .self::_tagSPACER();
        }
    }
    
    # SET_JOIN_HTML_ATTRIBUTE_AT_THE_SAME_TIME
  /**
    *
    * SET_FUNCTION-CONCAT_THEN_RETURN
    * @method function html_attr
    *
    **/        
    echo $html_attributes = self::html_attr($id, $class);
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined  _isJStrue  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function new_isJStrue($js, $id, $class) {
   
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
        $apps_attributes = self::apps_att($js);

        foreach ( $apps_attributes as $attr_name => $attr_value )  
        {
         
         # SET_RETUNR_DATA_EMPTY_ARRAY
         $htmlattr[] = self::_tagSPACER().$attr_name
                      
                      .self::_getES()
                      .self::_getDQUOTE()
   
                      .$attr_value
                      
                      .self::_getDQUOTE()
                      .self::_tagSPACER();
        }
    }

    # SET_JOIN_HTML_ATTRIBUTE_AT_THE_SAME_TIME
  /**
    *
    * SET_FUNCTION-CONCAT_THEN_RETURN
    * @method function new_html_attr
    *
    **/      
    $html_attributes = self::new_html_attr($id, $class);
    
    #THE_RETURN_DATA_OF_ARRAY_WITH_ASSOC-IN_CLASS_METHOD
    return implode('', $htmlattr).$html_attributes;
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined  _setELEMENT  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static protected function _setELEMENT($_variable, $set_tag) {
   # CHECK_ELEMENT_IF_IT_IS_TRUE
   # SET_RETURN_IF_TRUE
  /**
    *
    * SET_FUNCTION-CONCAT_THEN_RETURN
    * @method function _isTRUELEM
    * @method function _get_TAG
    *
    **/     
   $set =  self::_isTRUELEM($_variable);
   return  self::_get_TAG().$set[$set_tag];

}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined  apps_att  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static protected function apps_att($js = []) {
    
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
  * @static @private Method Defined html_attr  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function html_attr($id=null, $class=null) {
   
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
   if ($id == TRUE && $class == TRUE)         {   echo  self::_tagSPACER().self::have_id_class($id, $class); 
   }  

  /**
    *
    * SET_FUNCTION-CONCAT_THEN_RETURN
    * @method function haveId
    *
    **/       
    elseif ($id == TRUE  && $class == FALSE )  {   echo  self::_tagSPACER().self::haveId($id);
   }

 /**
   *
   * SET_FUNCTION-CONCAT_THEN_RETURN
   * @method function haveClass
   *
   **/       
   elseif ($id == FALSE && $class == TRUE  )    {   echo  self::_tagSPACER().self::haveClass($class); 
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
  * @static @private Method Defined new_html_attr 
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function new_html_attr($id=null, $class=null) {
   
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
   if ($id == TRUE && $class == TRUE)          {   return  self::_tagSPACER().self::have_id_class($id, $class); 
   } 

  /**
    *
    * SET_FUNCTION-CONCAT_THEN_RETURN
    * @method function haveId | METHOD_ASSOC
    *
    **/ 
   elseif ($id == TRUE  && $class == FALSE )   {   return  self::_tagSPACER().self::haveId($id);
   }  

  /**
    *
    * SET_FUNCTION-CONCAT_THEN_RETURN
    * @method function haveClass | METHOD_ASSOC
    *
    **/ 
   elseif ($id == FALSE && $class == TRUE  )   {   return  self::_tagSPACER().self::haveClass($class); 
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
  * @static @private Method Defined _isTRUELEM 
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static protected function _isTRUELEM($elements) {
   
   if ($elements == 'PRIMARY')            
    {
      return  self::$htm; 
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
      return  self::$htm_s; 
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
      return  self::$htm_ss;  
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
      return  self::$htm_t;   
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
      return  self::$htm_f; 
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
      return  self::$htm_fc;    
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
      return  self::$htm_L;     
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
      return  self::$htm_st;
    }
} 

/**
  *
  * @method private function noHTML
  * @static @private Method Defined haveClass   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function haveClass($class) {

 return  $gethtml_attr = "class".self::_getES().self::_getDQUOTE().$class.self::_getDQUOTE()."";
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined haveId   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function haveId($id) {

 return  $gethtml_attr = "id".self::_getES().self::_getDQUOTE().$id.self::_getDQUOTE()."";
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined have_id_class   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function have_id_class($id, $class) {
  
  # IF_HAVE_CLASS_RETURN_VALUE_SET
  # CHECK_IF_BOTH_PARA_IS_TRUE  
  $gethtml_attr   = "id".self::_getES().self::_getDQUOTE().$id.self::_getDQUOTE().self::_tagSPACER()."";
  $gethtml_attr  .= "class".self::_getES().self::_getDQUOTE().$class.self::_getDQUOTE()."";

  return $gethtml_attr;
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined _isTrueBREAK_assoc  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function _isTrueBREAK_assoc($assoc) {
  
  if ($assoc == NULL || $assoc == FALSE || $assoc == 'DEFUALT') 
   {
     
    # CHECK_IF_aSSOC_IS_NOT_TRUE_OR_IF_IT_IS_FALSE
    # SET_AS_PRINT_STATIC_HTML 
    echo self::_get_TAG().self::_doBREAK().self::_tagSPACER().self::_getENDS().self::_getxTAG().self::_getBREAK(); 
   } 

    # ELSE_IF_THE_ASSOC_PARA_IS_TRUE_THEN_SET_RETURN 
    elseif ($assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC) {
    # RETURN_METHOD_ASSOC
    return self::_get_TAG().self::_doBREAK().self::_tagSPACER().self::_getENDS().self::_getxTAG().self::_getBREAK();       
   }
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined _isTrueLine_assoc  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function _isTrueLine_assoc($assoc) {
  
  if ($assoc == NULL || $assoc == FALSE || $assoc == 'DEFUALT') 
   {

    # CHECK_IF_aSSOC_IS_NOT_TRUE_OR_IF_IT_IS_FALSE
    # SET_AS_PRINT_STATIC_HTML    
    echo self::_get_TAG().self::_makeLine().self::_tagSPACER().self::_getENDS().self::_getxTAG().self::_getBREAK();
      
   } 
    
    # ELSE_IF_THE_ASSOC_PARA_IS_TRUE_THEN_SET_RETURN 
    elseif ($assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC) {
    # RETURN_METHOD_ASSOC
    return self::_get_TAG().self::_makeLine().self::_tagSPACER().self::_getENDS().self::_getxTAG().self::_getBREAK();      
   
   }
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined __magicELSE() // use alternaive if else statement inside function
  *
  **/
static private function return_method_concat_else($con,$res1,$res2,$as) {
 
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
    {  self::_PERFORM($get_if_result_); } else { self::_PERFORM($get_else_result_); } 
  }

} 

/**
  *
  * @method private function noHTML
  * @static @private Method Defined __magicELSE() // use alternaive if else statement inside function
  *
  **/
static private function return_method_concat_if($con,$res1,$as) {
 
  # SET_FOR_IF_CONDITION  
  $condition_statements = $con;
  
  # SET_FOR_IF_RESULT
  $get_if_result_       = $res1;
  
  # SET_FANC_ASSOC
  $assoc                = $as;
  
  # CHECK_IF_THE_FUNCTION_IS_WITHIN_METHOD
  # THEN SET RETURN
  if ( ($assoc == TRUE || $assoc !== NULL) && ($assoc === FUNC_ASSOC || $assoc === METHOD_ASSOC || $assoc === CLASS_ASSOC) ) 
  {
    
    if ($condition_statements) 
    {  return $get_if_result_;   }      
 
  } elseif ($assoc == FALSE || $assoc == NULL ) {
     
    if ($condition_statements) 
    {  self::_PERFORM($get_if_result_); } 
  }

} 

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _getBREAK
  *
  **/
static protected function _getBREAK()      { 

   # SET_RETURN_PRIVATE_PROPERTY_GET_VALUE_ARRAY_ZERO
   /**
     *
     * @var $hBreak
     * @var private property array() 
     * @method ""
     *
     **/   
    return self::$hBreak[0];    }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _doBREAK 
  *
  **/
static protected function _doBREAK()       { 

   # SET_RETURN_PRIVATE_PROPERTY_GET_VALUE_ARRAY_ONE
   /**
     *
     * @var $hBreak
     * @var private property array() 
     * @method ""
     *
     **/  
    return self::$hBreak[1];    }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _makeLine 
  *
  **/
static protected function _makeLine()      { 

   # SET_RETURN_PRIVATE_PROPERTY_GET_VALUE_ARRAY_TWO
   /**
     *
     * @var $hBreak
     * @var private property array() 
     * @method ""
     *
     **/    
    return self::$hBreak[2];    }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _getSQUOTE 
  *
  **/
static protected function _getSQUOTE()     { 

   /**
     *
     * @var private property \
     * @method _setSQ()
     *
     **/  
    return self::_setSQ();      }
static private function _setSQ()         { 
   /**
     *
     * @var private property $sq
     *
     **/  
    return self::$sq = '\'';    }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _getDQUOTE 
  *
  **/
static protected function _getDQUOTE()     { 

   /**
     *
     * @var private property \ 
     * @method _setDQ()
     *
     **/  
    return self::_setDQ();      }
static private function _setDQ()         { 
   
   /**
     *
     * @var private property $dq 
     *
     **/
    return self::$dq = "\"";    }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _getxTAG 
  *
  **/
static protected function _getxTAG()   { 

   /**
     *
     * @var private property >
     * @method _setENDGATE()
     *
     **/  
    return self::_setENDGATE();     }
static private function _setENDGATE()    { 

   /**
     *
     * @var private property $lt
     *
     **/  
    return self::$lt = ">";         }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _get_TAG 
  *
  **/
static protected function _get_TAG()    { 

   /**
     *
     * @var private property >
     * @method _setGATE
     *
     **/
    return self::_setGATE();        }
static private function _setGATE()       { 
   
   /**
     *
     * @var private property $gt
     *
     **/
    return self::$gt = "<";         }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _getES 
  *
  **/
static protected function _getES()         { 

   /**
     *
     * @var private property =  
     * @method  _setES
     *
     **/  
    return self::_setES();          }
static private function _setES()         { 

   /**
     *
     * @var private property $es
     *
     **/
    return self::$es = "=";         }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _getENDS
  *
  **/
static protected function _getENDS()       { 

   /**
     *
     * @var private property / 
     * @method  _setES
     *
     **/  
    return self::_setENDS();        }
static private function _setENDS()       { 

   /**
     *
     * @var private property $ends
     *
     **/
    return self::$ends = "/";       }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _tagSYMBOL
  *
  **/
static private function _tagSYMBOL()     { 

   /**
     *
     * @var private property !
     * @method  _set_exSYMBOL()
     *
     **/
    return self::_set_exSYMBOL();   }
static private function _set_exSYMBOL()  { 

   /**
     *
     * @var private property $exSymbol
     *
     **/  
    return self::$exSymbol = "!";   }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _getCOMEND
  *
  **/
static protected function _getCOMEND()     {

   /**
     *
     * @var private property -->
     * @method  _setCOMEND
     *
     **/ 
    return self::_setCOMEND();      } 
static private function _setCOMEND()     {

   /**
     *
     * @var private property $comEND
     *
     **/  
    return self::$comEND = "-->";   }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _getTRING
  *
  **/
static protected function _getTRING($str)  { 

   /**
     *
     * @method  _setSTRING
     *
     **/  
    return self::_setSTRING($str);  } 
static private function _setSTRING($str) {

   /**
     *
     * @var private property $str
     *
     **/
    return self::$str = $str;   }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _tagSPACER
  *
  **/
static protected function _tagSPACER()     { 

   /**
     *
     * @method  _set_tagSPACER
     *
     **/    
    return self::_set_tagSPACER();  }
static private function _set_tagSPACER() {

   /**
     *
     * @var private property $sHTML
     *
     **/
    return self::$sHTML = " ";
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _getCOMBEGIN
  *
  **/
static protected function _getCOMBEGIN() { 

   /**
     *
     * @method  _set_tagSPACER
     *
     **/  
     return self::_setCOMBEGIN();  }
static private function _setCOMBEGIN() { 

   /**
     *
     * @var private property $sHTML
     *
     **/
     return self::$comBEGIN = self::_get_TAG().self::_tagSYMBOL()."--";
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _isTrue_SET_STRING
  *
  **/
static private function _isTrue_SET_STRING($str=null, $assoc=null) {

   if ($assoc == NULL || $assoc == FALSE || $assoc == 'DEFUALT') 
   {

     echo  self::_getTRING($str);
   
   } 
   
   # CHECK_IF_INLINE_IS_ASSOC_WITH_FUNC_ASSOC_OR_CLASS_ASSOC_OR_METHOD_ASSOC
   elseif ($assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC) 
   { 
   
     return self::_getTRING($str);  
   
   } 
 
 }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _isTrue_SET_STRING
  *
  **/
static private function _isTrue_SET_merge($merge=null) {
    
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
      self::_PERFORM('Recomendation: '.self::ELEMENT('a','Read Documentation Click Here',self::DocxSubmitAttr()));     
      exit();
    
  }
  
}  

 /**
  *
  * @method private function Set_Element_Header_Attr noHTML
  * @ @private Method Defined HTML return element array
  *
  **/
static private function Set_Element_Attr($attr_name,$attr_val) {

    return $Set_Element_Header_Attr = [

      $attr_name = $attr_name,
      $attr_val  = $attr_val  

    ];

}
 
/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _setELEMENTS
  *
  **/
static protected function _setELEMENTS($elem) {
 
    /**
      *
      * @method private function noHTML _setELEMENTS
      * CHECK_IF_WHICH_ELEMT_WILL_RETURN
      *
      **/
      # VALIDATE HTML ELEMENTS THE RETURN BASE ON ELEMENT HTML
      # CHECK_IF_P_PARA_PARANGRAPH_IS_TRUE_THEN_RETURN_ELEMENTS_ARRAY
      # IF_IT_IS_TRUE_THE_EXECUTE_ELEMENT_ACCORDING_TO_PARAM_SET
 
   if ($elem === 'p' || $elem === 'P' || $elem === 'parangrap' || $elem === 'PARANGRAP' || $elem === 'para' || $elem === 'PARA' ) {
       
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
    
    } elseif ($elem === 'div' || $elem === 'DIV') {

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
    
    } elseif ($elem === 'h1'  || $elem === 'H1') {

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
    
    } elseif ($elem === 'h2'  || $elem === 'H2' ) {

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
    
    } elseif ($elem === 'h3'  || $elem === 'H3' ) {

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
    
    } elseif ($elem === 'h4'  || $elem === 'H4' ) {
    
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
    
    } elseif ($elem === 'h5'  || $elem === 'H5' ) {

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
    
    } elseif ($elem === 'h6'  || $elem === 'H6' ) {

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
    
    } elseif ($elem === 'button' || $elem === 'BUTTON' ) {

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
    
    } elseif ($elem === 'a' || $elem === 'A' || $elem == 'LINK' || $elem === 'hyperlink' || $elem === 'HYPERLINK') {

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
    
    } elseif ($elem === 'iframe' || $elem === 'IFRAME' ) {

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
    
    } elseif ($elem === 'main'   || $elem === 'MAIN' ) {

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
    
    } elseif ($elem === 'nav'    || $elem === 'NAV' || $elem === 'NAVIGATION' ) {

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
    
    } elseif ($elem === 'select' || $elem === 'SELECT' ) {

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
    
    } elseif ($elem === 'form'   || $elem === 'FORM' ) {

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
    
    } elseif ($elem === 'picture'  || $elem === 'PICTURE' ) {

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
    
    } elseif ($elem === 'section'  || $elem === 'SECTION' ) {

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
    
    } elseif ($elem === 'textarea' || $elem === 'TEXTAREA' ) {

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
    
    } elseif ($elem === 'audio'    || $elem === 'AUDIO' ) {

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
    
    } elseif ($elem === 'video' || $elem === 'VIDEO' ) {

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
    
    } elseif ($elem === 'address'  || $elem === 'ADDRESS' ) {

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
    
    } elseif ($elem === 'colgroup' || $elem === 'COLGROUP' ) {

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
    
    } elseif ($elem === 'bdi'      || $elem === 'BDI' ) {

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
    
    } elseif ($elem === 'bdo'        || $elem === 'BDO' ) {

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
    
    } elseif ($elem === 'blockquote' || $elem === 'BLOCKQUOTE' ) {

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
    
    } elseif ($elem === 'caption'    || $elem === 'CAPTION' ) {

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
    
    } elseif ($elem === 'label'      || $elem === 'LABEL' ) {

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
    
    } elseif ($elem === 'datalist'   || $elem === 'DATALIST' ) {

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
    
    } elseif ($elem === 'details'    || $elem === 'DETAILS' ) {

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
    
    } elseif ($elem === 'summary'    || $elem === 'SUMMARY' ) {

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
    
    } elseif ($elem === 'dialog'     || $elem === 'DIALOG' ) {

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
    
    } elseif ($elem === 'option'     || $elem === 'OPTION' ) {

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
    
    } elseif ($elem === 'figure'     || $elem === 'FIGURE' ) {

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
    
    } elseif ($elem === 'figcaption' || $elem === 'FIGCAPTION' ) {

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
    
    } elseif ($elem === 'meter'      || $elem === 'METER' ) {

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
    
    } elseif ($elem === 'object'     || $elem === 'OBJECT' ) {

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
    
    } elseif ($elem === 'optgroup'   || $elem === 'OPTGROUP' ) {

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
    
    } elseif ($elem === 'output'     || $elem === 'OUTPUT' ) {

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
    
    } elseif ($elem === 'progress'   || $elem === 'PROGRESS' ) {

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
    
    } elseif ($elem === 'svg'        || $elem === 'SVG' ) {

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
    
    } elseif ($elem === 'template'   || $elem === 'TEMPLATE' ) {

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
    
    } elseif ($elem === 'time'       || $elem === 'TIME' ) {

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
    
    } elseif ($elem === 'var'        || $elem === 'VAR' ) {

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
    
    } elseif ($elem === 'ul'         || $elem === 'UL' ) {

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
    
    } elseif ($elem === 'ol'         || $elem === 'OL' ) {

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
    
    } elseif ($elem === 'li'         || $elem === 'LI' ) {

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
    
    } elseif ($elem === 'table'      || $elem === 'TABLE' ) {

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
    
    } elseif ($elem === 'tr'         || $elem === 'TR' ) {

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
    
    } elseif ($elem === 'td'         || $elem === 'TD' ) {

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
    
    } elseif ($elem === 'th'         || $elem === 'TH' ) {

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
    
    } elseif ($elem === 'legend'     || $elem === 'LEGEND' ) {

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
    
    } elseif ($elem === 'fieldset'   || $elem === 'FIELDSET' ) {

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
    
    } elseif ($elem === 'tbody'      || $elem === 'TBODY' ) {

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
    
    } elseif ($elem === 'tfoot'      || $elem === 'TFOOT' ) {

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
    
    } elseif ($elem === 'thead'      || $elem === 'THEAD' ) {

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
    
    } elseif ($elem === 'span'       || $elem === 'SPAN' ) {

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
    
    } elseif ($elem === 'em'       || $elem === 'EM' ) {

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
    
    } elseif ($elem === 'b'        || $elem === 'B' || $elem === 'BOLD' ) {

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
    
    } elseif ($elem === 'i'        || $elem === 'I' || $elem === 'ITALIC' ) {

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
    
    } elseif ($elem === 'small'      || $elem === 'SMALL' ) {

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
    
    } elseif ($elem === 'strike'     || $elem === 'STRIKE' ) {

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
    
    } elseif ($elem === 'marquee'   || $elem === 'MARQUEE' ) {

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
    
    } elseif ($elem === 'center'    || $elem === 'CENTER' ) {

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
    
    } elseif ($elem === 'code'      || $elem === 'CODE' ) {

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
    
    } elseif ($elem === 'abbr'      || $elem === 'ABBR' ) {

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
    
    } elseif ($elem === 'map'       || $elem === 'MAP' ) {

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
    
    } elseif ($elem === 'canvas'    || $elem === 'CANVAS' ) {

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
    
    } elseif ($elem === 'cite'      || $elem === 'CITE' ) {

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
    
    } elseif ($elem === 'data'      || $elem === 'DATA' ) {

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
    
    } elseif ($elem === 'dl'        || $elem === 'DL' ) {

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
    
    } elseif ($elem === 'dt'        || $elem === 'DT' ) {

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
    
    } elseif ($elem === 'dd'        || $elem === 'DD' ) {

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
    
    } elseif ($elem === 'dfn'       || $elem === 'DFN' ) {

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
    
    } elseif ($elem === 'ins'       || $elem === 'INS' ) {

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
    
    } elseif ($elem === 'del'       || $elem === 'DEL' ) {

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
    
    } elseif ($elem === 'kbd'       || $elem === 'KBD' ) {

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
    
    } elseif ($elem === 'mark'      || $elem === 'MARK' ) {

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
    
    } elseif ($elem === 'pre'       || $elem === 'PRE' ) {

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
    
    } elseif ($elem === 'rt'        || $elem === 'RT' ) {

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
    
    } elseif ($elem === 'rp'        || $elem === 'RP' ) {

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
    
    } elseif ($elem === 'ruby'      || $elem === 'RUBY' ) {

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
    
    } elseif ($elem === 's'         || $elem === 'S' ) {

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
    
    } elseif ($elem === 'samp'      || $elem === 'SAMP' ) {

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
    
    } elseif ($elem === 'strong'    || $elem === 'STRONG' ) {

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
    
    } elseif ($elem === 'sub'       || $elem === 'SUB' ) {

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
    
    } elseif ($elem === 'sup'       || $elem === 'SUP' ) {

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
    
    } elseif ($elem === 'wbr'       || $elem === 'WBR' ) {

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
    
    } elseif ($elem === 'q'         || $elem === 'Q' ) {

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
    
    } elseif ($elem === 'head'      || $elem === 'HEAD' ) {

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
    
    } elseif ($elem === 'title'  || $elem === 'TITLE' ) {

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
    
    } elseif ($elem === 'body'  || $elem === 'BODY' ) {

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
    
    } elseif ($elem === 'html'  || $elem === 'HTML' ) {

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

static protected function _setINLINELEMENTS($elem) {
    // VALIDATE HTML ELEMENTS THE RETURN BASE ON ELEMENT HTML !

   if ($elem === 'source'        || $elem === 'SOURCE' )  { 

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
     
      elseif ($elem === 'track'  || $elem === 'TRACK')    { 

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
     
      elseif ($elem === 'circle' || $elem === 'CIRCLE')   { 

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

      elseif ($elem === 'param' || $elem === 'PARAM')    { 

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
      
      elseif ($elem === 'input' || $elem === 'INPUT')    { 

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
      
      elseif ($elem === 'meta'   || $elem === 'META')     { 

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
      
      elseif ($elem === 'link'   || $elem === 'LINK')     { 

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
      
      elseif ($elem === 'img'    || $elem === 'IMG')      { 

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
      
      elseif ($elem === 'embed'  || $elem === 'EMBED')    { 

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
      
      elseif ($elem === 'option' || $elem === 'OPTION')   { 

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
      
      elseif ($elem === 'col'    || $elem === 'COL')      { 

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
      
      elseif ($elem === 'base'   || $elem === 'BASE')     { 

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
      
      elseif ($elem === 'aside'  || $elem === 'ASIDE')    { 

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
      
      elseif ($elem === 'area'   || $elem === 'AREA')     { 

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
      
      elseif ($elem === 'doctype'   || $elem === 'DOCTYPE' ) {

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


static protected function _setReturnELEMENT($elem, $value, $js, $id, $class, $label) {

  $elem = self::_setELEMENTS($elem); 
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
       return self::_elemenHTMLINLINE('STRUCTURE', 0, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('STRUCTURE', 1, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('STRUCTURE', 2, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('STRUCTURE', 3, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMATC', 0, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMATC', 1, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMATC', 2, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMATC', 3, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMATC', 4, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMATC', 5, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMATC', 6, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMATC', 7, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMATC', 8, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMATC', 9, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMATC', 10, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMATC', 11, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMATC', 12, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMATC', 13, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMAT', 0, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMAT', 1, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMAT', 2, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMAT', 3, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMAT', 4, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMAT', 5, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMAT', 6, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMAT', 7, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMAT', 8, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMAT', 9, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMAT', 10, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMAT', 11, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMAT', 12, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMAT', 13, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMAT', 14, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMAT', 15, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMAT', 16, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMAT', 17, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('FORMAT', 18, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('LIST', 0, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('LIST', 1, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('LIST', 2, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('LIST', 3, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('LIST', 4, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('LIST', 5, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('LIST', 6, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('LIST', 7, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('LIST', 8, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('LIST', 9, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('LIST', 10, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('LIST', 11, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('SUPPORT', 0, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('SUPPORT', 1, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('SUPPORT', 2, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('SUPPORT', 3, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('SUPPORT', 4, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('SUPPORT', 5, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('SUPPORT', 6, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('SUPPORT', 7, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('SUPPORT', 8, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('SUPPORT', 9, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('SUPPORT', 10, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('SECONDARY', 0, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('SECONDARY', 1, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('SECONDARY', 2, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('SECONDARY', 3, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('SECONDARY', 4, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('SECONDARY', 5, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('SECONDARY', 6, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('SECONDARY', 7, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('SECONDARY', 8, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('SECONDARY', 9, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('SECONDARY', 10, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('SECONDARY', 11, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('SECONDARY', 12, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('SECONDARY', 13, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('PRIMARY', 0, $value, $js, $id, $class, $label);
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
      return self::_elemenHTMLINLINE('PRIMARY', 1, $value, $js, $id, $class, $label);
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
      return self::_elemenHTMLINLINE('PRIMARY', 2, $value, $js, $id, $class, $label);
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
      return self::_elemenHTMLINLINE('PRIMARY', 3, $value, $js, $id, $class, $label);
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
      return self::_elemenHTMLINLINE('PRIMARY', 4, $value, $js, $id, $class, $label);
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
      return self::_elemenHTMLINLINE('PRIMARY', 5, $value, $js, $id, $class, $label);
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
      return self::_elemenHTMLINLINE('PRIMARY', 6, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('PRIMARY', 7, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('PRIMARY', 8, $value, $js, $id, $class, $label);
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
      return self::_elemenHTMLINLINE('PRIMARY', 9, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('PRIMARY', 10, $value, $js, $id, $class, $label);
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
      return self::_elemenHTMLINLINE('PRIMARY', 11, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('PRIMARY', 12, $value, $js, $id, $class, $label);
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
      return self::_elemenHTMLINLINE('PRIMARY', 13, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('PRIMARY', 14, $value, $js, $id, $class, $label);
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
      return self::_elemenHTMLINLINE('PRIMARY', 15, $value, $js, $id, $class, $label);
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
       return self::_elemenHTMLINLINE('PRIMARY', 16, $value, $js, $id, $class, $label);
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
      return self::_elemenHTMLINLINE('PRIMARY', 17, $value, $js, $id, $class, $label);
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

static protected function _setReturnINLINELEMENT($elem, $js, $id, $class,$assoc){

   $elem = self::_setINLINELEMENTS($elem);

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
       return self::return_inline_element('INLINE', 0, $js, $id, $class, $assoc);
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
       return self::return_inline_element('INLINE', 1, $js, $id, $class, $assoc);
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
       return self::return_inline_element('INLINE', 2, $js, $id, $class, $assoc);
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
       return self::return_inline_element('INLINE', 3, $js, $id, $class, $assoc);
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
       return self::return_inline_element('INLINE', 4, $js, $id, $class, $assoc);
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
       return self::return_inline_element('INLINE', 5, $js, $id, $class, $assoc);
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
       return self::return_inline_element('INLINE', 6, $js, $id, $class, $assoc);
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
       return self::return_inline_element('INLINE', 7, $js, $id, $class, $assoc);
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
       return self::return_inline_element('INLINE', 8, $js, $id, $class, $assoc);
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
       return self::return_inline_element('INLINE', 9, $js, $id, $class, $assoc);
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
       return self::return_inline_element('INLINE', 10, $js, $id, $class, $assoc);
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
       return self::return_inline_element('INLINE', 11, $js, $id, $class, $assoc);
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
       return self::return_inline_element('INLINE', 12, $js, $id, $class, $assoc);
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
       return self::return_inline_element('INLINE', 13, $js, $id, $class, $assoc);
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
       return self::return_inline_element('INLINE', 14, $js, $id, $class, $assoc);
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

