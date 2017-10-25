<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 10/10/17
 * Time: 09:43
 */

require 'Tolower.php';


class TolowerTest extends PHPUnit\Framework\TestCase
{
//    public function TestPHPUnit(){
//        $this->assertEquals(TRUE, TRUE);
//    }

    public function testPHPUnit()
    {
        $this->assertEquals(TRUE, TRUE);

    }

    public function testChaineVide(){
        $this->assertSame(Tolower::to_lower(""), "");
    }

    public function testChaine(){
        $this->assertSame(Tolower::to_lower("TY"), "ty");
    }
}