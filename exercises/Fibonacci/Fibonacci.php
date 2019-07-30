<?php
/**
 * Fibonacci implementation
 *
 * PHP version 7
 *
 * @category Fibonacci
 * @package  Fibonacci
 * @author   Author <rollwho@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */
declare(strict_types=1);

namespace Exercises\Fibonacci;

use InvalidArgumentException;

/**
 * The fibonacci series is a series of numbers where
 * each consecutive number is the sum of the previous two.
 * For example [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, ∞].
 *
 * Class Fibonacci
 *
 * @package Exercises\Fibonacci
 */
class Fibonacci
{

    /**
     * Cache for memoization.
     *
     * @var $cache
     */
    protected $cache = [];

    /**
     * Recursion means calling functions directly from itself.
     * You must determine the number n is negative or positive.
     * If the number is negative,then you need to raise the error.
     * After that you need to check if this number is in the cache.
     * If this number in the cache return this number.
     * If not, you need to recursively find (n - 1) + (n - 2).
     * Until n equals one or zero.
     *
     * @param int $value computes fibonacci of this
     *
     * @return int
     */
    public function recursiveImplementation(int $value): int
    {
        if ($value < 0) {
            throw new InvalidArgumentException('Work only with positive numbers.');
        }

        if ($value === 0) {
         return 0;
        }
        else if ($value === 1 || $value === 2) {
            return 1;
        }
        else {
            if (!(!is_null($this->cache) && array_key_exists($value, $this->cache))) {
                $this->cache[$value] = $this->recursiveImplementation($value-1)
                    + $this->recursiveImplementation($value-2);
            }

            return $this->cache[$value];
        }
    }

    /**
     * Dynamic programming is a way to solve complex problems,
     * breaking them down into simpler sub-tasks.
     * the Fibonacci number using this formula [(i - 1) + (i - 2)] using previously created variables.
     *
     * @param int $value computes fibonacci of this
     *
     * @return int
     */
    public function dynamicImplementation(int $value):int
    {
        if ($value < 0) {
            throw new InvalidArgumentException('Work only with positive numbers.');
        }

        $this->cache[0] = 0;

        if ($value > 0) {
            $this->cache[1] = 1;
            for ($i = 2; $i < $value + 1; $i++) {
                $this->cache[$i] = $this->cache[$i - 1] + $this->cache[$i - 2];
            }
        }

        return $this->cache[$value];
    }
}
