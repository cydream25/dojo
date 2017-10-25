<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 19/10/17
 * Time: 09:27
 */

class CharBefore
{
    public static function beforeE($sentence){
        $sentence = strtolower(iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $sentence));
        if(strlen($sentence) < 2)
        {
            $outputChar = '';
        } else {
            $tableSentence = str_split($sentence);

            foreach ($tableSentence as $key => $curentChar) {
                if($curentChar == 'e') {
                    if (array_key_exists($key-1, $tableSentence)){
                        @$outputTab[$tableSentence[$key - 1]]++;
                    }
                    else {
                        $outputChar = "";
                    }
                }
            }
        }
        if ($outputChar == " "){
            $outputChar = "";
        }
        $outputChar = array_pop(arsort($outputTab));
        return $outputChar;
    }
}