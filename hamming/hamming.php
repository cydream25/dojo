<?php

function hamming ($strand1, $strand2){

    // comparaison des longueurs des chaînes de caractère
    $strand1_length=mb_strlen($strand1);
    $strand2_length=mb_strlen($strand2);
    $hamming_distance = 0;
    //error message if strands are not equal
    if ($strand1_length != $strand2_length){
        return "message d'erreur :)";
    }

    // transformation des chaînes de caractères en tableaux
    $strand1_table = str_split(utf8_decode($strand1));
    $strand2_table = str_split(utf8_decode($strand2));

    // i$ is current index of strand1_length
/*    $i = 0;
    while ($i < $strand1_length){

        if ($strand1_table[$i] != $strand2_table[$i]) {
            $hamming_distance++;
        }
        $i++;
    }
*/

    /*for ($i = 0; $i < $strand1_length; $i++){
        if ($strand1_table[$i] != $strand2_table[$i]) {
            $hamming_distance ++;
        }
    }*/


    /*foreach ($strand1_table as $i => $caractere ) {
        if ($caractere != $strand2_table[$i]) {
            $hamming_distance ++;
        }
    }*/
    return $hamming_distance;
}

$strand_one = "ACGTGAAA";
$strand_two = "ACGTGCAT";

echo "Distance de hamming de $strand_one et $strand_two :" . hamming($strand_one, $strand_two)."\n";

?>