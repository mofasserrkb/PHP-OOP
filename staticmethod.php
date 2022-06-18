<?php
/* static method called directly without creating object */
class Calculation {
    public static function add ($a,$b){
        return $a+$b;
    }
}
class Math extends Calculation{
    public static function getAns($c,$d){
     return   parent::add($c,$d);
    }
}
echo Calculation::add(20,30)."<br>";
echo Math::getAns(100,400)."<br>";
/* OUTPUT
----------------------------------------------------------------
50
500
*/



?>