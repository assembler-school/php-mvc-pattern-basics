<!-- This is the error view that you should show when the request was wrong -->
<?php
$page = "Error";
require_once VIEWS . "head/head.php"
?>

<body>
    <div class="alert alert-danger" role="alert">
        <?= $errorMessage ?>
    </div>
</body>