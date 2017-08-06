<?php
/*
Returns an array (first element - count of positive numbers,
second element - sum of negative numbers).
Arguments - an array of integers.
In case the input array is empty/null, returns an empty array.
*/

function countPositivesSumNegatives($input) {
  $result = [];
  $countPositives = 0;
  $sumNegatives = 0;

  if(empty($input)) {
    return $result = [];
  }

  foreach($input as $value) {
    if($value > 0) {
      $countPositives += 1;
    } else {
      $sumNegatives += $value;
    }
  }

  return $result = [$countPositives, $sumNegatives];
}
