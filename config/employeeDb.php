<?php
$employeeDBConnection = mysqli_connect("localhost", "labietelabiete", "cantely5", "employees");
if (mysqli_connect_errno()) {
    echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
}
