<?php
$metodo = readline("Estacion de año: ");
$cultivar = ($metodo == "invierno") ? "Se debe usar la siembra en almacigo" : "Se puede usar la siembra directa";
echo $cultivar;