<?php

use PHPUnit\Framework\TestCase;
use Campico\Calculadora\Calculadora;

class CalculadoraTest extends TestCase
{
    public function testSuma(): void
    {
        $calculadora = new Calculadora();
        $result = $calculadora->suma(2, 3);
        $this->assertEquals(5, $result);

        $result = $calculadora->suma(1.5, 2.5);
        $this->assertEquals(4.0, $result);
    }
    public function testResta(): void
    {
        $calculadora = new Calculadora();
        $result = $calculadora->resta(3, 2);
        $this->assertEquals(1, $result);

        $result = $calculadora->resta(3.5, 2.5);
        $this->assertEquals(1.0, $result);
    }
}
