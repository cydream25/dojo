<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 17/10/17
 * Time: 09:09
 */

class ConvertionMorse
{
    CONST ALPHABET = array(
        "-.-.--" => "!",
        "....-" => "4",
        "..--.." => "?",
        "--..--" => ",",
        ".-.-.-" => ".",
        "..---" => "2",
        "...--" => "3",
        "--..." => "7",
        "-...." => "6",
        "....." => "5",
        "---.." => "8",
        "-..." => "B",
        "----." => "9",
        ".--." => "P",
        "-----" => "0",
        "--.." => "Z",
        "-.--" => "Y",
        "-..-" => "X",
        "-.-." => "C",
        "...-" => "V",
        ".----" => "1",
        "..-." => "F",
        "...." => "H",
        ".---" => "J",
        "--.-" => "Q",
        "-..-." => "/",
        ".-.." => "L",
        "..." => "S",
        "---" => "O",
        "-.-" => "K",
        ".-." => "R",
        "..-" => "U",
        "-.." => "D",
        ".--" => "W",
        "--." => "G",
        "-." => "N",
        "--" => "M",
        ".." => "I",
        ".-" => "A",
        "-" => "T",
        "." => "E",
    );

    public static function fromMorse ($chaineMorse)
    {
        if(empty($chaineMorse))
        {
            $resultat = $chaineMorse;
        }
        else
        {
            $motsMorse = explode('   ', $chaineMorse);
            $resultat = "";

            foreach ($motsMorse as $motMorse)
            {
                $mot = "";
                $caracsMorse = explode(' ', $motMorse);

                foreach ($caracsMorse as $caracMorse) {
                    $mot .= self::ALPHABET[$caracMorse];
                }
                $resultat .= $mot.' ';
            }
            $resultat = trim($resultat);
        }
        return $resultat;
    }
}