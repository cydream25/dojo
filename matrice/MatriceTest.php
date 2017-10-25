<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 05/10/17
 * Time: 09:30
 */
require 'Matrice.php';
use Matrice\Matrice;


class MatriceTest extends PHPUnit_Framework_TestCase
{
    public function testPHPUnit(){
        $this->assertEquals(TRUE, TRUE);
    }

    public function testcalcul() {
        $matrice1 = new Matrice([[0, 0, 0], [0, 0, 0], [0, 0, 0]]);
        $matrice2 = new Matrice([[5, 5, 5], [5, 5, 5], [5, 5, 5]]);
        $this->assertEquals($matrice1->calcul('+', 5), $matrice2);
    }


}