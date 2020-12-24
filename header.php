<?php 
 
require_once __DIR__ . '/library/PHPHtml-Optimizer/PHPHtml-optimizer.php'; 



USE \PHPHtml\CodeOptimizer\merge\Html;
USE \PHPHtml\CodeOptimizer\optimizer\Html AS Optimizer;
USE \PHPHtml\CodeOptimizer\optimizer\Enhancers AS OptimizerCare; 

$Html = NEW Optimizer();
$FileEnhance = NEW OptimizerCare();

// $Html->config();

// require_once __DIR__ . '/config.php'; 

// Select array directory ex. 

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
 "normz"    => [ 'src' => "js/normalize.js" ],
 "main-js"  => [ 'src' => "js/main.js" ]
]);

ATTR('CUSTOM_END', [
 "Optimize" => [ 'href' => "css/normalize.css" ]
]);

ATTR('BEGIN_CUSTOM_END', [ 
 "Opt" => [ 'href' => "css/normalize.css" ]
]);

if(isbelongs('about', 4)) { ?>

  <style> 
   
   /**  Header style goes here.. **/
   body { 
      
      background-color: red;

     }

  </style>

  <script> 
    /**  Header script goes here.. **/
  </script>

<?php }

xHEAD();
_BODY();


 
if ( isbelongs('index', 4) ) {

  bring_to(GETFROM(['PATH','PTest']), 'apps1',__PHP__);

} 



class bringTo
{

 public function __construct() {
 

   if(isbelongs('about', 4)) { 
 
    bring_to(GETFROM(['PATH','Library']), 'program', __PHP__ );
   
   }

 } 
    
}


$new = NEW bringTo();