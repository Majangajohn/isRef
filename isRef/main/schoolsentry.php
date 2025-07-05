<?php
		require('../core/init.php'); 
		$names = new Details;

		//getting template and assigning variables
		$template = new Template('../templates/schoolsentry.php');
		if(isset($_SESSION['userspecific'])){
			unset($_SESSION['userspecific']);
		}
		if(isset($_SESSION['editedcounty'])){
			unset($_SESSION['editedcounty']);
		}

		if(isset($_GET['county'])){

			$county = $_GET['county'];

			echo json_encode($names->subcounties($county));
			
			die();

		}

		if(isset($_GET['subcountyname'])){

			$subcounty = $_GET['subcountyname'];

			echo json_encode($names->constituencies($subcounty));
			
			die();

		}

		if(isset($_GET['constituency'])){

			$constituency = $_GET['constituency'];

			echo json_encode($names->wards($constituency));
			
			die();

		}

		//checking whether school aready exists in the database

		if(isset($_POST['schoolsregister'])){

			$data = array();
			// getting input errors
			$errors = "";

				require("templates/includes/schoolinformationbackend.php");
				require("templates/includes/schoolstatisticsbackend.php");
				require("templates/includes/schoolinfrastructurebackend.php");
				require("templates/includes/sanitationfacilitiesbackend.php");
				require("templates/includes/environmentaldatabackend.php");
				require("templates/includes/watersourcesbackend.php");
				require("templates/includes/healthfacilitiesbackend.php");
				require("templates/includes/electricitybackend.php");
				require("templates/includes/ictinfrastructurebackend.php");
				require("templates/includes/suggestionbackend.php");

			if($errors != ""){
				redirect('schoolsentry.php',$errors, 'error');
			}else{
				//school information
				if($names->checkschoolinformationexists($data)){
					redirect('schoolsentry.php', 'school is already registred','error');
				}else{
					redirect('schoolsentry.php','school successfully registered', 'success');
				}
			}
		}
		//getting school type details
		$template->schooltypes = $names->schoolType();

		//getting school type details
		$template->schoollevels = $names->schoolLevel();
		//getting school type details
		$template->schoolfacilitytypes = $names->schoolFacilityType();

		//getting structure type details
		$template->classroomstructures = $names->classroomStructureType();
		//getting roof type
		$template->rooftypes = $names->roofType();

		//getting opinion type
		$template->opiniontypes = $names->opinionType();
		//getting fence type
		$template->fencetypes = $names->fenceType();
		//getting disability type
		$template->disabilitytypes = $names->disabilityType();
		//getting fruit type
		$template->fruittrees = $names->fruitType();
		//getting tree type
		$template->trees = $names->treeType();
		//getting tree use
		$template->treesuse = $names->treeuseType();
		//getting waste collection mechanism
		$template->wastes = $names->wastecollectionType();

		//getting water sources
		$template->watersources = $names->watersourcesType();
		//getting water cost
		$template->watercosts = $names->watercostType();

		//getting distance
		$template->distances = $names->distanceType();

		//power sources
		$template->psources = $names->powersourceType();

		// cooking energy sources
		$template->cesources = $names->cenergyType();
		// cooking energy expense
		$template->ceexpenses = $names->cenergyexpensesType();

		// electric bill
		$template->electricbills = $names-> electricbillType();
		// internet connectivity mode
		$template->connectivitymodes = $names-> connectionmodeType();

		$template->counties = $names->counties();

		//getting subcounty details
		$template->subcounties = $names->subcounties();
		//getting constituencies
		$template->constituencies = $names->constituencies();

		//getting wards
		$template->wards = $names->wards();

		if(isset($_SESSION['login'])){
			//display template
			echo $template;
		}else{
			redirect('../index.php');
		}
?>