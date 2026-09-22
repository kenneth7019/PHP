<!DOCTYPE html>
<html>
<head><title>EJ2 Strings</title></head>
<body>
<?php
$cadena = " aLBeRTo gaRCia loPEz ";

[$nombre, $apellido1, $apellido2] = explode(" ", ucwords(strtolower(trim($cadena))));
$normalizado = "$nombre $apellido1 $apellido2";

$iniciales = strtoupper($nombre[0] . "." . $apellido1[0] . "." . $apellido2[0] . ".");
$usuario = strtolower("$nombre.$apellido1");

echo "Cadena original: \"$cadena\"<br>";
echo "Nombre normalizado: $normalizado<br>";
echo "Número de caracteres: " . strlen($normalizado) . "<br>";
echo "Nombre: $nombre<br>";
echo "Primer apellido: $apellido1<br>";
echo "Segundo apellido: $apellido2<br>";
echo "Iniciales: $iniciales<br>";
echo "Nombre de usuario: $usuario";
?>
</body>
</html>