<?php
$nome = floatval(fgets(STDIN));
$salario = floatval(fgets(STDIN));
$vendas = floatval(fgets(STDIN));
$comissao = 0.15;

$total = $salario + ($vendas * $comissao);
print_r("TOTAL = R$ ".number_format(round($total, precision:2, mode:PHP_ROUND_HALF_EVEN), decimals:2, decimal_separator:'.', thousands_separator:''));
echo"\n";

?>