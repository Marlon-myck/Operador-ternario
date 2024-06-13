<?php
$cantidad = intval(readline("cantidad de camisas: "));
$valor = intval(readline("Valor de compra: "));

$estatus = ($cantidad >= 3) ? "Tienes descuento de un 20%" : "Tienes un descuento del 10%";

if ($cantidad >= 3):
    echo $estatus, "\n";
    echo $valor - ($valor * 20 / 100), "\n";
else:
    echo $estatus, "\n";
    echo $valor - ($valor * 10 / 100), "\n";
endif;
    
