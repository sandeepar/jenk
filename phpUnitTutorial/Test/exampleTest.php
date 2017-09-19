<?php

use vendor\phpunit\phpunit\PHPUnit\Framework\TestCase;
require_once('src/BankAccount.php');

class BankAccountTest extends \PHPUnit_Framework_TestCase
{

 protected function setUp() {
      $this->bank = new BankAccount();
  }

 public function testBalanceToBeZero() {
	$this->assertEquals(0, $this->bank->getBalance());
 }

}
