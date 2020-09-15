<img src="https://scontent.fmnl6-1.fna.fbcdn.net/v/t1.0-9/119389723_1181335685573316_2339548645504738190_n.jpg?_nc_cat=103&_nc_sid=730e14&_nc_eui2=AeFjNkrFhVNjcxR9W-QtwMKG_uGjgyCAqLH-4aODIICosd7orVRodvpIVMgnCL6x0pJ5epFA3U6mpHBm2VkJl7vc&_nc_ohc=1-lmJHUU9qsAX_Fd64w&_nc_ht=scontent.fmnl6-1.fna&oh=1b9506035142159b296df574428bbf57&oe=5F8768AA" />
<h2>PHPHtml-Optimizer v1.0 Cooked by nielsoffice </h2>
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
require_once 'PHPHtml-Optimizer.php';

// do HTML 
Html::H1('Hello World!');

// Within the Class
$Html = new  \PHPHtml\CodeOptimizer\Html();  
...
$this->$Html->H2('Test H2');

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
       $datas[] = html::ELEMENT('LI',$i,NULL,'myID',MyCLass,NULL); 
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
 
Print html::H1("Heading Title_FUNC_ASSOC",  my_htmattr() ,'MyID','MyClass','MyLabel','FUNC_ASSOC');
      html::H1("Heading Title_FUNC_ASSOC",  my_htmattr() ,'MyID','MyClass','MyLabel','METHOD_ASSOC'); 
    
// NULL use outside of function 
html::H1("Sample_echo ",    my_htmattr(),'MyID','MyClass','MyLabel', NULL); 

Print html::H1(html::STRING("Heading Title_FUNC_ASSOC", 'FUNC_ASSOC'), my_htmattr(),'MyID','MyClass','','FUNC_ASSOC');
      html::H1("Heading Title_FUNC_ASSOC ", my_htmattr(),'MyID','MyClass','','FUNC_ASSOC'); 

// NULL use outside of function 
html::H1("Sample_echo ", my_htmattr(),'MyID','MyClass','', NULL); 
</pre>

<h5>On Page | Static Methods</h5>

