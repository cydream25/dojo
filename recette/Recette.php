<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 03/10/17
 * Time: 15:32
 */

class Recette
{
    private $nbPersonne;
    private $chocolat; //float nb de gramme
    private $sucre; //float nb en gramme
    private $lait; //float nb en cl
    private $jus; //flaot nb en ml

    public function __construct($nbPersonnes)
    {
        $this->nbPersonne = $nbPersonnes;
        $this->chocolat = 25*$nbPersonnes;
        $this->sucre = 12.5*$nbPersonnes;
        $this->lait = 1.25*$nbPersonnes;
        $this->jus = 370/4*$nbPersonnes;
    }

    public function afficheRecette(){
        if ($this->nbPersonne==0) echo "Achète toi des amis\n";
        else {
            echo "Recette pour $this->nbPersonne personne" . (($this->nbPersonne > 1) ? "s" : "") . "\n";
            echo "Temps de cuisson : 5 minutes\n";
            echo ($this->chocolat > 1000) ? ($this->chocolat / 1000) . "kg" : $this->chocolat . "g";
            echo " de chocolat\n";
            echo ($this->sucre > 1000) ? ($this->sucre / 1000) . "kg" : $this->sucre . "g";
            echo " de sucre\n";
            echo ($this->lait > 100) ? ($this->lait / 100) . "l" : $this->lait . "cl";
            echo " de lait\n";
            echo ($this->jus > 1000) ? ($this->jus / 1000) . "l" : $this->jus . "ml";
            echo " de jus\n";
            echo "1 pincée de canelle\n";
        }
    }
}

$r = new Recette(0);
$r->afficheRecette();
