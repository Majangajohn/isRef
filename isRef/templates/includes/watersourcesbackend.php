<?php
// school water sources
$data['water'] = $_POST['water'];

//water sources
$watersources = "";
if(isset($_POST['wsources'])){
    $checkbox =  $_POST['wsources'];
    foreach($checkbox as $title){
        $watersources .= $title.",";
    }
}else{
    $watersources .= "";
}

if(isset($_POST['wsourcesother'])){
    $watersources .= $_POST['wsourcesother'];
    
}else{
    $watersources .= "";
}

if($watersources == ""){
    $watersourceserror = "** --please provide water sources type under water resources facilities-- **"; 
    $errors .= $watersourceserror."<br/>";
}else{
    $data['wsources'] =  $watersources;
}

$data['waterexpense'] = $_POST['waterexpense'];
$data['treatedwater'] = $_POST['treatedwater'];
$data['waterreliable'] = $_POST['waterreliable'];
$data['waterstorage'] = $_POST['waterstorage'];
$data['distancewater'] = $_POST['distancewater'];
$data['lavailable'] = $_POST['lavailable'];

//cows
if(isset($_POST['cows'])){
    $data['cows'] = $_POST['cows'];
}else{
    $data['cows']  = 0;
}

//pigs
if(isset($_POST['pigs'])){
    $data['pigs'] = $_POST['pigs'];
}else{
    $data['pigs']  = 0;
}

//goats
if(isset($_POST['goats'])){
    $data['goats'] = $_POST['goats'];
}else{
    $data['goats']  = 0;
}

//sheep
if(isset($_POST['sheep'])){
    $data['sheep'] = $_POST['sheep'];
}else{
    $data['sheep']  = 0;
}

//others type
if(isset($_POST['lotype'])){
    $data['lotype'] = $_POST['lotype'];
}else{
    $data['lotype']  = "none";
}

//others number
if(isset($_POST['lonumber'])){
    $data['lonumber'] = $_POST['lonumber'];
}else{
    $data['lonumber']  = 0;
}

?>