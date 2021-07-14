<?php

require_once MODELS . "employeeModel.php";

//OBTAIN THE ACCION PASSED IN THE URL AND EXECUTE IT AS A FUNCTION

switch ($_GET['action']) {
    case "getAllEmployees":
        getAllEmployees();
        break;
    case "getEmployee":
        $request = $_GET['id'];
        getEmployee($request);
        break;
    case "updateEmployee":
        echo "update Employee";
        var_dump($_POST);
        break;
    case "deleteEmployee":
        echo "You are going to delete the employee No:";
        echo $_GET['id'];
        break;
    default:
        echo "this is not a valid action";
        break;
}

//Keep in mind that the function to be executed has to be one of the ones declared in this controller
// TODO Implement the logic

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
    require_once VIEWS . "/error/error.php";
}
