<?php

// This is the entry point of your application, all your application must be executed in
// the "index.php", in such a way that you must include the controller passed by the URL
// dynamically so that it ends up including the view.

// include_once "config/constants.php";

// TODO Implement the logic to include the controller passed by the URL dynamically
// In the event that the controller passed by URL does not exist, you must show the error view.



if (isset($_GET["controller"])) {
    if ($_GET["controller"] == 'productsController') {
        require_once('C:\xampp\htdocs\php-mvc-pattern-basics\controllers\productsController.php');
    }
} else {
    require_once('C:\xampp\htdocs\php-mvc-pattern-basics\controllers\productsController.php');
    echo 'first entry';
}
