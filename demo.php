<?php 

require_once __DIR__ . '/PHPHtml-Optimizer.php';

USE \PHPHtml\CodeOptimizer\merge\Html;

 function my_data() {
      
  $datas = [];
  
    for ($i = 1; $i <= 10; $i++) 
    {
       $datas[] = html::ELEMENT('LI',$i,NULL,'myID',NULL,NULL); 
    }
  
    return implode('', $datas);  
  }
  
  function my_htmattr() {
    
    return $sets = [
      
      $attr_name = ['1','2'],
      $attr_val  = ['_niel_','_fernandez_']
     
    ];
  
  }

  // ASSOCIATED WITH FUNCTION | METHOD | CLASS it is seta s return (need echo or print)  
  echo "A ". Html::ELEMENT('UL',my_data(),my_htmattr(),'MyID','MyClass','MyLabel'); 
  
#############################################################################################################
 
 # Usage within The CLass

$html = NEW \PHPHtml\CodeOptimizer\optimizer\Html();

$html->H2('Hello World!');

#############################################################################################################


H1('Hello World Merge!');
