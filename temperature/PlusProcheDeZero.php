<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 12/10/17
 * Time: 09:27
 */

class PlusProcheDeZero
{
    public static function zero($temperatures)
    {
        if(empty($temperatures))
        {
            throw new Exception('Le tableau est vide.');
        }
        $temperatureSortie = $temperatures[0];
        if (count($temperatures)>1) {
            for ($i = 1; $i < count($temperatures); $i++) {
                if (abs($temperatures[$i]) <= abs($temperatureSortie)) {
                    if (abs($temperatures[$i])== abs($temperatureSortie))
                    {
                        if ($temperatures[$i]>$temperatureSortie)
                            $temperatureSortie=$temperatures[$i];
                    }
                    else
                        $temperatureSortie = $temperatures[$i];
                }
            }
        }
        return $temperatureSortie;

    }


}

/*
[15, 6, -2, 1, 40, -6] => 1
[-2, -15, -40, -7, -1] => -1
[42, -28, 7, 9, -15 -7] => 7
*/
