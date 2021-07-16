<?php
$id = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <section class="start-wrapper">
        <h1>PHP MVC QUIZ PROJECT</h1>
        <div class="main-buttons">
            <a class="main-button" href="?controller=questionController&action=getQuestions&question=<?php echo $id ?>"><span class="start-text">Start</span></a>
            <a class="main-button" href="?goToDash=true"><span class="start-text">Dashboard</span></a>
        </div>
    </section>
</body>

</html>