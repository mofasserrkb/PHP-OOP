<?php

interface Person {
    public function greet();
}
class English implements Person {
    public function greet(){
        echo "Hello"."<br>";
    }
}
class German implements Person {
    public function greet(){
        echo "Hallo"."<br>";
    }
}
class Bangali implements Person {
    public function greet(){
        echo "Ki re bhai"."<br>";
    }
}
class America implements Person {
    public function greet(){
        echo "Hi"."<br>";
    }
}

$greeters = [
    new English(),
    new America(),
    new German(),
    new Bangali()
];
function greeting ($greeters)
{
    foreach ($greeters as $people)
    {
         $people->greet();
    }
}
greeting($greeters);

/*
output
------------------
Hello
Hi
Hallo
Ki re bhai


*/




?>
