<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../p7.php';

class CalculatorTest extends TestCase
{
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAddition()
    {
        $this->assertEquals(5, $this->calculator->add(2, 3));
        $this->assertEquals(-1, $this->calculator->add(2, -3));
    }

    public function testSubtraction()
    {
        $this->assertEquals(1, $this->calculator->subtract(3, 2));
        $this->assertEquals(-5, $this->calculator->subtract(0, 5));
    }

    public function testMultiplication()
    {
        $this->assertEquals(6, $this->calculator->multiply(2, 3));
        $this->assertEquals(0, $this->calculator->multiply(0, 5));
    }

    public function testDivision()
    {
        $this->assertEquals(2, $this->calculator->divide(6, 3));
        $this->expectException(InvalidArgumentException::class);
        $this->calculator->divide(6, 0);
    }
}
