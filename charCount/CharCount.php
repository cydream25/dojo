<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 24/10/17
 * Time: 09:46
 */

class CharCount
{
    public static function dooku($inputString){
        $inputString = strtolower(iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $inputString));
        $outputArray = [];
        if(!empty($inputString))
        {
            $inputArray = str_split($inputString);
            foreach ($inputArray as $char)
            {
                if(!ctype_alpha($char)) {
                    continue;
                }
                if(array_key_exists($char, $outputArray)) {
                    $outputArray[$char]++;
                }
                else
                {
                    $outputArray[$char]=1;
                }
            }
            arsort($outputArray);
        }
        return $outputArray;
    }
}