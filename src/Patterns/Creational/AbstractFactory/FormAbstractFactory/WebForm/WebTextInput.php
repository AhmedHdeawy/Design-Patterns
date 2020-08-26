<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\WebForm;

use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;

class WebTextInput extends AbstractTextInput
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
		echo "Web TextInput Component\n";
	}
}