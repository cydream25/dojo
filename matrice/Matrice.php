<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 05/10/17
 * Time: 09:34
 */
namespace Matrice;

class Matrice
{
    public $matrice_tab; // Type: tableau de tableaux

    public function __construct($tableau_tableau)
    {
        $this->matrice_tab = $tableau_tableau;
    }

    public function calcul($operateur, $nombre)
    {

            //une matrice n'a ni opérateur ni nombre
        foreach ($this->matrice_tab as $cle_tableau => $tableau){
            foreach ($tableau as $cle_valeur =>  $valeur){
                if ($operateur == "+")
                    $valeur += $valeur;
                if ($operateur == "-")
                    $valeur -= $valeur;
                if ($operateur == "*")
                    $valeur += $valeur;
                if ($operateur == "/")
                    $valeur /= $valeur;
                $this->matrice_tab[$cle_tableau][$valeur] = $nombre;
            }

        }
        return $this;
    }
    
}