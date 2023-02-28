<?php

$opcion = true;
$descripcion = null;
while($opcion){
  $nombre = readline("Ingrese el nombre del estudiante: ").PHP_EOL;
  $nota = (int)readline("Ingrese la nota: ").PHP_EOL;
  switch($nota){
    case 0:
      $descripcion = "Reprobado";
      break;
    case 1:
      break;
    case 2:
      break;
    case 3:
      $descripcion = "Insuficiente";
      break;
    case 4:
      break;
    case 5:
      $descripcion = "Suficiente";
      break;
    case 6:
      break;
    case 7:
      $descripcion = "Bueno";
      break;
    case 8:
      break;
    case 9:
      $descripcion = "Distinguido";
      break;
    case 10:
      $descripcion = "Sobresaliente";
      break;
    default:
      echo "Solo puede ingresar del 0 - 10".PHP_EOL;
  }
  if($nota >= 0 && $nota <= 10){
    echo "$nombre, Nota: $nota , $descripcion".PHP_EOL;
    $opcion = strtolower(readline("¿Desea seguir consultando? Si - No".PHP_EOL));
    while($opcion != "si" && $opcion != "no"){
      echo "Solo puede ingresar si - no".PHP_EOL;
      $opcion = strtolower(readline("¿Desea seguir consultando? Si - No".PHP_EOL));
    }
    $opcion === "si" ? $opcion = true : $opcion = false;
  }
}
