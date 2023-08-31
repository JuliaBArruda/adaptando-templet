<?php 

session_start();

require '../app/constants/constants.php';
require '../app/function/load.php';
require '../app/function/call_controllers.php';



try {
    require '../app/views/master.php';
} catch (\Throwable $th) {
    echo $th->getMessage();
}