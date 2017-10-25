<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 26/09/17
 * Time: 09:31
 */

class KataADN2ARN
{
   public static function trans($BRINADN){


        $BRINARN = "";
        $BRINADN_LEN = mb_strlen($BRINADN, 'UTF-8');


        // $i représente l'index courant dans la chaîne
        for($i=0; $i<$BRINADN_LEN; $i++) {
            $nucleotide=mb_substr($BRINADN,$i, 1, "UTF-8");
            switch ($nucleotide) {
                case "A":
                    $BRINARN .= "U";
                    break;
                case "G":
                    $BRINARN .= "C";
                    break;
                case "C":
                    $BRINARN .= "G";
                    break;
                case "T":
                    $BRINARN .= "A";
                    break;
                default:
                    return false;
            }

        }

        return $BRINARN;
    }
}