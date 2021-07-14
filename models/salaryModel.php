<?php


function getSalaryEmployees()
{
    $conn = db_connect();
    $sql = "SELECT 
    E.emp_no,E.first_name,E.last_name,S.salary,S.from_date,S.to_date
    FROM employees E
    JOIN salaries S
    ON E.emp_no = S.emp_no";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $employees[] = $row;
        }
    }

    mysqli_close($conn);
    return $employees;
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
