<HTML>
<HEAD><TITLE> EJ5 Strings - Procesamiento de una URL </TITLE></HEAD>
<BODY>
<?php
 $url = "https://www.tienda.es/productos/portatil.php?id=34&marca=lenovo";

 $pos = strpos($url,"://");
 $protocolo = substr($url,0,$pos);
 $ruta = explode()



 
 echo "Protocolo: $partes[0] <br>";
 echo "Dominio: $partes[1] <br>";
 echo "Ruta: $partes[2] <br>";
 echo "Fichero: $partes[3] <br>";
 echo "Parametros: $partes[4] <br>";

?>
</BODY>
</HTML>
