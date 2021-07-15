<?php

    require_once MODELS . "travelModel.php";

    /* ~~~ CONTROLLER FUNCTIONS ~~~ */

    // Gets all travels from database and 
    // renders them in travelDashboard view
    function getAllTravelsController(){

        $data = getAllTravelsModel();
        
        // Choosing view depending on if $data is empty
        if(!empty($data) && gettype($data)!== "string"){
            require_once VIEWS."travel/travelDashboard.php";
        }else{
            error($data);
        }
        
    }

    // Get an specific travel by its id and 
    // reders it in travelDashboard view
    function getTravelByIdController(){

        // Get specific travel details
        $data = getTravelByIdModel();
        
        // Choosing view depending on if $data is empty
        if(!empty($data) && getType($data)!== "string"){
            require_once VIEWS."travel/travelDashboard.php";
        }else{
            error($data);
        }
    }

    // Deletes a Travel by its Id
    function deleteTravelByIdController(){
        
        // Delete specific travel
        $data = deleteTravelByIdModel();
        
        if($data === true){

            // Reload all remaining travels
            header("Location: ?controller=travels&action=getAllTravelsController");
        }else{
            error($data);
        }
    }

    // Displays errorMsg in error view
    function error($errorMsg)
    {
        require_once VIEWS . "/error/error.php";
    }

    // Choosing controller function to dispatch
    if(function_exists($_GET["action"])){
        call_user_func($_GET["action"], $_GET);
    }else{
        error("Invalid user action");
    }
?>