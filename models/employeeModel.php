<?php

function get()
{
  require_once("./config/employeesDb.php");

  $employees = mysqli_query($employeesDBConnection, "SELECT * FROM employees");

  return $employees;
}

function getById($id)
{
}
