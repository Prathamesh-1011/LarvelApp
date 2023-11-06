<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

require(__DIR__.'/../../Practical/practical.php');
use Practical\Practical;

class PracticalTest extends TestCase
{
        /**
         * A basic unit test example.
         */

        public function testAddAcceptsNumericAndStringValues(): void
        {
            $this->assertEquals(Practical::add(1, 3), 4);
            $this->assertEquals(Practical::add("5", "3"), "8");
            $this->assertEquals(Practical::add(5, "3"), "8");
        }

        public function testAddRejectsInvalidValues(): void
        {
            $this->expectException(\InvalidArgumentException::class);
            Practical::add(5.5, 3);  // Float not allowed
            Practical::add("Five", 3);  // Non-numeric string not allowed
            Practical::add(5, [3]);  // Array not allowed
        }
        public function testAddAcceptsFloat(): void {
            $this->assertSame(5.0, Practical::add(1.5, 3.5));
        }

        public function testAddAcceptsFloatInteger(): void {
            $this->assertSame(3.5, Practical::add(1.5, 2));
        }

        public function testAddAcceptsIntegerString(): void {
            $this->assertSame(3, Practical::add("1", "2"));
        }

        public function testAddAcceptsFloatString(): void {
            $this->assertSame(4.54, Practical::add("1.4", "3.14"));
        }

        public function testAddRejectsAlphabetString(): void {
            $this->expectException(\InvalidArgumentException::class);
            Practical::add("abc", "xyz");
        }

        public function testAddRejectsAlphanumericString(): void {
            $this->expectException(\InvalidArgumentException::class);
            Practical::add("a1", 1);
        }
        /**
         * Test the generateFibonacciSequence method to ensure it only accepts integer values.
         */
        public function testGenerateFibonacciAcceptsInteger(): void {
            $this->assertSame([0, 1, 1, 2], Practical::generateFibonacciSequence(4));
        }

        public function testGenerateFibonacciRejectsIntegerString(): void {
            $this->expectException(\InvalidArgumentException::class);
            Practical::generateFibonacciSequence("4");
        }

        public function testGenerateFibonacciRejectsAlphabetString(): void {
            $this->expectException(\InvalidArgumentException::class);
            Practical::generateFibonacciSequence("abc");
        }

        public function testGenerateFibonacciRejectsFloat(): void {
            $this->expectException(\InvalidArgumentException::class);
            Practical::generateFibonacciSequence(3.5);
        }
        public function testGenerateFibonacciSequence(): void
        {
            $this->assertEquals(Practical::generateFibonacciSequence(5), [0, 1, 1, 2, 3]);
        }

        public function testRejectsFibonacciSequenceNonInteger(): void
        {
            $this->expectException(\InvalidArgumentException::class);
            Practical::generateFibonacciSequence("5");
        }
}

?>