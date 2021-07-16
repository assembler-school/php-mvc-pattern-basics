<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>Document</title>
</head>

<body>
    <h1 class="ml-3"><?php echo isset($employee) ?  "Edit Employee" : "New Employee" ?></h1>
    <form class="w-50 m-auto" action="index.php?controller=employee&action=<?php echo isset($employee[0][0]) ? "updateEmployee" : "createEmployee" ?>" method="post">
        <input type="hidden" name="emp_id" value="<?php echo isset($employee[0][0]) ? $employee[0][0] : null ?>">
        <div class="form-group row md-6">
            <label for="first_name">First name</label>
            <input required type="text" class="form-control" value="<?php echo isset($employee) ? $employee[0][1] : null ?>" class="form-control" id="first_name" name="first_name" aria-describedby="first_name" placeholder="Enter first name">
        </div>
        <div class="form-group row md-6">
            <label for="last_name">Last name</label>
            <input required type="text" class="form-control" value="<?php echo isset($employee) ? $employee[0][2] : null ?>" class="form-control" id="last_name" name="last_name" aria-describedby="last_name" placeholder="Enter last name">
        </div>
        <div class="form-group row md-6">
            <label for="gender">Gender</label>
            <input required type="text" class="form-control" value="<?php echo isset($employee) ? $employee[0][3] : null ?>" class="form-control" id="gender" name="gender" aria-describedby="gender" placeholder="Enter gender">
        </div>
        <div class="form-group row md-6">
            <label for="age">Age</label>
            <input required type="text" class="form-control" value="<?php echo isset($employee) ? $employee[0][4] : null ?>" class="form-control" id="age" name="age" aria-describedby="age" placeholder="Enter age">
        </div>
        <div class="form-group row md-6 justify-content-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</body>

</html>