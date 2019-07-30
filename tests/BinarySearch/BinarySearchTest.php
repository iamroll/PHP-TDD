<?php

declare(strict_types=1);

namespace Tests\BinarySearch;


use Exercises\BinarySearch\BinarySearch;
use PHPUnit\Framework\TestCase;

/**
 * Class BinarySearch
 * @package Tests\BinarySearch
 */
class BinarySearchTest extends TestCase
{
    public function testWithCorrectValues()
    {
        $binarySearch = new BinarySearch();
        $result = $binarySearch->search([1, 2, 3, 4, 5, 6, 7], 1);

        $this->assertTrue($result);
    }

    public function testWithNotContainingElements()
    {
        $binarySearch = new BinarySearch();
        $result = $binarySearch->search([1, 2, 3, 4, 5, 6, 7], 8);

        $this->assertFalse($result);
    }

    public function testWithCorrectStringElements()
    {
        $binarySearch = new BinarySearch();
        $result = $binarySearch->search(['bar', 'foo'], 'foo');

        $this->assertTrue($result);
    }


    public function testWithNotContainingStringElements()
    {
        $binarySearch = new BinarySearch();
        $result = $binarySearch->search(['bar', 'foo'], 'foo1');

        $this->assertFalse($result);
    }

    public function testWithNotSortedElements()
    {
        $binarySearch = new BinarySearch();
        $result = $binarySearch->search([7, 6, 5, 4, 3, 2, 1], 1);

        $this->assertFalse($result);
    }
}