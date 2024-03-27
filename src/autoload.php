<?php
/**
 *  @author: $rachow
 *
 *  To autoload PHP classes and those with namespaces we need
 *  to add a spl register function that follows the PSR-4
 *  standards.
 *
 */

spl_autoload_register(function ($class) {

    // convert the namespace to a file path
    $file = str_replace('\\', '/', $class) . '.php';
    $path = str_replace(basename(__DIR__), '', __DIR__);

    /*
     * We can extend here and check if there are any bindings
     * for the \$class::class
     *
     *  you need to check if class_exists('ServicesBindingProvider');
     *      therefore we will have a boot sequence that 
     *      we would take into account
     * 
     *
    */
    if (file_exists($path . '/' . $file)) {
        require $path . '/' . $file;
    }
});
