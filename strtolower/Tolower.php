<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 10/10/17
 * Time: 10:02
 */

class Tolower {

    public static function to_lower($inputstring){

        $outputlowerstring="";
        $inputstring_length = mb_strlen($inputstring,'UTF-8');
        for ($i=0; $i<$inputstring_length; $i++){
            $currentchar = mb_substr($inputstring, $i, 1, 'UTF-8');
            $ascii = ord($currentchar);
            if (($ascii>65)AND($ascii<90)){
                $lowerasciichar=$ascii+32;
            }
            else {
                $lowerasciichar=$ascii;

            }
            $lowerchar = chr($lowerasciichar);
            $outputlowerstring .= $lowerchar;
        }
        return $outputlowerstring;
    }
}