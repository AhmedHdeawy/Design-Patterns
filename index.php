<?php

use App\Patterns\Creational\Builder\Director;
use App\Patterns\Creational\Singleton\AppSettings;
use App\Patterns\Creational\Prototype\Employee\Salary;
use App\Patterns\Creational\Prototype\Employee\Address;
use App\Patterns\Creational\Prototype\Employee\ProfileData;
use App\Patterns\Creational\FactoryMethod\Dialogs\WebDialog;
use App\Patterns\Creational\Builder\Builders\ComputerCSBuilder;
use App\Patterns\Creational\Builder\Builders\ComputerXTBuilder;
use App\Patterns\Creational\FactoryMethod\Dialogs\SystemDialog;
use App\Patterns\Creational\Prototype\Employee\EmployeePrototype;
use App\Patterns\Creational\Prototype\Employee\Privilages\Privilages;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\GUIClient;
use App\Patterns\Creational\Prototype\Employee\Privilages\Types\CpanelPrivilage;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\MobileForm\Hello;
use App\Patterns\Creational\Prototype\Employee\Privilages\Types\NetworkPrivilage;
use App\Patterns\Creational\Prototype\Employee\Privilages\Types\WebProjectPrivilage;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\WebForm\WebFormFactory;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\WebForm\Hello as WHello;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\MobileForm\MobileFormFactory;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\DesktopForm\DesktopFormFactory;

require_once './vendor/autoload.php';


/**
 * -----------------------------------
 * 
 * Test Factory Method Pattern
 */

// $systemDialog = new SystemDialog();
// $systemDialog = $systemDialog->renderDialog();
// var_dump($systemDialog);

// $webDialog = new WebDialog();
// $webDialog = $webDialog->renderDialog();
// var_dump($webDialog);

/**
 * -----------------------------------
 * 
 * End / Test Factory Method Pattern
 */


 /*  ===============================================================================  */


/**
 * -----------------------------------
 * 
 * Test Builder Pattern
 */

// $director = new Director(new ComputerCSBuilder());
// $computer = $director->makeComputer();
// var_dump($computer->dashboard());

// $computer = $director->changeBuilder(new ComputerXTBuilder());
// $computer = $director->makeComputer();
// var_dump($computer->dashboard());

/**
 * -----------------------------------
 * 
 * End / Test Builder Pattern
 */

 /*  ===============================================================================  */


/**
 * -----------------------------------
 * 
 * Test Prototype Pattern
 */

// $ahmed = new EmployeePrototype(
//     new ProfileData(
//         'Ahmed Hdeawy',
//         25,
//         '01142950885',
//         new Address(12, 'Fasshn', 'BeniSuef', 'Egypt', 626),
//     ),
//     new Salary(4300, .4, 350),
//     new Privilages([
//         new CpanelPrivilage(),
//         new NetworkPrivilage(),
//     ])
// );

// // Add New Privilage to Ahmed only
// $ahmed->getPrivilages()->addPrivilage(new WebProjectPrivilage());
// var_dump($ahmed);

// // Clone New Employee
// $taha = clone $ahmed;
// var_dump($taha);


/**
 * -----------------------------------
 * 
 * End / Test Prototype Pattern
 */

/*  ===============================================================================  */




/**
 * -----------------------------------
 * 
 * Test Abstract Factory Pattern
 */

// $client = new GUIClient(new MobileFormFactory());
// echo $client->createForm();

// also, We can change Factory to another factory in runtime
// $client->setFactory(new MobileFormFactory());
// echo $client->createForm();
/**
 * -----------------------------------
 * 
 * End / Test Abstract Factory Pattern
 */

/*  ===============================================================================  */



/**
 * -----------------------------------
 * 
 * Test Singleton Pattern
 */

 $settings = AppSettings::getInstance();
 var_dump($settings);
 var_dump($settings::getConfig('Pusher'));

/**
 * -----------------------------------
 * 
 * End / Test Singleton Pattern
 */

 /*  ===============================================================================  */
