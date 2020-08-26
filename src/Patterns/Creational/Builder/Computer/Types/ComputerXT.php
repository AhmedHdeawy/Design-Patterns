<?php

namespace App\Patterns\Creational\Builder\Computer\Types;

use App\Patterns\Creational\Builder\Computer\CoolingSystem;
use App\Patterns\Creational\Builder\Computer\UPS;

class ComputerXT extends Computer implements Icooling, Ipower
{
    protected CoolingSystem $cs;
    protected UPS $ups;

    /**
     *
     * @return bool
     */
    public function turnOn(): bool
    {
        // Do somthing and then
        return true;
    }

    /**
     *
     * @return bool
     */
    public function turnOff(): bool
    {
        // Do somthing and then
        return true;
    }
	/**
	 *
	 * @return bool
	 */
	public function coolDown(): bool {
        // Cooling Computer Down
        return true;
    }
	/**
	 *
	 * @return bool
	 */
    public function backupPower(): bool {
        // Backup Power
        return true;
	}
	/**
	 * 
	 * @return CoolingSystem
	 */
	public function getCs(): CoolingSystem {
		return $this->cs;
	}
	
	/**
	 * 
	 * @param CoolingSystem $cs 
	 * @return void
	 */
	public function setCs(CoolingSystem $cs): void {
		$this->cs = $cs;
	}
	
	/**
	 * 
	 * @return UPS
	 */
	public function getUps(): UPS {
		return $this->ups;
	}
	
	/**
	 * 
	 * @param UPS $ups 
	 * @return void
	 */
	public function setUps(UPS $ups): void {
		$this->ups = $ups;
	}
}