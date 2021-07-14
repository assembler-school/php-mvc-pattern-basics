<?php

// This is the entry point of your application, all your application must be executed in
// the "index.php", in such a way that you must include the controller passed by the URL
// dynamically so that it ends up including the view.

include_once "config/constants.php";

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
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- Assets -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/index.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Departments view -->
    <?php

    if (isset($_GET["controller"])) {
        $controller = $_GET["controller"];
        $action = $_GET["action"];

        // Employees controller
        if ($controller == "employees") {
            require_once CONTROLLERS . "employeesController.php";
        }
        // Departments controller
        elseif ($controller == "departments") {
            require_once CONTROLLERS . "departmentsController.php";
        }
    } else {
        // Main view
        require_once VIEWS . "main/main.php";
    }

    ?>

</body>

</html>