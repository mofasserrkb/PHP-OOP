<?php 
trait Hello {
    public function greet()
    {
        return "Hello from Hello trait";
    }      
}
 
class Person {
    public function greet()
    {
        return "Hi from Person class";
    }      
}

class Subscriber extends Person {
    use hello;
}
$obj1=new Subscriber();
echo $obj1->greet()."<br>";
/*output 
---------------------------------------------
Hello from Hello trait



*/



?>