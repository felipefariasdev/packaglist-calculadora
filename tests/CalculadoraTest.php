<?php
use AppFelipeFariasCalculadora\Calculadora;
use PHPUnit\Framework\TestCase;
class CalculadoraTest extends TestCase
{
    protected $calculadora;
    public function setUp()
    {
        $this->calculadora = new Calculadora();
    }
    public function testSomar()
    {
        $total = $this->calculadora->somar(10,10);
        $this->assertEquals(20, $total);
    }
    public function testSubtrair()
    {
        $total = $this->calculadora->subtrair(30,10);
        $this->assertEquals(20, $total);
    }
}