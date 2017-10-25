<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 17/10/17
 * Time: 10:56
 */
class SumInt {

    public static function sum($inArray) {

        if (empty($inArray))
        {
            $outArray=[0,0];
        }
        elseif ($inArray[0]==0)
        {
            $outArray=[0,0];
        }
        elseif($inArray[0] > 0)
        {
            $outArray=[$inArray[0],0];
        }
        else
        {
            $outArray = [0,$inArray[0]];
        }

        if (count($inArray)==2)
        {
            if($inArray[0] > 0)
            {
                $outArray[0]=$inArray[0];
            }
            else
            {
                $outArray[1]=$inArray[0];
            }
            if($inArray[1] > 0)
            {
                $outArray[0]=$inArray[1];
            }
            else
            {
                $outArray[1]=$inArray[1];
            }

            $sum=array_sum($inArray);
            $outArray=[$sum,0];
        }

        return $outArray;
    }

}