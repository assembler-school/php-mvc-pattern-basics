<!-- This is the error view that you should show when the request was wrong -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <link rel='stylesheet' type='text/css' href='./assets/css/style.css'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Error</title>
</head>
<body>
    <header> <p class='headerTitle'>Make Your Request</p> </header>
        <main>
            <div class='BtnContainer'>
                <a href='?controller=employees&action=getAllEmployeesController'>
                    <div class='btnDiv'> Employees </div>
                </a>
                <a href='?controller=travels&action=getAllTravelsController'>
                    <div class='btnDiv'> Travels </div>
                </a>
            </div>
            <div class="errorContainer">
                <div class="alert alert-danger" role="alert">
                    <h4 class="alertHeading">ERROR!!!!</h4>
                    <p><?php echo $errorMsg;?></p>
                </div>
            </div>
        </main>
    
</body>
</html>