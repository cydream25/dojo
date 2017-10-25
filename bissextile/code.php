<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 14/09/17
 * Time: 09:19
 */

function bisex ($year) {
    if (($year % 4 == 0 and $year % 100 != 0 ) or $year % 400 == 0) {
        return 366;
    }
    return 365;
}

echo bisex(1704) . "\n";