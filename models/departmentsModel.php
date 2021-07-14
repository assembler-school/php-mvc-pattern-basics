<?php

function getDepartments()
{
    // Connection to Database
    $employeesDB = mysqli_connect("localhost", "Rick", "newton", "employees");

    // Get all employees from DB
    $sql = "SELECT dept_no, dept_name FROM departments";
    $result = mysqli_query($employeesDB, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            // echo print_r($row, true) . "<br>";
            echo "Dept. id: " . $row["dept_no"] . " - Dept. Name: " . $row["dept_name"] . "<br>";
        }
    }
}

function getById($id)
{
}
