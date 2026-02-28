<?php
/**
 * Tests for LearnNebulon
 */

use PHPUnit\Framework\TestCase;
use Learnnebulon\Learnnebulon;

class LearnnebulonTest extends TestCase {
    private Learnnebulon $instance;

    protected function setUp(): void {
        $this->instance = new Learnnebulon(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Learnnebulon::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
