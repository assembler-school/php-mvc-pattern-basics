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

function getProductById($id)
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
    $sqlQu = "SELECT * FROM products WHERE prod_id = $id";
    $result = mysqli_query($conn, $sqlQu);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $targetProduct = mysqli_fetch_assoc($result);
    } else {
        $targetProduct = "0 results";
    }

    mysqli_close($conn);

    return $targetProduct;
}


function switchProductState($id)
{
    $targetProduct = getProductById($id);
    if ($targetProduct == "0 results") {
        return "no matching Id in database";
    }

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

    $currentState = $targetProduct['prod_state'];

    $newState = ($currentState == 'available' ? "'not_available'" : "'available'");
    $sqlQu = "UPDATE products SET prod_state = " . $newState . "WHERE prod_id = $id";

    if (mysqli_query($conn, $sqlQu)) {
        $result = "Record updated successfully";
    } else {
        $result = "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);

    return $result;
}
