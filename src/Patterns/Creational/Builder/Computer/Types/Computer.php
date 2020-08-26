<?php
namespace App\Patterns\Creational\Builder\Computer\Types;

use App\Patterns\Creational\Builder\Computer\CoolingSystem;
use App\Patterns\Creational\Builder\Computer\Keyboard;
use App\Patterns\Creational\Builder\Computer\Monitor;
use App\Patterns\Creational\Builder\Computer\Motherboard\MotherBoard;
use App\Patterns\Creational\Builder\Computer\Mouse;
use App\Patterns\Creational\Builder\Computer\UPS;

abstract class Computer
{
    protected MotherBoard $motherBoard;
    protected CoolingSystem $cs;
    protected Keyboard $keyboard;
    protected Mouse $mouse;
    protected Monitor $monitor;
    protected UPS $ups;

    abstract public function turnOn() : bool; 
    abstract public function turnOff() : bool;
    
    
    public function dashboard() : string
    {
		$duration = null;
		if (isset($this->ups)) {
			$duration = $this->ups->getDuration();
		}

		return "
			################################
			
				CPU: {$this->motherBoard->getCpu()->getSpeed()}
				RAM: {$this->motherBoard->getRam()->getSize()}
				GPU: {$this->motherBoard->getGpu()->getType()}
				NetworkCard: {$this->motherBoard->getNetworkCard()->getType()}
				Sockets#1: {$this->motherBoard->getSockets()->getSockets()[0]->getVersion()}
				Disk: {$this->motherBoard->getDisk()->getType()}
				Keyboard: {$this->keyboard->getUtfSuppor()}		
				Mouse: {$this->mouse->getWithExtraUtilities()}		
				CoolingSystem: {$this->cs->getLowTempLimit()}
				UPS: {$duration}
				
			#################################
		";
	}


	/**
	 * 
	 * @return MotherBoard
	 */
	public function getMotherBoard(): MotherBoard
	{
		return $this->motherBoard;
	}

	/**
	 * 
	 * @return CoolingSystem
	 */
	public function getCs(): CoolingSystem
	{
		return $this->cs;
	}

	/**
	 * 
	 * @return Keyboard
	 */
	public function getKeyboard(): Keyboard
	{
		return $this->keyboard;
	}

	/**
	 * 
	 * @return Mouse
	 */
	public function getMouse(): Mouse
	{
		return $this->mouse;
	}

	/**
	 * 
	 * @return Monitor
	 */
	public function getMonitor(): Monitor
	{
		return $this->monitor;
	}

	/**
	 * 
	 * @return UPS
	 */
	public function getUps(): UPS
	{
		return $this->ups;
	}

	/**
	 * 
	 * @param Keyboard $keyboard 
	 * @return void
	 */
	public function setKeyboard(Keyboard $keyboard): void {
		$this->keyboard = $keyboard;
	}
	
	/**
	 * 
	 * @param Mouse $mouse 
	 * @return void
	 */
	public function setMouse(Mouse $mouse): void {
		$this->mouse = $mouse;
	}
	
	/**
	 * 
	 * @param Monitor $monitor 
	 * @return void
	 */
	public function setMonitor(Monitor $monitor): void {
		$this->monitor = $monitor;
	}
	
	/**
	 * 
	 * @param UPS $ups 
	 * @return void
	 */
	public function setUps(UPS $ups): void {
		$this->ups = $ups;
	}
	/**
	 * 
	 * @param MotherBoard $motherBoard 
	 * @return void
	 */
	public function setMotherBoard(MotherBoard $motherBoard): void {
		$this->motherBoard = $motherBoard;
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