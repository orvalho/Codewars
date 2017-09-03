<?php
/*
Given a list of numbers, return new list in which values
increases by 1 from minimum value of array up to the maximum value.
*/

function pipeFix($numbers) {
  return range(min($numbers), max($numbers));
}
