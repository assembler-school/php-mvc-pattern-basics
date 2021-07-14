<table class="dashboard w-100 p-0 mb-4">
    <!-- Top row -->
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Last name</th>
            <th>Birthday</th>
            <th>Gender</th>
            <th>Hiring date</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <!-- Employees rows -->
    <tbody>
        <?php foreach ($employees as $employee) : ?>
            <tr>
                <td><?php echo $employee["emp_no"] ?></td>
                <td><?php echo $employee["first_name"] ?></td>
                <td><?php echo $employee["last_name"] ?></td>
                <td><?php echo $employee["birth_date"] ?></td>
                <td><?php echo $employee["gender"] ?></td>
                <td><?php echo $employee["hire_date"] ?></td>
                <td class="text-center"><a href="./index.php?controller=employees&action=getEmployee&id=<?php echo $employee["emp_no"] ?>"><i class="uil uil-edit"></i></a></td>
                <td class="text-center"><i class="uil uil-trash-alt delete-icon"></i></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<!-- Back home -->
<a href="./index.php" class='btn btn-outline-secondary'>Home</a>