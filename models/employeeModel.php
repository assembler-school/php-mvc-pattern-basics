<?php


function getEmployees()
{
    // Connection to Database
    require CONFIG . "db.php";

    // Get all employees from DB
    $query = "SELECT * FROM employees";
    $result = mysqli_query($employeesDB, $query);

    // Add each employee to a new array
    $employeesArray = array();
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($employeesArray, $row);
        }
    }
    // Return the employees' array
    return $employeesArray;
}

function getById($id)
{
    // Connection to Database
    require CONFIG . "db.php";

    $query = "SELECT * FROM employees WHERE emp_no = $id";
    $result = mysqli_query($employeesDB, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row;
        }
    }
}

function updateEmployeeModel($request)
{
    // Connection to Database
    require CONFIG . "db.php";

    $query = "UPDATE employees
        SET
            first_name = '$request[inputName]',
            last_name = '$request[inputLastName]',
            birth_date = '$request[inputBirthday]',
            gender = '$request[genderSelect]'
        WHERE
            emp_no = '$request[id]'
    ";

    mysqli_query($employeesDB, $query);
}

function deleteEmployeeModel($id)
{
    // Connection to Database
    require CONFIG . "db.php";

    $query = "DELETE FROM employees WHERE emp_no = $id";

    mysqli_query($employeesDB, $query);
}
