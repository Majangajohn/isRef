<?php 
// school infrastructure
    $data['classrooms'] = $_POST['classrooms'];
    $data['structuretype'] = $_POST['structuretype'];

	//roof types
	$rooftypes = "";
	if(isset($_POST['rtsheets'])){
		$checkbox =  $_POST['rtsheets'];
		foreach($checkbox as $title){
			$rooftypes .= $title.",";
		}
	}else{
		$rooftypes .= "";
	}
	if(isset($_POST['rooftypeother'])){
		$rooftypes .= $_POST['rooftypeother'];
		
	}else{
		$rooftypes .= "";
	}

	if($rooftypes == ""){
		$rooftypeerror = "** --please provide data for roof types under school infrastructure-- **"; 
		$errors .= $rooftypeerror."<br/>";

	}else{
		$data['rooftypes'] =  $rooftypes;
	}
    $data['fenced'] = $_POST['fenced'];
    $data['fencetype'] = $_POST['fencetype'];
    $data['library'] = $_POST['library'];
    $data['games'] = $_POST['games'];
    $data['staffroom'] = $_POST['staffroom'];
    $data['headteacherroom'] = $_POST['headteacherroom'];

	?>