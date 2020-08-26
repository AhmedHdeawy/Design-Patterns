<?php
namespace App\Patterns\Creational\Builder\Computer\Motherboard\MainParts;


class GPU
{
    private int $type;

    public function __construct(int $type)
    {
        $this->type = $type;
    }

	/**
	 * 
	 * @return int
	 */
	public function getType(): int {
		return $this->type;
	}
}