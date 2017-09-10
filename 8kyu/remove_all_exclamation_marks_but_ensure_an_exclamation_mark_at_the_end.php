<?php
/*
Remove all exclamation marks from string
but ensure an exclamation mark at the end of string.
*/

function remove($s) {
  return str_replace('!','',$s) . '!';
}
