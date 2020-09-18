<img src="https://scontent.fmnl3-1.fna.fbcdn.net/v/t1.0-9/119389723_1181335685573316_2339548645504738190_n.jpg?_nc_cat=103&_nc_sid=730e14&_nc_eui2=AeFjNkrFhVNjcxR9W-QtwMKG_uGjgyCAqLH-4aODIICosd7orVRodvpIVMgnCL6x0pJ5epFA3U6mpHBm2VkJl7vc&_nc_ohc=VqXGzZi2mvkAX8_tiLn&_nc_ht=scontent.fmnl3-1.fna&oh=0e70840c2f5ec7a5d20b5b94739a5b8a&oe=5F8768AA">
<h6>Support PHP v7.0++ higher | not work for v.7 less</h6>
<h6>PHPHtml-Optimizer is a PHP FREE library that will help PHP/Developer/Programmer beautiful and optimize codes. </h6>
<p>It is simplified the code from HTML removing spending time to add backticks, double quote and saving time to convert or wrap HTML into PHP through appended variables although appending in the variable will be still possible using for some reason within your codes, PHPHtml-Optimizer is easier to optimize your codes lessen big page-load to your application/program.<br />
When the browser sense that there will no HTML printed the interpreter will execute your codes once at the same time, not section by section at that point your data will be rendered accurately.<br /><br />
To optimize code is a hassle and heavy load burden in programming, PHPHtml-Optimizer will do that for you while you develop your Internet application, with this library will push you driving your codes learning the OOP concept to make more effective your codes into your application neat and clean not just clean but beautiful maintainable codes, you can use this library and feel FREE if are comfortable.    
</p>
<h4>Installing PHPHtml-Optimizer</h4>
<pre>
// Require file in header file or in every page where you will use. 
// This is for Static method settup which most use on pages
require_once '/library/PHPHtml-Optimizer.php';
<br />
// do HTML 
Html::H1('Hello World!');
</pre>
<h4>Installing PHPHtml-Optimizer w/Composer</h4>
<pre>
// Run Command line directory with your project folder
~ C:/path/www/project/
<br />
// Run command
~ composer require phphtml-optimizer/phphtml-optimizer
<br />
// This is for Static method settup which most use on pages
require_once '/library/PHPHtml-Optimizer.php';

// do HTML 
Html::H1('Hello World!');

// Within the Class
$Html = new  \PHPHtml\CodeOptimizer\Html();  
...
$this->$Html->H2('Hello World!');

</pre>
<h4>Folder Structure:</h4>
<pre>
|- root folder
  |- library
    |- PHPHtml-Optimizer
       |- onClass
       |- onPage
       |- PHPHtml-optimizer.php
       |- prop.php
  |- assets
  |- includes
  |- etc..
  </pre>

<h4>Sample Code | PHP with HTML Default (Wrapping Html)/Procedural</h4>
<pre>
<?php 

$html   = ""; 
$html  .= "<ul id=\\"My_id_ParentTags\\" class=\\"MyClass\\">";
    
    $datas = [];
    for ($i = 1; $i <= 10; $i++) 
    { 
     $datas[] = "<li class=\"col-sm-3\" id=\"MyList\">Count Number. " $i . "</li>";  
    }
    return implode('', $datas); 
    
$html  .= "</ul>";
// Loop and excuted
print $html;
?>
</pre>

<h4>Sample Code | PHPHtml-Optimizer /Procedural</h4>
<pre>
<?php 

 function my_data() {     
  $datas = [];
    for ($i = 1; $i <= 10; $i++) 
    {
       $datas[] = html::ELEMENT('LI',$i,NULL,'myID','MyCLass',NULL); 
    }
     return implode('', $datas);  
  }
  // ASSOCIATED WITH FUNCTION | METHOD | CLASS it is seta s return (need echo or print)  
  echo Html::ELEMENT('UL',my_data(),NULL,'MyID','MyCLass'); 
?>
</pre>

<h5>Understanding Class Method Parameters</h5>

| PARAMETER'S    | Description |
| ---            | ---         |
| `METHOD_ASSOC` | Is a Paramenter that will use and position to the very end of function or methods none/Associated |
| `CLASS_ASSOC`  | Is a Paramenter that will use and position to the very end of function or methods none/Associated |
| `FUNC_ASSOC`   | Is a Paramenter that will use and position to the very end of function or methods none/Associated |

