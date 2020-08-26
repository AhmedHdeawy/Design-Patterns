<?php
namespace App\Patterns\Creational\Prototype\Employee;

use App\Patterns\Creational\Prototype\Employee\Address;

class ProfileData
{
    private string $name;
    private int $age;
    private string $mobile;
    private ?Address $address;

    public function __construct(string $name, int $age, string $mobile, ?Address $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->mobile = $mobile;
        $this->address = $address;
    }


	/**
	 * 
	 * @return string
	 */
	function getName(): string {
		return $this->name;
	}
	
	/**
	 * 
	 * @param string $name 
	 */
	function setName(string $name) {
		$this->name = $name;
	}
	
	/**
	 * 
	 * @return int
	 */
	function getAge(): int {
		return $this->age;
	}
	
	/**
	 * 
	 * @param int $age 
	 */
	function setAge(int $age) {
		$this->age = $age;
	}
	
	/**
	 * 
	 * @return string
	 */
	function getMobile(): string {
		return $this->mobile;
	}
	
	/**
	 * 
	 * @param string $mobile 
	 */
	function setMobile(string $mobile) {
		$this->mobile = $mobile;
	}
	
	/**
	 * 
	 * @return Address|null
	 */
	function getAddress(): Address {
		return $this->address;
	}
	
	/**
	 * 
	 * @param Address|null $address 
	 */
	function setAddress(?Address $address) {
		$this->address = $address;
	}
}