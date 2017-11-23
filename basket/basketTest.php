<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 23/11/17
 * Time: 10:45
 */

/*require 'basket.php';*/

use PHPUnit\Framework\TestCase;


class basketTest extends TestCase
{
    public function testPHPUnit()
    {
        $this->assertEquals(true,true);
    }

    public function testFinal(){
        $this->assertSame(
            Array(
                "total_ht" => 269.73,
                "total_discount" => 14.52,
                "total_tva5" => 0.98,
                "total_tva20" => 50.03,
                "total_ttc" => 320.74
            ),
            basket::ticket(array(
                array(
                    'name' 	=> 'figurine maitre yoda',
                    'price_ht'	=> 47.50,
                    'code_tva'	=> 2,
                    'qty'		=> 3
                ),
                array(
                    'name' 	=> 'Chewing gum Chewbaka',
                    'price_ht'	=> 1.45,
                    'code_tva'	=> 1,
                    'qty'		=> 15
                ),
                array(
                    'name' 	=> 'Taille crayon R2D2',
                    'price_ht'	=> 7.80,
                    'code_tva'	=> 2,
                    'qty'		=> 2
                ),
                array(
                    'name' 	=> 'Boules de pétanque BB-8 (x2)',
                    'price_ht'	=> 34.80,
                    'code_tva'	=> 2,
                    'qty'		=> 3
                ),
            )));

    }
}