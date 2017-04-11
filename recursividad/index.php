<?php


function factorial($n) {
   return $n > 1 ? $n * factorial($n - 1) : 1;
}

echo factorial(5);


/*
   Uno
   n = 5
   return 5 * factorial(4) => 5 * 24 = 120

   Dos
   n = 4
   return 4 * factorial(3) => 4 * 6 = 24

   Tres
   n = 3
   return 3 * factorial(2) => 3 * 2 = 6

   Cuatro
   n = 2
   return 2 * factorial(1) => 2 * 1 = 2

   Cinco
   n = 1
   return  1
 */
