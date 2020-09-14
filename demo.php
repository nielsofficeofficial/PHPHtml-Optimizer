<?php 

require_once 'PHPHtml-Optimizer.php';

 function my_data() {
      
  $datas = [];
  
    for ($i = 1; $i <= 10; $i++) 
    {
       $datas[] = html::ELEMENT('LI',$i,NULL,'myID_echo_li',NULL,NULL); 
    }
  
    return implode('', $datas);  
  }
  
  function my_htmattr() {
    
    return $sets = [
      
      $attr_name = ['1','2'],
      $attr_val  = ['_niel_','_fernandez_'],
     
    ];
  
  }

  // ASSOCIATED WITH FUNCTION | METHOD | CLASS it is seta s return (need echo or print)  
  // 1  return within the function instead echo
  echo "A ".html::ELEMENT('UL',my_data(),my_htmattr(),'with_myID_echo_h1','with_my_class_echo','with_label'); 
  
#############################################################################################################
 
 # Usage within The CLass
  

  $userObj = new  \PHPHtml\CodeOptimizer\Html();  
  echo $userObj ->H2('Test H2');

#############################################################################################################