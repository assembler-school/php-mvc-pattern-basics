<?php

function getDepartments()
{
    // Connection to Database
    require CONFIG . "db.php";

    // Get all departments and their employees from DB
    $query = "SELECT
                departments.dept_no,
                departments.dept_name,
                COUNT(dept_emp.emp_no) as 'num-employees'
            FROM
                departments
            INNER JOIN dept_emp
            ON departments.dept_no = dept_emp.dept_no
            GROUP BY departments.dept_no";

    $result = mysqli_query($employeesDB, $query);

    // Add each department to a new array
    $departmentsArray = array();
    if (
        mysqli_num_rows($result) > 0
    ) {
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($departmentsArray, $row);
        }
    }
    // Return the departments' array
    return $departmentsArray;
}

function getById($id)
{
    // Connection to Database
    require CONFIG . "db.php";

    // Department array
    $allData = array();

    // Department data
    $departmentQuery = "SELECT * FROM departments WHERE dept_no = '$id'";
    $departmentResult = mysqli_query($employeesDB, $departmentQuery);

    if (
        mysqli_num_rows($departmentResult) > 0
    ) {
        while ($row = mysqli_fetch_assoc($departmentResult)) {
            array_push($allData, $row);
        }
    }

    // Employees in department (array)
    $employeesQuery = "SELECT
                CONCAT(employees.first_name, ' ', employees.last_name) as 'Emp-name'
            FROM
                employees
            LEFT JOIN dept_emp
            ON employees.emp_no = dept_emp.emp_no
            WHERE dept_emp.dept_no = '$id'";

    $employeesResult = mysqli_query($employeesDB, $employeesQuery);

    $employeesArray = array();
    if (
        mysqli_num_rows($employeesResult) > 0
    ) {
        while ($row = mysqli_fetch_assoc($employeesResult)) {
            array_push($employeesArray, $row);
        }
    }

    array_push($allData, $employeesArray);

    return $allData;
}
