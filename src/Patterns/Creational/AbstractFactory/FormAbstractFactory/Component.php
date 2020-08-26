<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory;

interface Component
{
    /**
     * @return void
     */
    public function render() : void;
}