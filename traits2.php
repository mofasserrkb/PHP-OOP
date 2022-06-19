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
        return "Hi from Hi class";
    }      
}

class Subscriber extends Person {
    use hello;
    public function greet()
    {
        return "Greeting from Subscriber class";
    }
}
$obj1=new Subscriber();
echo $obj1->greet()."<br>";
?>