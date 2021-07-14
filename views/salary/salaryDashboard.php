<div class="container mt-5">
  <div class="row  border">
    <div class="col-2 text-center border">
      <h5>Employee no</h5>
    </div>
    <div class="col text-center border">
      <h5>Name</h5>
    </div>
    <div class="col-2 text-center border">
      <h5>Salary</h5>
    </div>
    <div class="col-2 text-center border">
      <h5>From date</h5>
    </div>
    <div class="col-2 text-center border">
      <h5>To date</h5>
    </div>
  </div>
  <?php foreach ($allSalaries as $salary) : ?>
    <div class="row">
      <div class="col-2 text-center border">
        <p><?= $salary["emp_no"] ?></p>
      </div>
      <div class="col text-center border">
        <p><?= $salary["first_name"] ?></p>
      </div>
      <div class="col-2 text-center border">
        <p><?= $salary["salary"] ?></p>
      </div>
      <div class="col-2 text-center border">
        <p><?= $salary["from_date"] ?></p>
      </div>
      <div class="col-2 text-center border">
        <p><?= $salary["to_date"] ?></p>
      </div>
    </div>
  <?php endforeach; ?>
  <div class="col-2 text-center mt-3">
    <a href="./index.php" class="btn btn-primary w-100">Back</a>
  </div>
</div>