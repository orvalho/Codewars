<?php
/*
Takes three arguments - operation and two numbers.
After applying the chosen operation returns result of numbers.
*/

function basicOp($op, $val1, $val2) {
  switch($op) {
    case '+':
      return $val1 + $val2;
      break;
    case '-':
      return $val1 - $val2;
      break;
    case '*':
      return $val1 * $val2;
      break;
    case '/':
      return $val1 / $val2;
      break;
  }
}
