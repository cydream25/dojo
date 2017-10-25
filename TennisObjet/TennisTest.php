<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 03/10/17
 * Time: 10:31
 */

require 'Match.php';
require 'Joueur.php';


class TennisTest extends PHPUnit_Framework_TestCase
{
//    public function TestPHPUnit(){
//        $this->assertEquals(TRUE, TRUE);
//    }

    public function testPHPUnit()
    {
        $this->assertEquals(TRUE, TRUE);

    }

    public function testEnvoyerTableauVide()
    {
        $match = new Match(array(), 'Youssef', 'Grégory');
        $match->jouer();
        $this->assertEquals($match->renvoiTableauResultat(), array("Youssef" => 0, "Grégory" => 0));
    }

    public function testEnvoyerTableauUnElement()
    {
        $match = new Match(array(1), 'Youssef', 'Grégory');
        $match->jouer();
        $this->assertEquals($match->renvoiTableauResultat(), array("Youssef" => 15, "Grégory" => 0));
    }
}