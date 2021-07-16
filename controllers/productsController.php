<?php

require_once('C:\xampp\htdocs\php-mvc-pattern-basics\models\productsModel.php');
if (isset($_GET['id'])) {
    $switchStateResult = switchProductState($_GET['id']);
}
$productsList = getAllProducts();


require_once('C:\xampp\htdocs\php-mvc-pattern-basics\views\products\productsView.php');

//var_dump($switchStateResult);
