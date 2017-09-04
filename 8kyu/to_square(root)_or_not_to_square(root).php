<?php
/*
If square root of number is an integer, then square root of the number,
otherwise square the number.
*/
function squareOrSquareRoot($array) {
  foreach($array as $value) {
    floor(sqrt($value)) == sqrt($value) ? $newArray[] = sqrt($value) : $newArray[] = $value**2;
  }
  return $newArray;
}
