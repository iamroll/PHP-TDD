<?php

declare(strict_types=1);

namespace Tests\Fibonacci;

use Exercises\Fibonacci\Fibonacci;
use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase
{
    public function testZeroValue(): void
    {
        $this->assertSame(0, new Fibonacci(0));
    }

    public function testOne(): void
    {
        $this->assertSame(1, new Fibonacci(1));
    }
}
