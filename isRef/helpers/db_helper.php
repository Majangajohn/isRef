<?php 
/*
*get categories   
*/
function getcountydetails(){
	$db = new Database;
	$db->query('SELECT * FROM Counties');

	//assign result set
	$results = $db->resultset();
	return $results;
}
/*
*get selected project   
*/
function selectedproject(){
	$db = new Database;
	$selectedproject = $_SESSION['selectedproject'];
		$db->query("SELECT projects.*, schoolinformation.*, environmental_data.* FROM projects
		INNER JOIN schoolinformation ON
		projects.sname = schoolinformation.School
		INNER JOIN environmental_data ON
		projects.sname = environmental_data.School
		WHERE(projects.sname LIKE :sname)
		");
		$db->bind(':sname', $selectedproject);

	//assign result set
	$results = $db->single();

	$_SESSION['pname'] = $results->pname;
	$_SESSION['sname'] = $results->sname;
	$_SESSION['facilitator'] = $results->facilitator;
	$_SESSION['type'] = $results->type;
	$_SESSION['size'] = $results->size;
	$_SESSION['date'] = $results->date;
	$_SESSION['pcounty'] = $results->County;
	$_SESSION['psubcounty'] = $results->Subcounty;
	$_SESSION['pconstituency'] = $results->Constituency;
	$_SESSION['pward'] = $results->Ward;
	$_SESSION['plocation'] = $results->Location;
	$_SESSION['psublocation'] = $results->Sublocation;
}
?>