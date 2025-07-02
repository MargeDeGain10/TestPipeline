<?php

use PHPUnit\Framework\TestCase;
use App\Greeter;

class GreeterTest extends TestCase
{
    public function testGreet()
    {
$greeter = new Greeter();
        $this->assertEquals('Hello from src!', $greeter->greet());
      }
}
