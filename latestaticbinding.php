<?php 
class Model {
public static $tableName="table 1(from Base class Model)";
public static function getName(){
    return self::$tableName;//without late static binding
}
public static $categoryName="Category 1 (from Base class Model)";
public static function getCategory(){
    return static::$categoryName;//late static binding
}
}

class User extends Model {
    public static $tableName="table 2 (from derived Class User)";
    public static $categoryName="Category 2 (from derived class User)";
}
echo "Trying to print User Table Name=".''.User::getName()."<br>";
echo "Trying to print User Category Name".''.User::getCategory();









?>