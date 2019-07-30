<?php
/**
 * BinarySearch implementation
 *
 * PHP version 7
 *
 * @category BinarySearch
 * @package  BinarySearch
 * @author   Author <rollwho@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */
declare(strict_types=1);

namespace Exercises\BinarySearch;


/**
 * Class BinarySearch
 *
 * @package Exercises\BinarySearch
 */
class BinarySearch
{
    /**
     * Method which realized binary search.
     *
     * @param array $arr
     * @param int|string $x search this element
     *
     * @return bool
     */
    public function search(Array $arr, $x): bool
    {
        if (count($arr) === 0) {
            return false;
        }
        $low = 0;
        $high = count($arr) - 1;

        while ($low <= $high) {
            $mid = (int)floor(($low + $high) / 2);

            if($arr[$mid] == $x) {
                return true;
            }

            if ($x < $arr[$mid]) {
                $high = $mid -1;
            }
            else {
                $low = $mid + 1;
            }
        }

        return false;
    }
}