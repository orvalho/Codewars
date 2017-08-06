<?php
/*
Given two points p and q (q is a middle point), outputs the symmetric point p1 of point p.
Each argument is a two-element array of integers representing the point's x and y coordinates.
*/

function symmetric_point($p, $q) {
  return $p1 = [2*$q[0]-$p[0], 2*$q[1]-$p[1]];
}
