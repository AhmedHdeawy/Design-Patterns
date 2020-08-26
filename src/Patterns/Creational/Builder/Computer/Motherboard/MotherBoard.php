<?php
namespace App\Patterns\Creational\Builder\Computer\Motherboard;

use App\Patterns\Creational\Builder\Computer\Motherboard\MainParts\CPU;
use App\Patterns\Creational\Builder\Computer\Motherboard\MainParts\Disk;
use App\Patterns\Creational\Builder\Computer\Motherboard\MainParts\GPU;
use App\Patterns\Creational\Builder\Computer\Motherboard\MainParts\NetworkCard;
use App\Patterns\Creational\Builder\Computer\Motherboard\MainParts\RAM;
use App\Patterns\Creational\Builder\Computer\Motherboard\MainParts\Sockets;

class MotherBoard
{
    private CPU $cpu;
    private RAM $ram;
    private GPU $gpu;
    private Sockets $sockets;
    private NetworkCard $networkCard;
    private Disk $disk;

    public function __construct(CPU $cpu, RAM $ram, GPU $gpu, Sockets $sockets, NetworkCard $networkCard, Disk $disk)
    {
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->gpu = $gpu;
        $this->sockets = $sockets;
        $this->networkCard = $networkCard;
        $this->disk = $disk;
    }
	/**
	 * 
	 * @return CPU
	 */
	function getCpu(): CPU {
		return $this->cpu;
	}
	
	/**
	 * 
	 * @return RAM
	 */
	function getRam(): RAM {
		return $this->ram;
	}
	
	/**
	 * 
	 * @return GPU
	 */
	function getGpu(): GPU {
		return $this->gpu;
	}
	
	/**
	 * 
	 * @return Sockets
	 */
	function getSockets(): Sockets {
		return $this->sockets;
	}
	
	/**
	 * 
	 * @return NetworkCard
	 */
	function getNetworkCard(): NetworkCard {
		return $this->networkCard;
	}
	
	/**
	 * 
	 * @return Disk
	 */
	function getDisk(): Disk {
		return $this->disk;
	}
}