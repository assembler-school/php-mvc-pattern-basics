<?php 

    // Model FUNCTIONS

    function getAllTravelsModel(){
        // Require database Connection
        require_once "./config/dbConfig.php";

        // Make SQL query to database and receive its result in $result
        $sql = "SELECT * FROM travels";
        $resultQuery = mysqli_query($conn,$sql);

        // Closing database connection
        mysqli_close($conn);

        // Creating empty array to store result
        $result = array();
        if (mysqli_num_rows($resultQuery) > 0) {
            while ($row = mysqli_fetch_assoc($resultQuery)) {
                array_push($result,$row);
            }

            // Return $result
            return $result;
        }else{

            // Return error message
            return "Travels table is empty or does not exist";
        }
  
    }

    function getTravelByIdModel() {
        // Get id from URL
        $id = $_GET["id"];
        
        // Require database Connection
        require_once "./config/dbConfig.php";

        // Make SQL query to database and receive its result in $result
        $sql = "SELECT * FROM travels WHERE tr_no=".$id;
        $resultQuery = mysqli_query($conn,$sql);

        // Closing database connection
        mysqli_close($conn);

        // Creating empty array to store result
        $result = array();
        if (mysqli_num_rows($resultQuery) > 0) {
            while ($row = mysqli_fetch_assoc($resultQuery)) {
                array_push($result,$row);
            }
            
            // Return $result
            return $result;
        }else{

            // Return error message
            return "Travel ".$id." does not exist";
        }

    }

    function deleteTravelByIdModel(){
        // Get id from URL
        $id = $_GET["id"];
        
        // Require database Connection
        require_once "./config/dbConfig.php";

        // Make SQL query to database
        $sql = "DELETE FROM travels WHERE tr_no=".$id;
        mysqli_query($conn,$sql);

        // Check affected rows
        $affectedRows = mysqli_affected_rows($conn);

        // Closing database connection
        mysqli_close($conn);

        if($affectedRows > 0){
            return true;
        }else{
            return "Travel ".$id." has already been deleted or does not exist";
        }

    }

?>