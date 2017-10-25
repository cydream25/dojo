<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 25/10/17
 * Time: 09:34
 */
ini_set('display_errors', 'Off');

require "Matrice.php";

use Matrice\Matrice;

$matrice1 = new Matrice([[0, 0, 0], [1, 1, 1], [2, 2, 2]]);

echo $matrice1->calcul('+', 5);