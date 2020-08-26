<?php
namespace App\Patterns\Creational\Builder\Computer\Motherboard\MainParts;

class NetworkCard {
    
    private string $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }


	/**
	 * 
	 * @return string
	 */
	public function getType(): string {
		return $this->type;
	}
}