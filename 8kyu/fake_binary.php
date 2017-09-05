<?php
//Given a string of digits, replace any digit below 5 with '0' and 5 and above with '1'.

function fake_bin($s) {
  $chars = str_split($s);
  for($i=0; $i<count($chars); $i++) {
    if($chars[$i] < 5) {
      $chars[$i] = 0;
    } else {
        $chars[$i] = 1;
      }
  }
  return implode('', $chars);
}
