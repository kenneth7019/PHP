<HTML>
<HEAD><TITLE> EJ1 Strings – Conversor de Decimal a Binario </TITLE></HEAD>
<BODY>
<?php
$ip = "192.18.16.204";
$octetos = explode(".", $ip);

printf("%08b.%08b.%08b.%08b", $octetos[0], $octetos[1], $octetos[2], $octetos[3]);
?>
</BODY>
</HTML>
