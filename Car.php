<?php

include_once ("Vehicle.php");

Class Car extends Vehicle implements LightableInterface
{

    public function switchOn(): bool
    {
        return true;
    }
    public function switchOff(): bool
    {
        return false;
    }

}