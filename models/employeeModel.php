<?php

function get()
{
  require_once("./config/employeeDb.php");

  $employees = mysqli_query($employeeDBConnection, "SELECT * FROM employees");

  return $employees;
}

function getById($id)
{
}
