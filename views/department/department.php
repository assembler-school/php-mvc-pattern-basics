<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <title>Employee</title>
</head>

<body>
    <?php
    echo "<h3> Department: " . $departmentObject['department']['dept_name'] . "</h3>";
    echo "<h4> Director: " . $departmentObject['department']['Director'] . "</h4>";
    echo "<h5> Department average salary: " . intval($departmentObject['department']['avg_salary']) . "</h5>";
    echo "<h5> Department number: " . $departmentObject['department']['dept_no'] . "</h5>";
    ?>
    <h3>Employees:</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Birthdate</th>
                <th scope="col">Gender</th>
                <th scope="col">Hire Date</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($departmentObject['departmentEmployees'] as $employee) {
                echo '<tr>';
                foreach ($employee as $element) {
                    echo '<td>' . $element . '</td>';
                }
                echo "<td><a class='btn btn-primary' href=?controller=employee&action=getEmployee&empId=" . $employee['emp_no'] . ">Details</a></td>";
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>

</html>