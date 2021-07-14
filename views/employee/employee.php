<?php


echo "<div class='container-xl mt-5'><h3>Detail of employee #$employee[emp_no]</h3></div>";
echo "<form class='container-xl mt-3' method='POST' action='./index.php?controller=employees&action=updateEmployee&id=$employee[emp_no]'>";
echo "<div class='form-group mb-2'>
<label for='inputFirstName'>First Name</label>
<input type='text' class='form-control' id='inputFirstName' name='firstName' value='$employee[first_name] '>
</div>";
echo "<div class='form-group mb-2'>
<label for='inputLastName'>Last Name</label>
<input type='text' class='form-control' id='inputLastName' name='lastName' value='$employee[last_name]'>
</div>";
echo "<div class='form-group mb-2'>
<label for='inputBirthDate'>Birth Date</label>
<input type='text' class='form-control' id='inputBirthDate' name='birthDate' value='$employee[birth_date]'>
</div>";
echo "<div class='form-group mb-2'>
<label for='inputHireDate'>Hire Date</label>
<input type='text' class='form-control' id='inputHireDate' name='hireDate' value='$employee[hire_date]'>
</div>";
echo "<div class='form-group mb-3'>
<label for='inputGender'>Gender</label>
<select class='form-control' id='inputGender' name='inputGender'>
<option>$employee[gender]</option>
<option>F</option>
<option>Other</option>
</select>
</div>";
echo "<button type='submit' class='btn btn-primary me-2'>Update</button>";
echo "<a href='./index.php?controller=employees&action=getAllEmployees' class='btn btn-secondary'>Back</a>";

echo "</form>";
  