<?php
// Variables that can be used anywhere in the code without the global keyword


function getPostValue($key, $default = Null)
{


    if (isset($_POST[$key])) {
        return $_POST[$key];
    }

    return $default;
}


echo getPostValue('email');


/**
 *    Examples of SuperGlobal Variables 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 */
