<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 17/10/17
 * Time: 10:33
 */

require 'SumInt.php';

class SumIntTest extends PHPUnit\Framework\TestCase
{
    public function testPhpUnit () {
        $this->assertEquals ("true", "true");
    }

    public function testEmptyArray () {
        $this->assertSame(SumInt::sum([]), [0,0]);
    }

       public function testOneIntIn1() {
        $this->assertSame(SumInt::sum([1]), [1,0]);
    }

    public function testOneIntIn18() {
        $this->assertSame(SumInt::sum([18]), [18,0]);
    }

    public function testOneIntInMinus1() {
        $this->assertSame(SumInt::sum([-1]), [0,-1]);
    }

    public function testOneIntInMinus17() {
        $this->assertSame(SumInt::sum([-17]), [0,-17]);
    }

    public function testOneIntIn0() {
        $this->assertSame(SumInt::sum([0]), [0,0]);
    }


    public function testOneIntIn33Minus33() {
        $this->assertSame(SumInt::sum([33,-33]), [33,-33]);
    }

    public function testOneIntInMinus22Plus22() {
        $this->assertSame(SumInt::sum([-22,22]), [22,-22]);
    }

    public function testOneIntIn10slash17() {
        $this->assertSame(SumInt::sum([10,17]), [27,0]);
    }
}