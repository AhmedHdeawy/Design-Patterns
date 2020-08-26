<?php
namespace App\Patterns\Creational\Builder\Computer\Types;

use App\Patterns\Creational\Builder\Computer\CoolingSystem;

class ComputerCS extends Computer implements Icooling
{
    protected CoolingSystem $cs;
    
    /**
	 *
	 * @return bool
	 */
	public function turnOn(): bool {
        // Do somthing and then
        return true;
	}
	
	/**
	 *
	 * @return bool
	 */
	public function turnOff(): bool {
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
}