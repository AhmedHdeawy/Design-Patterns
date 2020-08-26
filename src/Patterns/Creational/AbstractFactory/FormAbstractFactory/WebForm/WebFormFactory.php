<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\WebForm;

use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractWindow;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextArea;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractFormFactory;

class WebFormFactory implements AbstractFormFactory
{

	/**
	 *
	 * @return AbstractTextInput
	 */
	public function createTextInput(): AbstractTextInput {
        return new WebTextInput('Web TextInput', 'Enter your name', '');
	}
	
	/**
	 *
	 * @return AbstractTextArea
	 */
	public function createTextArea(): AbstractTextArea {
        return new WebTextArea('Web textarea', 'enter here');
	}
	
	/**
	 *
	 * @return AbstractButton
	 */
	public function createButton(): AbstractButton {
        return new WebButton('Submit');
	}
	
	/**
	 *
	 * @return AbstractWindow
	 */
	public function createWindow(): AbstractWindow {
        return new WebWindow("600*300");
	}
}