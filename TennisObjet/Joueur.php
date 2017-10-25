<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 03/10/17
 * Time: 11:12
 */

class Joueur
{
    private $points;
    public $nom;

    public function __construct($nom){
        $this->nom = $nom;
        $this->points = 0;
    }

    public function getScore(){
        switch ($this->points){
            case 0 :
                return 0;
            case 1 :
                return 15;
            case 2 :
                return 30;
            case 3 :
                return 40;
        }
    }

    public function marque(){
        $this->points++;
    }
}