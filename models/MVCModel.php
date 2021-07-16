<?php
session_start();

function getQuestions($id)
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "exam";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT question FROM questions WHERE questions.qst_no=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $dataQuestions = $row['question'];
        }
        return $dataQuestions;
    } else {
        exit;
    }
    $conn->close();
};

function getAnswers($id)
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "exam";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM answers WHERE answers.qst_no = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            //$bool = $row['is_correct'] ? 'true' : 'false';
            $dataAnswer[] = $row;
        }
        return $dataAnswer;
    } else {
        exit;
    }
    $conn->close();
};

function checkAnswer($id)
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "exam";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT is_correct FROM answers WHERE answers.qst_no = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $boolean[] = $row['is_correct'];
        }
        return $boolean;
    } else {
        exit;
    }
    $conn->close();
};


