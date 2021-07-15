<?php
$page = "Employees dashboard";
require_once VIEWS . "head/head.php"
?>

<body>
    <table class="dashboard w-100 p-0 mb-4 table table-striped">
        <!-- Top row -->
        <thead class="thead-dark">
            <tr class="border border-dark">
                <th>Id</th>
                <th>Name</th>
                <th>Last name</th>
                <th>Birthday</th>
                <th>Hiring date</th>
                <th>Gender</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <!-- Employees rows -->
        <tbody>
            <?php foreach ($employees as $employee) : ?>
                <tr class=" border">
                    <td><?php echo $employee["emp_no"] ?></td>
                    <td><?php echo $employee["first_name"] ?></td>
                    <td><?php echo $employee["last_name"] ?></td>
                    <td><?php echo $employee["birth_date"] ?></td>
                    <td><?php echo $employee["hire_date"] ?></td>
                    <td><?php echo $employee["gender"] ?></td>
                    <td class=" text-center"><a href="./index.php?controller=employees&action=getEmployee&id=<?php echo $employee["emp_no"] ?>"><i class="uil uil-edit"></i></a></td>
                    <td class="text-center"><i class="uil uil-trash-alt delete-icon"></i></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- Back home -->
    <a href="./index.php" class='btn btn-outline-secondary'>Home</a>
</body>