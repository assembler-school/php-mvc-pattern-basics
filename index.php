<?php

include_once "config/constants.php";

// This is the entry point of your application, all your application must be executed in
// the "index.php", in such a way that you must include the controller passed by the URL
// dynamically so that it ends up including the view.


if (isset($_REQUEST['controller'])) {
  if (file_exists(CONTROLLERS . $_REQUEST['controller'] . "Controller.php")) {
    require_once CONTROLLERS . $_REQUEST['controller'] . "Controller.php";
  } else {
    require_once VIEWS . "/error/error.php";
  }
} else {
  require_once VIEWS . "/main/main.php";
}




// TODO Implement the logic to include the controller passed by the URL dynamically
// In the event that the controller passed by URL does not exist, you must show the error view.
