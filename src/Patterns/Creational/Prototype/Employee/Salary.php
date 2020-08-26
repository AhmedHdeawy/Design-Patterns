<?php
namespace App\Patterns\Creational\Prototype\Employee;

class Salary
{

    private float $salary;
    private float $tax;
    private float $medicalInsurance;

    public function __construct(float $salary, float $tax, float $medicalInsurance)
    {
        $this->salary = $salary;
        $this->tax = $tax;
        $this->medicalInsurance = $medicalInsurance;
    }


	/**
	 * 
	 * @return float
	 */
	function getSalary(): float {
		return $this->salary;
	}
	
	/**
	 * 
	 * @param float $salary 
	 */
	function setSalary(float $salary) {
		$this->salary = $salary;
	}
	
	/**
	 * 
	 * @return float
	 */
	function getTax(): float {
		return $this->tax;
	}
	
	/**
	 * 
	 * @param float $tax 
	 */
	function setTax(float $tax) {
		$this->tax = $tax;
	}
	
	/**
	 * 
	 * @return float
	 */
	function getMedicalInsurance(): float {
		return $this->medicalInsurance;
	}
	
	/**
	 * 
	 * @param float $medicalInsurance 
	 */
	function setMedicalInsurance(float $medicalInsurance) {
		$this->medicalInsurance = $medicalInsurance;
	}
}