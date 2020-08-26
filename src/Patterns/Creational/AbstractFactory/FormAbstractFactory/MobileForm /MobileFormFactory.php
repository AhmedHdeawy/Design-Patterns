<?php

namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\MobileForm;

use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractWindow;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextArea;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractFormFactory;

class MobileFormFactory implements AbstractFormFactory
{
	/**
	 *
	 * @return AbstractTextInput
	 */
	public function createTextInput(): AbstractTextInput {
        return new MobileTextInput('Mobile TextInput', 'Enter your name', '');
	}
	
	/**
	 *
	 * @return AbstractTextArea
	 */
	public function createTextArea(): AbstractTextArea {
        return new MobileTextArea('Mobile textarea', 'enter here');
	}
	
	/**
	 *
	 * @return AbstractButton
	 */
	public function createButton(): AbstractButton {
        return new MobileButton('Okay');
	}
	
	/**
	 *
	 * @return AbstractWindow
	 */
	public function createWindow(): AbstractWindow {
        return new MobileWindow("600*300");
	}
}