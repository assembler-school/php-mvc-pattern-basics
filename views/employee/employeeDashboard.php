<div class="container mt-1">
  <h1>Employees</h1>
  <div class="row  border mt-3">
    <div class="col-2 text-center border">
      <h5>Employee no</h5>
    </div>
    <div class="col-2 text-center border">
      <h5>Name</h5>
    </div>
    <div class="col-2 text-center border">
      <h5>Last name</h5>
    </div>
    <div class="col-2 text-center border">
      <h5>Birth date</h5>
    </div>
    <div class="col-2 text-center border">
      <h5>Hire date</h5>
    </div>
    <div class="col-1 text-center border">
      <h5>Gender</h5>
    </div>
  </div>
  <?php foreach ($allEmployees as $employee) : ?>
    <div class="row">
      <div class="col-2 text-center border">
        <p><?= $employee["emp_no"] ?></p>
      </div>
      <div class="col-2 text-center border">
        <p><?= $employee["first_name"] ?></p>
      </div>
      <div class="col-2 text-center border">
        <p><?= $employee["last_name"] ?></p>
      </div>
      <div class="col-2 text-center border">
        <p><?= $employee["birth_date"] ?></p>
      </div>
      <div class="col-2 text-center border">
        <p><?= $employee["hire_date"] ?></p>
      </div>
      <div class="col-1 text-center border">
        <p><?= $employee["gender"] ?></p>
      </div>
      <div class="col-1 text-center border">
        <a href="./index.php?controller=employee&id=<?= $employee["emp_no"] ?>&action=getEmployee" style="color: red"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
          </svg>
        </a>
      </div>

    </div>
  <?php endforeach; ?>
  <div class="row mt-3 mb-3">
    <div class="col-2 text-center">
      <a href="./index.php" class="btn btn-primary w-100">Back</a>
    </div>
    <div class="col-8">
    </div>
    <div class="col-2 text-center">
      <a href="./index.php?controller=holidays&action=getHolidays" class="btn btn-danger w-100">Check Holidays</a>
    </div>
  </div>
</div>