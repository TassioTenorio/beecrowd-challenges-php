<?php
$valor1 = fgets(STDIN);
$valor2 = fgets(STDIN);
$valor3 = fgets(STDIN);

$media = ($valor1 * 2 + $valor2 * 3 + $valor3 * 5) / 10;

echo"MEDIA = ".number_format($media, decimals:1, decimal_separator:".", thousands_separator:"");
echo"\n";

?>