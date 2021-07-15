<?php

function getAllProducts()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "productsDB";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // $sqlQu = "SELECT prod_id, prod_name, prod_price FROM products";
    $sqlQu = "SELECT * FROM products";
    $result = mysqli_query($conn, $sqlQu);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            // var_dump($row);
            $productsListData[] = $row;

            // echo '<br>';
            //echo "prod_id: " . $row["prod_id"] . " | prod_name: " . $row["prod_name"] . " | prod_price: " . $row["prod_price"] . "<br>";
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);

    // var_dump($productsListData);

    return $productsListData;
}

function getById($id)
{
}
