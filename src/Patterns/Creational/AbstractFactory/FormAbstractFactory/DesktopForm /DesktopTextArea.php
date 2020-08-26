<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\DesktopForm;

use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextArea;

class DesktopTextArea extends AbstractTextArea
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
		echo "Desktop TextArea Component";
	}
}