<?php

//start session
session_start();
//include configuration
require_once('../config/config.php');

//helper function files
require_once('../helpers/system_helper.php');
require_once('../helpers/db_helper.php');

//autoload classes
spl_autoload_register(function ($class_name) {    
 
require_once('../libraries/'.$class_name.'.php');
	
});
?>
