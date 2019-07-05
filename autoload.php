<?php

/**
 * Register autoloader for classes under the Osen namespace
 * @param class $class Full namespaced class e.g Osen\Mpesa\STK
 */
spl_autoload_register(function ($class)
{
    if (substr($class, 0, 10) == 'Osen\Mpesa') {
        $class  = str_replace('Osen\Mpesa', '', $class);
        $path   = strtolower(str_replace('\\', '/', $class));

        require_once("src/{$path}.php");
    }
});