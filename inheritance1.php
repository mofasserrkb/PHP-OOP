<?php
/* How to access private property with public method And
 property initialized with  constructor in php */

class customer {

private $id;
private $name;
private $email;

public function __construct($id=0,$name="No name",$email="No email")
{
    $this->id=$id;
    $this->name=$name;
    $this->email=$email;
    
}
public function getInfo() {
   echo 'ID='.' '.$this->id.' '.'Name='.' '.$this->name.' '.'Email='.' '.$this->email."<br>";
}

}


$obj1= new customer(1,"Rakib","Rakib@gmail.com");
$obj1->getInfo();
/*              
    output
------------------------------------------------------------------------------------
ID= 1 Name= Rakib Email= Rakib@gmail.com


*/


?>
