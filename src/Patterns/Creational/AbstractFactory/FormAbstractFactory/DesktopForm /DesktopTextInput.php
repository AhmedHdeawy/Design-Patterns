<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\DesktopForm;

use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;

class DesktopTextInput extends AbstractTextInput
{
    
	/**
	 *
	 * @return void
	 */
	public function onChange(): void {
        echo "The text input {$this->getName()} has been changed to {$this->getValue()}";
	}

	/**
	 *
	 * @return void
	 */
	public function render(): void
	{
		echo "Desktop TextInput Component";
	}
}