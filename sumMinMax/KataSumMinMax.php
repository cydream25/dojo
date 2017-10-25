<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 28/09/17
 * Time: 09:43
 */



class KataSumMinMax
{

    public static function sumMinMax($tableau) {
        if(is_array($tableau) && count($tableau) < 2)
        {
            return 0;
        }

        else {
            return array_sum($tableau) - min($tableau) - max($tableau);

        }
    }
}

