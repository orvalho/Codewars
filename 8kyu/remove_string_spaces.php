<?php
//Remove the spaces from the string.

function no_space(string $s): string {
  return str_replace(" ", "", $s);
}
