<?php
/*
Given an array with three values - tail, body, head, re-arrange the array
to head, body, tail.
*/

function fixTheMeerkat($arr) {
  $firstValue = $arr[0];
  $lastValue  = $arr[2];
  $arr[0] = $lastValue;
  $arr[2] = $firstValue;
  return $arr;
}
