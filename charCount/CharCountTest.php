<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 24/10/17
 * Time: 09:35
 */

use PHPUnit\Framework\TestCase;

require "CharCount.php";

class CharCountTest extends TestCase
{

    public function testPhpUnit () {
        $this->assertEquals(TRUE,TRUE);
    }

    public function testChaineVide() {
        $this->assertEquals(CharCount::dooku(""), []);
    }

    public function testChaine1Caractere() {
        $this->assertSame(CharCount::dooku("a"), ["a" => 1]);
    }

    public function testChaine2Caracteres() {
        $this->assertSame(CharCount::dooku("Éxige beaucoup de toi-même et attends peu des autres. Ainsi beaucoup d'ennuis te seront épargnés."), [
            "e" => 17,
            "u" => 7,
            "t" => 7,
            "s" => 7,
            "a" => 6,
            "n" => 6,
            "i" => 5,
            "o" => 4,
            "p" => 4,
            "d" => 4,
            "r" => 3,
            "g" => 2,
            "b" => 2,
            "c" => 2,
            "m" => 2,
            "x" => 1,
        ]);
    }
}