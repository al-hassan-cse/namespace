<?php

require('user.php');
require('student.php');

use App\User as MainUser;
use App2\User as ClidUser;
use App2\Student;
 
$obj = new MainUser;
echo $obj->getName(); 


echo "<br>";

$obj = new ClidUser;
echo $obj->getName(); 


echo "<br>";
$obj = new Student;
echo $obj->GetAge();

echo "<br>";
echo $obj->getName(); 


# note:
# namespace deya encapsulation kore raklam
# varcual directly
# multiuple class neya kaj kora jai
 
?>

