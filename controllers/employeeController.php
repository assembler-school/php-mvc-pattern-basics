<?php

require_once MODELS . "employeeModel.php";

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
        'getEmployee' => [$id],
        'updateEmployee' => [$_POST],
        'deleteEmployee' => [$_POST],
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
    $employees = getEmployees();
    require_once VIEWS . "employee/employeeDashboard.php";
}

/**
 * This function calls the corresponding model function and 
 * includes the corresponding view
 */
function getEmployee($id)
{
    $employee = getEmployeeById($id);
    if (is_array($employee)) {
        require_once VIEWS . "employee/employee.php";
    } else {
        if (!$employee) {
            error("Employee with id $id not found!");
            exit;
        }
        error($employee);
    }
}

/**
 * This function updates employee
 */
function updateEmployee($newEmployee)
{
    $result = updateEmployeeById($newEmployee);
    if ($result === true) {
        header("Location:?controller=employees&action=getAllEmployees");
    } else {
        error($result);
    };
}

/**
 * This function deletes employee
 */
function deleteEmployee($post)
{
    $result = deleteEmployeeById($post['emp_no']);
    if ($result === true) {
        header("Location:?controller=employees&action=getAllEmployees");
    } else {
        error($result);
    };
}

/**
 * This function includes the error view with a message
 */
function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}
