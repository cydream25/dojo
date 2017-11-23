<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 23/11/17
 * Time: 10:56
 */



class basket
{



    const TABLEAU_TVA =[1=>1.05, 2=>1.20];
    const REMISE1 = 0.95;
    const REMISE2 = 0.90;


    public static function ticket($tableau_produits) {
        foreach ($tableau_produits as $tableau_produit){
            if ($tableau_produit["qty"] >= 10)
                $prix_remise = $tableau_produit["prix_ht"] * self::REMISE1;
            elseif ($tableau_produit["qty"] >= 3)
                $prix_remise = $tableau_produit["prix_ht"] * self::REMISE2;
            else
                $prix_remise = $tableau_produit["prix_ht"];
            
        }
    }
}