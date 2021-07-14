<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Salary</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="?">MVC Basics</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="?controller=employees&action=getAllEmployees">Employees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?controller=salaries&action=getAllEmployees">Salaries</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <form action="?controller=salaries&action=updateEmployee" method="post" class="col-6">
                <input type="hidden" class="form-control" name="emp_no" value="<?= $salaryEmployees['emp_no'] ?? '' ?>">
                <div class="mb-3">
                    <label for="first-name" class="form-label">First name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="<?= $salaryEmployees['first_name'] ?? '' ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="last-name" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="<?= $salaryEmployees['last_name'] ?? '' ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="salary" class="form-label">Salary</label>
                    <input type="text" class="form-control" id="salary" name="salary" value="<?= $salaryEmployees['salary'] ?? '' ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="from-date" class="form-label">From date</label>
                    <input type="date" class="form-control" id="from-date" name="from_date" value="<?= $salaryEmployees['from_date'] ?? '' ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="to-date" class="form-label">To date</label>
                    <input type="date" class="form-control" id="to-date" name="to_date" value="<?= $salaryEmployees['to_date'] ?? '' ?>" disabled>
                </div>
                <!-- <button type="button" class="btn btn-primary">Submit</button> -->
                <a type="button" class="btn btn-secondary" href="?controller=salaries&action=getAllEmployees">
                    Return
                </a>
            </form>
        </div>
    </div>
</body>

</html>