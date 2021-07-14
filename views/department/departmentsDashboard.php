<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <title>Employee Dashboard</title>
</head>

<body>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Dep Id</th>
                <th scope="col">Dep. Name</th>
                <th scope="col">Director</th>
                <th scope="col">Employees</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($departments as $department) {
                echo '<tr>';
                foreach ($department as $element) {
                    echo '<td>' . $element . '</td>';
                }
                echo "<td><a class='btn btn-primary' href=?controller=department&action=getDepartment&depId=" . $department['dept_no'] . ">Details</a></td>";
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>

</html>