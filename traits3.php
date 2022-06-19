<?php
trait Hello {
    public function greet()
    {
        return "Greeting from Hello trait";
    }
}
trait Hi {
    public function greet()
    {
        return "Greeting from Hi trait";
    }
}
class Person {
    use Hello,Hi {
         Hello::greet insteadof Hi;
    }
}

$obj1=new Person();
echo $obj1->greet();


?>