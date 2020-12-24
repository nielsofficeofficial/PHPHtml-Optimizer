[![Codacy Badge](https://app.codacy.com/project/badge/Grade/9aa969ea8b1642588110cc72dd308343)](https://www.codacy.com/gh/nielsofficeofficial/PHPHtml-Optimizer/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=nielsofficeofficial/PHPHtml-Optimizer&amp;utm_campaign=Badge_Grade)

<h6>Support PHP v7.0++ higher | not work for v.7 less</h6>
<h6>PHPHtml-Optimizer is a PHP FREE library that will help PHP/Developer/Programmer beautiful and optimize codes. </h6>
<p>It is simplified the code from HTML removing backticks, double quotes and saving time to convert or wrap HTML into PHP through appended variables although appending in the variable will be still possible using for some reason within your codes, PHPHtml-Optimizer is easier to optimize your codes lessen big page-load to your application/program.<br />
When the browser detect that there will no HTML printed the interpreter will execute your codes once at the same time, not section by section at that point your data will be rendered accurately.<br /><br />
To refractor/optimize code is a hassle and heavy load burden in programming, Allow PHPHtml-Optimizer will do that for you while you develop your Internet application, with this library will push you driving your codes learning the OOP concept to make more effective your codes into your application neat and clean not just clean but beautiful maintainable codes, you can use this library and feel FREE if you are comfortable.    
</p>

<h6>Custom ATTR/ELEMENT</h6>

```PHP

// ATTR() VALID PARAMETERS
META | TITLE | LINK | SCRIPT | CUSTOM_END | BEGIN_CUSTOM_END

```

```PHP

// None closing inline element | PARAMETER : CUSTOM_END
ATTR('CUSTOM_END', [
 "NAME_OF_ELEMENT" => [ 'name' => "Value" ]
]);

```
 
```PHP

// With Closing Element | PARAMETER : BEGIN_CUSTOM_END  
ATTR('BEGIN_CUSTOM_END', [
 "NAME_OF_ELEMENT" => [ 'name' => "Value" ]
]);

```

<h4>Quick Start : <span>Copy and paste for header.php</span> </h4>

```PHP

USE \PHPHtml\CodeOptimizer\merge\Html;
USE \PHPHtml\CodeOptimizer\optimizer\Html AS Optimizer;
USE \PHPHtml\CodeOptimizer\optimizer\Enhancers AS OptimizerCare; 

$Html = NEW Optimizer();
$FileEnhance = NEW OptimizerCare();

_HTML(SetElemAttr(['class','lang'],['no-js','']));

_HEAD();

ATTR('META', [
 "meta-charset" => [ 'charset'    => "utf-8"],
 "meta-compat"  => [ 'http-equiv' => "x-ua-compatible", 'content' => "" ]
]); 

ATTR('TITLE', 'Quick Start'); 

ATTR('META', [
 "meta-des"    => [ 'name' => "description", 'content' => ""],
 "meta-vport"  => [ 'name' => "viewport",    'content' => "width=device-width, initial-scale=1" ]
]); 

ATTR('LINK', [ 
 "manifest"   => [ 'rel' => "manifest", 'src' => "site.webmanifest"],
 "icon" => [ 'rel' => "apple-touch-icon", 'src' => "icon.png"]
]); 

ATTR('LINK', [ 
 "mains-style" => [ 'rel' => "stylesheet", 'href' => "css/style.css"]
]); 

ATTR('SCRIPT', [
 // Intalling 3rd party angular-JS 
 "angu-js"  => [ 'src' => "https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js" ], 

 "normz"    => [ 'src' => "js/normalize.js" ],
 "main-js"  => [ 'src' => "js/main.js" ]
]);

ATTR('CUSTOM_END', [
 "Optimize" => [ 'href' => "css/normalize.css" ]
]);

ATTR('BEGIN_CUSTOM_END', [ 
 "Opt" => [ 'href' => "css/normalize.css" ]
]);

if(isbelongs('index', 1)) { ?>

  <style> 
   /**  Header style goes here.. **/
  </style>

  <script> 
    /**  Header script goes here.. **/
  </script>

<?php }

xHEAD();
_BODY();


```
<h4>Quick Start : <span>Copy and paste for index or page.php</span> </h4>

```PHP

_div(SetElemAttr(['ng-app','ng-init'],['',"myCol='lightblue'"]),'QuickStart_id','row'); 

 _xdiv(
 
     ELEM('h1','Welcome to PHPHtml-Optimizer!') .
     ELEM('p', 'HELLO WORLD - For PHP/Developer - Back End Programmers') . __BR() . 
     
     // Input angular-JS modify
     __HTML('Input','input', SetElemAttr(['style','ng-model'],['background-color:{{myCol}}','myCol']),null,null, FUNC_ASSOC)
     
   ,SetElemAttr(['class'],['container']) 
 
 );
 
xdiv('End of / row');

```
<h4>Quick Start : <span>Copy and paste for footer.php</span></h4>

```PHP

_FOOTER();

ATTR('SCRIPT', [

"LABEL0" => [ 'src' => "js/normalize.js" ],
"LABEL1" => [ 'src' => "js/main.js" ]

]);

if (isbelongs(['index','portfolio'], 1)) { ?>

 <script> 
    /**  Footer script goes here.. **/
 </script>

<?php }

xFOOTER();
xBODY();
xHTML();

```
<h4>config.php </h4>
<p>Config.php file register file currently support : PATH | DIRECTORY | URI, 
make your code clean and safe. here's mapping to sure that your config.php file is in correct directory. 
</p>

```PHP
 |- root/Theme : 
   |- Library 
     |- PHPHtml-Optimizer
 |- index.php
 |- portfolio.php
 |- config.php       
```
```PHP

// REQURE/INCLUDES FILE - PATH
$PATH['REGISTERED'] = [
   
  'Includes' => SET_DIR_PATH('Includes')

];

// VIEWS - DIRECTORY
$VIEWS['REGISTERED'] = [
 
  'Views'        => SET_DIR_PATH('saver/views'),
  'VTemplates'   => SET_DIR_PATH('saver/views/templates')        

];

// REDIRECT - URI
$URI['REGISTERED'] = [
  
  // For LocalHost 
  'redirect'    => SET_DIR_PATH('404')      

];


```

For Installation / Configuration <a href="https://github.com/nielsofficeofficial/PHPHtml-Optimizer-Installations"> Process link here </a><br /> 
For PHPOptimizer more examples and <a href="https://github.com/nielsofficeofficial/PHPHtml-Optimizer-Docx"> Documentation link here </a><br /> 
For PHPFileEnhancers and <a href="https://github.com/nielsofficeofficial/PHPHtml-Optimizer-Enhancers"> Reference link here </a><br /> 
For PHPMaintenance Mode and <a href="#"> SOON on <i>PHPHtml-Optimizer</i> v1.4 </a><br />
For PHPForm and <a href="#"> SOON on <i>PHPHtml-Optimizer</i> v1.4 </a><br /> 
For PHPLayout and <a href="#"> SOON on <i>PHPHtml-Optimizer</i> v1.5 </a><br /> 
For PHPFrontScript and <a href="#"> SOON on <i>PHPHtml-Optimizer</i> v2 </a><br /> 
For Developer <a href="https://github.com/nielsofficeofficial/PHPHtml-Optimizer/issues"> Support link here </a><br /> 
This Library is 100% secured and fully free ready to use, If you see vulnerability you can email me: @ nieldigitalsolution@gmail.com

<h2>Thanks To:</h2>
<h5>
Github : To allow me to upload my PHPHtml-Optimizer PHP Library to repository<br /> 
php.net : To oppurtunity Develop web application using corePHP - PHPFrameworks<br />
w3school : HTML Elements reference</h5>

__For Suggestion and Donation/Sponsorship You can send via GCash : +639650332900__ <br /> __Also You can send via Paypal account: syncdevprojects@gmail.com__ <br /> Thanks and good luck! 

