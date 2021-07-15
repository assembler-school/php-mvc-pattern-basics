<ul>
  <li><a href="index.php?controller=employee&action=getAllEmployees">BACK TO EMPLOYEES</a></li>
</ul>
<table id="employee">
  <tr>
    <td>ID</td>
    <td>FIRST NAME</td>
    <td>LAST NAME</td>
    <td>AGE</td>
    <td>EMAIL</td>
    <td>REGISTER DATE</td>
    <td>PASSWORD</td>
  </tr>
  <?php
  foreach ($employee as $field) {
    echo '<tr class="list">
        <td>' . $field["id"] . '</td>
        <td>' . $field["first_name"] . '</td>
        <td>' . $field["last_name"] . '</td>
        <td>' . $field["age"] . '</td>
        <td>' . $field["email"] . '</td>
        <td>' . $field["register_date"] . '</td>
        <td>' . $field["password"] . '</td>
      </tr>';
  }
  ?>
</table>