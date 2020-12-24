<?php 

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