<?php
namespace App\Patterns\Creational\Prototype\Employee;

class Address
{
    private int $buildingNumber;
    private string $city;
    private string $state;
    private string $country;
    private int $zipCOde;

    public function __construct(int $buildingNumber, string $city, string $state, string $country, int $zipCOde)
    {
        $this->buildingNumber = $buildingNumber;
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
        $this->zipCOde = $zipCOde;
    }

    
	/**
	 * 
	 * @return int
	 */
	function getBuildingNumber(): int {
		return $this->buildingNumber;
	}
	
	/**
	 * 
	 * @param int $buildingNumber 
	 */
	function setBuildingNumber(int $buildingNumber): void {
		$this->buildingNumber = $buildingNumber;
	}
	
	/**
	 * 
	 * @return string
	 */
	function getCity(): string {
		return $this->city;
	}
	
	/**
	 * 
	 * @param string $city 
	 */
	function setCity(string $city): void {
		$this->city = $city;
	}
	
	/**
	 * 
	 * @return string
	 */
	function getState(): string {
		return $this->state;
	}
	
	/**
	 * 
	 * @param string $state 
	 */
	function setState(string $state): void {
		$this->state = $state;
	}
	
	/**
	 * 
	 * @return string
	 */
	function getCountry(): string {
		return $this->country;
	}
	
	/**
	 * 
	 * @param string $country 
	 */
	function setCountry(string $country): void {
		$this->country = $country;
	}
	
	/**
	 * 
	 * @return int
	 */
	function getZipCOde(): int {
		return $this->zipCOde;
	}
	
	/**
	 * 
	 * @param int $zipCOde 
	 */
	function setZipCOde(int $zipCOde): void {
		$this->zipCOde = $zipCOde;
	}
}