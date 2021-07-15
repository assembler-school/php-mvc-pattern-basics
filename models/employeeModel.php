<?php

function getEmployees(){
  include_once './config/db.php';

  $query = "SELECT emp_no, first_name, last_name, hire_date FROM employees";
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
  include_once './config/db.php';

  $query = "SELECT * FROM employees WHERE emp_no = $id";
  $result = mysqli_query($dbConnection, $query);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $employee = $row;
    }
    return $employee;
  }
}

function updateById($id, $info) {
  include_once './config/db.php';

  $query = "UPDATE employees 
            SET first_name = '$info[first_name]'
                , last_name = '$info[last_name]'
                , birth_date = '$info[birth_date]'
                , gender = '$info[gender]'
                , hire_date = '$info[hire_date]'
            WHERE emp_no = $id";

  mysqli_query($dbConnection, $query);
}

function deleteById($id) {
  include_once './config/db.php';
  
  $query = "DELETE FROM employees WHERE emp_no = $id";

  mysqli_query($dbConnection, $query);
}