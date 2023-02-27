<?php

namespace TheBedouinCoder\DesingPatterns\Creational\Singleton;

include_once 'TestClass.php';
include_once 'AnotherTestClass.php';

function clientCode()
{
    // Testing the first class's singleton behavior
    $obj1 = TestClass::getInstance();
    $obj2 = TestClass::getInstance();
    
    if ($obj1 === $obj2) {
        echo "We have implented the singleton.".PHP_EOL;
        echo "First Object's Class: ".get_class($obj1).PHP_EOL;
        echo "Second Object's Class: ".get_class($obj2).PHP_EOL;
    }

    // Testing the second class's singleton behavior
    $obj3 = AnotherTestClass::getInstance();
    $obj4 = AnotherTestClass::getInstance();
    if ($obj3 === $obj4) {
        echo "We have implented the singleton again.".PHP_EOL;
        echo "Third Object's Class: ".get_class($obj3).PHP_EOL;
        echo "Fourth Object's Class: ".get_class($obj4).PHP_EOL;
    }


}

clientCode();