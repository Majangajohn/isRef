<?php
require('../core/init.php'); 

//getting template and assigning variables
$template = new Template('../templates/frontpage.php');
  
//display template
if(isset($_SESSION['login'])){
    echo $template;
}else{
    redirect('../index.php');
}
?>