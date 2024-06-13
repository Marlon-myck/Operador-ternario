<?php
$edad = intval(readline("Ingrese edad: "));
$licence = "";

if ($edad >= 18):
    $licence = readline("Tienes licencia?: ");
    $mayor = ($licence == "si") ? "Puedes conducir" : "Debes conseguir una";
    echo $mayor;
else:
    echo "No puedes conducir", "\n";
endif;


    





/*
$mayor = ($edad >= 18) ? $lice = readline("Tienes licencia de conducir: ") : "No puedes conducir";
echo $mayor, "\n";
$licence = ($lice === "si") ? "puedes conducir" : "debes obtener una";
echo $licence, "\n";
*/