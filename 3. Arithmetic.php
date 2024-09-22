<?php 
  // Arithmetic operators
  // + - * / ** %

  $x = 10;
  $y = 3;
  $z = null;

  // $z = $x + $y;
  // $z = $x - $y;
  // $z = $x * $y;
  // $z = $x / $y;
  // $z = $x ** $y;
  $z = $x % $y;
  echo $z;
?>
<br>
<?php
  // Increment/Decrement operators
  // ++, --

  $counter = 10;

  // $counter = $counter + 1;
  // $counter = $counter - 1;
  // $counter = ++$counter;
  // $counter = $counter++;
  // $counter = --$counter;
  // $counter = $counter--;
  // $counter += 2;
  // $counter -= 2;
  // $counter %= 3;
  // $counter **= 3;
  
  echo $counter;
?>
<br>
<?php
  // Operator precedence
  // ()
  // **
  // * / %
  // + -

  $total = 1 + 2 - 3 * 4 / 5 ** 6;
  echo $total;
?>