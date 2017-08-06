<?php
/*
Purchase of 2 or more litres gets a discount of 5 cents per litre
and so on every two litres, up to a max discount of 25 cents per litre.
*/

function fuel_price($litres, $price_per_liter) {
  $discount = min(floor($litres/2) * 0.05, 0.25);
  return round($litres * ($price_per_liter - $discount), 2);
}
