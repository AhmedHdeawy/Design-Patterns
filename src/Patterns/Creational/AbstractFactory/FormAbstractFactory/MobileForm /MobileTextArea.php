<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\MobileForm;

use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextArea;

class MobileTextArea extends AbstractTextArea
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
		echo "Mobile TextArea Component";
	}
}