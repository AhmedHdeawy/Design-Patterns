<?php
namespace App\Patterns\Creational\FactoryMethod\Buttons;

use App\Patterns\Creational\FactoryMethod\Buttons\Button;

class SystemButton extends Button
{
    public function showMe(): string
    {
        return "System Button";
    }
}
