<?php
$page = "Department form";
require_once VIEWS . "head/head.php"
?>

<body>
    <h1 class='main-title'><?= $department["dept_name"] ?> department</h1>

    <form class="w-50">
        <div class="form-group mb-3 p-0">
            <label for="inputEmail4">Department's id</label>
            <input type="text" class="form-control" id="inputName" value="<?= $department["dept_no"] ?>" placeholder="Id" maxlength="4">
        </div>
        <div class="form-group mb-3 p-0">
            <label for="inputPassword4">Department's name</label>
            <input type="text" class="form-control" id="inputLastName" value="<?= $department["dept_name"] ?>" placeholder="Name" maxlength="40">
        </div>
        <div class="form-group mb-3 p-0">
            <label for="inputAddress">Department's employees</label>
            <input type="text" class="form-control" id="inputBirthday" value="<?= $department["dept_name"] ?>" placeholder="DD/MM/YYYY">
        </div>

        <div class="d-flex container-fluid p-0 mt-4">
            <button type="submit" class="btn btn-dark mr-2">Update</button>
            <!-- Back to dashboard -->
            <a href="./index.php?controller=departments&action=getAllDepartments" class='btn btn-outline-secondary '>Back</a>
        </div>
    </form>
</body>