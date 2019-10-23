<?php

namespace TauxSF;

spl_autoload_register(function ($class) {
    require_once __DIR__.'/../src/' . strtr($class, '\\', DIRECTORY_SEPARATOR) . '.php';
});

$controller = new Controller();
$controller->home();
