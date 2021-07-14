<?php

function getEmployees()
{
    $conn = db_connect();
    $sql = "SELECT * FROM employees";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $employees[] = $row;
        }
    }

    mysqli_close($conn);
    return $employees;
}

function getEmployeeById($id)
{
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
