<!-- This is the error view that you should show when the request was wrong -->
<?php

echo "<div class='container'>
        <div class='row'>
            <div class='col-8'>
                <h1 class='text-danger text-center'>ERROR</h1>
                <p class='text-center'>The following error happened:</p>
                <p class='text-center'> $errorMsg </p>

            </div>
        </div>
    </div>";

echo "<div class='modal fade' id='errorModal' tabindex='-1' aria-labelledby='errorModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='errorModalLabel'>Modal title</h5>
        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
      </div>
      <div class='modal-body'>
        ...
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
        <button type='button' class='btn btn-primary'>Save changes</button>
      </div>
    </div>
  </div>
</div>";

echo "<script type= 'text/JavaScript'>
    var errorModal = new bootstrap.Modal(document.getElementById('errorModal'), {});
    errorModal.show();
    </script>'";
