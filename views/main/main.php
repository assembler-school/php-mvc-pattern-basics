<!-- This is the main generic view of your application, it's not required to use it -->
<?php
$page = "Main";
require_once VIEWS . "head/head.php"
?>

<body>
    <h1 class='main-title'>Main view</h1>
    <a href='./index.php?controller=employees&action=getAllEmployees' class='btn btn-outline-primary'>Employees</a>
    <a href='./index.php?controller=departments&action=getAllDepartments' class='btn btn-outline-secondary'>Departments</a>
</body>