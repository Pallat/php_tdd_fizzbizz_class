<?php
require("fb.php");

Class FizzBuzzSpec extends PHPUnit_Framework_TestCase {
  function testOneShouldBeOne() {
    $fb = new FizzBuzz();
    $this->assertEquals("1", $fb->tell('1'));
  }
  function testTwoShouldBeTwo() {
    $fb = new FizzBuzz();
    $this->assertEquals("2", $fb->tell('2'));
  }
  function testThreeShouldBeFizz() {
    $fb = new FizzBuzz();
    $this->assertEquals("Fizz", $fb->tell('3'));
  }
  function testSixShouldBeFizz() {
    $fb = new FizzBuzz();
    $this->assertEquals("Fizz", $fb->tell('6'));
  }
  function testFiveShouldBeBuzz() {
    $fb = new FizzBuzz();
    $this->assertEquals("Buzz", $fb->tell('5'));
  }
}
 ?>
