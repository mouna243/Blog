<?php
spl_autoload_register(function ($class) {

    $prefix = 'App\\';
    $dir = __DIR__ . "/App/";


    if (strncmp($prefix, $class, strlen($prefix)) !== 0) {
        return;
    }
    $requerpath = substr($class, strlen($prefix));
    $file = $dir . str_replace('\\', '/', $requerpath) . '.php';

    
    if (file_exists($file)) {
        require_once $file;
    }
});

