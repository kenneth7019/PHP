<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$array = array();
$cont = 0;
$n = 0;
$indice = 0;
$suma = 0;
while ($cont < 20) 
{
    
    if($n % 2 != 0)
    {
        $array[$indice] = $n;
        $cont = $cont + 1;
        $indice = $indice + 1;
    }
    $n = $n +1;
    
}
    echo "<table border = 1>";
    echo "<tr><th>Indice</th><th>Valor</th><th>Suma</th></tr>";
    for ($i = 0; $i < count($array);$i++)
    {
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td> $array[$i]</td>";
        $suma = $suma + $array[$i];
        echo "<td> $suma</td>";
        echo"</tr>";
    }
        echo "</table>";
?>

</body>
</html>