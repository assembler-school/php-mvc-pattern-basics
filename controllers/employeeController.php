<?php
require_once MODELS . "employeeModel.php";
require_once("./config/helper.php");

if (isset($_REQUEST["action"])) {
    function_exists($_REQUEST["action"])
        ? call_user_func($_REQUEST["action"], $_REQUEST)
        : error("action does not exist");
} else {
    error("action error");
}


function getAllEmployees()
{
    try {
        $employees = get();
        require_once VIEWS . "/employee/employeeDashboard.php";
        debug_to_console("OK - You are calling correctly to the getAllEmployees function of the Controller");
    } catch (exception $e) {
        error($e->getMessage());
        debug_to_console("NOT OK - You are not calling correctly to the getAllEmployees function of the Controller");
    }
}

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getEmployee($request)
{
    $employee = getEmployeeById($request["id"]);
    require_once VIEWS . "/employee/employee.php";
}

function createEmployee($request)
{
    require_once MODELS . "employeeModel.php";
    if ($msg = newEmployee($request)) {
        header("Location: index.php?controller=employee&action=getAllEmployees&msg=$msg");
    } else {
        error("Parameter Error");
    }
}

function updateEmployee($request)
{
    if (isset($request["emp_id"])) {
        require_once MODELS . "employeeModel.php";
        if ($msg = updateEmployeeById($request)) {
            header("Location: index.php?controller=employee&action=getAllEmployees&msg=$msg");
        } else {
            error("Database connection error");
        }
    } else {
        error("Error");
    }
}

function deleteEmployee($request)
{
    require_once MODELS . "employeeModel.php";
    if (isset($request["id"])) {
        if ($msg = deleteEmployeeById($request["id"])) {
            deleteEmployeeById($request["id"]);
            header("Location: index.php?controller=employee&action=getAllEmployees&msg=$msg");
        } else {
            error("Database Connection Error");
        }
    } else {
        error("Parameter Error");
    }
}


/**
 * This function includes the error view with a message
 */
function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
    debug_to_console("Error view es correctly required from error function of the controller");
}
