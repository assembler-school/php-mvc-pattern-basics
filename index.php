<?php

define("BASE_PATH", dirname(__FILE__));
include_once "config/constants.php";
include_once "config/dbConst.php";


if (isset($_GET["controller"])) {
    $controllerPath = CONTROLLERS . $_GET["controller"] . "Controller.php";
    $checkFile = file_exists($controllerPath);
    if ($checkFile) {
        require_once($controllerPath);
    } else {
        $errorMessage = "Page does not exist";
        require_once VIEWS . "error/error.php";
    }
} else {
    require_once VIEWS . "main/main.php";
}
