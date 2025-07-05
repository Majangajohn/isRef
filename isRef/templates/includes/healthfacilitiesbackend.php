<?php
// health facilities
$data['mfacility'] = $_POST['mfacility'];
$data['mpersonnel'] = $_POST['mpersonnel'];
$data['medicalcases'] = $_POST['medicalcases'];

if(isset($_POST['emergencymedicalcases'])){
    $data['emergencymedicalcases'] = $_POST['emergencymedicalcases'];
}else{
    $data['emergencymedicalcases'] = "no action";
}

$data['dhfacility'] = $_POST['dhfacility'];
$data['hftype'] = $_POST['hftype'];
?>