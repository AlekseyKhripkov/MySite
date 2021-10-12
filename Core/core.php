<?php

spl_autoload_register(function ($className) {
    $filename = $className . '.php';
    $folder = 'Framework';

    $file = SITE_PATH . $folder . DS . $filename;

    if (file_exists($file) === false) {
        return;
    }

    include ($file);
});
