<?php
/*
Fix function that should return the following values:
- false if either a or b (or both) are not numbers
- a % b plus b % a if both arguments are numbers

func my_first_kata($a $b) {
  if {(!is_int($a) and !is_float($a)) or (!is_int($b) and !is_float($b))} (
    false
  ) else (
    $a % $b ++ $b % $a
  )
}
*/

function my_first_kata($a, $b) {
  if (!is_numeric($a) || !is_numeric($b)) {
    return false;
  }
  return $a % $b + $b % $a;
}
