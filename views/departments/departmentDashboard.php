<?php
$page = "Departments dashboard";
require_once VIEWS . "head/head.php"
?>

<body>
    <table class="dashboard w-100 p-0 mb-4">
        <!-- Top row -->
        <thead>
            <tr class="border border-dark">
                <th>Dept. Id</th>
                <th>Department name</th>
                <th>Num. Employees</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <!-- Departments rows -->
        <tbody>
            <?php foreach ($departments as $department) : ?>
                <tr class=" border">
                    <td><?php echo $department["dept_no"] ?></td>
                    <td><?php echo $department["dept_name"] ?></td>
                    <td><?php echo $department["num-employees"] ?></td>
                    <td class=" text-center"><a href="./index.php?controller=departments&action=getDepartment&id=<?php echo $department["dept_no"] ?>"><i class="uil uil-edit"></i></a></td>
                    <td class="text-center"><i class="uil uil-trash-alt delete-icon"></i></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- Back home -->
    <a href="./index.php" class='btn btn-outline-secondary'>Home</a>
</body>