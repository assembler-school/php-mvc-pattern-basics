<?php

function getAll()
{
    require_once "config/db.php";
    $query = "
    SELECT 
        departments.dept_no,
        departments.dept_name,
        CONCAT(employees.first_name, ' ', employees.last_name) AS 'Director',
        dept_emps AS 'Department Employees'
    FROM departments 
        JOIN dept_manager ON departments.dept_no = dept_manager.dept_no
        JOIN employees ON dept_manager.emp_no = employees.emp_no
        JOIN (
            SELECT dept_no, COUNT(dept_no) AS dept_emps 
                FROM dept_emp GROUP BY dept_emp.dept_no) AS employees_count 
            ON departments.dept_no = employees_count.dept_no";
    $result = mysqli_query($employeesDB, $query);
    $returnArray = array();

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
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
        departments.dept_no,
        departments.dept_name,
        CONCAT(employees.first_name, ' ', employees.last_name) AS 'Director',
        dept_emps AS 'Department Employees',
        avg_salary
    FROM departments 
        JOIN dept_manager ON departments.dept_no = dept_manager.dept_no
        JOIN employees ON dept_manager.emp_no = employees.emp_no
        JOIN (
            SELECT 
                dept_no, 
                COUNT(dept_no) AS dept_emps ,
                AVG(salary) AS 'avg_salary'
            FROM dept_emp 
                JOIN employees ON dept_emp.emp_no = employees.emp_no
                JOIN salaries ON dept_emp.emp_no = salaries.emp_no
                GROUP BY dept_emp.dept_no
                
                ) AS employees_count 
            ON departments.dept_no = employees_count.dept_no
        WHERE departments.dept_no = $id
    ";
    $result['department'] = mysqli_fetch_assoc(mysqli_query($employeesDB, $query));
    $result['departmentEmployees'] = array();
    $query = "
    SELECT 
            employees.emp_no,
            first_name,
            last_name,
            birth_date,
            gender,
            hire_date
    FROM employees
    JOIN dept_emp ON employees.emp_no = dept_emp.emp_no
    WHERE dept_no = $id
    ";
    $tempResult = mysqli_query($employeesDB, $query);
    while ($row = mysqli_fetch_assoc($tempResult)) {
        array_push($result['departmentEmployees'], $row);
    }

    return $result;
}
