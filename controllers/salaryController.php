<?php
require_once MODELS . "salaryModel.php";

// if no action
if (!isset($_GET['action'])) {
    error("There is no action");
    exit;
}

$action = $_GET['action'];

if (function_exists($action)) {
    list($params) = [
        'getAllEmployees' => [[]],
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
 * This function calls the corresponding model function and 
 * includes the corresponding view
 */
function getAllEmployees()
{
    $salaryEmployees = getSalaryEmployees();
    require_once VIEWS . "salary/salaryDashboard.php";
}
