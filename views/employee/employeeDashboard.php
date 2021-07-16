<section>
  <table id="employees">
    <tr>
      <td>ID</td>
      <td>FIRST NAME</td>
      <td>LAST NAME</td>
      <td>AGE</td>
      <td>EMAIL</td>
      <td>REGISTER DATE</td>
    </tr>
    <?php
    foreach ($employees as $employee) {
      echo '
      <tr class="list">
        <td>' . $employee["id"] . '</td>
        <td>' . $employee["first_name"] . '</td>
        <td>' . $employee["last_name"] . '</td>
        <td>' . $employee["age"] . '</td>
        <td>' . $employee["email"] . '</td>
        <td><a href="index.php?controller=employee&action=deleteEmployee&id=' . $employee["id"] . '"><button>Delete</button></a></td>
      </tr>';
    }
    ?>
    <form action="index.php?controller=employee&action=addEmployee" method="POST">
      <tr>
        <td><input type="text" name="first_name" placeholder="First name" required /></td>
        <td><input type="text" name="last_name" placeholder="Last name" required /></td>
        <td><input type="number" name="age" placeholder="Age" required /></td>
        <td><input type="email" name="email" placeholder="Email" required /></td>
        <td colspan="2"><button type="submit">Add employee</a></td>
      </tr>
    </form>
  </table>
</section>