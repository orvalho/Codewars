<?php
/*
Create function to test whether a period is late.
Function will take three parameters:
*last - date of the last period
*today - date of the check
*cycleLength - length of the cycle in days
We consider it to be late if the number of passed days is larger than the cycleLength (true).
Otherwise return false.
*/

function periodIsLate($last, $today, $cycleLength) {
$diff = $today->diff($last);
$diff = $diff->days;

if($diff > $cycleLength) {
  return true;
} else {
  return false;
  }
}
