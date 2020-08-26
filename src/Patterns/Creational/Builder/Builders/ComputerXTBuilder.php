<?php

namespace App\Patterns\Creational\Builder\Builders;

use App\Patterns\Creational\Builder\Builder;
use App\Patterns\Creational\Builder\Computer\UPS;
use App\Patterns\Creational\Builder\Computer\Mouse;
use App\Patterns\Creational\Builder\Computer\Monitor;
use App\Patterns\Creational\Builder\Computer\Keyboard;
use App\Patterns\Creational\Builder\Computer\CoolingSystem;
use App\Patterns\Creational\Builder\Computer\Types\Computer;
use App\Patterns\Creational\Builder\Computer\Types\ComputerXT;
use App\Patterns\Creational\Builder\Computer\Motherboard\MotherBoard;
use App\Patterns\Creational\Builder\Computer\Motherboard\Sockets\USB;
use App\Patterns\Creational\Builder\Computer\Motherboard\MainParts\CPU;
use App\Patterns\Creational\Builder\Computer\Motherboard\MainParts\GPU;
use App\Patterns\Creational\Builder\Computer\Motherboard\MainParts\RAM;
use App\Patterns\Creational\Builder\Computer\Motherboard\Sockets\CType;
use App\Patterns\Creational\Builder\Computer\Motherboard\MainParts\Disk;
use App\Patterns\Creational\Builder\Computer\Motherboard\MainParts\Sockets;
use App\Patterns\Creational\Builder\Computer\Motherboard\MainParts\NetworkCard;

class ComputerXTBuilder extends Builder
{
	/**
	 *
	 * @return MotherBoard
	 */
	protected function buildMotherBoard(): MotherBoard
	{
		$cpu = new CPU(4.8);
		$ram = new RAM(8);
		$gpu = new GPU(8);
		$sockets = new Sockets(
			[
				new USB(3),
				new USB(2),
				new CType(true),
				new CType(false)
			]
		);
		$networkCard = new NetworkCard('g41');
		$disk = new Disk('SSD');

		return new MotherBoard($cpu, $ram, $gpu, $sockets, $networkCard, $disk);
	}

	/**
	 *
	 * @return Keyboard
	 */
	protected function buildKeyboard(): Keyboard
	{
		return new Keyboard(true);
	}

	/**
	 *
	 * @return Mouse
	 */
	protected function buildMouse(): Mouse
	{
		return new Mouse(true);
	}

	/**
	 *
	 * @return Monitor
	 */
	protected function buildMonitor(): Monitor
	{
		return new Monitor('1080 HD');
	}

	/**
	 *
	 * @return UPS
	 */
	protected function buildUPS(): UPS
	{
		return new UPS(90);
	}

	/**
	 *
	 * @return CoolingSystem
	 */
	protected function buildCoolingSystem(): CoolingSystem
	{
		return new CoolingSystem(5);
	}

	/**
	 *
	 * @return Computer
	 */
	public function getComputer(): Computer
	{
		$computer = new ComputerXT();
		$computer->setMotherBoard($this->buildMotherBoard());
		$computer->setKeyboard(($this->buildKeyboard()));
		$computer->setMouse(($this->buildMouse()));
		$computer->setMonitor(($this->buildMonitor()));
		$computer->setCs($this->buildCoolingSystem());
		$computer->setUps($this->buildUPS());
		
		return $computer;
	}
}
