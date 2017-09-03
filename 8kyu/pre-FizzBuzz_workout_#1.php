<?php
/*
Input: a positive integer - n, which is greater than or equal to one.
Expected output: an array of positive integers from 1 to n.
*/

function pre_fizz($n) {
  for($i=1; $i<=$n; $i++) {
    $array[] = $i;
  }
  return $array;
}
