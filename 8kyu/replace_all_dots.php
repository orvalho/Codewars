<?php
/*
Fix the bug (replace all dots with dashes).

function replace_dots(string $str): string {
  return preg_replace('/./', '-', $str);
}
*/
function replace_dots(string $str): string {
  return str_replace(".", "-", $str);
}
