<?php
/*
Return the sum of all positive numbers.
If array is empty, return 0.
*/

function positive_sum($arr) {
  if(empty($arr)) {
    return 0;
  }
  $sum = 0;
  foreach($arr as $value) {
    if($value > 0) {
      $sum += $value;
    }
  }
  return $sum;
}
