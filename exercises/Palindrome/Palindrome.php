<?php
/**
 * Palindrome implementation
 *
 * PHP version 7
 *
 * @category Palindrome
 * @package  Palindrome
 * @author   Author <rollwho@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */
declare(strict_types=1);

namespace Exercises\Palindrome;

/**
 * Class Palindrome
 * @package Exercises\Palindrome
 */
class Palindrome
{
    /**
     * A palindrome is a word, number, phrase of characters which reads the same backward as forward.
     * Example: madam, 123321.
     *
     * @param string $text checked variable
     *
     * @return bool
     */
    public function check(string $text): bool
    {
        for ($i = 0; $i < strlen($text)/2; $i++) {
            if ($text[$i] != $text[strlen($text) - $i - 1]) {
                return false;
            }
        }

        return true;
    }
}