<?php

include_once ("LightableInterface.php");
include_once ("Car.php");
include_once ("Bike.php");
include_once ("Vehicle.php");
include_once ("Skateboard.php");


$bmw = new Car();
$rockrider = new Bike(15);
$tricycle = new Bike(5);


switchMeON($bmw);
switchMeON($rockrider);
switchMeON($tricycle);


switchMeOFF($bmw);
switchMeOFF($rockrider);
switchMeOFF($tricycle);



   function switchMeON (LightableInterface $obj)
    {
     
        if ($obj->switchOn()===true)
        {
         echo  "vrai". PHP_EOL;
        }
        else
        {
            echo  "faux". PHP_EOL;
        }
   
    }


    
   function switchMeOFF (LightableInterface $obj)
   {
       if ($obj->switchOff()===false)
       {
        echo  "faux". PHP_EOL;
       }
  
   }

