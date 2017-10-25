<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 28/09/17
 * Time: 09:45
 */

require 'KataSumMinMax.php';

class KataSumMinMaxTest extends PHPUnit_Framework_TestCase
{

    public function testPhpUnit()
    {
        $this->assertEquals(true, true);

    }

    public function testSiCestUnTableauVide()
    {
        $this->assertSame(KataSumMinMax::sumMinMax(array()), 0);
    }

    public function testSiTableauContientUnElement()
    {
        $this->assertSame(KataSumMinMax::sumMinMax(array(1)), 0);
    }
    public function testSiResultatDiffFonction()
    {
        $this->assertEquals(KataSumMinMax::sumMinMax(array(6, 2, 1, 8, 10)),16);
    }

    public function testAvecDeuxEntiersIdentiques() {
        $this->assertEquals(KataSumMinMax::sumMinMax(array(1, 1, 11, 2, 3)), 6);
    }

    public function testVerifSiChaqueElementDuTableauEstUnEntier() {
        $this->assertSame(KataSumMinMax::sumMinMax(array('str1', 'str2')), false);
    }
}