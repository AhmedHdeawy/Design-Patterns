<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory;

abstract class AbstractWindow
{
	protected string $size;
	protected array $components;

    public function __construct(string $size)
    {
        $this->size = $size;
	}
	/**
	 * @return void
	 */
	public function addComponent(Component $component) : void
	{
		$this->components[] = $component;
	}

	/**
	 * Render Window
	 * 
	 * @return string
	 */
	public function render() : string
	{
		return "Welcome to Our Components \n".  implode("\n", array_map(fn (Component $comp) => $comp->render(), $this->components));
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getSize(): string {
		return $this->size;
	}
	
	/**
	 * 
	 * @param string $size 
	 */
	public function setSize(string $size): void {
		$this->size = $size;
    }
    
    abstract public function onClose(): void;
    abstract public function onResize(): void;
}