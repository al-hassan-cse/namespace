<?php
 
namespace App2;

class User{
    
    public function getName()
    {
        return 'App2 User method Name Al Hassan';
    }
     
}

class Student extends User{
     
    public function GetAge()
    {
        return   'Student method Age 30';
    }
}
