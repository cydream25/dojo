<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 03/10/17
 * Time: 10:59
 */

class Match
{
    public $tableauDePoints;
    public $joueur1;
    public $joueur2;

    public function __construct($tab,$nom1,$nom2) {
        $this->tableauDePoints = $tab;
        $this->joueur1 = new Joueur($nom1);
        $this->joueur2 = new Joueur($nom2);
    }

    public function jouer()
    {
        foreach ($this->tableauDePoints as $idJoueur)
        {
            if($idJoueur == 1) {
                $this->joueur1->marque();
            }
            elseif ($idJoueur == 2) {
                $this->joueur2->marque();
            }
        }
    }

    public function renvoiTableauResultat(){
        return array(
            $this->joueur1->nom => $this->joueur1->getScore(),
            $this->joueur2->nom => $this->joueur2->getScore(),
        );
    }
}