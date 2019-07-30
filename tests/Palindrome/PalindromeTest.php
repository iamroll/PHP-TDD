<?php


namespace Tests\Palindrome;


use Exercises\Palindrome\Palindrome;
use PHPUnit\Framework\TestCase;
use TypeError;

class PalindromeTest extends TestCase
{
    /**
     * @expectedException TypeError
     */
    public function testWithInvalidValue()
    {
        $palindrome = new Palindrome();
        $palindrome->check([123, 321]);
    }

    public function testWithNotPalindromeIntegerValue()
    {
        $palindrome = new Palindrome();
        $result = $palindrome->check(1234);

        $this->assertFalse($result);
    }

    public function testWithPalindromeIntegerValue()
    {
        $palindrome = new Palindrome();
        $result = $palindrome->check(1221);

        $this->assertTrue($result);
    }

    public function testWithPalindromeStringValue()
    {
        $palindrome = new Palindrome();
        $result = $palindrome->check("madam");

        $this->assertTrue($result);
    }

    public function testWithNotPalindromeStringValue()
    {
        $palindrome = new Palindrome();
        $result = $palindrome->check("test");

        $this->assertFalse($result);
    }

    public function testPalindromeWithEvenCharacter()
    {
        $palindrome = new Palindrome();
        $result = $palindrome->check("abba");

        $this->assertTrue($result);
    }

}