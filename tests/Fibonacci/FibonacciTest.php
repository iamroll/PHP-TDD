<?php

declare(strict_types=1);

namespace Tests\Fibonacci;

use Exercises\Fibonacci\Fibonacci;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase
{

    public function testRecursiveImplementationWithZeroValue(): void
    {
        $fib = new Fibonacci();
        $result = $fib->recursiveImplementation(0);
        $this->assertSame(0, $result);
    }

    public function testDynamicImplementationWithZeroValue(): void
    {
        $fib = new Fibonacci();
        $result = $fib->dynamicImplementation(0);
        $this->assertSame(0, $result);
    }

    public function testRecursiveImplementationWithOneValue(): void
    {
        $fib = new Fibonacci();
        $result =  $fib->recursiveImplementation(1);
        $this->assertSame(1, $result);
    }

    public function testDynamicImplementationWithOneValue(): void
    {
        $fib = new Fibonacci();
        $result = $fib->dynamicImplementation(1);
        $this->assertSame(1, $result);
    }

    public function testDynamicImplementationWithNormalValue(): void
    {
        $fib = new Fibonacci();
        $result = $fib->dynamicImplementation(34);
        $this->assertSame(5702887, $result);
    }

    public function testRecursiveImplementationWithNormalValue(): void
    {
        $fib = new Fibonacci();
        $result = $fib->recursiveImplementation(34);
        $this->assertSame(5702887, $result);
    }


    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Work only with positive numbers.
     */
    public function testRecursiveImplementationWithNegativeNumber(): void
    {
        $fib = new Fibonacci();
        $fib->recursiveImplementation(-1);
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Work only with positive numbers.
     */
    public function testDynamicImplementationWithNegativeNumber(): void
    {
        $fib = new Fibonacci();
        $fib->dynamicImplementation(-1);
    }
}
