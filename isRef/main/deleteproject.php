<?php
require('../core/init.php'); 
$names = new Details;

if(isset($_GET['data'])){
    $project = $_GET['data'];
    $names->deleteproject($project);
}

?>