<?php
/*
Write a function that finds the area of the square
when you have the length of the line A
(length of the line A = 1/4 of circle perimeter,
circle diameter = square side length).
Round to two decimals.
*/

function square_area($A) {
  return round(pow(4*$A/(2*M_PI),2),2);
}
