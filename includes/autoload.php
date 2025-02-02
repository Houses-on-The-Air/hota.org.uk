<?php

spl_autoload_register(function ($class) {
    $file = 'classes' . '/' . $class . '.php';

    if (file_exists($file)) {
        require_once $file;
    } else {
        error_log("Autoload error: Class file '$file' not found.");
    }
});

?>
