<?php 

    // Model FUNCTIONS

    function getAllTravelsModel(){
        // Require database Connection
        require_once "./config/dbConfig.php";

        // Make SQL query to database and receive its result in $result
        $sql = "SELECT * FROM travels";
        $resultQuery = mysqli_query($conn,$sql);

        // Creating empty array to store result
        $result = array();
        if (mysqli_num_rows($resultQuery) > 0) {
            while ($row = mysqli_fetch_assoc($resultQuery)) {
                array_push($result,$row);
            }
        }

        // Return $result
        return $result;
    }

    function getInfo2() {

    }

    function getInfo3(){
        
    }

?>