<?php
/*
Takes an integer as an argument
and then for even numbers returns "Even",
for odd numbers - "Odd".
*/
function even_or_odd (int $n): string {
  return $n % 2 == 0 ? "Even" : "Odd";
}
