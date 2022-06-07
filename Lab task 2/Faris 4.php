<?php
  $a = 3000;
  $b = 45;
  $c = 5; 
  $max = $a;

  if ($a >= $b && $a >= $c)
    $max = $a;
  if ($b >= $a && $b >= $c)
    $max = $b;
  if ($c >= $a && $c >= $b)
    $max = $c;
  
  echo "Largest number from $a , $b and $c is: $max\n";


?>