| Magic Method Alpha    | Description |
| ---            | ---         |
| `__magicELSE` | This Append Method is alpha version not stable and not recommend to use / alternative ternary |
| `__magicIF`  | This Append Method is alpha version not stable and not recommend to use / alternative ternary |
| `__magicELEMENT`   | This Append Method is alpha version not stable and not recommend to use / it will remove soon |
| `_MERGE`   | This Append Method is alpha version not stable and not recommend to use / it will remove soon |
| `_PERFORM`   | This Append Method is alpha version not stable and not recommend to use / alternative echo/print |

<h5>Usage: withinClass | Instantiate Class Methods</h5>
<pre>
$Html = new  \PHPHtml\CodeOptimizer\Html();  
...
echo $Html->H2('Test H2');
# OR
USE  \PHPHtml\CodeOptimizer\Html AS MyProjectName; 
...
$Html = NEW MyProjectName();
...
echo $Html->H2('Test H2');
</pre>

<h5>Usage: Static | More Samples with Parameters</h5>
<pre>
// Html Custom attributes:
 function my_htmattr() {
    return $sets = [
      $attr_name = ['1','2'],
      $attr_val  = ['_niel_','_fernandez_'];  
    ];
 }
 
Print html::H1("Heading Title_FUNC_ASSOC",  my_htmattr() ,'MyID','MyClass','MyLabel',FUNC_ASSOC);
      html::H1("Heading Title_FUNC_ASSOC",  my_htmattr() ,'MyID','MyClass','MyLabel',METHOD_ASSOC); 
    
// NULL use outside of function 
html::H1("Sample_echo ",    my_htmattr(),'MyID','MyClass','MyLabel', NULL); 

Print html::H1(html::STRING("Heading Title_FUNC_ASSOC", FUNC_ASSOC), my_htmattr(),'MyID','MyClass','',FUNC_ASSOC);
      html::H1("Heading Title_FUNC_ASSOC ", my_htmattr(),'MyID','MyClass','',FUNC_ASSOC); 

// NULL use outside of function 
html::H1("Sample_echo ", my_htmattr(),'MyID','MyClass','', NULL); 
</pre>

<h5>Static ELEMENTS and parameters </h5>
<pre>
Html::H1($content=null, $attr=[], $id=null, $class=null, $label=null, $assoc=null)
<br />
Html::ELEMENT($element=null, $content=null, $attr=[], $id=null, $class=null, $label=null)
<br />
Html::_ELEMENT($label=null, $elem=null, $attr=[], $id=null, $class=null, $assoc=null)
<br />
Html::_H1($attr=[], $id=null, $class=null)<br />
... content goes here ...<br />
Html::xH1($label=null)
</pre>

<h5>On Page | Static Methods</h5>

