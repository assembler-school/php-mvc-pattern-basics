<?php

function getAll()
{
    require_once "config/db.php";
    $result = mysqli_query($employeesDB, "SELECT * FROM employees");
    $returnArray = array();

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            // echo print_r($row, true) . "<br>";
            array_push($returnArray, $row);
        }
        return $returnArray;
    } else {
        // echo
        // "No results";
    }
}

function getById($id)
{
    require_once "config/db.php";
    $query = "
    SELECT 
        employees.emp_no,
        first_name,
        last_name,
        birth_date,
        gender,
        hire_date,
        salary,
        dept_name
    FROM employees
        JOIN salaries ON employees.emp_no = salaries.emp_no
        JOIN dept_emp ON employees.emp_no = dept_emp.emp_no
        JOIN departments ON dept_emp.dept_no = departments.dept_no
    WHERE employees.emp_no = $id";
    $result = mysqli_query($employeesDB, $query);
    return mysqli_fetch_assoc($result);
}
