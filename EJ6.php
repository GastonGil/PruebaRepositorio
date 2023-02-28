<?php

$dia = (int)readline("Ingrese el día de su cumpleaños: ");
while($dia < 1 && $dia > 31){
  echo"El dia no puede ser menor a 1 y mayor a 31".PHP_EOL;
  $dia = (int)readline("Ingrese el día de su cumpleaños: ");
}
$mes = (int)readline("Ingrese el mes de su cumpleaños: ").PHP_EOL;
while($mes < 1 && $mes > 12){
  echo"El mes no puede ser menor a 1 y mayor a 12".PHP_EOL;
  $mes = (int)readline("Ingrese el mes de su cumpleaños: ").PHP_EOL;

}

if(($dia >= 21 && $mes == 3) || ($dia <= 20 && $mes == 4)){
  echo "$dia-$mes : Aries";
}else if(($dia >= 21 && $mes == 4) || ($dia <= 21 && $mes == 5)){
  echo "$dia-$mes : Tauro";
}else if(($dia >= 22 && $mes == 5) || ($dia <= 21 && $mes == 6)){
  echo "$dia-$mes : Geminis";
}else if(($dia >= 22 && $mes == 6) || ($dia <= 23 && $mes == 7)){
  echo "$dia-$mes : Cáncer";
}else if(($dia >= 24 && $mes == 7) || ($dia <= 23 && $mes == 8)){
  echo "$dia-$mes : Leo";
}else if(($dia >= 24 && $mes == 8) || ($dia <= 23 && $mes == 9)){
  echo "$dia-$mes : Virgo";
}else if(($dia >= 24 && $mes == 9) || ($dia <= 23 && $mes == 10)){
  echo "$dia-$mes : Libra";
}else if(($dia >= 24 && $mes == 10) || ($dia <= 22 && $mes == 11)){
  echo "$dia-$mes : Escorpio";
}else if(($dia >= 23 && $mes == 11) || ($dia <= 22 && $mes == 12)){
  echo "$dia-$mes : Sagitario";
}else if(($dia >= 23 && $mes == 12) || ($dia <= 20 && $mes == 1)){
  echo "$dia-$mes : Capricornio";
}else if(($dia >= 21 && $mes == 1) || ($dia <= 10 && $mes == 2)){
  echo "$dia-$mes : Acuario";
}else if (($dia >= 20 && $mes == 2) || ($dia <= 20 && $mes == 3)){
  echo "$dia-$mes : Piscis";
}


