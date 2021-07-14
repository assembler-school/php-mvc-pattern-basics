<?php

require_once MODELS . "employeeModel.php";

// if no action
if (!isset($_GET['action'])) {
    error("There is no action");
    exit;
}

$action = $_GET['action'];
$request = "";

if (function_exists($action)) {
    list($params) = [
        'getAllEmployees' => [[]],
        'getEmployee' => [[$request]],
    ][$action] ?? [[]];

    call_user_func($action, $params);
} else {
    error("Invalid function");
    exit;
}

/*
 * CONTROLLER FUNCTIONS  
 * ----------------------------------------------------------------
 */
/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getAllEmployees()
{
    $employees = getEmployees();
    require_once VIEWS . "employee/employeeDashboard.php";
}

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getEmployee($request)
{
    //
}

/**
 * This function includes the error view with a message
 */
function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}
