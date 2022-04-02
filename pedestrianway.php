<?php

require_once 'highway.php';
require_once 'car.php';
require_once 'bike.php';
require_once 'skateboard.php';

final class PedestrianWay extends Highway
{
    private array $currentVehicles;
    
    private int $nbLane = 1;

    private int $maxSpeed = 10;

    public function __contruct()
    {

    }

    public function addVehicle($vehicle): void
    {
        if(($vehicle instanceof Bike) || ($vehicle instanceof Skateboard) ) $currentVehicles [] = $vehicle;
    }
}