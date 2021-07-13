<?php
require_once("./config/dbConst.php");

function get()
{
    try {
        $dbConst = mysqli_connect(DB_HOST, USER_NAME, DB_PASSWORD, DB_NAME);
        $query = "SELECT * FROM employees";
        $response = mysqli_query($dbConst, $query);
        return mysqli_fetch_all($response);
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function getEmployeeById($id)
{
    try {
        $dbConst = mysqli_connect(DB_HOST, USER_NAME, DB_PASSWORD, DB_NAME);
        $query = "SELECT * FROM employees WHERE emp_id = $id";
        $response = mysqli_query($dbConst, $query);
        return mysqli_fetch_all($response);
    } catch (Exception $e) {
        return $e->getMessage();
    }
}
