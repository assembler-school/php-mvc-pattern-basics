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
  default:
      echo "this is not a valid action";
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
