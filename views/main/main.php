<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THIS IS MAIN VIEW</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <section>
        <h1>Hello im main.php view</h1>
        <ul class="link-group">
            <li class="list-group-item"><a href="index.php?controller=employee&action=getAllEmployees">Employees</a></li>
            <li class="list-group-item"><a href="index.php?controller=movie&action=getAllMovies">Movies</a></li>
            <!-- Where the user is interacting, clicking, etc, we call to Controllers -->
        </ul>
    </section>
</body>

</html>