<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\DesktopForm;

use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;

class DesktopButton extends AbstractButton
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
		echo "Desktop Button Component";
	}
}