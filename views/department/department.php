<?php

echo "<div class='container-xl mt-5'><h3>Details of Department:</h3></div>";
echo "<form class='container-xl mt-3' method='POST' action='./index.php?controller=departments&action=updateDepartment&id=$department[dept_no]'>";
echo "<div class='form-group mb-2'>
<label for='inputDeptNumber'>Department's identification</label>
<input type='text' class='form-control' id='inputDeptNumber' name='dept_no' value='$department[dept_no]'>
</div>";
echo "<div class='form-group mb-2'>
<label for='inputDeptName'>Department's Name</label>
<input type='text' class='form-control' id='inputDeptName' name='dept_name' value='$department[dept_name]'>
</div>";
echo "<button type='submit' class='btn btn-primary me-2'>Update</button>";
echo "<a href='./index.php?controller=departments&action=getAllDepartments' class='btn btn-secondary'>Back</a>";
echo "</form>";
  