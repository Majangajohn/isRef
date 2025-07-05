<?php
require('../core/init.php'); 
  

//getting template and assigning variables
$template = new Template('../templates/monitoring&evaluation.php');

//display template
if(isset($_SESSION['login'])){
    echo $template;
}else{
    redirect('../index.php');
}
?>