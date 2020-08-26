<?php
namespace App\OOP;

class CarDashboard
{
    protected int $oliLevel;
    protected int $fuelLevel;
    protected int $airPresure;

    /**
     * Get the value of oliLevel
     */ 
    private function getOliLevel()
    {
        return $this->oliLevel;
    }

    /**
     * Get the value of fuelLevel
     */ 
    private function getFuelLevel()
    {
        return $this->fuelLevel;
    }

    /**
     * Get the value of airPresure
     */ 
    private function getAirPresure()
    {
        return $this->airPresure;
    }

    public function readDashboard() : string
    {
        return "Dashboard Analysis \n 
        Fuel: {$this->getFuelLevel()} \n 
        Oil: {$this->getOliLevel()} \n 
        airPressure: {$this->getAirPresure()} \n
        ";
    }

    /**
     * Set the value of oliLevel
     *
     * @return  self
     */ 
    public function setOliLevel($oliLevel)
    {
        $this->oliLevel = $oliLevel;

        return $this;
    }

    /**
     * Set the value of fuelLevel
     *
     * @return  self
     */ 
    public function setFuelLevel($fuelLevel)
    {
        $this->fuelLevel = $fuelLevel;

        return $this;
    }

    /**
     * Set the value of airPresure
     *
     * @return  self
     */ 
    public function setAirPresure($airPresure)
    {
        $this->airPresure = $airPresure;

        return $this;
    }
}