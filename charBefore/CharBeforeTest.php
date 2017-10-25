<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 19/10/17
 * Time: 09:19
 */
require 'CharBefore.php';

use PHPUnit\Framework\TestCase;

class CharBeforeTest extends TestCase
{
    public function testPHPUnit () {
        $this->assertEquals(true, true);
    }

    public function testOneChar () {
        $this->assertSame("", CharBefore::beforeE("e"));
    }

    public function testTwoChar () {
        $this->assertSame("l", CharBefore::beforeE("le"));
    }

    public function testThreeChar () {
        $this->assertSame("r", CharBefore::beforeE("tre"));
    }

    public function testSentence () {
        $this->assertSame("", CharBefore::beforeE("le est est"));
    }

    public function testFoireux () {
        $this->assertSame("", CharBefore::beforeE("en"));
    }

    public function testFinal () {
        $this->assertSame("d", CharBefore::beforeE("Partant d'un effort de délimitation de l'entrepreneuriat et d'une de ses figures les plus typiques -
    les enterprises nouvellement créées- sont mis au jour leurs difficultés stratégiques lors des premières années.
    L'auteur propose une revue de literature des comportements stratégiques utilisées par les firmes de moins
    de 8 ans et une description des facteurs cognitifs agissant à chaque phase de la decision stratégique.
    9 cas sont étudiés dont deux en longitudinal Une modélisation des biais et heuristiques cognitifs est
    proposée ainsi que des solutions en matières d'accompagnement spécifique."));
    }

}