<?php
/**
 * Tests for ApiDevBridge
 */

use PHPUnit\Framework\TestCase;
use Apidevbridge\Apidevbridge;

class ApidevbridgeTest extends TestCase {
    private Apidevbridge $instance;

    protected function setUp(): void {
        $this->instance = new Apidevbridge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Apidevbridge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
