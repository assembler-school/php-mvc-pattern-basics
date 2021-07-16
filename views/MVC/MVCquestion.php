<?php
require_once(CONTROLLERS . "/MVCController.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/mvc-style.css">
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <?php
    require_once(VIEWS . "main/header.php");
    ?>
    <div class="question-wrapper">
        <section class="question">
            <h1>
                <?php
                echo $dataQuestions;
                ?>
            </h1>
        </section>
        <section class="answers-form">
            <?php
            foreach ($dataAnswers as $answer) {
                $nextAns = $answer['qst_no'] + 1;
                echo "<a href='?action=getQuestions&question=$nextAns&is_correct=$answer[is_correct]' class='answer-button'  name='answer-button'>" . $answer['answer'] . "</a>";
            }
            ?>
        </section>
        <?php
        if ($_GET['question'] == 3) {
            echo ("
            <div class='image-wrapper'>
                <p>Option 1</p>
                <img src='./assets/img/wrong-2.png' class='images' alt='option3'/>
                <p>Option 2</p>
                <img src='./assets/img/wrong-1.png' class='images' alt='option2'/>
            </div>
            <div class='image-wrapper'>
                <p>Option 3</p>
                <img src='./assets/img/correct.png' class='images' alt='option1'/>
                <p>Option 4</p>
                <img src='./assets/img/wrong-3.png' class='images' alt='option4'/>
            </div>");
        };
        ?>

    </div>

</body>

</html>