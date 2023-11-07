<?php
require '../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {
    public function testAdd() {
        $calculator = new App\Calculator();
        $this->assertEquals(5, $calculator->add(2, 3));
    }
}