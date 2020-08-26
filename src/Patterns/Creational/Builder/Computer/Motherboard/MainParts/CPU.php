<?php
namespace App\Patterns\Creational\Builder\Computer\Motherboard\MainParts;


class CPU
{
    private float $speed;

    public function __construct(float $speed)
    {
        $this->speed = $speed;
    }

	/**
	 * 
	 * @return float
	 */
	public function getSpeed(): float {
		return $this->speed;
	}
}