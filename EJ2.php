<?php

$alumno = readline("Ingrese el nombre del alumno: ");

$nota = (double)readline("Ingrese la nota de $alumno: ");
while($nota < 0 || $nota > 10){
  echo "La nota no puede ser mayor a 10 o menor a 0".PHP_EOL;
  $nota = (double)readline("Ingrese la nota de $alumno: ");
}

$turno = strtolower(readline("Ingrese la modalidad: "));
while (strcmp($turno, "nocturna")== 1 && strcmp($turno, "vespertina")==1){
  echo "La modalidad debe ser: nocturna o vespertina".PHP_EOL;
  $turno = strtolower(readline("Ingrese la modalidad: "));
}


if($nota <= 3.5){
  echo "$alumno: Reprobado".PHP_EOL;
}else if($turno === "vespertina"){
  switch ($nota) {
  case $nota >= 3.5 && $nota < 6 :
    echo "$alumno: Rinde examen, Nota: $nota".PHP_EOL;
    break;
  case $nota >= 6 :
    echo "$alumno: Eximido/a de examen, Nota: $nota".PHP_EOL;
    break;
  default :
    echo "Es probable que no haya ingresado un número";
  }  
}else{
  echo "$alumno: Rinde examen, Nota: $nota".PHP_EOL;
}  

