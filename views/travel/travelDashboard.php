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
    <title>Travels</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">tr_no</th>
            <th scope="col">emp_no</th>
            <th scope="col">tr_destination</th>
            <th scope="col">going_date</th>
            <th scope="col">return_date</th>
            <th scope="col">options</th>
            </tr>
        </thead>
        <tbody>
            <?php 

                foreach ($data as $travel){
                    echo "
                        <tr>
                            <th scope='row'>".$travel['tr_no']."</th>
                                <td>".$travel['emp_no']."</td>
                                <td>".$travel['tr_destination']."</td>
                                <td>".$travel['going_date']."</td>
                                <td>".$travel['return_date']."</td>
                    ";

                    // Setting up link to gettravelById
                    $idHrefLink = "?controller=travels&action=getTravelById&id=".$travel['tr_no'];
                    
                    echo "
                                <td>
                                    <a class='btn btn-primary bt-sm' href=".$idHrefLink.">Travel ".$travel['tr_no']."</a>
                                    <button id='".$travel['tr_no']."'type='button' class='travelDelete btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#deleteTravelModal'>Delete</button>
                                </td>
                        </tr>
                    ";
                }

            ?>
        </tbody>
    </table>
    
    <!-- Modal -->
    <div class="modal fade" id="deleteTravelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this travel from the database?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <?php 
                    echo "<a id='travelDeleteModalBtn' class='btn btn-primary bt-sm' href=''>Delete</a>";
                ?>
            </div>
            </div>
        </div>
    </div>
    <script src="./assets/js/utils.js"></script>
</body>
</html>