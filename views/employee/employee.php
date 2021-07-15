<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <title>Employee</title>
</head>
<?php include_once ASSETS . 'html/header.html'; ?>

<body>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Birthdate</th>
                <th scope="col">Gender</th>
                <th scope="col">Hire Date</th>
                <th scope="col">Salary</th>
                <th scope="col">Department</th>
                <th scope="col">Title</th>
            </tr>
        </thead>
        <tbody>
            <?php

            echo '<tr>';
            foreach ($employeeArray as $element) {
                echo '<td>' . $element . '</td>';
            }
            echo '</tr>';

            ?>
        </tbody>
    </table>
</body>

</html>