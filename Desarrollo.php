<?php
global $name, $tipo1, $tipo2, $nivel;

require 'Pokemon.php';
require 'Juego.php';

$objPokemon1 = new Pokemon();
$arreglo=[];$total = 30;
$batallas = new Pokemon();

for($i=1;$i<20;$i++){
    $objPokemon1 -> generar($name,$tipo1,$tipo2,$nivel,$total);
    $arreglo[]= (clone $objPokemon1);
}
//print_r($arreglo);
$batallas -> atacar2($arreglo);

