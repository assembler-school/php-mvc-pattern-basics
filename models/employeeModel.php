<?php
require_once("./config/dbConst.php");

function get()
{
    try {
        $dbConst = mysqli_connect(DB_HOST, USER_NAME, DB_PASSWORD, DB_NAME);
        $query = "SELECT * FROM employees";
        $response = mysqli_query($dbConst, $query);
        echo "employeeModel get() is done!";
        return mysqli_fetch_all($response);
    } catch (Exception $e) {
        return $e->getMessage();
        echo "employeeModel get() is not working!";
    }
}

function getEmployeeById($id)
{
    try {
        $dbConst = mysqli_connect(DB_HOST, USER_NAME, DB_PASSWORD, DB_NAME);
        $query = "SELECT * FROM employees WHERE emp_id = $id";
        $response = mysqli_query($dbConst, $query);
        echo "employeeModel getEmployeeById($id) is done!";
        return mysqli_fetch_all($response);
    } catch (Exception $e) {
        return $e->getMessage();
        echo "employeeModel getEmployeeById($id) is not working!";
    }
}
