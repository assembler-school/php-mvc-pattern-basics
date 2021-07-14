<?php

require_once MODELS . "employeeModel.php";

//OBTAIN THE ACCION PASSED IN THE URL AND EXECUTE IT AS A FUNCTION

//Keep in mind that the function to be executed has to be one of the ones declared in this controller
// TODO Implement the logic

switch ($_GET["action"]) {
    case "getAllEmployees":
        getAllEmployees();
        break;
    case "getEmployee":
        getEmployee($_GET["id"]);
        break;
    default:
        error("Not valid action");
        break;
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
function getEmployee($request)
{
    $employee = getById($request);
    require_once VIEWS . "employee/employee.php";
}

/**
 * This function includes the error view with a message
 */
function error($errorMsg)
{
    $errorMessage = $errorMsg;
    require_once VIEWS . "/error/error.php";
}
