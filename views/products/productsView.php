<?php
function displayProductsList($productsList)
{

    echo "<h1>Products list</h1>";
    echo "<ul>";
    foreach ($productsList as $product) {
        echo "<li>" . implode($product) . "<a href='index.php?controller=productsController&action=switchProductState&id=" . $product['prod_id'] . "'> change state</a></li>";
    }
    echo "</ul>";
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="../php-mvc-pattern-basics/assets/css/style.css">
</head>

<body>
    <?php
    displayProductsList($productsList);
    ?>
</body>

</html>