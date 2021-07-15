<?php

require_once MODELS . "employeeModel.php";

switch ($_GET['action']) {
    case "getAllEmployees":
        getAllEmployees();
        break;
    case "getEmployee":
        $request = $_GET['id'];
        getEmployee($request);
        break;
    case "updateEmployee":
        $id = $_GET['id'];
        updateEmployee($id);
        break;
    case "deleteEmployee":
        $id = $_GET['id'];
        deleteEmployee($id); 
        break;
    default:
        $message = 'This is not a valid action for the employees';
        error($message);
        break;
}

function getAllEmployees()
{
    $employees = getEmployees();
    require_once VIEWS . "employee/employeeDashboard.php";
}

function getEmployee($request)
{
    $employee = getById($request);
    require_once VIEWS . "employee/employee.php";
}

function updateEmployee($id) 
{
    updateById($id, $_POST);
    header('Location: ./index.php?controller=employees&action=getAllEmployees');
}

function deleteEmployee($id) 
{
    deleteById($id);
    header('Location: ./index.php?controller=employees&action=getAllEmployees');
}

function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}
