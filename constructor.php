<?php
/* property initialization with constructor           */
 class customer {

    public $name;
    public $id;
    public $email;
    
   public function __construct($name="No name",$id=1,$emailid="No email")
   {
       $this->name=$name;
       $this->id=$id;
       $this->email=$emailid;
   }  
   public function getEmail () {
   
     echo 'ID NO='.$this->id.' '.'Name='.$this->name.' '.'Email='.' '.$this->email. '<br>';

   }


 }
$obj1= new customer("Hasib",1,"hasib@gamil.com");
$obj1->getEmail();

$obj2= new customer();
$obj2->getEmail();
?>