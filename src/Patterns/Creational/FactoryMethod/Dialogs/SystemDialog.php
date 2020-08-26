<?php
namespace App\Patterns\Creational\FactoryMethod\Dialogs;

use App\Patterns\Creational\FactoryMethod\Buttons\Button;
use App\Patterns\Creational\FactoryMethod\Dialogs\Dialog;
use App\Patterns\Creational\FactoryMethod\Buttons\SystemButton;

class SystemDialog extends Dialog
{
    public function makeButton(): Button
    {
        return new SystemButton();
    }
}
