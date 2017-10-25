<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 26/09/17
 * Time: 09:31
 */
require 'KataADN2ARN.php';
class KataADN2ARNTest  extends PHPUnit_Framework_TestCase
{



    public function testPhpUnit()
    {
        $this->assertEquals(true, true);

    }

    public function testErrorOn()
    {
        $this->assertEquals(false, KataADN2ARN::trans("PESP"));

    }

    public function testTurnAIntoU()
    {
        $this->assertSame('U', KataADN2ARN::trans("A"));

    }
    public function testTurnGIntoC()
    {
        $this->assertSame('C', KataADN2ARN::trans("G"));

    }
    public function testTurnCIntoG()
    {
        $this->assertSame('G', KataADN2ARN::trans("C"));

    }
    public function testTurnTIntoA()
    {
        $this->assertSame('A', KataADN2ARN::trans("T"));

    }
    public function testValid()
    {
        $this->assertSame(KataADN2ARN::trans("AGTC"), 'UCAG');

    }
    public function testNonValid()
    {
        $this->assertSame(KataADN2ARN::trans("AGTCI"), false);

    }

}

