<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\DesktopForm;

use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractWindow;

class DesktopWindow extends AbstractWindow
{
	/**
	 *
	 * @return void
	 */
	public function onResize(): void {
		echo "the window new size {$this->getSize()}\n";
	}

	/**
	 *
	 * @return void
	 */
	public function onClose(): void {
		echo "thanks for your feedback\n";
	}
}