<?php
namespace App\Patterns\Creational\Builder\Computer;

class UPS
{
    private int $duration;

    public function __construct(int $duration)
    {
        $this->duration = $duration;
    }


	/**
	 * 
	 * @return int
	 */
    public function getDuration(): int {
		return $this->duration;
	}
}