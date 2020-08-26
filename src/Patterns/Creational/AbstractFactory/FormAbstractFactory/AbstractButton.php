<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory;

abstract class AbstractButton implements Component
{
    protected string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }
	
	/**
	 * 
	 * @return string
	 */
	public function getValue(): string {
		return $this->value;
	}
	
	/**
	 * 
	 * @param string $value 
	 */
	public function setValue(string $value): void {
		$this->value = $value;
    }
    
    abstract public function onClick(): void;
}