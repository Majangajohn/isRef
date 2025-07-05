<?php
// electricity and energy resources
$data['spconnected'] = $_POST['spconnected'];
//power sources
$powersources = "";
if(isset($_POST['powersource'])){
    $checkbox =  $_POST['powersource'];
    foreach($checkbox as $title){
        $powersources .= $title.",";
    }
}else{
    $powersources .= "";
}

if(isset($_POST['otherpowersource'])){
    $powersources .= $_POST['otherpowersource'];
    
}else{
    $powersources .= "";
}

if($powersources == ""){
    $data['powersource'] = "none";
}else{

    //powersource
    $data['powersource'] =  $powersources;
}

if(isset($_POST['psreliable'])){
    //power reliable
    $data['psreliable'] = $_POST['psreliable'];
}else{
    $data['psreliable']  = "no";
}

if(isset($_POST['bgavailable'])){
    //power reliable
    $data['bgavailable'] = $_POST['bgavailable'];
}else{
    $data['bgavailable']  = "no";
}

//cooking energy source
$cookingenergy = "";
if(isset($_POST['cesource'])){
    $checkbox =  $_POST['cesource'];
    foreach($checkbox as $title){
        $cookingenergy .= $title.",";
    }
}else{
    $cookingenergy .= "";
}

if(isset($_POST['othercesource'])){
    $cookingenergy .= $_POST['othercesource'];
    
}else{
    $cookingenergy .= "";
}

if($cookingenergy == ""){
    $cookingenergyerror = "** --please provide data for source of energy for cooking under electricity and energy resources-- **"; 
    $errors .= $cookingenergyerror."<br/>";
}else{
    $data['cesource'] =  $cookingenergy;
}

$data['ceexpense'] = $_POST['ceexpense'];
$data['mebill'] = $_POST['mebill'];

?>