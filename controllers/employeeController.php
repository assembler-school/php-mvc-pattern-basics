<?php

require_once MODELS . "employeeModel.php";

//OBTAIN THE ACCION PASSED IN THE URL AND EXECUTE IT AS A FUNCTION

//Keep in mind that the function to be executed has to be one of the ones declared in this controller
// TODO Implement the logic
if (isset($_REQUEST['action'])) {
  function_exists($_REQUEST['action']) ?
    call_user_func($_REQUEST['action']) :
    error('We can not perform this action');
} else {
  error('There is no such action');
}

/* ~~~ CONTROLLER FUNCTIONS ~~~ */

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getAllEmployees()
{
  $employees = get();
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
