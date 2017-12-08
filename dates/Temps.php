<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 28/11/17
 * Time: 09:41
 */


class Temps {


    public static function CalculAge($naissance)
    {
        //date format français
        $dateActuelle  = new DateTime();
        $age = $dateActuelle->diff(new DateTime($naissance));
        return $age->format("%Y");
    }

    public static function CalculAgeTs($naissance)
    {
        return round((time() - strtotime($naissance))/(24*60*60)/365.25);
    }

    public static function DateLaPlusRecente($date1, $date2)
    {
        $date1 = new DateTime($date1);
        $date2 = new DateTime($date2);

        if($date1 != $date2){
            if ($date1 > $date2)
                return $date1->format('Y-m-d');
            else
                return $date2->format('Y-m-d');
        }
        else return $date1->format('Y-m-d');
    }

    public static function conversion($heureDeParis)
    {
        $heureDeParis = new DateTime($heureDeParis, new DateTimeZone("Europe/Paris"));
        $heureDeLondres = $heureDeParis->setTimezone(new DateTimeZone("Europe/London"));
        return $heureDeLondres->format("h:i");
    }

    //dernier exo, ecrire une requete SQL avec des dates.

}

//echo Temps::CalculAge("1994/6/15") . "\n";
//echo Temps::CalculAgeTs("1994-06-15");
//echo Temps::DateLaPlusRecente("2010-6-15", "2010/8/15");
echo Temps::conversion("11:13");