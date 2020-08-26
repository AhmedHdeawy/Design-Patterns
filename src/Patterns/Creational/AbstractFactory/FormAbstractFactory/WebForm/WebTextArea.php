<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\WebForm;

use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextArea;

class WebTextArea extends AbstractTextArea
{
    
	/**
	 *
	 * @return void
	 */
	public function onResize(): void {
		echo "The Textarea has new size\n";
	}

	/**
	 *
	 * @return void
	 */
	public function render(): void
	{
		echo "Web TextArea Component\n";
	}
}