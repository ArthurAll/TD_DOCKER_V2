<?php
namespace App\tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase

{
	public function testAdd()
	 {
		$user = new User();
		$login = $user->setLogin("arthur");
		$getLog = $user->getLogin();

		$this -> assertEquals("arthur",$getLog);
	}
}
