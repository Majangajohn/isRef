<?php
	require('../core/init.php'); 

	//creating details object
	$requireddetails = new Details;

	if(isset($_SESSION['userspecific'])){
		unset($_SESSION['userspecific']);
	}
	if(isset($_SESSION['editedcounty'])){
		unset($_SESSION['editedcounty']);
	}

	if(isset($_GET['county'])){

		$county = $_GET['county'];

		echo json_encode($requireddetails->subcounties($county));
		
		die();

	}

	if(isset($_GET['subcountyname'])){

		$subcounty = $_GET['subcountyname'];

		echo json_encode($requireddetails->constituencies($subcounty));
		
		die();

	}

	if(isset($_GET['category'])){

		$category = $_GET['category'];

		if($category=="county"){
			$_SESSION['county'] = true;

		}else if($category=="subcounty"){
		$_SESSION['subcounty'] = true;
		}else if($category=="constituency"){
			$_SESSION['constituency'] = true;
		}
		else if($category=="ward"){
		$_SESSION['ward'] = true;
		}
		else{
			
		}
		die();
	}

		if(isset($_POST['countydetails'])){
			$county = $_POST['county'];
			if($requireddetails->checkcountyexists($county)){
				redirect('administrationcapture.php', 'County is already registered','error');

			}else{
				redirect('administrationcapture.php', 'County successfully registered !!!!','success');
			}

		}
		if(isset($_POST['subcountydetails'])){
			$data = array();

			$data['county'] = $_POST['county'];
			$data['subcounty'] = $_POST['subcounty'];
			
			if($requireddetails->checksubcountyexists($data)){
				redirect('administrationcapture.php', 'sub county is already registered','error');
			}else{
				redirect('administrationcapture.php', 'sub county successfully registered !!!!','success');
			}
		}

		if(isset($_POST['constituencydetails'])){
			$data = array();

			$data['county'] = $_POST['county'];
			$data['subcounty'] = $_POST['subcounty'];
			$data['constituency'] = $_POST['constituency'];

			if($requireddetails->checkconstituencyexists($data)){
				redirect('administrationcapture.php', 'constituency is already registered','error');
			}else{
				redirect('administrationcapture.php', 'constituency successfully registered !!!!','success');
			}
		}

		if(isset($_POST['warddetails'])){
			$data = array();

			$data['county'] = $_POST['county'];
			$data['subcounty'] = $_POST['subcounty'];
			$data['constituency'] = $_POST['constituency'];
			$data['ward'] = $_POST['ward'];

			if($requireddetails->checkwardexists($data)){
				redirect('administrationcapture.php', 'the ward is already registered','error');

			}else{
				redirect('administrationcapture.php', 'ward successfully registered !!!!','success');
			}

		}
	//getting template and assigning variables
	$template = new Template('../templates/administrationcapture.php');

	//getting counties
	$template->counties = $requireddetails->counties();
	
	//getting sub counties
	$template->subcounties = $requireddetails->subcounties();

	//getting constituencies
	$template->constituencies = $requireddetails->constituencies();
	if(isset($_SESSION['login'])){
		//display template
		echo $template;
	}else{
		redirect('../index.php');
	}
?>