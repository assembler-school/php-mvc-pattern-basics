<?php

require_once "config/constants.php";

// if no controller
if (!isset($_GET['controller'])) {
    require_once VIEWS . "/main/main.php";
    exit;
}

if ($_GET['controller'] == 'employees') {
    require_once CONTROLLERS . "/employeeController.php";
    exit;
}

if ($_GET['controller'] == 'salaries') {
    require_once CONTROLLERS . "/salaryController.php";
    exit;
}

// if wrong controller
$errorMsg = "This controller is not available";
require_once VIEWS . "/error/error.php";
