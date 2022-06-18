<?php
/* static property is accessed without creating object 

*/
 class Person {
    public static $name="Rakib";
    public static $mobile_nmuber;
    public static $salary;
    public static function getNumber()
    {
        self::$mobile_nmuber="01671145818";
        return self::$mobile_nmuber;
    }
 }
 class Account extends Person {
    public static function getSalary(){
    return    parent::$salary=20000;
    }
 }
echo Person::$name."<br>";
echo Person::getNumber()."<br>";
echo Account::getSalary();


?>