<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Add employee page</title>
</head>

<body class="d-flex flex-column h-100">


    <div class="container-fluid">

        <main class="col-lg-8 col-md-10 p-2 mx-auto gy-2">
            <div class="pb-2">
                <h2 id="employeeTitle">Add employee</h2>
            </div>
            <div class="col">
                <form class="needs-validation" novalidate method="post" action="?controller=employee&action=addEmployee">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="first_name" class="form-label">First name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="last_name" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="">
                        </div>
                        <div class="col-md-4">
                            <label for="birth_date" class="form-label">Birth date</label>
                            <input type="date" class="form-control" id="birth_date" name="birth_date" required>
                            <div class="invalid-feedback">
                                Please enter the employee's birth date.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="hire_date" class="form-label">Hire date</label>
                            <input type="date" class="form-control" id="hire_date" name="hire_date" required>
                            <div class="invalid-feedback">
                                Please enter the employee's hire date.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" id="gender" name="gender">
                                <option value="">Choose...</option>
                                <option value="F">F</option>
                                <option value="M">M</option>
                            </select>
                        </div>

                    </div>

                    <div class="text-center pt-4">
                        <button type="submit" class="btn btn-primary" id="submitBtn">Submit</button>
                        <a href="./index.php?action=getAllEmployees" class="btn btn-secondary">Return</a>

                    </div>

                </form>
            </div>
    </div>

    </main>
    </div>
</body>

</html>