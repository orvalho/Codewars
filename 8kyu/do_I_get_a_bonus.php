<?php
/*
Takes two arguments (salary and bonus).
Salary - an integer, bonus - a boolean.
In case bonus - true, the salary will be multiplied by 10.
Returns the total figure that person will receive.
*/

function bonusTime($salary, $bonus) {
  if($bonus == true) {
    $result = '$' . $salary * 10;
  } else {
    $result = '$' . $salary;
  }
  return $result;
}
