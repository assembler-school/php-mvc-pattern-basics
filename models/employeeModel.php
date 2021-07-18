<?php

function getAll()
{
    $conn = db_connect();
    $sql = "
    SELECT * FROM employees";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $employees = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($conn);
        return $employees;
    }

    mysqli_close($conn);
    return null;
}

function getById($id)
{
    $conn = db_connect();
    $sql = "
    SELECT * FROM employees WHERE emp_no=$id";

    if ($result = mysqli_query($conn, $sql)) {
        $row = mysqli_fetch_assoc($result);
        mysqli_close($conn);
        return $row;
    }

    $err = mysqli_error($conn);
    mysqli_close($conn);
    return $err;
}

function updateById($newEmployee)
{
    $id = $newEmployee['emp_no'] ?? null;
    if ($employee = getById($id)) {
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
    $sql = "
    UPDATE employees SET birth_date='$birth_date', 
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

function deleteById($id)
{
    if (!getById($id)) {
        return null;
    }

    $conn = db_connect();
    $sql = "
    DELETE FROM employees WHERE emp_no=$id";

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
    require_once("config/db.php");
    $conn = mysqli_connect(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}
