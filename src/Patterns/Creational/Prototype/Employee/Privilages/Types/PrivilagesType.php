<?php
namespace App\Patterns\Creational\Prototype\Employee\Privilages\Types;
interface PrivilagesType
{
    public function enable() : bool;
    public function disable() : bool;
}