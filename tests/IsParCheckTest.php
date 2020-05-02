<?php
use PHPUnit\Framework\TestCase;
require 'IsParCheck.php';

class IsParCheckTest extends TestCase
{
    private $isParCheck;
 
    protected function setUp(): void
    {
        $this->isParCheck = new IsParCheck();
    }
 
    protected function tearDown(): void
    {
        $this->isParCheck = NULL;
    }
 
    public function testParCheck(): void
    {
        $result = $this->isParCheck->check(2);
        $this->assertEquals(True, $result);
        $result = $this->isParCheck->check(3);
        $this->assertEquals(False, $result);
        $result = $this->isParCheck->check(8);
        $this->assertEquals(True, $result);
        $result = $this->isParCheck->check(7);
        $this->assertEquals(False, $result);
    }
}
