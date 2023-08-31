<?php 

$controller = require BASE.'/app/function/controllers.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $controller();
    die();
}

$controller();