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

    $query = "SELECT * FROM departments WHERE dept_no = '$id'";
    $result = mysqli_query($employeesDB, $query);

    if (
        mysqli_num_rows($result) > 0
    ) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row;
        }
    }
}
