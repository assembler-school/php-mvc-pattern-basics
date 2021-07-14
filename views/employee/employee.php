<?php
$page = "Employee form";
require_once VIEWS . "head/head.php"
?>

<body>
    <h1 class='main-title'><?= $employee["first_name"] ?>'s form</h1>

    <form class="w-50">
        <div class="form-group mb-3 p-0">
            <label for="inputEmail4">Name</label>
            <input type="text" class="form-control" id="inputName" value="<?= $employee["first_name"] ?>" placeholder="Name">
        </div>
        <div class="form-group mb-3 p-0">
            <label for="inputPassword4">Last name</label>
            <input type="text" class="form-control" id="inputLastName" value="<?= $employee["last_name"] ?>" placeholder="Last name">
        </div>
        <div class="form-group mb-3 p-0">
            <label for="inputAddress">Birthday</label>
            <input type="date" class="form-control" id="inputBirthday" value="<?= $employee["birth_date"] ?>" placeholder="DD/MM/YYYY">
        </div>
        <div class="form-group mb-3 p-0">
            <label for="inputHiringDate">Hiring date</label>
            <input type="date" class="form-control" id="inputHiringDate" value="<?= $employee["hire_date"] ?>" placeholder="DD/MM/YYYY" disabled>
        </div>
        <div class="form-group mb-3 p-0">
            <label class="w-100" for="genderSelect">Gender</label>
            <select class="form-control" id="genderSelect">
                <option hidden selected><?= $employee["gender"] ?></option>
                <option value="M">M</option>
                <option value="F">F</option>
            </select>
        </div>

        <div class="d-flex container-fluid p-0 mt-4">
            <button type="submit" class="btn btn-dark mr-2">Update</button>
            <!-- Back to dashboard -->
            <a href="./index.php?controller=employees&action=getAllEmployees" class='btn btn-outline-secondary '>Back</a>
        </div>
    </form>
</body>