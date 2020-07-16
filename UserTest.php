<?php

require_once "User.php";

use PHPUnit\Framewok\TestCase;

Class UserTest extends TestCase {

    private $validTest;
    private $invalidTest;

    public function setUp() {
        $this->validTest = new User('mail@mail.fr', 'toto', 'zozo', 28);
        $this->invalidTest = new User('mail@mail', 'tata', 'zaza', 8);
    }

    public function validate(){
        $this->assertTrue($this->validTest->isValid());
    }

    public function testInvalid(){
        $this->invalidTest->isValid();
    }

    public function testMail()
    {
        $this->assertRegExp('/^.+\@\S+\.\S+$/', $this->validTest->getEmail());
    }

    public function testFirstName() {
        $this->assertNotEmpty($this->validTest->getFirstName());
    }

    public function testLastName()
    {
        $this->assertNotEmpty($this->invalidTest->getLastName());
    }

    public function testAge()
    {
        $this->assertLessThan($this->validTest->getAge(), 13);
    }

}
