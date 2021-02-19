<?php
require_once MODELS . "travelModel.php";

if (isset($_REQUEST['action'])) {
  function_exists($_REQUEST['action']) ?
    call_user_func($_REQUEST['action']) :
    error('We can not perform this action');
} else {
  error('There is no such action');
}
