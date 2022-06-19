<?php
trait Hello {
    public function greet(){
        return "Greeting from Hello trait";
    }
}
trait Hi {
    protected function  greet(){
        return "Greeting from Hi trait";
    }
}

class Person {
    use Hello,Hi{
        Hello::greet insteadof Hi;
        Hi::greet as public higreet;
    }
}
class Person1 {
    use Hi {
        Hi::greet as public;
    }
}
$obj1=new Person();
echo $obj1->greet()."<br>";
echo $obj1->higreet()."<br>";
$obj2=new Person1();
echo $obj2->greet();
/*   Output 
-------------------------------------------------------------------------
Greeting from Hello trait
Greeting from Hi trait
Greeting from Hi trait

*/
?>