<?php
/*
Returns the result of addition, subtraction,
multiplication and division of two integers.
Returns message "unknown value" if the variables are not numbers
or the sign does not include "+,-,/,*".
*/

function calculator ($a, $b, $sign) {
  $signs = ["+", "-", "/", "*"];
  if (!in_array($sign, $signs) || is_string($a) || is_string($b)) {
    return "unknown value";
  } elseif ($sign == "+") {
    return $a + $b;
  } elseif ($sign == "-") {
    return $a - $b;
  } elseif ($sign == "/") {
    return $a / $b;
  } elseif ($sign == "*") {
    return $a * $b;
  }
}
