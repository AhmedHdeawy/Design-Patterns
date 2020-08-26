<?php
namespace App\Patterns\Creational\Prototype\Employee;

use App\Patterns\Creational\Prototype\Employee\Privilages\Privilages;
use App\Patterns\Creational\Prototype\Employee\Privilages\Types\NetworkPrivilage;
use App\Patterns\Creational\Prototype\Employee\Privilages\Types\WebProjectPrivilage;
use App\Patterns\Creational\Prototype\Employee\Salary;
use App\Patterns\Creational\Prototype\Employee\ProfileData;

class EmployeePrototype
{

    private ProfileData $profileData;
    private Salary $salary;
    private Privilages $privilages;

    public function __construct(ProfileData $profileData, Salary $salary, Privilages $privilages)
    {
        $this->profileData = $profileData;
        $this->salary = $salary;
        $this->privilages = $privilages;
    }


	/**
	 * 
	 * @return ProfileData
	 */
	function getProfileData(): ProfileData {
		return $this->profileData;
	}
	
	/**
	 * 
	 * @param ProfileData $profileData 
	 */
	function setProfileData(ProfileData $profileData) {
		$this->profileData = $profileData;
	}
	
	/**
	 * 
	 * @return Salary
	 */
	function getSalary(): Salary {
		return $this->salary;
	}
	
	/**
	 * 
	 * @param Salary $salary 
	 */
	function setSalary(Salary $salary) {
		$this->salary = $salary;
	}
	
	/**
	 * 
	 * @return Privilages
	 */
	function getPrivilages(): Privilages {
		return $this->privilages;
	}
	
	/**
	 * 
	 * @param Privilages $privilages 
	 */
	function setPrivilages(Privilages $privilages) {
		$this->privilages = $privilages;
    }
    
    public function __clone()
    {
        // Cloned Privilages
        $this->privilages->clearPrivilage();
        $this->privilages->addPrivilage(new WebProjectPrivilage());
        $this->privilages->addPrivilage(new NetworkPrivilage());

        // Cloned Salary
        $this->salary->setSalary(1500);
        $this->salary->setTax(.2);
        $this->salary->setMedicalInsurance(250);

        // Cloned ProfileData
        $this->profileData->setName('New Employee');
        $this->profileData->setAge(25);
        $this->profileData->setMobile('012345678');
        $this->profileData->setAddress(null);


        // Return new instance from this Class
        return $this;
    }
}