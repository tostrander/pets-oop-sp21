<?php

//Turn on error-reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Require the file that defines the pet class
require('pet.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function() {
    echo '<h1>Hello, pets!</h1>';

    //Instantiate a pet object
    $pet1 = new Pet("Fido", "pink");

    //Test setter and getter
    $pet1->setName("Fifi");
    echo "My pet's name is " . $pet1->getName();

    echo "<pre>";
    var_dump($pet1);
    echo "</pre>";
    //$pet1 = new Pet();

    //Invoke the pet methods
    $pet1->eat();
    $pet1->talk();
    $pet1->sleep();

});

//Run fat free
$f3->run();