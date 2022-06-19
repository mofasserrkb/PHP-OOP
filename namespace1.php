<?php
/*           
If multiple classes with same name is included in a php file, then an
error will come. name space solve this problem 
*/
namespace two;
class Hello {
    public function __construct()
    {
       $obj1= new \one\Hello();
       
    }
    public function greeting()
    {
        echo "H! This message is from namepace two,class Hello"."<br>";
    }
}

?>