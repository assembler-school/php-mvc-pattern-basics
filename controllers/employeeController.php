<?php

require_once MODELS . "employeeModel.php";

//Comprobar si llega el action 

//OBTAIN THE ACCION PASSED IN THE URL AND EXECUTE IT AS A FUNCTION
//_FINISH THIS --------
if (function_exists($action)) {
    call_user_func($action, $_REQUEST);
} else {
    error("Invalid user action");
}
//_FINISH THIS ----

//Keep in mind that the function to be executed has to be one of the ones declared in this controller
// TODO Implement the logic


/* ~~~ CONTROLLER FUNCTIONS ~~~ */
getAllEmployees();
/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getAllEmployees()
{
    try {
        $employees = get();
        require_once VIEWS . "/employee/employeeDashboard.php";
        echo "getAllEmployees() is done!";
    } catch (exception $e) {
        error($e->getMessage());
        echo "getAllEmployees() is not working!";
    }
}
echo "  <br>Im employeeController outside a function<br>  ";

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getEmployee($request)
{
    //
    if ($_REQUEST['id'] !== null && $_REQUEST['id'] !== "") {
        error('ERROR - El id de la query no puede estar vacio.');
    }

    try {
        $employee = getEmployeeById($_REQUEST['id']);
        echo "getEmployeeById() is done!";
        require_once VIEWS . "/employee/employee.php";
    } catch (exception $e) {
        error($e->getMessage());
        echo "getEmployeeById() is not working!";
    }
}

/**
 * This function includes the error view with a message
 */
function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}
