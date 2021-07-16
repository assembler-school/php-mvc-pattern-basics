<!-- This is the main generic view of your application, it's not required to use it -->
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
        <link rel='stylesheet' type='text/css' href='./assets/css/style.css'>
        <title>Main</title>
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
        </main>
    </body>
    </html>
