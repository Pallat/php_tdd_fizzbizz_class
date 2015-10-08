<?php
Class FizzBuzz {
  function tell($number) {
    if (intval($number)%3 == 0) {
      return "Fizz";
    }
    return $number;
  }
}
 ?>
