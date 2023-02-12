<?php
include 'config.php';
spl_autoload_register(function ($class) {
    include 'init/' . $class . '.php';
});