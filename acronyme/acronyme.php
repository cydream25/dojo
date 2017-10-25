<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 21/09/17
 * Time: 09:37
 */

function acronyme($sujet) {
    $acronyme = "";

    //$mots = explode(" ", $sujet);







    foreach ($mots as $mot) {
       $premier_char = mb_substr($mot, 0, 1, "UTF-8");
       $acronyme = $acronyme . $premier_char;
   }
   return mb_strtoupper($acronyme, "UTF-8");
}

var_dump(acronyme("Vieux motard que j'aimais !"));