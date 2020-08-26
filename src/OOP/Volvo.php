<?php

namespace App\OOP;

class Volvo extends Car
{
    public function move(): int
    {
        return $this->speed;
    }

    public function turnOn(): bool
    {
        $this->turnedOn = true;
        return true;
    }

    public function turnOff(): bool
    {
        $this->turnedOn = false;
        return true;
    }

    public function accelerate(int $speed): bool
    {
        $this->speed = $speed * 2;
        return true;
    }

    public function park(): bool
    {
        return true;
    }
}
