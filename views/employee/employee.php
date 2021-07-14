<div class="container mt-1">
  <h1>Employee Details</h1>
  <div class="row  border mt-3">
    <div class="col-2 text-center border">
      <h5>Employee no</h5>
    </div>
    <div class="col-2 text-center border">
      <h5>Name</h5>
    </div>
    <div class="col-2 text-center border">
      <h5>Hire Date</h5>
    </div>
    <div class="col-2 text-center border">
      <h5>Department</h5>
    </div>
    <div class="col-2 text-center border">
      <h5>Salary</h5>
    </div>
    <div class="col-2 text-center border">
      <h5>Title</h5>
    </div>
  </div>
  <?php foreach ($employee as $result) : ?>
    <div class="row">
      <div class="col-2 text-center border">
        <p><?= $result["emp_no"] ?></p>
      </div>
      <div class="col-2 text-center border">
        <p><?= $result["first_name"] ?></p>
      </div>
      <div class="col-2 text-center border">
        <p><?= $result["hire_date"] ?></p>
      </div>
      <div class="col-2 text-center border">
        <p><?= $result["dept_name"] ?></p>
      </div>
      <div class="col-2 text-center border">
        <p><?= $result["salary"] ?></p>
      </div>
      <div class="col-2 text-center border">
        <p><?= $result["title"] ?></p>
      </div>
    </div>
  <?php endforeach; ?>
  <div class="col-2 text-center mt-3">
    <a href="./index.php?controller=employees&action=getAllEmployees" class="btn btn-primary w-100">Back</a>
  </div>
</div>