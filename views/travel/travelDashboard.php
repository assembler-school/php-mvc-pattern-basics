<section>
  <table id="employees">
    <tr>
      <td>EMPLOYEE ID</td>
      <td>NAME</td>
      <td>TRAVEL ID</td>
      <td>DESTINATION</td>
      <td>TRAVEL DATE</td>
    </tr>
    <?php
    foreach ($travels as $travel) {
      echo '
      <tr class="list">
        <td>' . $travel["id"] . '</td>
        <td>' . $travel["full_name"] . '</td>
        <td>' . $travel["travel_id"] . '</td>
        <td>' . $travel["destination"] . '</td>
        <td>' . $travel["travel_date"] . '</td>
      </tr>';
    }
    ?>
    <form action="index.php?controller=travel&action=addTravel" method="POST">
      <tr>
        <td><input type="number" name="emp_id" placeholder="Employee ID" required /></td>
        <td><input type="text" name="destination" placeholder="Destination" required /></td>
        <td><input type="date" name="travel_date" placeholder="Travel date" required /></td>
        <td colspan="2"><button type="submit">Add trip</a></td>
      </tr>
    </form>
  </table>
</section>