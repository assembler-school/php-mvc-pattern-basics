<?php

function getEmployees()
{
    $conn = db_connect();
    $sql = "SELECT * FROM employees";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $employees = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($conn);
        return $employees;
    }

    mysqli_close($conn);
    return null;
}

function getEmployeeById($id)
{
    $conn = db_connect();
    $sql = "SELECT * FROM employees WHERE emp_no=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }

    mysqli_close($conn);
    return $row ?? null;
}

function updateEmployeeById($newEmployee)
{
    $id = $newEmployee['emp_no'] ?? null;
    if ($employee = getEmployeeById($id)) {
        $employee = array_merge($employee, $newEmployee);
        $birth_date = $employee['birth_date'];
        $first_name = $employee['first_name'];
        $last_name = $employee['last_name'];
        $gender = $employee['gender'];
        $hire_date = $employee['hire_date'];
    } else {
        return null;
    }

    $conn = db_connect();
    $sql = "UPDATE employees SET birth_date='$birth_date', 
    first_name='$first_name',
    last_name='$last_name',
    gender='$gender',
    hire_date='$hire_date' 
    WHERE emp_no=$id";

    if ($result = mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        return $result;
    }

    $err = mysqli_error($conn);
    mysqli_close($conn);
    return $err;
}

function deleteEmployeeById($id)
{
    if (!getEmployeeById($id)) {
        return null;
    }

    $conn = db_connect();
    $sql = "DELETE FROM employees WHERE emp_no=$id";

    if ($result = mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        return $result;
    }

    $err = mysqli_error($conn);
    mysqli_close($conn);
    return $err;
}

function db_connect()
{
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "employees";
    $conn = mysqli_connect($serverName, $userName, $password, $dbName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}
