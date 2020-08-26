<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\DesktopForm;

use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractWindow;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextArea;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractFormFactory;

class DesktopFormFactory implements AbstractFormFactory
{

	/**
	 *
	 * @return AbstractTextInput
	 */
	public function createTextInput(): AbstractTextInput {
        return new DesktopTextInput('Desktop TextInput', 'Enter your name', '');
	}
	
	/**
	 *
	 * @return AbstractTextArea
	 */
	public function createTextArea(): AbstractTextArea {
        return new DesktopTextArea('Desktop textarea', 'enter here');
	}
	
	/**
	 *
	 * @return AbstractButton
	 */
	public function createButton(): AbstractButton {
        return new DesktopButton('Yes');
	}
	
	/**
	 *
	 * @return AbstractWindow
	 */
	public function createWindow(): AbstractWindow {
        return new DesktopWindow("600*300");
	}
}