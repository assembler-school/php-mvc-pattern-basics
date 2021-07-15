<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="assets/js/utils.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>
    <h1>employees</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>AGE</th>
                <th>GENDER</th>
            </tr>
        </thead>
        <tbody>
            <?php
            array_walk(
                $employees,
                function ($employee_data) {
                    $id = $employee_data[0];
                    $first_name =  $employee_data[1];
                    $last_name = $employee_data[2];
                    $age = $employee_data[3];
                    $gender =  $employee_data[4];

                    echo "<tr class='row-employee-data'>";
                    echo " <td data-id='$id' class='toForm' >" . $id . "</td>";
                    echo " <td data-id='$id' class='toForm' >" . $first_name . "</td>";
                    echo " <td data-id='$id' class='toForm' >" . $last_name . "</td>";
                    echo " <td data-id='$id' class='toForm' >" . $age . "</td>";
                    echo " <td data-id='$id' class='toForm' >" . $gender . "</td>";
                    echo "<td> 
                    <a class='btn btn-secondary' href='?controller=movie&action=getMovie&id=" . $employees[0] . "'>Edit</a>
                    <a class='btn btn-danger' href='?controller=movie&action=deleteMovie&id=" . $employees[0] . "'>Delete</a>
                    </td>";
                    echo "</tr>";
                }
            );
            ?>
        </tbody>
    </table>
</body>

</html>