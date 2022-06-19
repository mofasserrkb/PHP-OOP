<?php
/* php can only allow single inheritance. 
But if class needs multiple behaviors, traits solve this problem */
trait hello {
    public function greet()
    {
        return "Hello from Hello trait";
    }
    public function greeting()
    {
        return "Hi from Helllo trait";
    }
}
trait hi {
    public function greetings()
    {
        return "Hi from Hi trait";
    }
}
class Person {
    use hello,hi;
}
$obj1=new Person();
echo $obj1->greet()."<br>";
echo $obj1->greeting()."<br>";
echo $obj1->greetings()."<br>";
/* output 
-----------------------------------------------------------------
Hello from Hello trait
Hi from Helllo trait
Hi from Hi trait




*/
?>