<?php

function get()
{
  $connection = new mysqli("127.0.0.1", "root", "", "phpMvcPatternBasics");
  $query = sprintf("SELECT * FROM employees");

  if ($connection->connect_errno) {
    printf("connection error: %s\n", $connection->connect_error);
    exit();
  }
  if ($result = $connection->query($query)) {
    return $result;
    $result->close();
  }
}

function getById($id)
{
  $connection = new mysqli("127.0.0.1", "root", "", "phpMvcPatternBasics");
  $query = sprintf("SELECT * FROM employees WHERE id=$id");

  if ($connection->connect_errno) {
    printf("connection error: %s\n", $connection->connect_error);
    exit();
  }
  if ($result = $connection->query($query)) {
    return $result;
    $result->close();
  }
}

function post()
{
  $connection = new mysqli("127.0.0.1", "root", "", "phpMvcPatternBasics");

  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $age = $_POST["age"];
  $email = $_POST["email"];

  $query = sprintf("INSERT INTO employees (first_name,last_name,email,password,register_date,age) values ('$first_name','$last_name','$email','',now(),'$age')");

  if ($connection->connect_errno) {
    printf("connection error: %s\n", $connection->connect_error);
    exit();
  }
  if ($result = $connection->query($query)) {
    return $result;
    $result->close();
  }
}

function deleteById($id)
{
  $connection = new mysqli("127.0.0.1", "root", "", "phpMvcPatternBasics");
  $query = sprintf("DELETE FROM employees WHERE id=$id");

  if ($connection->connect_errno) {
    printf("connection error: %s\n", $connection->connect_error);
    exit();
  }
  if ($result = $connection->query($query)) {
    return $result;
    $result->close();
  }
}
