<?php
require_once(MODELS . "./MVCModel.php");

if (isset($_GET["is_correct"])) {
    if (isset($_SESSION["nota"])) {
        $_SESSION["nota"] = $_SESSION["nota"] + $_GET["is_correct"];
    } else {
        $_SESSION["nota"] = $_GET["is_correct"];
    }
}
if (isset($_GET['question'])) {
    if ($_GET['question'] == 7) {
        require_once("./views/MVC/MVCquizend.php");
        unset($_SESSION["nota"]);
    }
}
if (isset($_GET['action'])) {
    $dataQuestions = getQuestions($_GET['question']);
    $dataAnswers = getAnswers($_GET['question']);
    $checkAnswer = checkAnswer($_GET['question']);
    //require_once(VIEWS."/main/butonToDashboard.php");
    require_once("./views/MVC/MVCquestion.php");
} else {

    require_once(VIEWS . "./main/main.php");
}



