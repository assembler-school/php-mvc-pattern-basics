<?php
function get(){
  global $condb;
  $query = "SELECT * FROM employees";
  $executeQuery = mysqli_query($condb, $query);
  $employees = mysqli_fetch_all($executeQuery);
  return $employees;
}

function getById($id){
}