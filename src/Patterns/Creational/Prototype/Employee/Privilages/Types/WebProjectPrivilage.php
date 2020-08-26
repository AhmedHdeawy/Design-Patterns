<?php
namespace App\Patterns\Creational\Prototype\Employee\Privilages\Types;

class WebProjectPrivilage implements PrivilagesType
{
	/**
	 *
	 * @return bool
	 */
	function enable(): bool {
        return true;
	}
	
	/**
	 *
	 * @return bool
	 */
	function disable(): bool {
        return true;
    }
}