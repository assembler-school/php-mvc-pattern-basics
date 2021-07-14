<!-- This is the main generic view of your application, it's not required to use it -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>MVC basics</title>
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
                        <a class="nav-link " aria-current="page" href="?controller=employees&action=getAllEmployees">Employees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2>Explanation</h2>
        <p>MVC Pattern stands for Model-View-Controller Pattern. This pattern is used to separate application's concerns.</p>
        <ul class="list">
            <li>
                <p><b>Model</b> - Model represents an object or JAVA POJO carrying data. It can also have logic to update controller if its data changes.</p>
            </li>
            <li>
                <p><b>View</b> - View represents the visualization of the data that model contains.</p>
            </li>
            <li>
                <p><b>Controller</b> - Controller acts on both model and view. It controls the data flow into model object and updates the view whenever data changes. It keeps view and model separate.</p>
            </li>
        </ul>
        <!-- <h2>Implementation</h2>
        <p>We are going to create a <i>Employee</i> object acting as a model.<i>StudentView</i> will be a view class which can print student details on console and <i>StudentController</i> is the controller class responsible to store data in <i>Student</i> object and update view <i>StudentView</i> accordingly.</p>
        <p><i>MVCPatternDemo</i>, our demo class, will use <i>StudentController</i> to demonstrate use of MVC pattern.</p> -->
        <img class="img-fluid" src="./assets/img/mvc-diagram.png" alt="MVC Pattern Diagram" />
    </div>
</body>

</html>