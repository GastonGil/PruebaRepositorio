<?php
$numero = (int)readline("Ingrese un número: ");
var_dump($numero);

  switch ($numero) {
  case 0:
    echo "el 0 no es positivo, ni negativo, ni par, ni impar";
    break;
  case $numero > 0 && $numero % 2 === 0:
    echo "$numero es positivo y par";
    break;
  case $numero > 0 && $numero % 2 === 1:
    echo("$numero es positivo y impar");
    break;
  case $numero < 0 && $numero % 2 === 0:
    echo("$numero es negativo y par");
    break;
  case $numero < 0 && $numero % 2 === 1:
    echo("$numero es negativo y impar");
    break;  
  default:
    echo "Ingresaste algo inválido.";
    break;
  }






