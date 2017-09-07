<?php
/*
Rock Paper Scissors.
Return which player won.
In case of a draw return Draw!.
*/

function rpc($p1, $p2) {
  switch(true) {
    case ($p1==$p2): return 'Draw!'; break;
    case ($p1=='paper' && $p2=='rock') ||
         ($p1=='rock' && $p2=='scissors') ||
         ($p1=='scissors' && $p2=='paper'):
         return 'Player 1 won!'; break;
    default: return 'Player 2 won!';
  }
}
