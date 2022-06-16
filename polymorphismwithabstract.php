<?php
/*    To implement polymorphism in PHP, you can use either abstract classes or interfaces.                               */

  abstract class Person {

abstract public function greet();

  }
 
  class English extends Person {

    public function greet()
    {
        return "Hello";
    }
  }
  class German extends Person {

    public function greet()
    {
        return "Hallo";
    }
  }
  class Bangali extends Person {

    public function greet()
    {
        return "Ki Obstha";
    }
  }
  class America extends Person {

    public function greet()
    {
        return "Hi";
    }
  }

  function greeting($People)
 {
       foreach ($People as $person)
       {
         echo $person->greet()."<br>";
       }
 }
$People =[
    new English(),
    new German(),
    new Bangali(),
    new America(),
];
greeting($People);
/* output
-------------------------------------------------------------
Hello
Hallo
Ki Obstha
Hi


*/
?>