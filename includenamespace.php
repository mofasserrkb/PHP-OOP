<?php
require 'namespace.php';
require 'namespace1.php';
/* import namespace follow below code
use two\Hello;
$obj2=new Hello();
*/
/* without importing namespace follow below code. 
Remember Fully qualified names required from namespace */
$obj2=new two\Hello(); 
$obj2->greeting();
/*output 
Good morning! This message is from namepace one,class Hello
H! This message is from namepace two,class Hello

*/


?>
