<?php

require_once MODELS . "employeeModel.php";

//OBTAIN THE ACCION PASSED IN THE URL AND EXECUTE IT AS A FUNCTION

//Keep in mind that the function to be executed has to be one of the ones declared in this controller
// TODO Implement the logic

$action = $_GET["action"];

switch ($action) {
	case "getAllEmployees":
		getAllEmployees();
		break;
	case "getEmployee":
		getEmployee($_GET["id"]);
		break;
	case "addEmployee":
		addEmployee();
		break;
	case "deleteEmployee":
		deleteEmployee($_GET["id"]);
		break;
	default:
		echo "test";
		break;
}


/* ~~~ CONTROLLER FUNCTIONS ~~~ */

function getAllEmployees()
{
	$employees = get();
	require_once VIEWS . "employee/employeeDashboard.php";
}

function getEmployee($id)
{
	$employee = getById($id);
	require_once VIEWS . "employee/employee.php";
}

function addEmployee()
{
	post();
	getAllEmployees();
}

function deleteEmployee($id)
{
	deleteById($id);
	getAllEmployees();
}

function error($errorMsg)
{
	require_once VIEWS . "/error/error.php";
}
