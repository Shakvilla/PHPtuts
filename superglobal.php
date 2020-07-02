<?php
// Variables that can be used anywhere in the code without the global keyword

/**
 *
 * @param [type] $key
 * @param [type] $default
 * @return void
 */
function getPostValue($key, $default = Null)
{


    if (isset($_POST[$key])) {
        return $_POST[$key];
    }

    return $default;
}


echo getPostValue('email');


/**
 *    Examples of SuperGlobal Variables Are ;
 * 
 * $GLOBALS
 * $_ENV
 * $_COOKIE
 * $_FILES
 * $_GET
 * $_POST
 * $_REQUEST
 * $_SERVER
 * $_SESSION
 */



//$GLOBALS
function name()
{

    $firstname = "first name of the client";

    echo 'Firstname of client is ' . $GLOBALS["firstname"] . "\n";
}

$firstname = "Abdul Shakur";
name();
