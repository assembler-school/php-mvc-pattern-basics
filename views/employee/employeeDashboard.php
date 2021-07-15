<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <link rel='stylesheet' type='text/css' href='./assets/css/style.css'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Employees</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">emp_no</th>
            <th scope="col">birth_date</th>
            <th scope="col">first_name</th>
            <th scope="col">last_name</th>
            <th scope="col">gender</th>
            <th scope="col">options</th>
            </tr>
        </thead>
        <tbody>
            <?php 

                foreach ($data as $employee){
                    echo "
                        <tr>
                            <th scope='row'>".$employee['emp_no']."</th>
                                <td>".$employee['birth_date']."</td>
                                <td>".$employee['first_name']."</td>
                                <td>".$employee['last_name']."</td>
                                <td>".$employee['gender']."</td>
                    ";

                    // Setting up link to getEmployeeById
                    $hrefLink = "?controller=employees&action=getEmployeeById&id=".$employee['emp_no'];
                    
                    echo "
                                <td>
                                    <a class='btn btn-primary bt-sm' href=".$hrefLink.">Employee ".$employee['emp_no']."</a>
                                    <button id='".$employee['emp_no']."' type='button' class='employeeDelete btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#deleteEmployeeModal'>Delete</button>
                                </td>
                        </tr>
                    ";
                }

            ?>
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="deleteEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="employeeModalTitle modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this employee from the database?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <?php 
                    echo "<a id='employeeDeleteModalBtn' class='btn btn-primary bt-sm' href=''>Delete</a>";
                ?>
            </div>
            </div>
        </div>
    </div>
    <script src="./assets/js/utils.js"></script>
</body>
</html>