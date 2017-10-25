<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 17/10/17
 * Time: 09:09
 */
require "ConvertionMorse.php";

use PHPUnit\Framework\TestCase;

class ConvertionMorseTest extends TestCase
{
    public function testPHPUnit(){
        $this->assertEquals(TRUE, TRUE);
    }

    public function testChaineVide()
    {
        $this->assertSame(ConvertionMorse::fromMorse(""), "");
    }

    public function testChaineUnCaractereE()
    {
        $this->assertSame(ConvertionMorse::fromMorse("."), "E");
    }

    public function testChaineUnCaractereA()
    {
        $this->assertSame(ConvertionMorse::fromMorse(".-"), "A");
    }

    public function testChaineDeuxCaracteres()
    {
        $this->assertSame(ConvertionMorse::fromMorse("...- .."), "VI");
    }

    public function testChaineWild()
    {
        $this->assertSame(ConvertionMorse::fromMorse(".-- .. .-.. -.."), "WILD");
    }

    public function testChaineWildCode()
    {
        $this->assertSame(ConvertionMorse::fromMorse(".-- .. .-.. -..   -.-. --- -.. ."), "WILD CODE");
    }
}