<?php

function getDepartments() {
  $dbConnection = mysqli_connect("localhost", "nacho", "75718647w", "employees");

  $query = "SELECT * FROM departments";
  $result = mysqli_query($dbConnection, $query);

  $departmentsArray = array();

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $departmentsArray[] = $row;
    }
    return $departmentsArray;
  }
}

function getDeptById($id) {
  $dbConnection = mysqli_connect("localhost", "nacho", "75718647w", "employees");

  $query = "SELECT * FROM departments WHERE dept_no = '$id'";
  $result = mysqli_query($dbConnection, $query);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $department = $row;
    }
    var_dump($department);
    return $department;
  }
}