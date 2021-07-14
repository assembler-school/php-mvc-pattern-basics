<?php

echo "<div class='container-xl mt-3 p-3 rounded shadow'>";

echo "<h3>List of Departments:</h3>";

echo "<table class='table'>
  <thead class='thead-dark'>
    <tr >
      <th scope='col'>No.</th>
      <th scope='col'>Department Name</th>
      <th scope='col'></th>
    </tr>
  </thead>
  <tbody>";
  
foreach ($departments as $department) {
  echo "<tr>";
  echo "<td>" . $department['dept_no'] . "</td>";
  echo "<td>" . $department['dept_name'] . "</td>";
  echo "<td> <a href='./index.php?controller=departments&action=getDepartment&id=$department[dept_no]' class='btn btn-primary'> <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-eye-fill' viewBox='0 0 16 16'>
  <path d='M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z'/>
  <path d='M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z'/>
</svg> </a>
  </td>";
  echo "</tr>";
}
echo "</tbody> </table> </div>";