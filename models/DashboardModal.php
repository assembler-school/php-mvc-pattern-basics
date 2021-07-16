<?php

function getAllQuestions()
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "exam";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM questions";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $dataAllQuestions[] = $row;
        }
        return $dataAllQuestions;
    } else {
        exit;
    }
    $conn->close();
}

function getAllAnswers($id)
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
            $dataAllAnswers[] = $row;
        }
        return $dataAllAnswers;
    } else {
        exit;
    }
    $conn->close();
}

function deleteQuery($id)
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "exam";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //$conn->query("DELETE FROM questions AS A WHERE A.qst_no=$id");
    $sql = "DELETE FROM questions  WHERE questions.qst_no=$id";
    $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    // if ($result->num_rows > 0) {
    //     while ($row = $result->fetch_assoc()) {
    //         $dataAllQuestions[] = $row;
    //     }
    //     return $dataAllQuestions;
    // } else {
    //     exit;
    // }
    $conn->close();
}

function editQuery($id)
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "exam";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "DELETE FROM questions  WHERE questions.qst_no=$id";
    $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
