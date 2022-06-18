<?php 
class Model {
    protected static $tableName="Model";
    public static function getName(){
        return static::$tableName;
    } 
}
class User extends Model {
    protected static $tableName="user";
  
}
echo User::getName()."<br>";

/* OUTPUT 
------------------------------------------------------------
user



*/



?>