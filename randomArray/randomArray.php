<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 19/10/17
 * Time: 11:14
 */

class randomArray
{
    public static function m_sort($input)
    {
        $output = [];
        while (!empty($input)) {
            $min = min($input); //Etape 1

            $output[] = $min;// Etape 2

            // Etape 3
            $index = array_keys($input, $min)[0];
            unset($input[$index]);

        }
        return $output;
    }

}