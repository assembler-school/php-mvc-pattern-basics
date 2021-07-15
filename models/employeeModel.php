<?php

    // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }

    // Model FUNCTIONS

    // Receives the database connection and returns all employees
    function getAllEmployeesModel(){
        
        // Require database Connection
        require_once "./config/dbConfig.php";

        // Make SQL query to database and receive its result in $result
        $sql = "SELECT * FROM employees";
        $resultQuery = mysqli_query($conn,$sql);

        // Creating empty array to store result
        $result = array();
        if (mysqli_num_rows($resultQuery) > 0) {
            while ($row = mysqli_fetch_assoc($resultQuery)) {
                array_push($result,$row);
            }
        }

        // Return $result
        return $result;
    }

    function getEmployeeByIdModel(){
        // Get id from URL
        $id = $_GET["id"];
        
        // Require database Connection
        require_once "./config/dbConfig.php";

        // Make SQL query to database and receive its result in $result
        $sql = "SELECT * FROM employees WHERE emp_no=".$id;
        $resultQuery = mysqli_query($conn,$sql);

        // Creating empty array to store result
        $result = array();
        if (mysqli_num_rows($resultQuery) > 0) {
            while ($row = mysqli_fetch_assoc($resultQuery)) {
                array_push($result,$row);
            }
        }

        // Closing database connection
        mysqli_close($conn);

        // Return $result
        return $result;
    }

    function deleteEmployeeByIdModel(){
        // Get id from URL
        $id = $_GET["id"];
        
        // Require database Connection
        require_once "./config/dbConfig.php";

        // Make SQL query to database
        $sql = "DELETE FROM employees WHERE emp_no=".$id;
        mysqli_query($conn,$sql);

        // Closing database connection
        mysqli_close($conn);
    }

?>