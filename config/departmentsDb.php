<?php
$mysqli = mysqli_connect("localhost", "labietelabiete", "cantely5", "employees");
if (mysqli_connect_errno()) {
  echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
}

$departments = mysqli_query($mysqli, "SELECT * FROM departments");

foreach ($departments as $department) {
  echo $department["dept_name"] . "<br/>";
}
