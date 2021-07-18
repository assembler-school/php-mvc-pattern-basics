<?php
require_once MODELS . "salaryModel.php";

// if no action
if (!isset($_GET['action'])) {
    error("There is no action");
    exit;
}

$action = $_GET['action'];
$id = $_GET['id'] ?? null;

if (function_exists($action)) {
    list($params) = [
        'getAllEmployees' => [[]],
        'getEmployeeSalary' => [$id],
    ][$action] ?? [[]];

    call_user_func($action, $params);
} else {
    error(
        "Invalid function \"" . $action .
            "\", please enter an existing function"
    );
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
    $salaryEmployees = getAll();
    require_once VIEWS . "salary/salaryDashboard.php";
}

/**
 * This function calls the corresponding model function and 
 * includes the corresponding view
 */
function getEmployeeSalary($id)
{
    $salaryEmployees = getById($id);
    if (is_array($salaryEmployees)) {
        require_once VIEWS . "salary/salary.php";
    } else {
        if (!$salaryEmployees) {
            error("Employee with id $id not found!");
            exit;
        }
        error($salaryEmployees);
    }
}

/**
 * This function includes the error view with a message
 */
function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}
