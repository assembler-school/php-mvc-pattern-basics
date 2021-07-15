<?php

require_once MODELS . "departmentsModel.php";

//OBTAIN THE ACCION PASSED IN THE URL AND EXECUTE IT AS A FUNCTION

//Keep in mind that the function to be executed has to be one of the ones declared in this controller
// TODO Implement the logic

if (function_exists($action)) {
    call_user_func($action, $_REQUEST);
} else {
    error("Not valid action");
}

// switch ($_GET["action"]) {
//     case "getAllDepartments":
//         getAllDepartments();
//         break;
//     case "getDepartment":
//         getDepartment($_GET["id"]);
//         break;
//     default:
//         echo "Not valid action";
//         break;
// }

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
