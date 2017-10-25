<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 12/10/17
 * Time: 09:27
 */
require 'PlusProcheDeZero.php';

class PlusProcheDeZeroTest extends PHPUnit\Framework\Testcase
{
    public function testPHPUnit()
    {
        $this->assertEquals(true,true);
    }

    public function testTableauVide()
    {
        $this->expectException("Exception");
        //$this->expectException(Exception::class); --- equivalent ligne du haut, ::class transforme la classe nommée précédemment en string O_o!
        PlusProcheDeZero::zero(array());
    }

    public function testTableauNonVideAvecZero()
    {
        $this->assertSame(0,PlusProcheDeZero::zero([0]));
    }


    public function testTableauAvecEntierPositif()
    {
        $this->assertSame(1, PlusProcheDeZero::zero([1]));
    }

    public function testTableauAvecEntierNegatif()
    {
        $this->assertSame(-1, PlusProcheDeZero::zero([-1]));
    }

    public function testTableauAvecDeuxEntiersPositifs()
    {
        $this->assertSame(2, PlusProcheDeZero::zero([14,2]));
    }

    public function testTableauAvecEntiersPositifsEtNegatifs()
    {
        $this->assertSame(2, PlusProcheDeZero::zero([-8,2]));
    }

    public function testTableauEnonce1()
    {
        $this->assertEquals(1, PlusProcheDeZero::zero([15, 6, -2, 1, 40, -6]));
    }
    public function testTableauEnonce2()
    {
        $this->assertEquals(-1, PlusProcheDeZero::zero([-2, -15, -40, -7, -1]));
    }
    public function testTableauEnonce3()
    {
        $this->assertEquals(7, PlusProcheDeZero::zero([42, -28, -7, 9, -15, 7]));
    }


    //ajouter une fonction de test pour un tableau de 3 éléments positifs et negatifs

    //ajouter une fonction de test pour un tableau de n éléments positifs et négatifs

    //ajouter une fonction de test pour chacun des exemples de l'énnoncé

}

/*
[15, 6, -2, 1, 40, -6] => 1
[-2, -15, -40, -7, -1] => -1
[42, -28, 7, 9, -15, -7] => 7
*/