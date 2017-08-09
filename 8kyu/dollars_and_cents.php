<?php
//Create a function that will take a float and return the amount formatted in dollars and cents.

function format_money($amount) {
  return '$' . sprintf('%.2f', $amount);
}
