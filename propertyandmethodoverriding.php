<?php
/*   Property overriding and Method overriding */



class customer {
    public $name="Hasib from customer section";
    public function show()
    {
        return $this->name;
    }
}
class subscriber extends customer{
    public $name="Halim from subscriber section";
    public function show()
    {
        return  $this->name;
    }
}
$obj1= new customer();
echo $obj1->show()."<br>";
$obj2= new subscriber();
echo $obj2->show()."<br>";
/*        
output
--------------------------------------------------------------
Hasib from customer section
Halim from subscriber section

*/



?>
