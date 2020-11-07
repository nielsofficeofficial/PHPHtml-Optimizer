[![Codacy Badge](https://app.codacy.com/project/badge/Grade/9aa969ea8b1642588110cc72dd308343)](https://www.codacy.com/gh/nielsofficeofficial/PHPHtml-Optimizer/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=nielsofficeofficial/PHPHtml-Optimizer&amp;utm_campaign=Badge_Grade)
[![Coverage Status](https://coveralls.io/repos/github/nielsofficeofficial/PHPHtml-Optimizer/badge.svg?branch=master)](https://coveralls.io/github/nielsofficeofficial/PHPHtml-Optimizer?branch=master)


<h6>Support PHP v7.0++ higher | not work for v.7 less</h6>
<h6>PHPHtml-Optimizer is a PHP FREE library that will help PHP/Developer/Programmer beautiful and optimize codes. </h6>
<p>It is simplified the code from HTML removing backticks, double quotes and saving time to convert or wrap HTML into PHP through appended variables although appending in the variable will be still possible using for some reason within your codes, PHPHtml-Optimizer is easier to optimize your codes lessen big page-load to your application/program.<br />
When the browser detect that there will no HTML printed the interpreter will execute your codes once at the same time, not section by section at that point your data will be rendered accurately.<br /><br />
To refractor/optimize code is a hassle and heavy load burden in programming, Allow PHPHtml-Optimizer will do that for you while you develop your Internet application, with this library will push you driving your codes learning the OOP concept to make more effective your codes into your application neat and clean not just clean but beautiful maintainable codes, you can use this library and feel FREE if you are comfortable.    
</p>

<h6>Custom ATTR/ELEMENT</h6>
<pre>
// ATTR() VALID PARAMETERS
META | TITLE | LINK | SCRIPT | CUSTOM_END | BEGIN_CUSTOM_END
</pre>
<pre>
// None closing inline element | PARAMETER : CUSTOM_END
ATTR('CUSTOM_END', [
 "NAME_OF_ELEMENT" => [ 'name' => "Value" ]
]);
</pre>
<pre>
// With Closing Element | PARAMETER : BEGIN_CUSTOM_END	
ATTR('BEGIN_CUSTOM_END', [
 "NAME_OF_ELEMENT" => [ 'name' => "Value" ]
]);
</pre>

<h4>Quick Start : <span>Copy and paste for header.php</span> </h4>

<pre>

USE \PHPHtml\CodeOptimizer\merge\Html;
USE \PHPHtml\CodeOptimizer\optimizer\Html AS Optimizer;
USE \PHPHtml\CodeOptimizer\optimizer\Enhancers AS OptimizerCare; <br />
$Html 		 = NEW Optimizer();
$FileEnhance = NEW OptimizerCare();<br />
_HTML(SetElemAttr(['class','lang'],['no-js','']));<br />
_HEAD();<br />
ATTR('META', [
 "M0" => [ 'charset'    => "utf-8"],
 "M1" => [ 'http-equiv' => "x-ua-compatible", 'content' => "" ]
]); <br />
ATTR('TITLE', 'QUICK START'); <br />
ATTR('META', [
 "M0" => [ 'name' => "description", 'content' => ""],
 "M1" => [ 'name' => "viewport",    'content' => "width=device-width, initial-scale=1" ]
]); <br />
ATTR('LINK', [ 
 "L0" => [ 'rel' => "manifest", 		'src' => "site.webmanifest"],
 "L1" => [ 'rel' => "apple-touch-icon", 'src' => "icon.png"]
]); <br />
ATTR('SCRIPT', [
 "SP1" => [ 'src' => "css/normalize.css" ],
 "SP2" => [ 'src' => "css/main.css" ]
]);<br />
ATTR('CUSTOM_END', [
 "Optimize" => [ 'src' => "css/normalize.css" ]
]);<br />
ATTR('BEGIN_CUSTOM_END', [ 
 "Opt" => [ 'src' => "css/normalize.css" ]
]); <br />

 if (isbelongs('index', 1)) { 

   

 }  

xHEAD();
_BODY();
</pre>






<h4>Installing PHPHtml-Optimizer/Composer</h4>
<pre>

// Run Command line directory with your project folder
~ C:/path/www/project/Library/

// Run command
~ composer require phphtml-optimizer/phphtml-optimizer

// Usage:

// Static Default
USE \PHPHtml\CodeOptimizer\merge\Html;

// Static Alias
USE \PHPHtml\CodeOptimizer\merge\Html AS MyHTML;

// Instantiate Default
$html = NEW \PHPHtml\CodeOptimizer\optimizer\Html();

// Instantiate Alias
USE \PHPHtml\CodeOptimizer\optimizer\Html AS MyElement;
$html = NEW MyElement();

</pre>

For more samples and <a href="https://github.com/nielsofficeofficial/PHPHtml-Optimizer-Docx"> Documentation link here </a><br /> 
For Developer <a href="https://github.com/nielsofficeofficial/PHPHtml-Optimizer/issues"> Support link here </a><br /> 
This Library is 100% secured and fully free ready to use, If you see vulnerability you can email me: @ nieldigitalsolution@gmail.com

<h2>Thanks To:</h2>
<h5>
Github : To allow me to upload my PHPHtml-Optimizer PHP Library to repository<br /> 
php.net : To oppurtunity Develop web application using corePHP - PHPFrameworks<br />
w3school : HTML Elements reference</h5>

__For Suggestion and Donation/Sponsorship You can send via My GCash : +639650332900__ <br />
__Also You can send via My Paypal account: syncdevprojects@gmail.com__

 

Thanks and good luck! 

