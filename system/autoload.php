<?php
function classes($name) {
    $file = strtolower(CLASSES.$name.'.php');
    if (file_exists($file)) {
        require_once $file;
    } else {
        echo 'no files autoload';
    }
}
function controller($name) {
    require CLASSES.$name.'.php';
}

spl_autoload_register('classes');