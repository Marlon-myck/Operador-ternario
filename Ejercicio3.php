<?php
$terreno = intval(readline("Largo del terreno: "));
$terreno2 = intval(readline("Ancho del terreno: "));

$adecuado = (($terreno * $terreno2) >= 1000) ? "El terreno es adecuado para culticos extensos" : "El terreno es mas adecuado para cultivos de jardin o huerto";
echo $adecuado;