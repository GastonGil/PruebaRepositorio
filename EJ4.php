<?php
$LADOA = (double)readline("Ingrese el lado A: ").PHP_EOL;
$LADOB = (double)readline("Ingrese el lado B: ").PHP_EOL; 
$LADOC = (double)readline("Ingrese el lado C: ").PHP_EOL;

if($LADOA === $LADOB && $LADOA === $LADOC){
  echo "El triángulo es equilatero";
}else if(($LADOA == $LADOB && $LADOA !== $LADOC) xor ($LADOB == $LADOC && $LADOB !== $LADOA) xor ($LADOC == $LADOA && $LADOC !== $LADOB)){
  echo "El triángulo es isósceles";
}else{
  echo "El triángulo es escaleno";
}