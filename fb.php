<?php
Class FizzBuzz {
  function tell($number) {
    if (intval($number)%15 == 0) {
      return "FizzBuzz";
    }
    if (intval($number)%3 == 0) {
      return "Fizz";
    }
    if (intval($number)%5 == 0) {
      return "Buzz";
    }
    return $number;
  }
}
 ?>
