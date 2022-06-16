<?php
/* Abstruct class can not have object 
   An Abstruct class must have a abstruct method 
   which is implemented in child class  
*/
 abstract class Math {
     
     public $a;
     public $b;
     abstract public function calc($a,$b);
     
 } 
  class Addition extends Math {
    public $result;
    public function calc($c,$d)
    {
        $this->a=$c;
        $this->b=$d;
        $this->result= $this->a+$this->b;
        return $this->result;
    }
  }
  class Subtraction extends Math {
    public $result;
    public function calc($e,$f)
    {
        $this->a=$e;
        $this->b=$f;
        $this->result= $this->a - $this->b;
        return $this->result;
    }
  }
$obj1= new Addition();
echo $obj1->calc(30,40.1)."<br>";
$obj2= new Subtraction();
echo $obj2->calc(30,40.1)."<br>";
/* output 
--------------------------------------------------------------
70.1
-10.1



*/
?>