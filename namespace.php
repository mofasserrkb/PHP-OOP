<?php
/*           
If multiple classes with same name is included in a php file, then an
error will come. name space solve this problem 
*/
namespace one;
class Hello {
    public function __construct()
    {
        echo  "Good morning! This message is from namepace one,class Hello"."<br>";
    }
}










?>