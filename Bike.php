<?php

include_once ("LightableInterface.php");
include_once ("Bike.php");

Class Bike extends Vehicle implements LightableInterface
{
    private int $currentSpeed;

    public function __Construct($currentSpeed) {
        $this->currentSpeed = $currentSpeed;
    }

    public function switchOn(): bool
    {
        if($this->currentSpeed > 10)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function switchOff(): bool
    {
        return false;
    }

    private function getCurrentSpeed(): int {
        return $this->currentSpeed;
    }

}