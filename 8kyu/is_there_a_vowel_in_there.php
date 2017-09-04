<?php
/*
Given an array of numbers, check if any of the numbers
are the character codes for lower case vowels.
If they are, change the array value to a string of that vowel.
Return the resulting array.
*/

function isVow($a) {

  $array = [
  'a'  => 97,
  'e'  => 101,
  'i'  => 105,
  'o'  => 111,
  'u'  => 117
  ];

  foreach($a as $value) {
    if(in_array($value, $array)) {
    $aKey = array_search($value, $a);
    $arrayKey = array_search($value, $array);
    $a[$aKey] = $arrayKey;
    };
  }
  return $a;
}
