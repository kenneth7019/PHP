<HTML>
<HEAD><TITLE> EJ4 Strings - Generador de URL amigable (slug) </TITLE></HEAD>
<BODY>
<?php
 $titulo = "Introducción a la Programación Web con PHP";

 $titulo2 ="http://".strtolower(str_replace([" ", "ó"],["-", "o"],$titulo));

 echo $titulo2;

?>
</BODY>
</HTML>