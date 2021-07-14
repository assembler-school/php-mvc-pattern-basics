<?php

require_once MODELS . "salaryModel.php";


switch ($_GET["action"]) {
  case "getAllSalaries":
    getAllSalaries();
    break;
  default:
    break;
}

function getAllSalaries()
{
  $allSalaries = get();
  require_once VIEWS . "salary/salaryDashboard.php";
}
