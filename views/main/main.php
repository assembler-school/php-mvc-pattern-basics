<!-- This is the main generic view of your application, it's not required to use it -->
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Main Controller</title>
</head>
<?php include_once ASSETS . 'html/header.html'; ?>

<body>
    <div class='container'>
        <h2 class='text-center mb-4'>Controller Selector</h2>
        <div class='d-flex justify-content-center'>
            <div class='m-4'>
                <a href="?controller=employee&action=getAllEmployees" class="btn btn-outline-dark" id="navEmployee">
                    <i class="bi bi-person-fill d-block mx-auto mb-1 text-center" style="font-size: 2rem; display: block"></i>
                    Employee Controller
                </a>
            </div>
            <div class='m-4'>
                <a href="?controller=department&action=getAllDepartments" class="btn btn-outline-dark" id="navDashboard">
                    <i class="bi bi-ui-checks-grid d-block mx-auto mb-1 text-center" style="font-size: 2rem; display: block"></i>
                    Department Controller
                </a>
            </div>
        </div>
    </div>
</body>

</html>