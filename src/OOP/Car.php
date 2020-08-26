<?php
namespace App\OOP;

abstract class Car
{

    
    // Properites
    protected int $speed;
    protected int $numOfDoors;
    protected string $gearboxsystem;
    protected string $color;
    
    protected bool $turnedOn = false;

    private CarDashboard $dashboard;
    
    public function __construct(int $speed, int $numOfDoors, string $gearboxsystem, string $color)
    {
        $this->speed = $speed;
        $this->numOfDoors = $numOfDoors;
        $this->gearboxsystem = $gearboxsystem;
        $this->color = $color;
    }

    // Abstract Functions
    public abstract function move() : int;

    public abstract function turnOn() : bool;

    public abstract function turnOff() : bool;

    public abstract function accelerate(int $speed) : bool;
    
    public abstract function park() : bool;

    public function installDashboard(CarDashboard $dashboard)
    {
        $this->dashboard = $dashboard;
    }

    public function CarInfo() : string
    {
        if ($this->dashboard instanceof CarDashboard) {
            return "This speed is {$this->speed} ... \n
            more info {$this->dashboard->readDashboard()}";
        }

        return "This Car has Speed {$this->speed}";
    }

}
