<!-- This is the error view that you should show when the request was wrong -->
<?php

echo "<div class='container-md alert alert-danger alert-dismissible' role='alert'>
  <strong>$errorMsg</strong> Click on the X to go back to the homepage.
  <a href='./index.php' type='button' class='btn-close' ></a>
</div>";