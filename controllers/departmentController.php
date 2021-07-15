<?php

require_once MODELS . "departmentModel.php";

switch ($_GET['action']) {
  case "getAllDepartments":
      getAllDepartments();
      break;
  case "getDepartment":
      $request = $_GET['id'];
      getDepartment($request);
      break;
  case "updateDepartment":
        $request = $_GET['id'];
        updateDepartment($request);
        break;
  default:
      $errorMsg = "You can't make this on the departments";
      error($errorMsg);
      break;
}

function getAllDepartments()
{
    $departments = getDepartments();
    require_once VIEWS . "department/departmentDashboard.php";
}

function getDepartment($request) {
  $department = getDeptById($request);
  require_once VIEWS . "department/department.php";
}

function updateDepartment($request) {
    updateById($request, $_POST);
    header('Location: ./index.php?controller=departments&action=getAllDepartments');
}

function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}
