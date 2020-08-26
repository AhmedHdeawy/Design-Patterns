<?php
namespace App\Patterns\Creational\Prototype\Employee\Privilages;

use App\Patterns\Creational\Prototype\Employee\Privilages\Types\PrivilagesType;

class Privilages
{
    
    private array $privialges;

    public function __construct(array $privialges)
    {
        $this->privialges = $privialges;
    }

    public function addPrivilage(PrivilagesType $privialge)
    {
        array_push($this->privialges, $privialge);
    }


    public function clearPrivilage()
    {
        $this->privialges = [];
    }

}