<?php

function getAll()
{
    require_once "config/db.php";
    $result = mysqli_query($employeesDB, "SELECT * FROM employees");
    $returnArray = array();

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            // echo print_r($row, true) . "<br>";
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
}
