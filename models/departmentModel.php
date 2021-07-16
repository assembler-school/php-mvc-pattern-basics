<?php

function getDepartments() {
  include_once './config/db.php';

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
  include_once './config/db.php';

  $query = "SELECT * FROM departments WHERE dept_no = '$id'";
  $result = mysqli_query($dbConnection, $query);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $department = $row;
    }
    return $department;
  }
}

function updateById($id, $info) {
  include_once './config/db.php';
  
  $query = "UPDATE departments 
            SET dept_no = '$info[dept_no]'
                , dept_name = '$info[dept_name]'
            WHERE dept_no = '$id'";

  mysqli_query($dbConnection, $query);
}