<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 19/10/17
 * Time: 10:59
 */

require 'randomArray.php';

class randomArrayTest extends PHPUnit\Framework\TestCase
{
    public function testPhpuUnit () {
        $this->assertEquals (true,true);
    }

    public function testTableauVide () {
        $this->assertSame ([], randomArray::m_sort([]));
    }

    public function testTableauUnEntier () {
        $this->assertSame ([1], randomArray::m_sort([1]));
    }

    public function testTableauDeuxEntiers () {
        $this->assertSame ([1,2], randomArray::m_sort([2,1]));
    }

}