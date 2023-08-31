<?php 

function load()
{

    $inc = $_GET['inc'] ?? 'home';

    $path = BASE.'/app/views/'.$inc.'.php';

    if (!file_exists($path)) {
        throw new Exception("View {$inc} does not exist");
    }

    require $path;
}