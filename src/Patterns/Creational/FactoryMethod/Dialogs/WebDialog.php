<?php
namespace App\Patterns\Creational\FactoryMethod\Dialogs;

use App\Patterns\Creational\FactoryMethod\Buttons\Button;
use App\Patterns\Creational\FactoryMethod\Dialogs\Dialog;
use App\Patterns\Creational\FactoryMethod\Buttons\WebButton;

class WebDialog extends Dialog
{
    public function makeButton(): Button
    {
        return new WebButton();
    }
}
