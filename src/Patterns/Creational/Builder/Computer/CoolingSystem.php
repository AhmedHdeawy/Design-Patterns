<?php
namespace App\Patterns\Creational\Builder\Computer;

class CoolingSystem
{
    private int $lowTempLimit;

    public function __construct(int $lowTempLimit)
    {
        $this->lowTempLimit = $lowTempLimit;
    }


	/**
	 * 
	 * @return int
	 */
	function getLowTempLimit(): int {
		return $this->lowTempLimit;
	}
}