|Opt./ASSOCIATED | HTML/Descript. | ASSOCIATED | Inline noneClosing/ASSOCIATED |  None ASSOCIATED |
|:---            |:---            |:---            |:---            |:---            |
| `Html::BREAK()`  | Break          | `Html::ELEMENT('H1')`    |`Html::_ELEMENT('my_input','INPUT')`|`Html::openH1()`/`Html::closeH1()`|
| `Html::LINE()`   | Line           | `Html::ELEMENT('H2')`    |`Html::_ELEMENT('my_track','track')`|`Html::openH2()`/`Html::closeH2()`|
| `Html::STRING()` | wout/Element   | `Html::ELEMENT('H3')`    |`Html::_ELEMENT('my_circle','circle')`|`Html::openH3()`/`Html::closeH3()`|
| `Html::H1()`     | Heading 1      | `Html::ELEMENT('H4')`    |`Html::_ELEMENT('my_param','param')`|`Html::openH4()`/`Html::closeH4()`|
| `Html::H2()`     | Heading 2      | `Html::ELEMENT('H5')`    |`Html::_ELEMENT('my_meta','meta')`|`Html::openH5()`/`Html::closeH5()`|
| `Html::H3()`     | Heading 3      | `Html::ELEMENT('H6')`    |`Html::_ELEMENT('my_link','link')`|`Html::openH6()`/`Html::closeH6()`|
| `Html::H4()`     | Heading 4      | `Html::ELEMENT('H1')`    |`Html::_ELEMENT('my_img','img')`|`Html::openDIV()`/`Html::closeDIV()`|
| `Html::H5()`     | Heading 5      | `Html::ELEMENT('BUTTON')` | `Html::_ELEMENT('my_embed','embed')`|`Html::openP()`/`Html::closeP()`|
| `Html::H6()`     | Heading 6      | `Html::ELEMENT('A')`     | `Html::_ELEMENT('my_option','option')`|`Html::openBUTTON()`/`Html::closeBUTTON()`|
| `Html::DIV()`    | Element        | `Html::ELEMENT('IFRAME')`| `Html::_ELEMENT('my_col','col')`| `Html::openA()`/`Html::closeA()`|
| `Html::P()`      | Paragraph      | `Html::ELEMENT('MAIN')`    | `Html::_ELEMENT('my_base','base')`| `Html::openIFRAME()`/`Html::closeIFRAME()`|
| `Html::BUTTON()` | Element        | `Html::ELEMENT('NAV')`    | `Html::_ELEMENT('my_aside','aside')`|`Html::openMAIN()`/`Html::closeMAIN()`|
| `Html::A()`      | Link Element   | `Html::ELEMENT('SELECT')`    | `Html::_ELEMENT('my_area','area')`| `Html::openNAV()`/`Html::closeNAV()`|
| `Html::IFRAME()` | Element        | `Html::ELEMENT('FORM')` |  `Html::_ELEMENT('my_DOCTYPE','DOCTYPE')`| `Html::openSELECT()`/`Html::closeSELECT()`|
| `Html::IFRAME()` | Element        | `Html::ELEMENT('PICTURE')`    |   | `Html::openFORM()`/`Html::closeFORM()`|
| `Html::MAIN()`   | Element        | `Html::ELEMENT('SECTION')`    |   | `Html::openPICTURE()`/`Html::closePICTURE()`|
| `Html::NAV()`    | Element        | `Html::ELEMENT('TEXTAREA')`    |  | `Html::openSECTION()`/`Html::closeSECTION()`|
| `Html::SELECT()` | Element        | `Html::ELEMENT('AUDIO')`    |   | `Html::openTEXTAREA()`/`Html::closeTEXTAREA()`|
| `Html::FORM()`   | Element        | `Html::ELEMENT('VIDEO')`    |   | `Html::openAUDIO()`/`Html::closeAUDIO()`|
| `Html::PICTURE()`| Element        | `Html::ELEMENT('ADDRESS')`    |  | `Html::openVIDEO()`/`Html::closeVIDEO()`|
| `Html::SECTION()`| Element        | `Html::ELEMENT('COLGROUP')`    |  | `Html::openADDRESS()`/`Html::closeADDRESS()`|
| `Html::TEXTAREA()`| Element        | `Html::ELEMENT('BDI')`    | | `Html::openCOLGROUP()`/`Html::closeCOLGROUP()`|
| `Html::AUDIO()`| Element        | `Html::ELEMENT('BDO')`    |  | `Html::openBDI()`/`Html::closeBDI()`|
| `Html::VIDEO()`| Element        | `Html::ELEMENT('CAPTION')` |  | `Html::openBDO()`/`Html::closeBDO()`|
| `Html::ADDRESS()`| Element        | `Html::ELEMENT('LABEL')`    |  | `Html::openBLOCKQUOTE()`/`Html::closeBLOCKQUOTE()`|
| `Html::COLGROUP()`| Element        | `Html::ELEMENT('DATALIST')`    |  | `Html::openCAPTION()`/`Html::closeCAPTION()`|
| `Html::BDI()`| Element        | `Html::ELEMENT('DETAILS')`    |  | `Html::openLABEL()`/`Html::closeLABEL()`|
| `Html::BDO()`| Element        | `Html::ELEMENT('SUMMARY')` |   | `Html::openDATALIST()`/`Html::closeDATALIST()`|
| `Html::BLOCKQUOTE()`| Element        | `Html::ELEMENT('DIALOG')` |  | `Html::openDETAILS()`/`Html::closeDETAILS()`|
| `Html::CAPTION()`| Element        | `Html::ELEMENT('OPTION')` |   | `Html::openSUMMARY()`/`Html::closeSUMMARY()`|
| `Html::LABEL()`| Element        | `Html::ELEMENT('FIGURE')` |   | `Html::openDIALOG()`/`Html::closeDIALOG()`|
| `Html::DATALIST()`| Element        | `Html::ELEMENT('FIGCAPTION')` |  | `Html::openOPTION()`/`Html::closeOPTION()`|
| `Html::DETAILS()`| Element        | `Html::ELEMENT('METER')` | | `Html::openFIGURE()`/`Html::closeFIGURE()`|
| `Html::SUMMARY()`| Element        | `Html::ELEMENT('OBJECT')`    |  | `Html::openFIGCAPTION()`/`Html::closeFIGCAPTION()`|
| `Html::DIALOG()`| Element        | `Html::ELEMENT('OPTGROUP')`    | | `Html::openMETER()`/`Html::closeMETER()`|
| `Html::OPTION()`| Element        | `Html::ELEMENT('OUTPUT')`    |  | `Html::openOBJECT()`/`Html::closeOBJECT()`|
| `Html::FIGURE()`| Element        | `Html::ELEMENT('PROGRESS')`    | | `Html::openOPTGROUP()`/`Html::closeOPTGROUP()`|
| `Html::FIGCAPTION()`| Element        | `Html::ELEMENT('SVG')`    | | `Html::openOUTPUT()`/`Html::closeOUTPUT()`|
| `Html::METER()`| Element        | `Html::ELEMENT('TEMPLATE')` | | `Html::openPROGRESS()`/`Html::closePROGRESS()`|
| `Html::OBJECT()`| Element        | `Html::ELEMENT('TIME')` |  | `Html::openSVG()`/`Html::closeSVG()`|
| `Html::OPTGROUP()`| Element        | `Html::ELEMENT('VAR')` |  | `Html::openTEMPLATE()`/`Html::closeTEMPLATE()`|
| `Html::OUTPUT()`| Element        | `Html::ELEMENT('UL')` |  | `Html::openTIME()`/`Html::closeTIME()`|
| `Html::PROGRESS()`| Element        | `Html::ELEMENT('OL')` |  | `Html::openVAR()`/`Html::closeVAR()`|
| `Html::SVG()`| Element        | `Html::ELEMENT('LI')` |   | `Html::openUL()`/`Html::closeUL()`|
| `Html::TEMPLATE()`| Element        | `Html::ELEMENT('TABLE')` | | `Html::openOL()`/`Html::closeOL()`|
| `Html::TIME()`| Element        | `Html::ELEMENT('TR')`    | | `Html::openLI()`/`Html::closeLI()`|
| `Html::VAR()`| Element        | `Html::ELEMENT('TD')`    |  | `Html::openTABLE()`/`Html::closeTABLE()`|
| `Html::UL()`| Element        | `Html::ELEMENT('TH')`|  | `Html::openTR()`/`Html::closeTR()`|
| `Html::OL()`| Element        | `Html::ELEMENT('LEGEND')`    |  | `Html::openTD()`/`Html::closeTD()`|
| `Html::LI()`| Element        | `Html::ELEMENT('FIELDSET')`    |  | `Html::openTH()`/`Html::closeTH()`|
| `Html::TABLE()`| Element        | `Html::ELEMENT('TBODY')`    |  | `Html::openLEGEND()`/`Html::closeLEGEND()`|
| `Html::TR()`| Element        | `Html::ELEMENT('TFOOT')` |   | `Html::openFIELDSET()`/`Html::closeFIELDSET()`|
| `Html::TD()`| Element        | `Html::ELEMENT('THEAD')` |  | `Html::openTBODY()`/`Html::closeTBODY()`|
| `Html::TH()`| Element        | `Html::ELEMENT('SPAN')` |  | `Html::openTFOOT()`/`Html::closeTFOOT()`|
| `Html::LEGEND()`| Element        | `Html::ELEMENT('EM')` |  | `Html::openTHEAD()`/`Html::closeTHEAD()`|
| `Html::FIELDSET()`| Element        | `Html::ELEMENT('B')` |  | `Html::openSPAN()`/`Html::closeSPAN()`|  
| `Html::TBODY()`| Element        | `Html::ELEMENT('I')` |    | `Html::openEM()`/`Html::closeEM()`|
| `Html::TFOOT()`| Element        | `Html::ELEMENT('SMALL')` |  | `Html::openB()`/`Html::closeB()`|
| `Html::THEAD()`| Element        | `Html::ELEMENT('MARQUEE')`    | | `Html::openI()`/`Html::closeI()`|
| `Html::SPAN()`| Element        | `Html::ELEMENT('CENTER')` |  | `Html::openSMALL()`/`Html::closeSMALL()`|
| `Html::EM()`| Element        | `Html::ELEMENT('CODE')` |   | `Html::openSTRIKE()`/`Html::closeSTRIKE()`|
| `Html::B()`| Element        | `Html::ELEMENT('ABBR')` |  | `Html::openMARQUEE()`/`Html::closeMARQUEE()`|
| `Html::I()`| Element        | `Html::ELEMENT('MAP')` |   | `Html::openCENTER()`/`Html::closeCENTER()`|
| `Html::SMALL()`| Element        | `Html::ELEMENT('CANVAS')` |  | `Html::openABBR()`/`Html::closeABBR()`|
| `Html::MARQUEE()`| Element        | `Html::ELEMENT('CITE')` |  | `Html::openMAP()`/`Html::closeMAP()`|
| `Html::CENTER()`| Element        | `Html::ELEMENT('DATA')` |  | `Html::openCANVAS()`/`Html::closeCANVAS()`|
| `Html::CODE()`| Element        | `Html::ELEMENT('DL')` |    | `Html::openCITE()`/`Html::closeCITE()`|
| `Html::ABBR()`| Element        | `Html::ELEMENT('DT')` |   |`Html::openDATA()`/`Html::closeDATA()`|
| `Html::MAP()`| Element        | `Html::ELEMENT('DD')` |   |`Html::openDL()`/`Html::closeDL()`|
| `Html::CANVAS()`| Element        | `Html::ELEMENT('INS')`|  |`Html::openDT()`/`Html::closeDT()`|
| `Html::CITE()`| Element        | `Html::ELEMENT('DEL')` |  |`Html::openDD()`/`Html::closeDD()`|
| `Html::DATA()`| Element        | `Html::ELEMENT('KBD')` |  |`Html::openDFN()`/`Html::closeDFN()`|
| `Html::DL()`| Element        | `Html::ELEMENT('MARK')` |  |`Html::openINS()`/`Html::closeINS()`|
| `Html::DT()`| Element        | `Html::ELEMENT('PRE')` |   |`Html::openDEL()`/`Html::closeDEL()`|
| `Html::DD()`| Element        | `Html::ELEMENT('RT')`    |  |`Html::openKBD()`/`Html::closeKBD()`|
| `Html::DFN()`| Element        | `Html::ELEMENT('RP')` |   |`Html::openMARK()`/`Html::closeMARK()`|
| `Html::INS()`| Element        | `Html::ELEMENT('S')` |   |`Html::openPRE()`/`Html::closePRE()`|
| `Html::DEL()`| Element        | `Html::ELEMENT('SAMP')` |  |`Html::openRT()`/`Html::closeRT()`|
| `Html::KBD()`| Element        | `Html::ELEMENT('STRONG')` |  |`Html::openRP()`/`Html::closeRP()`|
| `Html::MARK()`| Element        | `Html::ELEMENT('SUB')`    |   |`Html::openS()`/`Html::closeS()`|
| `Html::PRE()`| Element        | `Html::ELEMENT('SUP')` |   |`Html::openSAMP()`/`Html::closeSAMP()`|
| `Html::RT()`| Element        | `Html::ELEMENT('WBR')`    |  |`Html::openSTRONG()`/`Html::closeSTRONG()`|
| `Html::RP()`| Element        | `Html::ELEMENT('Q')` |   |`Html::openSUB()`/`Html::closeSUB()`|
| `Html::S()`| Element        | `Html::ELEMENT('HEAD')` |  |`Html::openSUP()`/`Html::closeSUP()`|
| `Html::SAMP()`| Element        | `Html::ELEMENT('TITLE')`  |  |`Html::openWBR()`/`Html::closeWBR()`|
| `Html::STRONG()`| Element        | `Html::ELEMENT('BODY')` |  |`Html::openQ()`/`Html::closeQ()`|
| `Html::SUB()`| Element        | `Html::ELEMENT('HTML')`    |  |`Html::openHEAD()`/`Html::closeHEAD()`|
| `Html::SUP()`| Element        | `Html::ELEMENT('BLOCKQUOTE')`    |  |`Html::openTITLE()`/`Html::closeTITLE()`|
| `Html::WBR()`| Element        |       |  |`Html::openBODY()`/`Html::closeBODY()`|
| `Html::Q()`| Element          |       |  |`Html::opennoHTML()`/`Html::closenoHTML()`|
| `Html::HEAD()`| Element        |      |  |
| `Html::TITLE()`| Element       |      |  |
| `Html::BODY()`| Element        |      |  |
| `Html::noHTML()`| Element      |      |  |



<br />
This Library is 100% secured and fully free ready to use, If you see vulnerability you can email me: @ nieldigitalsolution@gmail.com
Thanks and good luck! 








































































