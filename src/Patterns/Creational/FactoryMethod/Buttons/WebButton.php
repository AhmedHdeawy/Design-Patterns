<?php
namespace App\Patterns\Creational\FactoryMethod\Buttons;

use App\Patterns\Creational\FactoryMethod\Buttons\Button;

class WebButton extends Button
{
    public function showMe(): string
    {
        return "<div>Web Button</div>";
    }
}
