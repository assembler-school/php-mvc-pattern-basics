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

    // Gets all employees from database and 
    // renders them in employeeDashboard view
    function getAllEmployeesController(){

        $data = getAllEmployeesModel();

        // Choosing view depending on if $data is empty
        if(!empty($data)){
            require_once VIEWS."employee/employeeDashboard.php";
        }else{
            require_once VIEWS."error/error.php";
        }
        
    }

    // Get an specific employee by their id and 
    // reders them in employeeDashboard view
    function getEmployeeByIdController($request)
    {
        // Get specific travel details
        $data = getEmployeeByIdModel();
        
        // Choosing view depending on if $data is empty
        if(!empty($data)){
            require_once VIEWS."employee/employeeDashboard.php";
        }else{
            require_once VIEWS."error/error.php";
        }
    }

    // Deletes an Employee by their Id
    function deleteEmployeeByIdController(){
        
        // Delete specific travel
        deleteEmployeeByIdModel();
        
        // Reload all remaining travels
        header("Location: ?controller=employees&action=getAllEmployeesController");
    }

    /**
     * This function includes the error view with a message
     */
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
