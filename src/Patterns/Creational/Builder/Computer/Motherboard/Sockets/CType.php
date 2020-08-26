<?php
namespace App\Patterns\Creational\Builder\Computer\Motherboard\Sockets;

class CType
{
    private bool $withVideoTransfer;

    public function __construct(bool $withVideoTransfer)
    {
        $this->withVideoTransfer = $withVideoTransfer;
    }

    
	/**
	 * 
	 * @return bool
	 */
	public function getWithVideoTransfer(): bool {
		return $this->withVideoTransfer;
	}
}
