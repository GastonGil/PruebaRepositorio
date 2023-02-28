<?php
$costoCompra = (double)readline("Ingrese el costo de la compra: ").PHP_EOL;
while($costoCompra <= 0){
  echo "El costo de la compra no puede ser menor o igual a 0".PHP_EOL;
  $costoCompra = (double)readline("Ingrese el costo de la compra: ").PHP_EOL;
}

$colorBolita = readline("Elija: ".PHP_EOL ."1-Blanco".PHP_EOL."2-Verde".PHP_EOL."3-Amarillo".PHP_EOL."4-Azul".PHP_EOL."5-Naranja");

$opcion = true;
$descuento = 0;
while($opcion){
  switch ($colorBolita) {
    case '1':
      break;
    case '2':
      $descuento = 10;
      break;
    case '3':
      $descuento = 25;
      break;
    case '4':
      $descuento = 50;
      break;
    case '5':
      $descuento = 100;
      break;
    default:
      echo "Solo puede ingresar del 1 - 5";
      break;
  }
  if($colorBolita >= 1 && $colorBolita <= 5){
    $opcion = false;
  }else{
    $colorBolita = readline("Elija: ".PHP_EOL ."1-Blanco".PHP_EOL."2-Verde".PHP_EOL."3-Amarillo".PHP_EOL."4-Azul".PHP_EOL."5-Naranja").PHP_EOL;
  }
}
$VALORFINAL = $costoCompra-($costoCompra*$descuento/100);
echo "Costo compra: ".$costoCompra." Descuento: %".$descuento." = ".$VALORFINAL;
