<?php
/*
fix a bug in unfinished For Loop.

function createArray($number){
  $newArray = array();
  for($count = 1; $count <= $number;){
    $newArray[] = $count;
  }
  return $newArray;
}
*/

function createArray($number) {
  $newArray = array();
  for($count = 1; $count <= $number; $count++) {
    $newArray[] = $count;
  }
  return $newArray;
}
