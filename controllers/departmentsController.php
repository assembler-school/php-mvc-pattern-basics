<?php

require_once MODELS . "departmentsModel.php";


if (function_exists($action)) {
    call_user_func($action, $_REQUEST);
} else {
    error("Not valid action");
}


/* ~~~ CONTROLLER FUNCTIONS ~~~ */

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getAllDepartments()
{
    $departments = getDepartments();
    require_once VIEWS . "departments/departmentDashboard.php";
}

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getDepartment($get)
{
    $department = getById($get["id"]);
    $departmentData = $department[0];
    $departmentExpenses = $department[1];
    $departmentEmployees = $department[2];
    require_once VIEWS . "departments/department.php";
}

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function updateDepartment($request)
{
    updateDepartmentModel($request);
    header("Location:./index.php?controller=departments&action=getAllDepartments");
}

function deleteDepartment($get)
{
    deleteDepartmentModel($get["id"]);
    header("Location:./index.php?controller=departments&action=getAllDepartments");
}

/**
 * This function includes the error view with a message
 */
function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}
