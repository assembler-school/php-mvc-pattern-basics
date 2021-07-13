<?php

// This is the entry point of your application, all your application must be executed in
// the "index.php", in such a way that you must include the controller passed by the URL
// dynamically so that it ends up including the view.

// include_once "config/constants.php";

// Connection to Database
$employeesDB = mysqli_connect("localhost", "Rick", "newton", "employees");


// TODO Implement the logic to include the controller passed by the URL dynamically
// In the event that the controller passed by URL does not exist, you must show the error view.
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Dependencies -->
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./node_modules/jquery/dist/jquery.js"></script>

    <!-- Assets -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/index.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Main view -->
    <h1>Main view</h1>
    <a href="#" class="btn btn-outline-primary">Employees</a>
    <a href="#" class="btn btn-outline-secondary">Departments</a>
    <br>

    <!-- Employees view -->
    <?php

    $sql = "SELECT first_name, last_name FROM employees";
    $result = mysqli_query($employeesDB, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo print_r($row, true) . "<br>";
            // echo "Name: " . $row["first_name"] . " - Last name: " . $row["last_name"] . "<br>";
        }
    } else {
        echo "No results";
    }
    ?>
    <br>
    <!-- Departments view -->
    <?php
    $sql = "SELECT dept_no, dept_name FROM departments";
    $result = mysqli_query($employeesDB, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo print_r($row, true) . "<br>";
            // echo "Name: " . $row["first_name"] . " - Last name: " . $row["last_name"] . "<br>";
        }
    } else {
        echo "No results";
    }
    ?>

</body>

</html>