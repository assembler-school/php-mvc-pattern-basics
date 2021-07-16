<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Employee Dashboard</title>
</head>

<?php include_once ASSETS . 'html/header.html'; ?>

<body>
    <div class="container">
        <div class="row">
            <h3 class='mb-4'> Employees:</h3>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Birthdate</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Hire Date</th>
                        <th scope="col"><a href="?controller=employee&action=addEmployeeForm" class="btn btn-success"><i class='bi-plus-lg'></i></a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($employees as $employee) {
                        echo '<tr>';
                        foreach ($employee as $element) {
                            echo '<td>' . $element . '</td>';
                        }
                        echo "<td><a class='btn btn-primary me-1' href=?controller=employee&action=getEmployee&empId=" . $employee['emp_no'] . "><i class='bi-info-circle'></i></a>";
                        echo "<a class='btn btn-danger' href=?controller=employee&action=deleteEmployee&empId={$employee['emp_no']}><i class='bi-trash'></i></a></td>";
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>