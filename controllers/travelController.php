<?php

require_once MODELS . "travelModel.php";

$action = $_GET["action"];

switch ($action) {
  case "getTravels":
    getTravels();
    break;
  case "addTravel":
    addTravel();
    break;
  default:
    echo "test";
    break;
}

function getTravels()
{
  $travels = get();
  require_once VIEWS . "travel/travelDashboard.php";
}

function addTravel()
{
  add();
  getTravels();
}
