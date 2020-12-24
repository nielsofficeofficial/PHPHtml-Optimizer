
<html>
 <head>
 <title>
  Test
 </title>   
 <script src="script.js"></script> 
 </head>
  <body>

    <div id="yourid">
      HTML contents
    </div>

   <!-- # ASSIGNED VARIABLE TO PHP THEN USE TO JAVASCRIPT -->
    <?php $htmlString = 'testing'; ?>

    <script type="text/javascript">  
    
     // notice the quotes around the ?php tag         
     var htmlString="<?php echo $htmlString; ?>";
     alert(htmlString);
      
    </script>


  
   <!-- # ASSIGNED VARIABLE TO JAVASCRIPT TEHN USE TO PHP -->
<script type="text/javascript">

var jvalue = 'this is javascript value';

<?php $abc = "<script>document.write(jvalue)</script>"?>   

</script>


<?php echo  'php_'.$abc;?>

<?php 

$abc = "<script>document.getElementByID('yourid').value</script>";
  
echo $abc;
    
   FrontScript(

      DocumentGetElementByID() .

   ); 
    



?>
  </body>
</html>