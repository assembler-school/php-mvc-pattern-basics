<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employees</title>
</head>
<body>
  <table>
    <thead>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Gender</th>
      <th>Link</th>
    </thead>
    <tbody>
    <?php
      if (isset($employees)) {
        foreach($employees as $employee){
          echo "<tr>
                <td>" . $employee['first_name'] . "</td>
                <td>" . $employee['last_name'] . "</td>
                <td>" . $employee['gender'] == "M" ? "Male": "Female" . "</td>
                <td><a href='index.php?controller=employee&action=getEmployee&id=" . $employee['emp_no'] . "'></a></td>
              </tr>";
        }
      }
    ?>
    </tbody>
  </table>
</body>
</html>