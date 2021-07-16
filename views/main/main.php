<!-- This is the main generic view of your application, it's not required to use it -->    
<?php

echo "<h2 class='text-center'>MVC Pattern Basics</h2>";
    echo "<div class='container-xl d-flex justify-content-between'>";
      echo "<a href='./index.php?controller=employees&action=getAllEmployees' class='btn btn-primary w-50 mx-2'>Employees</a>";
      echo "<a href='./index.php?controller=departments&action=getAllDepartments' class='btn btn-secondary w-50 mx-2'>Departments</a>";
    echo "</div>";