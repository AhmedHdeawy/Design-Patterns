<?php
namespace App\Patterns\Creational\FactoryMethod\Dialogs;
use App\Patterns\Creational\FactoryMethod\Buttons\Button;

abstract class Dialog
{
    abstract public function makeButton() : Button;

    /**
    * Render Dialog
    *
    * return string
    */
    public function renderDialog(): string
    {
        $button = $this->makeButton();

        return "
            #############################
                {$button->showMe()}
            #############################
        ";
    }

}
