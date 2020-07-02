<?php

/*
*     STATIC CLASS PROPERTIES
*
*/


class CounterClass
{

    public static int $counter = 0;
}


CounterClass::$counter += 1;


/**
 * 
 * SINGLETON PATTERN DESIGN EXAMPLE WITH STATIC CLASS PROPERTIES
 */


class Singleton
{

    public static function getInstance()
    {

        static $instance;


        if (!$instance) {

            $instance = new Singleton();
        }


        return $instance;
    }
}


$instance1 = Singleton::getInstance();
$instance2 = Singleton::getInstance();
$instance3 = "my name is Clement";

var_dump($instance1 === $instance2);
// this will print bool(true);

var_dump($instance1 === $instance3);
//this will print bool(false)


/**
 * 
 * The getInstance() method is a static method which is declared with a
 * preceeding static keyword.. We use scope resolution value "::" when we 
 * calling a static method or static property in 
 * PHP
 */
