<?php

require_once MODELS . "employeeModel.php";

//OBTAIN THE ACCION PASSED IN THE URL AND EXECUTE IT AS A FUNCTION
$action = $_GET["action"];

if (function_exists($action)) {
    list($params) = [
        "getAllEmployees" => [[]],
        "getEmployee" => [[]],
        "getHolidays" => [[]],
    ][$action] ?? [[]];
    call_user_func($action, $params);
} else {
    error("Invalid function");
    exit;
}


/* ~~~ CONTROLLER FUNCTIONS ~~~ */

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getAllEmployees()
{
    $allEmployees = get();
    require_once VIEWS . "employee/employeeDashboard.php";
}

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getEmployee()
{
    //
    $employee = getById($_GET["id"]);
    require_once VIEWS . "employee/employee.php";
}

function getHolidays()
{
    $holidays = getAllHolidays();
    require_once VIEWS . "employee/holidays.php";
}

/**
 * This function includes the error view with a message
 */
function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}
