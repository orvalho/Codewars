<?php
/*
Sum all the numbers of the array except the highest and the lowest element.
The highest/lowest element is respectively only one element at each edge,
even if there are more than one with the same value.
If array is empty, null or None, or if only 1 Element exists, return 0.
*/

function sumArray($array) {
  if(empty($array) || count($array) == 1) {
    return 0;
  }
  return array_sum($array) - max($array) - min($array);
}
