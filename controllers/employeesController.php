<?php

require_once MODELS . "employeeModel.php";


if (function_exists($action)) {
    call_user_func($action, $_REQUEST);
} else {
    error("Not valid action");
}


/* ~~~ CONTROLLER FUNCTIONS ~~~ */

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
function getEmployee($get)
{
    $employee = getById($get["id"]);
    require_once VIEWS . "employee/employee.php";
}

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function updateEmployee($request)
{
    updateEmployeeModel($request);
    header("Location:./index.php?controller=employees&action=getAllEmployees");
}

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function deleteEmployee($get)
{
    deleteEmployeeModel($get["id"]);
    header("Location:./index.php?controller=employees&action=getAllEmployees");
}

/**
 * This function includes the error view with a message
 */
function error($errorMsg)
{
    $errorMessage = $errorMsg;
    require_once VIEWS . "/error/error.php";
}
