<?php
/*
Write a method that takes an array of words
and smashes them together
(add spaces between each word. There shouldn't be
a space at the beginning or the end of the string).
*/

function smash(array $words): string {
  return implode(" ", $words);
}
