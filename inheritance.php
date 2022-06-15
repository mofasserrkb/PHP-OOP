<?php
/* Example of Inheritance. Here In child class property is not defined. 
It is inheritated from parent class and initilized using constructor */

class employer {
      public $id;
      public $name;
      protected $salary;
      public $email;
      
      public function __construct($ID,$Name,$Salary,$Email)
      {
        $this->id=$ID;
        $this->name=$Name;
        $this->salary=$Salary;
        $this->email=$Email;
      }
    
      public function getInfo(){
        echo "<h1>This is from employer class</h1>"."<br>";
        echo 'ID='.' '. $this->id.' '.'Name='.' '.$this->name.' '.'Salary='.' '.$this->salary.' '.'Email='.' '.$this->email."<br>";
      }

}

class manager extends employer{
    public $incentive;
    public $mobile_bill;
    public $total_salary;

     public function getInfo()
     {
        $this->incentive=2000;
        $this->mobile_bill=500;
        echo "<h1>This is from manager class</h1>"."<br>";
        echo $this->id.'<br>';
        echo $this->name.'<br>';
        echo $this->email.'<br>';
        echo $total_salary= $this->salary + $this->incentive+$this->mobile_bill.'<br>'; 
     }
}
$obj1= new manager(1,'Rakib',20000,'rakib@gmail.com');
$obj1->getInfo();
$obj2= new employer(1,'Sakib',20000,'sakib@gmail.com');
$obj2->getInfo();
/*      Output   
----------------------------------------------------
This is from manager class

1
Rakib
rakib@gmail.com
22500
This is from employer class

ID= 1 Name= Sakib Salary= 20000 Email= sakib@gmail.com


*/
?>
