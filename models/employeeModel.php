<?php

function get()
{
  require_once("./config/employeeDb.php");

  $employees = mysqli_query($employeeDBConnection, "SELECT * FROM employees");

  return $employees;
}

function getById($id)
{
  require_once("./config/employeeDb.php");

  $employee = mysqli_query($employeeDBConnection, "SELECT
  employees.emp_no, first_name, hire_date, salary, dept_name, title
   FROM employees
   JOIN salaries ON employees.emp_no = salaries.emp_no
   JOIN dept_emp ON employees.emp_no = dept_emp.emp_no
   JOIN departments ON dept_emp.dept_no = departments.dept_no
   JOIN titles ON employees.emp_no = titles.emp_no
   WHERE employees.emp_no = $id
   ");

   return $employee;
}

function getAllHolidays()
{
  require_once("./config/employeeDb.php");

  // We check if holidays table exists or not
  $holidaysTableCheck = mysqli_query($employeeDBConnection, "SELECT 1 FROM holidays LIMIT 1");

  if(!$holidaysTableCheck){
    // Holiday does not exist, we create it dinamically
    require_once("./config/createHolidaysTable.php");
  }

  $holidays = mysqli_query($employeeDBConnection, "SELECT
  employees.emp_no, employees.first_name, holidays.destination, holidays.from_date, holidays.to_date
  FROM
  employees JOIN holidays
  on employees.emp_no = holidays.emp_no");

  return $holidays;
}
