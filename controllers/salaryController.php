<?php

require_once MODELS . "salaryModel.php";

//OBTAIN THE ACCION PASSED IN THE URL AND EXECUTE IT AS A FUNCTION
$action = $_GET["action"];

if (function_exists($action)) {
  list($params) = [
    "getAllSalaries" => [[]],
  ][$action] ?? [[]];

  call_user_func($action, $params);
} else {
  error("Invalid function");
  exit;
}


/* ~~~ CONTROLLER FUNCTIONS ~~~ */
function getAllSalaries()
{
  $allSalaries = get();
  require_once VIEWS . "salary/salaryDashboard.php";
}
