<?php 
  /*
  Logical operators = combine conditional statements
  if (condition1 && condition2)

  && = True if both conditions are true
  || = True if at least one condition is true
  !  = True if false. False if true.
  */

  // $temp = 25;
  // $cloudy = true;

  // if ($temp >= 0 && $temp <= 30) {
  //   echo "The weather is good";
  // }
  // else {
  //   echo "The weather is bad";
  // }

  // if ($temp < 0 || $temp > 30) {
  //   echo "The weather is bad <br>";
  // }
  // else {
  //   echo "The weather is good <br>";
  // }

  // if (!$cloudy) {
  //   echo "It's cloudy";
  // } 
  // else {
  //   echo "It's sunny";
  // }

  // $age = 25;
  // $citizen = true;

  // if ($age >= 18 && $citizen) {
  //   echo "You can vote";
  // } else {
  //   echo "You cannot vote";
  // }

  if ($age < 18 || !$citizen) {
    echo "You cannot vote";
  } else {
    echo "You can vote";
  }
?>