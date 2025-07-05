<?php
// school statistics
$data['malestudents'] = $_POST['malestudents'];
$data['femalestudents'] = $_POST['femalestudents'];
$data['totalstudents'] = $_POST['totalstudents'];
$data['lowerstudents'] = $_POST['lowerstudents'];
$data['upperstudents'] = $_POST['upperstudents'];
$data['mteachers'] = $_POST['mteachers'];
$data['fteachers'] = $_POST['fteachers'];
$data['tteachers'] = $_POST['tteachers'];
$data['mnteachers'] = $_POST['mnteachers'];
$data['fnteachers'] = $_POST['fnteachers'];
$data['tnteachers'] = $_POST['tnteachers'];
$data['dmstudents'] = $_POST['dmstudents'];
$data['dfstudents'] = $_POST['dfstudents'];
$data['tdstudents'] = $_POST['tdstudents'];

//school statistics
$disabilities = "";
if(isset($_POST['disability'])){
    $checkbox =  $_POST['disability'];
    foreach($checkbox as $title){
        $disabilities .= $title.",";
    }
}else{
    $disabilities .= "";
}

if(isset($_POST['otherdisability'])){
    $disabilities .= $_POST['otherdisability'];
    
}else{
    $disabilities .= "";
}

if($disabilities == ""){
    $data['disabilities']  = "none";
}else{
    $data['disabilities'] =  $disabilities;
}

?>