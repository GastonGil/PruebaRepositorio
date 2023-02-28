<?php
$dia = (int) readline("Ingrese el día: ");
while($dia < 1 || $dia > 31){
  echo "El día no puede ser menor a 1 y mayor a 31".PHP_EOL;
  $dia = (int) readline("Ingrese el día: ");
}
$mes = (int)  readline("Ingrese el mes: ");
while($mes < 1 || $mes > 12){
  echo "El mes no puede ser menor a 1 y mayor a 12".PHP_EOL;
  $mes = (int)  readline("Ingrese el mes: ");
}
$anio = (int) readline("Ingrese el anio: ");
while($anio < 2000 || $anio > 2023){
  echo "El anio no puede ser menor a 2000 y mayor a 2023".PHP_EOL;
  $anio = (int) readline("Ingrese el anio: ");
}

echo "$dia-$mes-$anio" ;