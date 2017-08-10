<?php
/*
Fix function that greets users.
Greeting for Johnny should be slightly different.

function greet($name) {
    return "Hello, $name!";
    if ($name === 'Johnny') {
        return 'Hello, my love!';
    }
}
*/

function greet($name) {
  if($name != 'Johnny') {
  return "Hello, $name!";
  }
  return 'Hello, my love!';
}
