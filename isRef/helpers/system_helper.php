<?php /*
* Redirect To page
*/
function redirect($page=FALSE, $message= NULL, $message_type=NULL){
	if(is_string($page)){
		$location = $page;
	}else{
		$location = $_SERVER['SCRIPT_NAME'];
	}

	//check for message
	if($message !=Null){
		//set message
		$_SESSION['message'] = $message;
	}

	//check for type
	if($message_type != NULL){
		//set message type

		$_SESSION['message_type'] = $message_type;
	}

	//redirect
	header('Location: '.$location);
	exit();
}

/*
*Display message
*/

function displayMessage(){
	if(!empty($_SESSION['message'])){
		//assign message var
		$message= $_SESSION['message'];
	

		if(!empty($_SESSION['message_type'])){
			//assign type var
			$message_type = $_SESSION['message_type'];
			//create output
			if($message_type == 'error'){
				echo '<div class ="alert alert-danger alert-dismissible fade show" role="alert">'.$message .'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button></div>';
			}else{
				echo '<div class="alert alert-success alert-dismissible fade show" role="alert">'.$message . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button></div>';
			}
		}

		// unset message
		unset($_SESSION['message']);
		unset($_SESSION['message_type']);
	}else{

	}
}

/*
*getting school category
*/
function getschoolcategory($category){
	$db = new Database;
	$db->query("SELECT levelvalue FROM school_level WHERE(levelid LIKE :levelid)");
	$db->bind(':levelid', $category);
	$level = $db->single();
	return $level;
} 

/*
*getting primary schools
*/
function getPrimarySchools($county){
	$db = new Database;
	$level = 1;
	$db->query("SELECT Level FROM schoolinformation WHERE(County LIKE :county AND Level = :level)");

	$db->bind(':county', $county);
	$db->bind(':level', $level);

	$db->resultset();

	return $db->rowCount();
}
/*
* school projects
*/
function projects(){
	$db = new Database;
	$db->query("SELECT * FROM projects");
	$db->resultset();
	return $db->rowCount();
}

/*
*getting secondary schools
*/
function getSecondarySchools($county){
	$db = new Database;
	$level = 2;
	$db->query("SELECT Level FROM schoolinformation WHERE(County LIKE :county AND Level = :level)");

	$db->bind(':county', $county);
	$db->bind(':level', $level);

	$db->resultset();

	return $db->rowCount();
}


/*
*getting tertiary institutues
*/
function gettertiaryinstitutes($county){
	$db = new Database;
	$level = 3;
	$db->query("SELECT Level FROM schoolinformation WHERE(County LIKE :county AND Level = :level)");

	$db->bind(':county', $county);
	$db->bind(':level', $level);

	$db->resultset();

	return $db->rowCount();
}
/*
*getting sub counties
*/
function getsubcounties($county){
	$db = new Database;
	$level = 3;
	$db->query("SELECT DISTINCT Subcounty FROM schoolinformation WHERE County LIKE :county");

	$db->bind(':county', $county);

	$db->resultset();

	return $db->rowCount();
}

/*
*getting constituencies
*/
function getconstituencies($county){
	$db = new Database;
	$level = 3;
	$db->query("SELECT DISTINCT Constituency FROM schoolinformation WHERE County LIKE :county");

	$db->bind(':county', $county);

	$db->resultset();

	return $db->rowCount();
}


/*
*getting wards
*/
function getwards($county){
	$db = new Database;
	$level = 3;
	$db->query("SELECT DISTINCT Ward FROM schoolinformation WHERE County LIKE :county");

	$db->bind(':county', $county);

	$db->resultset();

	return $db->rowCount();
}
/*
*getting locations
*/
function getlocations($county){
	$db = new Database;
	$level = 3;
	$db->query("SELECT DISTINCT Location FROM schoolinformation WHERE County LIKE :county");

	$db->bind(':county', $county);

	$db->resultset();

	return $db->rowCount();
}

/*
*getting sub locations
*/
function getsublocations($county){
	$db = new Database;
	$level = 3;
	$db->query("SELECT DISTINCT Sublocation FROM schoolinformation WHERE County LIKE :county");

	$db->bind(':county', $county);

	$db->resultset();

	return $db->rowCount();
}
?>