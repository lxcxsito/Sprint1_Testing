<?php
use PHPUnit\Framework\TestCase;

class NumberChecker
{
    public function __construct(private int $number)
    {
    }

    public function isEven(): bool
    {
        return $this->number % 2 == 0;
    }
    public function isPositive(): bool
    {
        return $this->number > 0;
    }
}



//Test cases with phpunit


final class NumberCheckerTest extends TestCase
{
    public function testIsEvenWithEvenNumber(): void
    {
        $checker = new NumberChecker(4);
        $this->assertTrue($checker->isEven());
    }

    public function testIsEvenWithOddNumber(): void
    {
        $checker = new NumberChecker(5);
        $this->assertFalse($checker->isEven());
    }

    public function testIsPositiveWithPositiveNumber(): void
    {
        $checker = new NumberChecker(3);
        $this->assertTrue($checker->isPositive());
    }

    public function testIsPositiveWithNegativeNumber(): void
    {
        $checker = new NumberChecker(-2);
        $this->assertFalse($checker->isPositive());
    }

    public function testIsPositiveWithZero(): void
    {
        $checker = new NumberChecker(0);
        $this->assertFalse($checker->isPositive());
    }
}

?>