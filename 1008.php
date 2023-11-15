<?php
$numero = fgets(STDIN);
$horas_trabalhadas = fgets(STDIN);
$valor_por_hora = floatval(fgets(STDIN));

$salario = $horas_trabalhadas * $valor_por_hora;

echo"NUMBER = $numero";
echo"SALARY = U$ ".number_format($salario, decimals:2, decimal_separator:".", thousands_separator:"");
echo"\n"


?>