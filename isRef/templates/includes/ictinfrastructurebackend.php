<?php
// ict infrastructure
$data['fcavailable'] = $_POST['fcavailable'];

//comp numbers
if(isset($_POST['compnum'])){
    $data['compnum'] = $_POST['compnum'];
}else{
    $data['compnum'] = 0;
}

$data['clabavailable'] = $_POST['clabavailable'];
$data['icavailable'] = $_POST['icavailable'];

//internet connection mode
$connectionmode = "";
if(isset($_POST['connectionmode'])){
    $checkbox =  $_POST['connectionmode'];
    foreach($checkbox as $title){
        $connectionmode .= $title.",";
    }
}else{
    $connectionmode .= "";
}
if(isset($_POST['otherconnectionmode'])){
    $connectionmode .= $_POST['otherconnectionmode'];
    
}else{
    $connectionmode .= "";
}

if($connectionmode == ""){
    $connectionmodeerror = "** --please provide  internet connection mode under ict infrastructure-- **"; 
    $errors .= $connectionmodeerror."<br/>";
}else{
    $data['connectionmode'] =  $connectionmode;
}

?>