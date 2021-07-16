<?php

function get()
{
  require_once("./config/employeeDb.php");

  $salaries = mysqli_query($employeeDBConnection, "SELECT
  salaries.emp_no, employees.first_name, salaries.salary, salaries.from_date, salaries.to_date
  FROM
  employees JOIN salaries
  on employees.emp_no = salaries.emp_no");

  return $salaries;
}
