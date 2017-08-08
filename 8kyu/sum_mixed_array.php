<?php
/*
Given an array of integers as strings and numbers,
return the sum of the array values as if all were numbers.
Return your answer as a number.
*/

function sum_mix($a) {
  $sum = 0;
  foreach ($a as $value) {
  $sum += intval($value);
  }
  return $sum;
  }
