<?php

    require_once MODELS . "travelModel.php";

    /* ~~~ CONTROLLER FUNCTIONS ~~~ */

    function getAllTravelsController(){

        $data = getAllTravelsModel();
        
        // Choosing view depending on if $data is empty
        if(!empty($data)){
            require_once VIEWS."travel/travelDashboard.php";
        }else{
            require_once VIEWS."error/error.php";
        }
        
    }

    getAllTravelsController()
?>