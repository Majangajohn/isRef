<?php 
// sanitation facilities
	$data['sanitation'] = $_POST['sanitation'];
	$data['boystoilets'] = $_POST['boystoilets'];
	$data['girltoilets'] = $_POST['girltoilets'];
	$data['ssharedtoilets'] = $_POST['ssharedtoilets'];
	$data['ttoilets'] = $_POST['ttoilets'];
	$data['tmaletoilets'] = $_POST['tmaletoilets'];
	$data['tfemaletoilets'] = $_POST['tfemaletoilets'];
	$data['tsharedtoilets'] =$_POST['tsharedtoilets'];
	
	//waste recycling
	$waste = "";
	if(isset($_POST['waste'])){
		$checkbox =  $_POST['waste'];
		foreach($checkbox as $title){
			$waste .= $title.",";
		}
	}else{
		$waste .= "";
	}

	if(isset($_POST['otherwaste'])){
		$waste .= $_POST['otherwaste'];
		
	}else{
		$waste .= "";
	}

	if($waste == ""){
		$wasteerror = "** --please provide data for waste collection mechanisms under sanitation facilities-- **"; 
		$errors .= $wasteerror."<br/>";
	}else{
		$data['waste'] =  $waste;
	}

	?>