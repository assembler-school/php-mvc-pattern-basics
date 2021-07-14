<?php

// This is the entry point of your application, all your application must be executed in
// the "index.php", in such a way that you must include the controller passed by the URL
// dynamically so that it ends up including the view.
define("BASE_PATH", dirname(__FILE__));
include_once "config/constants.php";
include_once "config/dbConst.php";


// echo "<pre>";
// echo CONTROLLERS . "<br>";
// echo file_exists(CONTROLLERS . $_REQUEST["controller"] . "Controller.php") ? "YES" : "NO";
// echo "</pre>";
// echo isset($_GET["controller"]) ? "YES" : "NO";

if (isset($_GET["controller"])) {
    $controllerPath = CONTROLLERS . $_GET["controller"] . "Controller.php";
    $checkFile = file_exists($controllerPath);
    $checkFile ? require_once($controllerPath) : require_once VIEWS . "error/error.php";
} else {
    require_once VIEWS . "main/main.php";
}
echo "im an echo from index.php";



// TODO Implement the logic to include the controller passed by the URL dynamically
// In the event that the controller passed by URL does not exist, you must show the error view.
// projects_in_progress/php-mvc-pattern-basics/views/error

//1. Index controladores y vistas ok
