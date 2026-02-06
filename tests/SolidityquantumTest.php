<?php
/**
 * Tests for solidityQuantum
 */

use PHPUnit\Framework\TestCase;
use Solidityquantum\Solidityquantum;

class SolidityquantumTest extends TestCase {
    private Solidityquantum $instance;

    protected function setUp(): void {
        $this->instance = new Solidityquantum(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Solidityquantum::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
