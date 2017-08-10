<?php
//Return the average of the given array rounded down to its nearest integer.

function get_average($a) {
  return floor(array_sum($a) / count($a));
}
