<?php

function getDepartments()
{
    // Connection to Database
    require CONFIG . "db.php";

    // Get all departments and their employees from DB
    $query = "SELECT
                departments.dept_no,
                departments.dept_name,
                CONCAT(employees.first_name, ' ', employees.last_name) AS 'manager',
                COUNT(dept_emp.emp_no) as 'num-employees',
                SUM(salaries.salary) as 'total-expenses'
            FROM
                departments
                JOIN dept_emp ON departments.dept_no = dept_emp.dept_no
                JOIN salaries ON salaries.emp_no = dept_emp.emp_no
                JOIN dept_manager ON dept_manager.dept_no = departments.dept_no
                LEFT JOIN employees ON employees.emp_no = dept_manager.emp_no
            GROUP BY departments.dept_no, departments.dept_name, CONCAT(employees.first_name, ' ', employees.last_name)";


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

    // Department expenes
    $expensesQuery = "SELECT
                SUM(salaries.salary) as 'total-expenses'
            FROM
                departments
            JOIN dept_emp ON departments.dept_no = '$id'
            JOIN salaries ON salaries.emp_no = dept_emp.emp_no";

    $expensesResult = mysqli_query($employeesDB, $expensesQuery);

    if (
        mysqli_num_rows($expensesResult) > 0
    ) {
        while ($row = mysqli_fetch_assoc($expensesResult)) {
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

function updateDepartmentModel($request)
{
    // Connection to Database
    require CONFIG . "db.php";

    $query = "UPDATE departments
        SET
            dept_name = '$request[inputDeptName]'
        WHERE
            dept_no = '$request[id]'";

    mysqli_query($employeesDB, $query);
}


function deleteDepartmentModel($id)
{
    // Connection to Database
    require CONFIG . "db.php";

    $query = "DELETE FROM departments WHERE dept_no = '$id'";

    mysqli_query($employeesDB, $query);
}
