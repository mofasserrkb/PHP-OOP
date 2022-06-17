<?php 
/* Interfaces specify what method a class should implement.
 Interfaces can not have properties , But abstract have properties;
 All methods in interface is abstract, 
 so abstract keyword is not written before methods in interface
All methods in interface ara public, While All methods in abstract can be public or protected
interface cannot allow to create object
*/
interface Addition {
    public function add($a,$b);    
}
interface Subtraction {
    public function sub($c,$d); 
}

class Math implements Addition,Subtraction {
    public function add($a,$b)
    {
       echo $a+$b."<br>";
    }
    public function sub($c,$d){
        echo $c-$d."<br>";
     }
}
$obj1=new Math();
$obj1->add(10,50);
$obj1->sub(55,40);
/*        
output
------------------------------------------------------
60
15

*/
?>