<?php

function getEmployees(){
  //Connection to the database;
  $dbConnection = mysqli_connect("localhost", "nacho", "75718647w", "employees");

  $query = "SELECT * FROM employees";
  $result = mysqli_query($dbConnection, $query);

  $employeesArray = array();

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $employeesArray[] = $row;
    }
    return $employeesArray;
  }
}

function getById($id){
  $dbConnection = mysqli_connect("localhost", "nacho", "75718647w", "employees");

  $query = "SELECT * FROM employees WHERE emp_no = $id";
  $result = mysqli_query($dbConnection, $query);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $employee = $row;
    }

    return $employee;
  }
}