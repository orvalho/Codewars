<?php
/*
Accepts two arguments
and after dividing the larger number by the smaller number
returns the remainder.
Division by zero returns NaN.
Arguments - integers.
*/

function remainder ($a, $b) {
  if ($a == 0 || $b == 0) {
    return null;
  }
  return $a > $b ? $a % $b : $b % $a;
}
