<?php
/*
The wide mouth frog can't stop asking the creatures he encounters
what they like to eat. But then he meets the alligator who just LOVES
to eat wide-mouthed frogs! When he meets the alligator,
it then makes a tiny mouth.
Create a function that takes one argument (animal).
If animal is an alligator (case insensitive) return small
otherwise return wide.
*/

function mouth_size($animal) {
  return strtolower($animal) == 'alligator' ? 'small' : 'wide';
}
