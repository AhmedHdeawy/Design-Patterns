<?php
namespace App\Patterns\Creational\Builder\Computer;

class Keyboard
{
    private bool $utfSuppor;

    public function __construct(bool $utfSuppor)
    {
        $this->utfSuppor = $utfSuppor;
    }


	/**
	 * 
	 * @return bool
	 */
    public function getUtfSuppor(): bool {
		return $this->utfSuppor;
	}
}