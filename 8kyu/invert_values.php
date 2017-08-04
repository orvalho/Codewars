<?php
//Each positive number becomes negative number, negative - positive.

function invert(array $a): array {
  $new_a = [];
  foreach($a as $value) {
    $new_a [] = $value * (-1);
  }
  return $new_a;
}
