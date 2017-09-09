<?php
//Find the 'recommended' dating age range.

function datingRange($age) {
  if($age <= 14) {
    $min = floor($age-$age/10);
    $max = floor($age+$age/10);
    return $min.'-'.$max;
  }
  $min = floor(7+$age/2);
  $max = floor(($age-7)*2);
  return $min.'-'.$max;
}
