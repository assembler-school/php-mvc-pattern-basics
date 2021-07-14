<?php

    // This is the entry point of your application, all your application must be executed in
    // the "index.php", in such a way that you must include the controller passed by the URL
    // dynamically so that it ends up including the view.

    include_once "config/constants.php";

    // TODO Implement the logic to include the controller passed by the URL dynamically
    // In the event that the controller passed by URL does not exist, you must show the error view.

    // TODO ONLY REQUIRE CONTROLLERS HERE!!!!!

    if(!isset($_GET['controller'])){
        require_once VIEWS."main/main.php";

    }else{
        if($_GET['controller'] === 'employees'){
            echo " going into employee controller";
            require_once CONTROLLERS."employeeController.php";
        }
        else if($_GET['controller'] === 'travels'){
            require_once CONTROLLERS."travelController.php";
        }
    }

?>