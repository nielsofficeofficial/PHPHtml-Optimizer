<?php require_once 'header.php' ?>

<?php 

 bring_to(GETFROM(['PATH','PTest']), 'apps1', __PHP__ );
 

_div( SetElemAttr(['id','class'],['QuickStart','row']) ); 

 _xdiv(
 
     ELEM('h1','About Welcome to PHPHtml-Optimizer!') .
     ELEM('p', 'HELLO WORLD - For PHP/Developer - Back End Programmers') 
     
   ,SetElemAttr(['class'],['container']) 
 
 );

xdiv('End of / row');

?>

<?php require_once 'footer.php' ?>