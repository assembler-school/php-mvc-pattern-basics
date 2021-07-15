<?php

require_once MODELS . "departmentModel.php";

if (function_exists($_GET['action'])) {
    call_user_func($_GET['action']);
}  else {
    $errorMsg = "You can't make this on the departments";
    error($errorMsg);
}

function getAllDepartments()
{
    $departments = getDepartments();
    require_once VIEWS . "department/departmentDashboard.php";
}

function getDepartment() {
  $department = getDeptById($_GET['id']);
  require_once VIEWS . "department/department.php";
}

function updateDepartment() {
    updateById($_GET['id'], $_POST);
    header('Location: ./index.php?controller=departments&action=getAllDepartments');
}

function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}
