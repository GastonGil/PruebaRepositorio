<?php
$opcion = true;
$costo = null;
while($opcion){
  $tipoEnfermedad = readline("Ingrese el tipo de enfermedad del paciente: ".PHP_EOL);
  switch ($tipoEnfermedad) {
    case '1':
      $costo = 125;
      break;
    case '2':
      $costo = 116;
      break;
    case '3':
      $costo = 120;
      break;
    case '4':
      $costo = 132;
      break;
    case '5':
      $costo = 138;
      break;
    default:
      echo "Opción inválida vuelva, ingrese del 1 - 5";
      break;
  }
  if($tipoEnfermedad >= 1 && $tipoEnfermedad <= 5){
  echo "Tipo de enfermedad: $tipoEnfermedad, Costo: $costo".PHP_EOL;
  }

  $opcion =strtolower(readline("Desea consultar de nuevo? Si - No".PHP_EOL));
  while($opcion != "si" && $opcion != "no") {
    echo "Solo puede ingresar si o no".PHP_EOL;
    $opcion =strtolower(readline("Desea consultar de nuevo? Si - No".PHP_EOL));
  } 

  if($opcion === "si"){
    $opcion = true;
  }else if($opcion === "no"){
    $opcion = false;
  }
}