|Opt./ASSOCIATED | HTML/Descript. | ASSOCIATED     | Inline noneClosing/ASSOCIATED |  None ASSOCIATED _H1(begin)/xH1(end) |
|:---            |:---            |:---            |:---                           |:---              |
| `Html::BREAK()`  | Break          | `Html::ELEMENT('H1')`    |`Html::_ELEMENT('my_input','INPUT')`|`Html::_H1()`/`Html::xH1()`|
| `Html::LINE()`   | Line           | `Html::ELEMENT('H2')`    |`Html::_ELEMENT('my_track','track')`|`Html::_H2()`/`Html::xH2()`|
| `Html::STRING()` | wout/Element   | `Html::ELEMENT('H3')`    |`Html::_ELEMENT('my_circle','circle')`|`Html::_H3()`/`Html::xH3()`|
| `Html::H1()`     | Heading 1      | `Html::ELEMENT('H4')`    |`Html::_ELEMENT('my_param','param')`|`Html::_H4()`/`Html::xH4()`|
| `Html::H2()`     | Heading 2      | `Html::ELEMENT('H5')`    |`Html::_ELEMENT('my_meta','meta')`|`Html::_H5()`/`Html::xH5()`|
| `Html::H3()`     | Heading 3      | `Html::ELEMENT('H6')`    |`Html::_ELEMENT('my_link','link')`|`Html::_H6()`/`Html::xH6()`|
| `Html::H4()`     | Heading 4      | `Html::ELEMENT('H1')`    |`Html::_ELEMENT('my_img','img')`|`Html::_DIV()`/`Html::xDIV()`|
| `Html::H5()`     | Heading 5      | `Html::ELEMENT('BUTTON')` | `Html::_ELEMENT('my_embed','embed')`|`Html::_P()`/`Html::xP()`|
| `Html::H6()`     | Heading 6      | `Html::ELEMENT('A')`     | `Html::_ELEMENT('my_option','option')`|`Html::_BUTTON()`/`Html::xBUTTON()`|
| `Html::DIV()`    | Element        | `Html::ELEMENT('IFRAME')`| `Html::_ELEMENT('my_col','col')`| `Html::_A()`/`Html::xA()`|
| `Html::P()`      | Paragraph      | `Html::ELEMENT('MAIN')`    | `Html::_ELEMENT('my_base','base')`| `Html::_IFRAME()`/`Html::xIFRAME()`|
| `Html::BUTTON()` | Element        | `Html::ELEMENT('NAV')`    | `Html::_ELEMENT('my_aside','aside')`|`Html::_MAIN()`/`Html::xMAIN()`|
| `Html::A()`      | Link Element   | `Html::ELEMENT('SELECT')`    | `Html::_ELEMENT('my_area','area')`| `Html::_NAV()`/`Html::xNAV()`|
| `Html::IFRAME()` | Element        | `Html::ELEMENT('FORM')` |  `Html::_ELEMENT('my_DOCTYPE','DOCTYPE')`| `Html::_SELECT()`/`Html::xSELECT()`|
| `Html::IFRAME()` | Element        | `Html::ELEMENT('PICTURE')`    |   | `Html::_FORM()`/`Html::xFORM()`|
| `Html::MAIN()`   | Element        | `Html::ELEMENT('SECTION')`    |   | `Html::_PICTURE()`/`Html::xPICTURE()`|
| `Html::NAV()`    | Element        | `Html::ELEMENT('TEXTAREA')`    |  | `Html::_SECTION()`/`Html::xSECTION()`|
| `Html::SELECT()` | Element        | `Html::ELEMENT('AUDIO')`    |   | `Html::_TEXTAREA()`/`Html::xTEXTAREA()`|
| `Html::FORM()`   | Element        | `Html::ELEMENT('VIDEO')`    |   | `Html::_AUDIO()`/`Html::xAUDIO()`|
| `Html::PICTURE()`| Element        | `Html::ELEMENT('ADDRESS')`    |  | `Html::_VIDEO()`/`Html::xVIDEO()`|
| `Html::SECTION()`| Element        | `Html::ELEMENT('COLGROUP')`    |  | `Html::_ADDRESS()`/`Html::xADDRESS()`|
| `Html::TEXTAREA()`| Element        | `Html::ELEMENT('BDI')`    | | `Html::_COLGROUP()`/`Html::xCOLGROUP()`|
| `Html::AUDIO()`| Element        | `Html::ELEMENT('BDO')`    |  | `Html::_BDI()`/`Html::xBDI()`|
| `Html::VIDEO()`| Element        | `Html::ELEMENT('CAPTION')` |  | `Html::_BDO()`/`Html::xBDO()`|
| `Html::ADDRESS()`| Element        | `Html::ELEMENT('LABEL')`    |  | `Html::_BLOCKQUOTE()`/`Html::xBLOCKQUOTE()`|
| `Html::COLGROUP()`| Element        | `Html::ELEMENT('DATALIST')`    |  | `Html::_CAPTION()`/`Html::xCAPTION()`|
| `Html::BDI()`| Element        | `Html::ELEMENT('DETAILS')`    |  | `Html::_LABEL()`/`Html::xLABEL()`|
| `Html::BDO()`| Element        | `Html::ELEMENT('SUMMARY')` |   | `Html::_DATALIST()`/`Html::xDATALIST()`|
| `Html::BLOCKQUOTE()`| Element        | `Html::ELEMENT('DIALOG')` |  | `Html::_DETAILS()`/`Html::xDETAILS()`|
| `Html::CAPTION()`| Element        | `Html::ELEMENT('OPTION')` |   | `Html::_SUMMARY()`/`Html::xSUMMARY()`|
| `Html::LABEL()`| Element        | `Html::ELEMENT('FIGURE')` |   | `Html::_DIALOG()`/`Html::xDIALOG()`|
| `Html::DATALIST()`| Element        | `Html::ELEMENT('FIGCAPTION')` |  | `Html::_OPTION()`/`Html::xOPTION()`|
| `Html::DETAILS()`| Element        | `Html::ELEMENT('METER')` | | `Html::_FIGURE()`/`Html::xFIGURE()`|
| `Html::SUMMARY()`| Element        | `Html::ELEMENT('OBJECT')`    |  | `Html::_FIGCAPTION()`/`Html::xFIGCAPTION()`|
| `Html::DIALOG()`| Element        | `Html::ELEMENT('OPTGROUP')`    | | `Html::_METER()`/`Html::xMETER()`|
| `Html::OPTION()`| Element        | `Html::ELEMENT('OUTPUT')`    |  | `Html::_OBJECT()`/`Html::xOBJECT()`|
| `Html::FIGURE()`| Element        | `Html::ELEMENT('PROGRESS')`    | | `Html::_OPTGROUP()`/`Html::xOPTGROUP()`|
| `Html::FIGCAPTION()`| Element        | `Html::ELEMENT('SVG')`    | | `Html::_OUTPUT()`/`Html::xOUTPUT()`|
| `Html::METER()`| Element        | `Html::ELEMENT('TEMPLATE')` | | `Html::_PROGRESS()`/`Html::xPROGRESS()`|
| `Html::OBJECT()`| Element        | `Html::ELEMENT('TIME')` |  | `Html::_SVG()`/`Html::xSVG()`|
| `Html::OPTGROUP()`| Element        | `Html::ELEMENT('VAR')` |  | `Html::_TEMPLATE()`/`Html::xTEMPLATE()`|
| `Html::OUTPUT()`| Element        | `Html::ELEMENT('UL')` |  | `Html::_TIME()`/`Html::xTIME()`|
| `Html::PROGRESS()`| Element        | `Html::ELEMENT('OL')` |  | `Html::_VAR()`/`Html::xVAR()`|
| `Html::SVG()`| Element        | `Html::ELEMENT('LI')` |   | `Html::_UL()`/`Html::xUL()`|
| `Html::TEMPLATE()`| Element        | `Html::ELEMENT('TABLE')` | | `Html::_OL()`/`Html::xOL()`|
| `Html::TIME()`| Element        | `Html::ELEMENT('TR')`    | | `Html::_LI()`/`Html::xLI()`|
| `Html::VAR()`| Element        | `Html::ELEMENT('TD')`    |  | `Html::_TABLE()`/`Html::xTABLE()`|
| `Html::UL()`| Element        | `Html::ELEMENT('TH')`|  | `Html::_TR()`/`Html::xTR()`|
| `Html::OL()`| Element        | `Html::ELEMENT('LEGEND')`    |  | `Html::_TD()`/`Html::xTD()`|
| `Html::LI()`| Element        | `Html::ELEMENT('FIELDSET')`    |  | `Html::_TH()`/`Html::xTH()`|
| `Html::TABLE()`| Element        | `Html::ELEMENT('TBODY')`    |  | `Html::_LEGEND()`/`Html::xLEGEND()`|
| `Html::TR()`| Element        | `Html::ELEMENT('TFOOT')` |   | `Html::_FIELDSET()`/`Html::xFIELDSET()`|
| `Html::TD()`| Element        | `Html::ELEMENT('THEAD')` |  | `Html::_TBODY()`/`Html::xTBODY()`|
| `Html::TH()`| Element        | `Html::ELEMENT('SPAN')` |  | `Html::_TFOOT()`/`Html::xTFOOT()`|
| `Html::LEGEND()`| Element        | `Html::ELEMENT('EM')` |  | `Html::_THEAD()`/`Html::xTHEAD()`|
| `Html::FIELDSET()`| Element        | `Html::ELEMENT('B')` |  | `Html::_SPAN()`/`Html::xSPAN()`|  
| `Html::TBODY()`| Element        | `Html::ELEMENT('I')` |    | `Html::_EM()`/`Html::xEM()`|
| `Html::TFOOT()`| Element        | `Html::ELEMENT('SMALL')` |  | `Html::_B()`/`Html::xB()`|
| `Html::THEAD()`| Element        | `Html::ELEMENT('MARQUEE')`    | | `Html::_I()`/`Html::xI()`|
| `Html::SPAN()`| Element        | `Html::ELEMENT('CENTER')` |  | `Html::_SMALL()`/`Html::xSMALL()`|
| `Html::EM()`| Element        | `Html::ELEMENT('CODE')` |   | `Html::_STRIKE()`/`Html::xSTRIKE()`|
| `Html::B()`| Element        | `Html::ELEMENT('ABBR')` |  | `Html::_MARQUEE()`/`Html::xMARQUEE()`|
| `Html::I()`| Element        | `Html::ELEMENT('MAP')` |   | `Html::_CENTER()`/`Html::xCENTER()`|
| `Html::SMALL()`| Element        | `Html::ELEMENT('CANVAS')` |  | `Html::_ABBR()`/`Html::xABBR()`|
| `Html::MARQUEE()`| Element        | `Html::ELEMENT('CITE')` |  | `Html::_MAP()`/`Html::xMAP()`|
| `Html::CENTER()`| Element        | `Html::ELEMENT('DATA')` |  | `Html::_CANVAS()`/`Html::xCANVAS()`|
| `Html::CODE()`| Element        | `Html::ELEMENT('DL')` |    | `Html::_CITE()`/`Html::xCITE()`|
| `Html::ABBR()`| Element        | `Html::ELEMENT('DT')` |   |`Html::_DATA()`/`Html::xDATA()`|
| `Html::MAP()`| Element        | `Html::ELEMENT('DD')` |   |`Html::_DL()`/`Html::xDL()`|
| `Html::CANVAS()`| Element        | `Html::ELEMENT('INS')`|  |`Html::_DT()`/`Html::xDT()`|
| `Html::CITE()`| Element        | `Html::ELEMENT('DEL')` |  |`Html::_DD()`/`Html::xDD()`|
| `Html::DATA()`| Element        | `Html::ELEMENT('KBD')` |  |`Html::_DFN()`/`Html::xDFN()`|
| `Html::DL()`| Element        | `Html::ELEMENT('MARK')` |  |`Html::_INS()`/`Html::xINS()`|
| `Html::DT()`| Element        | `Html::ELEMENT('PRE')` |   |`Html::_DEL()`/`Html::xDEL()`|
| `Html::DD()`| Element        | `Html::ELEMENT('RT')`    |  |`Html::_KBD()`/`Html::xKBD()`|
| `Html::DFN()`| Element        | `Html::ELEMENT('RP')` |   |`Html::_MARK()`/`Html::xMARK()`|
| `Html::INS()`| Element        | `Html::ELEMENT('S')` |   |`Html::_PRE()`/`Html::xPRE()`|
| `Html::DEL()`| Element        | `Html::ELEMENT('SAMP')` |  |`Html::_RT()`/`Html::xRT()`|
| `Html::KBD()`| Element        | `Html::ELEMENT('STRONG')` |  |`Html::_RP()`/`Html::xRP()`|
| `Html::MARK()`| Element        | `Html::ELEMENT('SUB')`    |   |`Html::_S()`/`Html::xS()`|
| `Html::PRE()`| Element        | `Html::ELEMENT('SUP')` |   |`Html::_SAMP()`/`Html::xSAMP()`|
| `Html::RT()`| Element        | `Html::ELEMENT('WBR')`    |  |`Html::_STRONG()`/`Html::xSTRONG()`|
| `Html::RP()`| Element        | `Html::ELEMENT('Q')` |   |`Html::_SUB()`/`Html::xSUB()`|
| `Html::S()`| Element        | `Html::ELEMENT('HEAD')` |  |`Html::_SUP()`/`Html::xSUP()`|
| `Html::SAMP()`| Element        | `Html::ELEMENT('TITLE')`  |  |`Html::_WBR()`/`Html::xWBR()`|
| `Html::STRONG()`| Element        | `Html::ELEMENT('BODY')` |  |`Html::_Q()`/`Html::xQ()`|
| `Html::SUB()`| Element        | `Html::ELEMENT('HTML')`    |  |`Html::_HEAD()`/`Html::xHEAD()`|
| `Html::SUP()`| Element        | `Html::ELEMENT('BLOCKQUOTE')`    |  |`Html::_TITLE()`/`Html::xTITLE()`|
| `Html::WBR()`| Element        |       |  |`Html::_BODY()`/`Html::xBODY()`|
| `Html::Q()`| Element          |       |  |`Html::_noHTML()`/`Html::xnoHTML()`|
| `Html::HEAD()`| Element        |      |  |
| `Html::TITLE()`| Element       |      |  |
| `Html::BODY()`| Element        |      |  |
| `Html::noHTML()`| Element      |      |  |



<br />
This Library is 100% secured and fully free ready to use, If you see vulnerability you can email me: @ nieldigitalsolution@gmail.com
Thanks and good luck! 








































































