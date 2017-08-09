<?php
//Remove an exclamation mark from the end of string.

function remove(string $s): string {
  return substr($s, -1) == '!' ? substr($s, 0, -1) : $s;
}
