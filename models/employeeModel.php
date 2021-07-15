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
    dept_name,
    title
    FROM employees
        JOIN salaries ON employees.emp_no = salaries.emp_no
        JOIN dept_emp ON employees.emp_no = dept_emp.emp_no
        JOIN departments ON dept_emp.dept_no = departments.dept_no
        JOIN titles ON employees.emp_no = titles.emp_no
        WHERE employees.emp_no = $id";
    $result = mysqli_query($employeesDB, $query);
    return mysqli_fetch_assoc($result);
}

function addNew($data)
{
    require_once "config/db.php";
    $query = "SELECT emp_no FROM `employees` ORDER BY emp_no DESC LIMIT 1";
    $maxId = mysqli_fetch_assoc(mysqli_query($employeesDB, $query))['emp_no'] + 1;
    $query = "
    INSERT INTO employees 
    (emp_no, birth_date, first_name, last_name, gender, hire_date)
    VALUES
    ($maxId, '{$data['birth_date']}', '{$data['first_name']}', '{$data['last_name']}', '{$data['gender']}', '{$data['hire_date']}')
    ";
    return mysqli_query($employeesDB, $query);
}

function delete($emp_no)
{
    require_once "config/db.php";
    $query = "DELETE FROM employees WHERE emp_no = $emp_no ";
    return mysqli_query($employeesDB, $query);
}
