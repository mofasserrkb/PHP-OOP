<?php

class customer {
    protected $id;
    protected $name;
    protected $email;
    public function __construct($id,$name,$email)
    {
        $this->id=$id;
        $this->name=$name;
        $this->email=$email;

    }
    public function getEmail()
   {
     echo $this->email."<br>";
     echo $this->name."<br>";
     echo $this->id."<br>";     
   }
}
class subscriber extends customer{
    public $plan;
   public function __construct($id,$name,$email,$plan)
   {
     parent::__construct($id,$name,$email);
     $this->plan;
     
   }
 
}

$obj1= new subscriber(1,'rakib','rakib@gmail.com','Pro');
$obj1->getEmail();
/*  OUTPUT
-----------------------------------------------------------------------------------------------
rakib@gmail.com
rakib
1
*/


?>