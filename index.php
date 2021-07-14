<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MCV Employee</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <?php

  // This is the entry point of your application, all your application must be executed in
  // the "index.php", in such a way that you must include the controller passed by the URL
  // dynamically so that it ends up including the view.
  include_once "config/constants.php";

  if (isset($_GET["controller"])) {
    $controller = $_GET["controller"];
    $action = $_GET["action"];

    // Calling employee controller using employee action
    if ($controller == "employees") {
      require_once CONTROLLERS . "/employeeController.php";
    }
    // Calling departments controller using departments action
    elseif ($controller == "salaries") {
      require_once CONTROLLERS . "/salaryController.php";
    }
  } else {
    // TODO Implement the logic to include the controller passed by the URL dynamically
    // In the event that the controller passed by URL does not exist, you must show the error view.
    echo "
    <h1>Employee Management MCV</h1>
    <div class=row>
      <div class=col-6 >
        <a href=./index.php?controller=employees&action=getAllEmployees class='btn btn-success' >Get Employees</a>
        <a href=./index.php?controller=salaries&action=getAllSalaries class='btn btn-info' >Get Salaries</a>
      </div>
    </div>
    ";
  }

  ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>


<?php




// require './config/employeesDb.php';
// require './config/departmentsDb.php';
