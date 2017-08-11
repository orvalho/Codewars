<?php
/*
Write a function that will take number
of petals of two flowers and return true
if two people are in love
(if one of the flowers has an even number of petals
and the other has an odd number of petals
it means they are in love.)
and false if they aren't.
*/

function lovefunc($flower1, $flower2) {
  if(($flower1%2 == 0 && $flower2%2 == 0) || ($flower1%2 != 0 && $flower2%2 != 0)) {
    return false;
  }
  return true;
}
