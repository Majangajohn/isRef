<?php
    require('../core/init.php'); 
    $requireddetails = new Details;
    //getting template and assigning variables
    $template = new Template('../templates/reports.php');


    $template->availablecounties = $requireddetails->availablecounties(); 
    //display template
    if(isset($_SESSION['login'])){
        echo $template;
    }else{
        redirect('../index.php');
    }
?>