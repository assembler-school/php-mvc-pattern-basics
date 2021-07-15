<?php

function get()
{
  $connection = new mysqli("127.0.0.1", "root", "", "phpMvcPatternBasics");
  $query = sprintf("SELECT employees.id,CONCAT(employees.first_name,' ',employees.last_name) AS full_name,travels.travel_id,travels.destination,travels.travel_date FROM employees INNER JOIN travels ON employees.id = travels.emp_id;");

  if ($connection->connect_errno) {
    printf("connection error: %s\n", $connection->connect_error);
    exit();
  }
  if ($result = $connection->query($query)) {
    return $result;
    $result->close();
  }
}

function add()
{
  $connection = new mysqli("127.0.0.1", "root", "", "phpMvcPatternBasics");
  $destination = $_POST["destination"];
  $travel_date = $_POST["travel_date"];
  $emp_id = $_POST["emp_id"];
  $query = sprintf("INSERT INTO travels (destination,travel_date,emp_id) values ('$destination','$travel_date','$emp_id')");

  if ($connection->connect_errno) {
    printf("connection error: %s\n", $connection->connect_error);
    exit();
  }
  if ($result = $connection->query($query)) {
    return $result;
    $result->close();
  }
}
