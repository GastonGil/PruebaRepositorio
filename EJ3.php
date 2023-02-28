<?php

$A = (double)readline("Ingrese el primer número: ").PHP_EOL;
$B = (double)readline("Ingrese el segundo número: ").PHP_EOL;
$C = (double)readline("Ingrese el tercero número: ").PHP_EOL;
$MAYOR;
$INTERMEDIO;
$MENOR;

if($A > $B && $A > $C){
  $MAYOR = $A;
  if($B > $C){
    $INTERMEDIO = $B;
    $MENOR = $C;
  }else{
    $INTERMEDIO = $C;
    $MENOR = $B;
  }
}else if($B > $A && $B > $C){
  $MAYOR = $B;
  if($A > $C){
    $INTERMEDIO = $A;
    $MENOR = $C;
  }else{
    $INTERMEDIO = $C;
    $MENOR = $A;
  }    
}else{
  $MAYOR = $C;
  if($A > $B){
    $INTERMEDIO = $A;
    $MENOR = $B;
  }else{
    $INTERMEDIO = $B;
    $MENOR = $A;
  }
}

echo "Mayor: $MAYOR, INTERMEDIO: $INTERMEDIO, MENOR: $MENOR";


  

  



