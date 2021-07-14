<?php
    
    // include_once "../config/constants.php"; // must be deleted later
    // TODO ONLY REQUIRE MODELS HERE!!!

    // TODO INSIDE THE FUNCTIONS VIEWS MUST BE REQUIRED DEPENDING ON DATA ACQUIRED FROM MODELS!!!
    require_once MODELS . "employeeModel.php";
    // require_once "../models/employeeModel.php";

    //OBTAIN THE ACCION PASSED IN THE URL AND EXECUTE IT AS A FUNCTION

    //Keep in mind that the function to be executed has to be one of the ones declared in this controller
    // TODO Implement the logic


    /* ~~~ CONTROLLER FUNCTIONS ~~~ */

    /**
     * This function calls the corresponding model function and includes the corresponding view
     */
    function getAllEmployeesController(){

        $data = getAllEmployeesModel();

        // Choosing view depending on if $data is empty
        if(!empty($data)){
            require_once VIEWS."employee/employeeDashboard.php";
        }else{
            require_once VIEWS."error/error.php";
        }
        
    }

    /**
     * This function calls the corresponding model function and includes the corresponding view
     */
    function getEmployee($request)
    {
        //
    }

    /**
     * This function includes the error view with a message
     */
    function error($errorMsg)
    {
        require_once VIEWS . "/error/error.php";
    }

    // echo "I'm in employee controller <br>";
    getAllEmployeesController();
?>
