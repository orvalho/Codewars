<?php
/*
Given time in hours return number of litres
Nathan will drink (0.5 litres of water per hour of cycling),
round down.
*/

function litres($t) {
  return floor($t*0.5);
}
