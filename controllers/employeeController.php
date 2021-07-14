<?php

require_once MODELS . "employeeModel.php";

//OBTAIN THE ACTION PASSED IN THE URL AND EXECUTE IT AS A FUNCTION
if (function_exists($_GET["action"])) {
    call_user_func($_GET["action"]);
}

//Keep in mind that the function to be executed has to be one of the ones declared in this controller

/* ~~~ CONTROLLER FUNCTIONS ~~~ */

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getAllEmployees()
{
    $employees = getAll();
    require_once VIEWS . 'employee/employeeDashboard.php';
}

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getEmployee()
{
    $id = $_GET['empId'];
    $employeeArray = getById($id);
    require_once VIEWS . 'employee/employee.php';
}

/**
 * This function includes the error view with a message
 */
function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}
