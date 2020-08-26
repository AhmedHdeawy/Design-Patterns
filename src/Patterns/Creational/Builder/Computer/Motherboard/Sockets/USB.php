<?php
namespace App\Patterns\Creational\Builder\Computer\Motherboard\Sockets;

class USB
{
    private string $version;

    public function __construct(string $version)
    {
        $this->version = $version;
    }

    
	/**
	 * 
	 * @return string
	 */
	public function getVersion(): string {
		return $this->version;
	}
}
