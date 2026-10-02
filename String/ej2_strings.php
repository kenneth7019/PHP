<!DOCTYPE html>
<html>
<head><title>EJ2 Strings</title></head>
<body>
<?php
$cadena = " aLBeRTo gaRCia loPEz ";
$sinEspacios = trim($cadena);

$minusculas = strtolower($sinEspacios);

$capitalizado = ucwords($minusculas);

$partes = explode(" ", $capitalizado);


$nombre = $partes[0];
$apellido1 = $partes[1];
$apellido2 = $partes[2];

$normalizado = $nombre . " " . $apellido1 . " " . $apellido2;

$inicialNombre = strtoupper($nombre[0]);
$inicialApellido1 = strtoupper($apellido1[0]);
$inicialApellido2 = strtoupper($apellido2[0]);
$iniciales = $inicialNombre . "." . $inicialApellido1 . "." . $inicialApellido2 . ".";

$usuario = strtolower($nombre . "." . $apellido1);


$longitud = strlen($normalizado);

echo "Cadena original: \"$cadena\"<br>";
echo "Nombre normalizado: $normalizado<br>";
echo "Número de caracteres: $longitud<br>";
echo "Nombre: $nombre<br>";
echo "Primer apellido: $apellido1<br>";
echo "Segundo apellido: $apellido2<br>";
echo "Iniciales: $iniciales<br>";
echo "Nombre de usuario: $usuario";
?>
</body>
</html>