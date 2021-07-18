<!-- This is the error view that you should show when the request was wrong -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Error</title>
</head>

<body>
    <div class="container mt-3">
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Error!</h4>
            <p><?= $errorMsg; ?></p>
            <hr>
            <p class="mb-0">Made by Brahim Benalia</p>
        </div>
    </div>
</body>

</html>