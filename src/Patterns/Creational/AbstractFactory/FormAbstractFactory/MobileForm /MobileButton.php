<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\MobileForm;

use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;

class MobileButton extends AbstractButton
{
	/**
	 *
	 * @return void
	 */
	public function onClick(): void {
		echo "the button has been clicked\n";
	}

	/**
	 *
	 * @return void
	 */
	public function render(): void
	{
		echo "Mobile Button Component";
	}
}