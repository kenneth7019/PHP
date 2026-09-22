<!DOCTYPE html>
<html>
<head><title>EJ3 Strings</title></head>
<body>
<?php
$email = "alberto.garcia@educa.madrid.org";

    $posArroba = strpos($email, "@");
    $usuario = substr($email, 0, $posArroba);
    $dominio = substr($email, $posArroba + 1);

    $partesDominio = explode(".", $dominio);
    $organizacion = $partesDominio[0];
    $extension  = end($partesDominio);

    $numCaracteresUsuario = strlen($usuario);
    $numCaracteresDominio = strlen($dominio);

    echo "Email: $email<br>";
    echo "Usuario: $usuario<br>";
    echo "Dominio: $dominio<br>";
    echo "Organización: $organizacion<br>";
    echo "Extensión: $extension<br>";
    echo "El usuario contiene $numCaracteresUsuario caracteres.<br>";
    echo "El dominio contiene $numCaracteresDominio caracteres.<br>";
?>
</body>
</html>