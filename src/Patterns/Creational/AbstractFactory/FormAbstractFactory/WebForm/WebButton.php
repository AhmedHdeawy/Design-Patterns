<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\WebForm;

use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;

class WebButton extends AbstractButton
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
		echo "Web Button Component\n";
	}
}