<?php
//Replace all vowels with exclamation mark.

function replace($s) {
  return preg_replace('/[aeiou]/i','!',$s);
}
