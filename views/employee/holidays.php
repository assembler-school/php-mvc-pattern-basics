<div class="container mt-1">
  <h1>Holidays</h1>
  <div class="row  border mt-3">
    <div class="col-2 text-center border">
      <h5>Employee no</h5>
    </div>
    <div class="col text-center border">
      <h5>Name</h5>
    </div>
    <div class="col-2 text-center border">
      <h5>Destination</h5>
    </div>
    <div class="col-2 text-center border">
      <h5>From date</h5>
    </div>
    <div class="col-2 text-center border">
      <h5>To date</h5>
    </div>
  </div>
  <?php foreach ($holidays as $holiday) : ?>
    <div class="row">
      <div class="col-2 text-center border">
        <p><?= $holiday["emp_no"] ?></p>
      </div>
      <div class="col text-center border">
        <p><?= $holiday["first_name"] ?></p>
      </div>
      <div class="col-2 text-center border">
        <p><?= $holiday["destination"] ?></p>
      </div>
      <div class="col-2 text-center border">
        <p><?= $holiday["from_date"] ?></p>
      </div>
      <div class="col-2 text-center border">
        <p><?= $holiday["to_date"] ?></p>
      </div>
    </div>
  <?php endforeach; ?>
  <div class="col-2 text-center mt-3">
  <a href="./index.php?controller=employees&action=getAllEmployees" class="btn btn-primary w-100">Back</a>
  </div>
</div>