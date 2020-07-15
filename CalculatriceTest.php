<?php

require_once "Calculatrice.php";

use PHPUnit\Framework\TestCase;

class CalculatriceTest extends TestCase
{
    private $calcul;

    public function setUp() {
        $this->calcul = new Calculatrice(4, 2);
    }

    public function testAddition(){
        $this->assertEquals(6, $this->calcul->addition());
    }

    public function testSoustraction(){
        $this->assertEquals(2, $this->calcul->soustraction());
    }

    public function testMultiplication(){
        $this->assertEquals(8, $this->calcul->multiplication());
    }


    public function testDivision(){
        $this->assertEquals(2, $this->calcul->division());
    }

    /** @expectedException DivisionByZeroError */
    public function testDivByZero(){
        $this->calcul->setNumb2(0);
        $this->calcul->division();
    }
}
