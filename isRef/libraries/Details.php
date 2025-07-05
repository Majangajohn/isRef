<?php
class Details{
	private $db;
	/*
	*constructor
	*/

	public function __construct(){
		$this->db = new Database;  
	}
	/*
	* getting school type
	*/

	public function schoolType(){
		//pulling query
		$this->db->query("SELECT * FROM school_type");

		$data = $this->db->resultset();

		return $data;

	}
	/*
	* getting school level
	*/

	public function schoolLevel(){
		//pulling query
		$this->db->query("SELECT * FROM school_level");

		$data = $this->db->resultset();

		return $data;

	}

	/*
	* getting schools
	*/

	public function schools($county = NULL, $subcounty = NULL, $constituency = NULL,
	$ward = NULL, $location = NULL, $sublocation = NULL, $category = NULL){
		if($county === NULL || $subcounty === NULL || $constituency === NULL 
		|| $ward === NULL || $location === NULL || $sublocation === NULL || $category === NULL){
			//pulling query
			$this->db->query("SELECT * FROM schoolinformation ORDER BY School ASC");
		}else{
			//pulling query
			$this->db->query("SELECT * FROM schoolinformation 
			WHERE(County LIKE :county AND Subcounty LIKE :subcounty
			AND Constituency LIKE :constituency AND Ward LIKE :ward AND Location LIKE :location AND
			 Sublocation LIKE :sublocation AND Level LIKE :level) 
			ORDER BY School ASC");

			$this->db->bind(":county", $county);
			$this->db->bind(":subcounty", $subcounty);
			$this->db->bind(":constituency", $constituency);
			$this->db->bind(":ward", $ward);
			$this->db->bind(":location", $location);
			$this->db->bind(":sublocation", $sublocation);
			$this->db->bind(":level", $category);
		}

		$data = $this->db->resultset();

		return $data;
 
	}
	/*
	* getting school facility type
	*/

	public function schoolFacilityType(){
		//pulling query
		$this->db->query("SELECT * FROM school_facility_type");

		$data = $this->db->resultset();

		return $data;

	}
	/*
	* getting classroom structure types
	*/

	public function classroomStructureType(){
		//pulling query
		$this->db->query("SELECT * FROM classroom_structure");

		$data = $this->db->resultset();

		return $data;

	}

		/*
	* getting roof types
	*/

	public function roofType(){
		//pulling query
		$this->db->query("SELECT * FROM roof_types");

		$data = $this->db->resultset();

		return $data;

	}

	/*
	* opinion types
	*/

	public function opinionType(){
		//pulling query
		$this->db->query("SELECT * FROM opinion");

		$data = $this->db->resultset();

		return $data;

	}
	/*
	* fence types
	*/

	public function fenceType(){
		//pulling query
		$this->db->query("SELECT * FROM fence_type");

		$data = $this->db->resultset();

		return $data;

	}
	/*
	* disability types
	*/

	public function disabilityType(){
		//pulling query
		$this->db->query("SELECT * FROM disability");

		$data = $this->db->resultset();

		return $data;

	}
	/*
	* fruit types
	*/

	public function fruitType(){
		//pulling query
		$this->db->query("SELECT * FROM fruit_trees");

		$data = $this->db->resultset();

		return $data;

	}
	/*
	* tree types
	*/

	public function treeType(){
		//pulling query
		$this->db->query("SELECT * FROM trees");

		$data = $this->db->resultset();

		return $data;

	}
	/*
	* tree use
	*/

	public function treeuseType(){
		//pulling query
		$this->db->query("SELECT * FROM tree_use");

		$data = $this->db->resultset();

		return $data;

	}
	/*
	* waste collection type
	*/

	public function wastecollectionType(){
		//pulling query
		$this->db->query("SELECT * FROM waste_management");

		$data = $this->db->resultset();

		return $data;

	}
	/*
	* water sources  types
	*/

	public function watersourcesType(){
		//pulling query
		$this->db->query("SELECT * FROM water_sources");

		$data = $this->db->resultset();

		return $data;

	}

	/*
	* water cost  types
	*/

	public function watercostType(){
		//pulling query
		$this->db->query("SELECT * FROM water_cost");

		$data = $this->db->resultset();

		return $data;

	}

	/*
	* distance cost  types
	*/

	public function distanceType(){
		//pulling query
		$this->db->query("SELECT * FROM distance");

		$data = $this->db->resultset();

		return $data;

	}

	/*
	* power sources  types
	*/

	public function powersourceType(){
		//pulling query
		$this->db->query("SELECT * FROM power");

		$data = $this->db->resultset();

		return $data;

	}
	/*
	* cooking energy types
	*/

	public function cenergyType(){
		//pulling query
		$this->db->query("SELECT * FROM cooking_energy");

		$data = $this->db->resultset();

		return $data;

	}

	/*
	* cooking energy expenses
	*/

	public function cenergyexpensesType(){
		//pulling query
		$this->db->query("SELECT * FROM cooking_energy_expense");

		$data = $this->db->resultset();

		return $data;

	}

	/*
	* electric bill
	*/

	public function electricbillType(){
		//pulling query
		$this->db->query("SELECT * FROM electricbill");

		$data = $this->db->resultset();

		return $data;

	}
	/*
	* connection mode
	*/

	public function connectionmodeType(){
		//pulling query
		$this->db->query("SELECT * FROM internet_connectivity");

		$data = $this->db->resultset();

		return $data;

	}
	/*
	* getting county names
	*/
	public function counties(){

		//pulling query
		$this->db->query("SELECT * FROM Counties");

		$data = $this->db->resultset();

		return $data;

	}

	/*
	* delete county
	*/
	public function deletecounty($deletecounty){

		//pulling query
		$this->db->query("DELETE FROM `counties` WHERE County_Name LIKE :county");
		$this->db->bind(":county", $deletecounty);
		$this->db->execute();

		$this->deletesubcounty($deletecounty);
		$this->deleteconstituents($deletecounty);
		$this->deletewards($deletecounty);

		if($this->db->execute()){
			return true;
		}else{
			return false;
		}
	}

	/*
	* delete sub county
	*/
	public function deletesubcounty($deletecounty){

		//pulling query
		$this->db->query("DELETE FROM `sub_counties` WHERE county LIKE :county");
		$this->db->bind(":county", $deletecounty);

		$this->db->execute();
	}

	/*
	* delete constituents
	*/
	public function deleteconstituents($deletecounty){

		//pulling query
		$this->db->query("DELETE FROM `constituents` WHERE county LIKE :county");
		$this->db->bind(":county", $deletecounty);

		$this->db->execute();
	}
	/*
	* delete wards
	*/
	public function deletewards($deletecounty){

		//pulling query
		$this->db->query("DELETE FROM `wards` WHERE county LIKE :county");
		$this->db->bind(":county", $deletecounty);
		$this->db->execute();
	}
	/*
	* delete subcounty
	*/
	public function deletesubcountysubcounty($deletesubcounty){

		//pulling query
		$this->db->query("DELETE FROM `sub_counties` WHERE subcounty LIKE :subcounty");
		$this->db->bind(":subcounty", $deletesubcounty);
		$this->db->execute();

		$this->deletesubcountyconstituency($deletesubcounty);
		$this->deletesubcountywards($deletesubcounty);

		if($this->db->execute()){
			return true;	
		}else{
			return false;
		}
	}

	/*
	* delete ward ward
	*/
	public function deletewardward($deleteward){

		//pulling query
		$this->db->query("DELETE FROM `wards` WHERE ward LIKE :ward");
		$this->db->bind(":ward", $deleteward);
		$this->db->execute();

		if($this->db->execute()){
			return true;	
		}else{
			return false;
		}
	}
	/*
	* delete constituency
	*/
	public function deleteconstituencyconstituency($deleteconstituency){

		//pulling query
		$this->db->query("DELETE FROM `constituents` WHERE constituency LIKE :constituency");
		$this->db->bind(":constituency", $deleteconstituency);
		$this->db->execute();

		$this->deleteconstituencywards($deleteconstituency);

		if($this->db->execute()){
			return true;	
		}else{
			return false;
		}
	}

	/*
	* delete constituency wards
	*/
	public function deleteconstituencywards($deleteconstituency){

		//pulling query
		$this->db->query("DELETE FROM `wards` WHERE constituency LIKE :constituency");
		$this->db->bind(":constituency", $deleteconstituency);
		$this->db->execute();
	}
	
	/*
	* delete subcounty constituency
	*/
	public function deletesubcountyconstituency($deletesubcounty){

		//pulling query
		$this->db->query("DELETE FROM `constituents` WHERE subcounty LIKE :subcounty");
		$this->db->bind(":subcounty", $deletesubcounty);	
		$this->db->execute();
	}

	/*
	* delete subcounty wards
	*/
	public function deletesubcountywards($deletesubcounty){

		//pulling query
		$this->db->query("DELETE FROM `wards` WHERE subcounty LIKE :subcounty");
		$this->db->bind(":subcounty", $deletesubcounty);
		$this->db->execute();	
	}

	/*
	* update county
	*/
	public function updatecounty($updatecounty, $newcountyname){

		//pulling query
		$this->db->query("UPDATE `counties` SET County_Name = :name  WHERE County_Name LIKE :county");
		$this->db->bind(":name", $newcountyname);
		$this->db->bind(":county", $updatecounty);
		$this->db->execute();

		$this->updatesubcounty($updatecounty, $newcountyname);
		$this->updateconstituents($updatecounty, $newcountyname);
		$this->updatewards($updatecounty, $newcountyname);
		
		if($this->db->execute()){
			return true;
		}else{
			return false;
		}
	}

	/*
	* update sub county
	*/
	public function updatesubcounty($updatecounty, $newcountyname){

		//pulling query
		$this->db->query("UPDATE `sub_counties` SET county = :name WHERE county LIKE :county");
		$this->db->bind(":name", $newcountyname);
		$this->db->bind(":county", $updatecounty);

		$this->db->execute();
	}

	/*
	* update constituents
	*/
	public function updateconstituents($updatecounty, $newcountyname){

		//pulling query
		$this->db->query("UPDATE `constituents` SET county = :name WHERE county LIKE :county");
		$this->db->bind(":name", $newcountyname);
		$this->db->bind(":county", $updatecounty);

		$this->db->execute();
	}
	/*
	* update wards
	*/
	public function updatewards($updatecounty, $newcountyname){

		//pulling query
		$this->db->query("UPDATE `wards` SET county = :name WHERE county LIKE :county");
		$this->db->bind(":name", $newcountyname);
		$this->db->bind(":county", $updatecounty);

		$this->db->execute();
	}

	/*
	* update subcounty subcounty
	*/
	public function updatesubcountysubcounty($updatesubcounty, $newsubcountyname){

		//pulling query
		$this->db->query("UPDATE `sub_counties` SET subcounty = :name  WHERE subcounty LIKE :subcounty");
		$this->db->bind(":name", $newsubcountyname);
		$this->db->bind(":subcounty", $updatesubcounty);
		$this->db->execute();

		$this->updatesubcountyconstituents($updatesubcounty, $newsubcountyname);
		$this->updatesubcountywards($updatesubcounty, $newsubcountyname);
		
		if($this->db->execute()){
			return true;
		}else{
			return false;
		}
	}

	/*
	* update constituency constituencies
	*/
	public function updateconstituencyconstituency($updateconstituency, $newconstituencyname){

		//pulling query
		$this->db->query("UPDATE `constituents` SET constituency = :name  WHERE constituency LIKE :constituency");
		$this->db->bind(":name", $newconstituencyname);
		$this->db->bind(":constituency", $updateconstituency);
		$this->db->execute();

		$this->updateconstituencywards($updateconstituency, $newconstituencyname);
		
		if($this->db->execute()){
			return true;
		}else{
			return false;
		}
	}

	/*
	* update ward wards
	*/
	public function updatewardward($updateward, $newwardname){

		//pulling query
		$this->db->query("UPDATE `wards` SET ward = :name  WHERE ward LIKE :ward");
		$this->db->bind(":name", $newwardname);
		$this->db->bind(":ward", $updateward);
		$this->db->execute();
		if($this->db->execute()){
			return true;
		}else{
			return false;
		}
	}



	/*
	* update constituency wards
	*/
	public function updateconstituencywards($updateconstituency, $newconstituencyname){

		//pulling query
		$this->db->query("UPDATE `wards` SET constituency = :name  WHERE constituency LIKE :constituency");
		$this->db->bind(":name", $newconstituencyname);
		$this->db->bind(":constituency", $updateconstituency);
		$this->db->execute();
	}

	/*
	* update subcounty constituents
	*/
	public function updatesubcountyconstituents($updatesubcounty, $newsubcountyname){

		//pulling query
		$this->db->query("UPDATE `constituents` SET subcounty = :name WHERE subcounty LIKE :subcounty");
		$this->db->bind(":name", $newsubcountyname);
		$this->db->bind(":subcounty", $updatesubcounty);

		$this->db->execute();
	}
	/*
	* update subcounty wards
	*/
	public function updatesubcountywards($updatesubcounty, $newsubcountyname){

		//pulling query
		$this->db->query("UPDATE `wards` SET subcounty = :name WHERE subcounty LIKE :subcounty");
		$this->db->bind(":name", $newsubcountyname);
		$this->db->bind(":subcounty", $updatesubcounty);

		$this->db->execute();
	}



	/*
	* getting subcounty subcounties
	*/
	public function subcountysubcounties($subcounty){
		//pulling query
		$this->db->query("SELECT * FROM sub_counties WHERE subcounty LIKE :subcounty");

		$this->db->bind(":subcounty", $subcounty);

		$data = $this->db->single();
		if($this->db->rowCount() > 0){
			$this->selectedsubcounty($data);
			return true;
		}else{
			return false;
		}
	}
	/*
	* getting constituency constituencies
	*/
	public function constituencyconstituencies($constituency){
		//pulling query
		$this->db->query("SELECT * FROM constituents WHERE constituency LIKE :constituency");

		$this->db->bind(":constituency", $constituency);

		$data = $this->db->single();
		if($this->db->rowCount() > 0){
			$this->selectedconstituency($data);
			return true;
		}else{
			return false;
		}
	}
	/*
	* getting ward wards
	*/
	public function wardwards($ward){
		//pulling query
		$this->db->query("SELECT * FROM wards WHERE ward LIKE :ward");

		$this->db->bind(":ward", $ward);

		$data = $this->db->single();
		if($this->db->rowCount() > 0){
			$this->selectedward($data);
			return true;
		}else{
			return false;
		}
	}

	//selected subcounty
	private function selectedsubcounty($data){
		$_SESSION['selectedsubcountycounty'] = $data->county;
		$_SESSION['selectedsubcountysubcounty'] = $data->subcounty;
	}
	//selected constituency
	private function selectedconstituency($data){
		$_SESSION['selectedconstituencycounty'] = $data->county;
		$_SESSION['selectedconstituencysubcounty'] = $data->subcounty;
		$_SESSION['selectedconstituencyconstituency'] = $data->constituency;
	}

	//selected wards
	private function selectedward($data){
		$_SESSION['selectedwardcounty'] = $data->county;
		$_SESSION['selectedwardsubcounty'] = $data->subcounty;
		$_SESSION['selectedwardconstituency'] = $data->constituency;
		$_SESSION['selectedwardward'] = $data->ward;
	}

	/*
	* getting subcounty names
	*/

	public function subcounties($county = NULL){

		if($county === NULL){

			$this->db->query("SELECT * FROM sub_counties");

		}else{
			//pulling query
			$this->db->query("SELECT * FROM sub_counties WHERE county = :county");

			$this->db->bind(":county", $county);
		}


		$data = $this->db->resultset();

		return $data;

	}

	/*
	* getting constituences
	*/

	public function constituencies($subcounty = NULL){

		if($subcounty === NULL){

			$this->db->query("SELECT * FROM constituents");

		}else{
			//pulling query
			$this->db->query("SELECT * FROM constituents WHERE subcounty = :subcounty");

			$this->db->bind(":subcounty", $subcounty);
		}


		$data = $this->db->resultset();

		return $data;

	}

	/*
	* getting ward names
	*/

	public function wards($constituency = NULL){

		if($constituency  === NULL){

			$this->db->query("SELECT * FROM wards");

		}else{
			//pulling query
			$this->db->query("SELECT * FROM wards WHERE constituency= :constituency");

			$this->db->bind(":constituency",$constituency);
		}


		$data = $this->db->resultset();

		return $data;

	}

	/*
	* getting location names
	*/

	public function locations($ward = NULL){

		if($ward === NULL){

			$this->db->query("SELECT * FROM Location_Details");

		}else{
			//pulling query
			$this->db->query("SELECT * FROM Location_Details WHERE Ward= :ward");

			$this->db->bind(":ward", $ward);
		}


		$data = $this->db->resultset();

		return $data;

	}

	/*
	* school details
	*/
	public function schooldetails(){

		$this->db->query("SELECT * FROM School_Details");

		$data = $this->db->resultset();

		return $data;

	}

	/*
	* check whether fields are empty
	*/
	public function required($county, $subcounty, $category){
		if($county==""|| $subcounty==""||$category==""){
			return false;
		}else{
			return true;
		}

	}
	/*
	* check whether ward fields are empty
	*/
	public function requiredwarddetails($county, $subcounty, $ward, $category){
		if($county==""|| $subcounty==""||$ward=="" || $category==""){
			return false;
		}else{
			return true;
		}
	}

	/*
	* check whether location fields are empty
	*/
	public function requiredlocationdetails($county, $subcounty, $ward, $location, $category){
		if($county==""|| $subcounty==""||$ward=="" || $location=="" || $category==""){
			return false;
		}else{
			return true;
		}
	}

	/*
	* Getting subcounty details
	*/
	public function subcountydetails($county, $subcounty){
		$this->db->query("
		SELECT SubCounty_Details.*,counties.County_Name FROM subcounty_details
		INNER JOIN counties ON
		SubCounty_Details.County_Code = counties.County_Code
		WHERE SubCounty_Details.County_Code = :code AND SubCounty_Details.SubCounty = :subcounty"
	);

		$this->db->bind(':code', $county);
		$this->db->bind(':subcounty', $subcounty);

	$details = $this->db->resultset();

	return $details;
	}


	/*
	* Getting ward details
	*/
	public function warddetails($county, $subcounty, $ward){
		$this->db->query("SELECT * FROM WardDetails WHERE (County_Code = :code AND SubCounty = :subcounty AND Name = :ward)");

		$this->db->bind(':code', $county);
		$this->db->bind(':subcounty', $subcounty);
		$this->db->bind(':ward', $ward);

	$details = $this->db->resultset();

	return $details;

	}
	/*
	* Registering School
	*/

	public function registerschool($data){

		$this->db->query("INSERT INTO 
			School_Details(Name, Code, Level, Type, Sub_Location, Location, Ward, Constituency, Sub_County, County, Facility_Type, Physical_Address, Coordinates, Contact_Person_Name, Contact_Person_Tel, Contact_Person_Email)
				VALUES(:name,:code,:level,:type,:sublocation,:location,:ward,:constituency,:subcounty,:county,:facility,:address,:coordinates,:personname,:persontel,:personemail)
			");

		$this->db->bind(':name', $data['name']);
		$this->db->bind(':code', $data['code']);
		$this->db->bind(':level', $data['level']);
		$this->db->bind(':type', $data['type']);
		$this->db->bind(':sublocation', $data['sublocation']);
		$this->db->bind(':location', $data['location']);
		$this->db->bind(':ward', $data['ward']);
		$this->db->bind(':constituency', $data['constituency']);
		$this->db->bind(':subcounty', $data['subcounty']);
		$this->db->bind(':county', $data['county']);
		$this->db->bind(':facility', $data['facilitytype']);
		$this->db->bind(':address', $data['physicaladdress']);
		$this->db->bind(':coordinates', $data['coordinates']);
		$this->db->bind(':personname', $data['contactperson']);
		$this->db->bind(':persontel', $data['contactpersontel']);
		$this->db->bind(':personemail', $data['contactpersonemail']);

		$insert = $this->db->execute();

		if($insert){
			return true;
		}else{
			return false;
		}

	}

	/*
	* checking whether county exists
	*/

	public function checkcountyexists($county){
		$this->db->query("SELECT * FROM counties WHERE County_Name LIKE :name");

		$this->db->bind(':name', $county);
		
		$this->db->single();

		if($this->db->rowCount()>0){
			return true;
		}else{
			$this->registercounty($county);
			return false;
		}

	}

	/*
	* checking whether project exists
	*/

	public function checkprojectexists($project){
		$this->db->query("SELECT * FROM projects 
		WHERE(category LIKE :category AND sname LIKE :sname AND type LIKE :type)");

		$this->db->bind(':category', $project['scategory']);
		$this->db->bind(':sname', $project['sname']);
		$this->db->bind(':type', $project['ptype']);

		$this->db->single();

		if($this->db->rowCount()>0){
			return true;
		}else{
			$this->registerproject($project);
			return false;
		}

	}

	/*
	* checking whether user exists
	*/

	public function checkifuserexists($data){
		$this->db->query("SELECT * FROM users 
		WHERE email LIKE :email
		");

		$this->db->bind(':email', $data['email']);
		
		$this->db->single();

		if($this->db->rowCount()>0){
			return true;
		}else{
			$this->registeruser($data);
			return false;
		}

	}

	/*
	* checking whether user registered
	*/

	public function checkifuserregistered($data){
		$this->db->query("SELECT * FROM users 
		WHERE(email LIKE :email AND password = :password)
		");

		$this->db->bind(':email', $data['email']);
		$this->db->bind(':password', $data['password']);
		
		$results = $this->db->single();

		if($this->db->rowCount()>0){
			$this->userdetails($results);
			return true;
		}else{
			return false;
		}

	}

	/*
	* establishing user details
	*/

	public function userdetails($results){
		$_SESSION['username'] = $results->username;
		$_SESSION['status'] = $results->status;
		$_SESSION['category'] = $results->category;
		$_SESSION['login'] = true;
	}

	/*
	* retrieving user details
	*/

	public function retriveuserdetails(){
		$this->db->query("SELECT * FROM users");

		$results = $this->db->resultset();

		return $results;
	}

	/*
	* retrieving specific user details
	*/

	public function retriveuserspecific($userspecific){
		$this->db->query("SELECT * FROM users WHERE email LIKE :email");

		$this->db->bind(':email', $userspecific);

		$results = $this->db->single();

		return $results;
	}

	/*
	* retrieving user categories
	*/

	public function usercategories(){
		$this->db->query("SELECT * FROM user_categories");

		$results = $this->db->resultset();

		return $results;
	}

	/*
	* revoking user status
	*/

	public function revokeuser($user){
		$status = "dormant";
		$category = "none";

		$this->db->query("UPDATE users SET status = :status WHERE email = :email");
		$this->db->bind(':status', $status);
		$this->db->bind(':email', $user);

		if($this->db->execute()){
			if($this->revokecategory($user, $category)){

			}else{
				return false;
			}

		}else{
			return false;
		}
	}

	/*
	* revoking user category
	*/

	public function revokecategory($user, $category){
		$this->db->query("UPDATE users SET category = :category WHERE email = :email");
		$this->db->bind(':category', $category);
		$this->db->bind(':email', $user);

		if($this->db->execute()){
			return true;
		}else{
			return false;
		}

	}

	/*
	* updating user category user category
	*/

	public function updateuserspecific($useremail, $usercategory){
		$this->db->query("UPDATE users SET category = :category WHERE email = :email");
		$this->db->bind(':category', $usercategory);
		$this->db->bind(':email', $useremail);

		if($this->db->execute()){
			if($this->updateuserstatus($useremail)){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}

	}

	/*
	* updating user specific
	*/

	public function updateuserstatus($useremail){
		$status = "active";
		$this->db->query("UPDATE users SET status = :status WHERE email = :email");
		$this->db->bind(':status', $status);
		$this->db->bind(':email', $useremail);

		if($this->db->execute()){
			return true;
		}else{
			return false;
		}

	}


	/*
	* checking whether sub county exists
	*/

	public function checksubcountyexists($data){
		$this->db->query("SELECT * FROM sub_counties WHERE (county = :county AND subcounty LIKE :subcounty)");

		$this->db->bind(':county', $data['county']);
		$this->db->bind(':subcounty', $data['subcounty']);
		$this->db->single();

		if($this->db->rowCount()>0){
			return true;
		}else{
			$this->registersubcounty($data);
			return false;
		}

	}

	/*
	* checking whether constituency exists
	*/

	public function checkconstituencyexists($data){
		$this->db->query("SELECT * FROM constituents 
		WHERE (county = :county AND subcounty = :subcounty AND constituency LIKE :constituency)");

		$this->db->bind(':county', $data['county']);
		$this->db->bind(':subcounty', $data['subcounty']);
		$this->db->bind(':constituency', $data['constituency']);
		$this->db->single();

		if($this->db->rowCount()>0){
			return true;
		}else{
			$this->registerconstituency($data);
			return false;
		}

	}

	/*
	* checking whether ward exists
	*/

	public function checkwardexists($data){
		$this->db->query("SELECT * FROM wards 
		WHERE (county = :county AND subcounty = :subcounty AND constituency = :constituency AND ward LIKE :ward)");

		$this->db->bind(':county', $data['county']);
		$this->db->bind(':subcounty', $data['subcounty']);
		$this->db->bind(':constituency', $data['constituency']);
		$this->db->bind(':ward', $data['ward']);
		$this->db->single();

		if($this->db->rowCount()>0){
			return true;
		}else{
			$this->registerward($data);
			return false;
		}

	}
	/*
	* Registering county
	*/

	public function registercounty($county){

		$this->db->query("INSERT INTO 
			counties(County_Name)
				VALUES(:name)
			");
		$this->db->bind(':name', $county);

		$this->db->execute();

	}

	/*
	* Registering county
	*/

	public function registerproject($project){

		$this->db->query("INSERT INTO 
			projects(pname, category, sname, facilitator, type, size, date)
				VALUES(:pname, :category, :sname, :facilitator, :type, :size, :date)
			");
		$this->db->bind(':pname', $project['pname']);
		$this->db->bind(':category', $project['scategory']);
		$this->db->bind(':sname', $project['sname']);
		$this->db->bind(':facilitator', $project['pfacilitator']);
		$this->db->bind(':type', $project['ptype']);
		$this->db->bind(':size', $project['psize']);
		$this->db->bind(':date', $project['pdate']);

		$this->db->execute();

	}

	/*
	* Registering user
	*/

	public function registeruser($data){

		$this->db->query("INSERT INTO 
			users(username, email, password)
				VALUES(:name, :email, :password)
			");
		$this->db->bind(':name', $data['username']);
		$this->db->bind(':email', $data['email']);
		$this->db->bind(':password', $data['password']);

		$this->db->execute();

	}

	/*
	* available counties
	*/

	public function availablecounties(){
		$this->db->query("SELECT DISTINCT County FROM schoolinformation ORDER BY County ASC");
		$results = $this->db->resultset();
		return $results;
	}

	/*
	* school projects
	*/

	public function schoolprojects(){
		$this->db->query("SELECT projects.*, schoolinformation.*, environmental_data.* FROM projects
		INNER JOIN schoolinformation ON
		projects.sname = schoolinformation.School
		INNER JOIN environmental_data ON
		projects.sname = environmental_data.School
		");
		$results = $this->db->resultset();
		return $results;
	}

	/*
	* available sub counties
	*/

	public function availablesubcounties($county = NULL){

		if($county === NULL){

			$this->db->query("SELECT DISTINCT Subcounty FROM schoolinformation ORDER BY Subcounty ASC");

		}else{
			//pulling query
			$this->db->query("SELECT DISTINCT Subcounty FROM schoolinformation WHERE County LIKE :county ORDER BY Subcounty ASC");

			$this->db->bind(":county", $county);
		}
		
		$results = $this->db->resultset();
		return $results;
	}

	/*
	* available constituencies
	*/

	public function availableconstituencies($subcounty = NULL){
		if($subcounty === NULL){

			$this->db->query("SELECT DISTINCT Constituency FROM schoolinformation ORDER BY Constituency ASC");

		}else{
			//pulling query
			$this->db->query("SELECT DISTINCT Constituency FROM schoolinformation WHERE Subcounty LIKE :subcounty ORDER BY Constituency ASC");

			$this->db->bind(":subcounty", $subcounty);
		}
		
		$results = $this->db->resultset();
		return $results;
	}


	/*
	* available wards
	*/

	public function availablewards($constituency = NULL){

		if($constituency === NULL){

			$this->db->query("SELECT DISTINCT Ward FROM schoolinformation ORDER BY Ward ASC");

		}else{
			//pulling query
			$this->db->query("SELECT DISTINCT Ward FROM schoolinformation WHERE Constituency LIKE :constituency ORDER BY Ward ASC");

			$this->db->bind(":constituency", $constituency);
		}
		$results = $this->db->resultset();
		return $results;
	}

	/*
	* available locations
	*/

	public function availablelocations($ward = NULL){
		if($ward === NULL){

			$this->db->query("SELECT DISTINCT Location FROM schoolinformation ORDER BY Location ASC");

		}else{
			//pulling query
			$this->db->query("SELECT DISTINCT Location FROM schoolinformation WHERE Ward LIKE :ward ORDER BY Location ASC");

			$this->db->bind(":ward", $ward);
		}
		$results = $this->db->resultset();
		return $results;
	}
	/*
	* available sublocation
	*/

	public function availablesublocations($location = NULL){
		if($location === NULL){

			$this->db->query("SELECT DISTINCT Sublocation FROM schoolinformation ORDER BY Sublocation ASC");

		}else{
			//pulling query
			$this->db->query("SELECT DISTINCT Sublocation FROM schoolinformation WHERE Location LIKE :location ORDER BY Sublocation ASC");

			$this->db->bind(":location", $location);
		}
		$results = $this->db->resultset();
		return $results;
	}

	/*
	* checking whether school information exists
	*/

	public function checkschoolinformationexists($data){
		$this->db->query("SELECT * FROM schoolinformation 
		WHERE(
			School LIKE :school OR 
			Code = :code OR 
			Physicaladdress LIKE :address OR
			Contactperson LIKE :person OR
			Phonenumber = :number OR
			Email LIKE :email
			)");

		$this->db->bind(':school', $data['schoolname']);
		$this->db->bind(':code', $data['schoolcode']);
		$this->db->bind(':address', $data['sphyaddress']);
		$this->db->bind(':person', $data['scontactteacher']);
		$this->db->bind(':number', $data['scontactteachertel']);
		$this->db->bind(':email', $data['scontactteacheremail']);

		$this->db->single();

		if($this->db->rowCount()>0){
			return true;
		}else{
			$this->registerschoolinformation($data);
			$this->registerschoolstatistics($data);
			$this->registerschoolinfrastructure($data);
			$this->registerschoolsanitationfacilities($data);
			$this->registerschoolenvironmentaldata($data);
			$this->registerschoolwaterresources($data);
			$this->registerschoolhealthfacilities($data);
			$this->registerschoolenergyresources($data);
			$this->registerschoolictinfrastructure($data);
			$this->registerschoolsuggestions($data);
			return false;
		}

	}

	/*
	* Registering school information
	*/

	public function registerschoolinformation($data){

		$this->db->query("INSERT INTO 
			schoolinformation(School, Code, Level, Type, County, Subcounty, Location, Sublocation, Constituency, Ward, Physicaladdress, 
								Facilitytype, Contactperson, Phonenumber, Email)
						VALUES(:school, :code, :level, :type, :county, :subcounty, :location, :sublocation, :constituency, :ward, 
								:address, :facilitytype, :contactperson, :contactpersonnumber, :contactpersonemail)
			");
		$this->db->bind(':school', $data['schoolname']);
		$this->db->bind(':code', $data['schoolcode']);
		$this->db->bind(':level', $data['schoollevel']);
		$this->db->bind(':type', $data['schooltype']);
		$this->db->bind(':county', $data['county']);
		$this->db->bind(':subcounty', $data['subcounty']);
		$this->db->bind(':location', $data['slocation']);
		$this->db->bind(':sublocation', $data['sublocation']);
		$this->db->bind(':constituency', $data['constituency']);
		$this->db->bind(':ward', $data['sward']);
		$this->db->bind(':address', $data['sphyaddress']);
		$this->db->bind(':facilitytype', $data['facility_type']);
		$this->db->bind(':contactperson', $data['scontactteacher']);
		$this->db->bind(':contactpersonnumber', $data['scontactteachertel']);
		$this->db->bind(':contactpersonemail', $data['scontactteacheremail']);

		$this->db->execute();

	}

	/*
	* Registering school statistics
	*/
	public function registerschoolstatistics($data){
		$this->db->query("INSERT INTO 
		school_statistics(School, Malepupils, Femalepupils, Lower, Upper, Total,
		Maletrs, Femaletrs, Totaltrs, Mnontrs, Fnontrs, Totalnontrs, MDisable, FDisable, TDisable, Disability)
		VALUES(:school, :malepupils, :femalepupils, :lower, :upper, :total, :maletrs, :femaletrs, :totaltrs, :mnontrs,
		:fnontrs, :totalnontrs, :mdisable, :fdisable, :tdisable, :disability)
		");

		$this->db->bind(':school', $data['schoolname']);
		$this->db->bind(':malepupils', $data['malestudents']);
		$this->db->bind(':femalepupils', $data['femalestudents']);
		$this->db->bind(':lower', $data['lowerstudents']);	
		$this->db->bind(':upper', $data['upperstudents']);
		$this->db->bind(':total', $data['totalstudents']);
		$this->db->bind(':maletrs', $data['mteachers']);
		$this->db->bind(':femaletrs', $data['fteachers']);
		$this->db->bind(':totaltrs', $data['tteachers']);
		$this->db->bind(':mnontrs', $data['mnteachers']);
		$this->db->bind(':fnontrs', $data['fnteachers']);
		$this->db->bind(':totalnontrs', $data['tnteachers']);
		$this->db->bind(':mdisable', $data['dmstudents']);
		$this->db->bind(':fdisable', $data['dfstudents']);
		$this->db->bind(':tdisable', $data['tdstudents']);
		$this->db->bind(':disability', $data['disabilities']);

		$this->db->execute();
	}

	/*
	* Registering school infrastructure
	*/
	public function registerschoolinfrastructure($data){
		$this->db->query("INSERT INTO 
		school_infrastructure(School, Classes, Structure, Roofs, 
		Fence, Ftype, Library, Games, Staffroom, HeadTRoffice)
		VALUES(:school, :classes, :structure, :roofs, :fence, :ftype, :library, :games, :staffroom, :headtroffice)
		");

		$this->db->bind(':school', $data['schoolname']);
		$this->db->bind(':classes', $data['classrooms']);
		$this->db->bind(':structure', $data['structuretype']);
		$this->db->bind(':roofs', $data['rooftypes']);
		$this->db->bind(':fence', $data['fenced']);
		$this->db->bind(':ftype', $data['fencetype']);
		$this->db->bind(':library', $data['library']);
		$this->db->bind(':games', $data['games']);
		$this->db->bind(':staffroom', $data['staffroom']);
		$this->db->bind(':headtroffice', $data['headteacherroom']);

		$this->db->execute();

	}

	/*
	* Registering school sanitation facilities
	*/
	public function registerschoolsanitationfacilities($data){
		$this->db->query("INSERT INTO
		sanitation_facilities(School, Sanitation, Mtoilets, Ftoilets, 
		Stoilets, TTeachers, MTrToilets, FTrToilets, STrToilets, Waste)
		VALUES(:school, :sanitation, :mtoilets, :ftoilets, :stoilets, 
		:tteachers, :mtrtoilets, :ftrtoilets, :strtoilets, :waste)
		"); 

		$this->db->bind(':school', $data['schoolname']);
		$this->db->bind(':sanitation', $data['sanitation']);
		$this->db->bind(':mtoilets', $data['boystoilets']);
		$this->db->bind(':ftoilets', $data['girltoilets']);
		$this->db->bind(':stoilets', $data['ssharedtoilets']);
		$this->db->bind(':tteachers', $data['ttoilets']);
		$this->db->bind(':mtrtoilets', $data['tmaletoilets']);
		$this->db->bind(':ftrtoilets', $data['tfemaletoilets']);
		$this->db->bind(':strtoilets', $data['tsharedtoilets']);
		$this->db->bind(':waste', $data['waste']);

		$this->db->execute();

	}

	/*
	* Registering school environmentaldata
	*/
	public function registerschoolenvironmentaldata($data){
		$this->db->query("INSERT INTO
		environmental_data(School, SchArea, Built, Treeplanting
		,TreeInitiative, Explanation, Environclub, EnvironEd, Fruittrees, OtherTree
		, TreesUse, EnvironActivities, EnvironPhone,  EnvironEmail)
		VALUES(:school, :scharea, :built, :treeplanting, :treeinitiative, :explanation, :environclub, :environed, :fruittrees
		, :othertree, :treeuse, :environactivities, :environphone, :environemail)
		"); 

		$this->db->bind(':school', $data['schoolname']);
		$this->db->bind(':scharea', $data['coverage']);
		$this->db->bind(':built', $data['built']);
		$this->db->bind(':treeplanting', $data['treespace']);
		$this->db->bind(':treeinitiative', $data['tinitiative']);
		$this->db->bind(':explanation', $data['tireason']);
		$this->db->bind(':environclub', $data['eclub']);
		$this->db->bind(':environed', $data['eopinion']);
		$this->db->bind(':fruittrees', $data['fruittree']);
		$this->db->bind(':othertree', $data['tree']);
		$this->db->bind(':treeuse', $data['treeuse']);
		$this->db->bind(':environactivities', $data['ehname']);
		$this->db->bind(':environphone', $data['ehtel']);
		$this->db->bind(':environemail', $data['ehemail']);

		$this->db->execute();
	}

	/*
	* Registering water resources facilities
	*/
	public function registerschoolwaterresources($data){
		$this->db->query("INSERT INTO
		water_resources_facilities(School, Water, WaterSource, Expense
		, TreatedWater, Reliability, WaterStorage, DistanceWaterSource, Livestock
		, LSCows, LSPigs, LSGoats, LSSheep, LSOtherstype, LSOthersnumber)
		VALUES(:school, :water, :watersource, :expense, :treatedwater, :reliability, :waterstorage, :distancewatersource, :livestock
		, :lscows, :lspigs, :lsgoats, :lssheep, :lsotherstype, :lsothersnumber)
		"); 

		$this->db->bind(':school', $data['schoolname']);
		$this->db->bind(':water', $data['water']);
		$this->db->bind(':watersource', $data['wsources']);
		$this->db->bind(':expense', $data['waterexpense']);
		$this->db->bind(':treatedwater', $data['treatedwater']);
		$this->db->bind(':reliability', $data['waterreliable']);
		$this->db->bind(':waterstorage', $data['waterstorage']);
		$this->db->bind(':distancewatersource', $data['distancewater']);
		$this->db->bind(':livestock', $data['lavailable']);
		$this->db->bind(':lscows', $data['cows']);
		$this->db->bind(':lspigs', $data['pigs']);
		$this->db->bind(':lsgoats', $data['goats']);
		$this->db->bind(':lssheep', $data['sheep']);
		$this->db->bind(':lsotherstype', $data['lotype']);
		$this->db->bind(':lsothersnumber', $data['lonumber']);

		$this->db->execute();
	}

	/*
	* Registering school health facilities
	*/
	public function registerschoolhealthfacilities($data){
		$this->db->query("INSERT INTO
		health_facilities(School, MedicalFac, TrainedMed, MedicalCases, EmergencyNeeds, NearestHealth, HealthFac)
		VALUES(:school, :medicalfac, :trainedmed, :medicalclasses, :emergencyneeds, :nearesthealth, :healthfac)
		"); 

		$this->db->bind(':school', $data['schoolname']);
		$this->db->bind(':medicalfac', $data['mfacility']);
		$this->db->bind(':trainedmed', $data['mpersonnel']);
		$this->db->bind(':medicalclasses', $data['medicalcases']);
		$this->db->bind(':emergencyneeds', $data['emergencymedicalcases']);
		$this->db->bind(':nearesthealth', $data['dhfacility']);
		$this->db->bind(':healthfac', $data['hftype']);

		$this->db->execute();
	}

	/*
	* Registering school energy resources
	*/
	public function registerschoolenergyresources($data){
		$this->db->query("INSERT INTO
		energy_resources(School, Powerconnection, Powersource, Supply, Backup, Cooking, Expenditure, ElectricBill)
		VALUES(:school, :powerconnection, :powersource, :supply, :backup, :cooking, :expenditure, :electricbill)
		"); 

		$this->db->bind(':school', $data['schoolname']);
		$this->db->bind(':powerconnection', $data['spconnected']);
		$this->db->bind(':powersource', $data['powersource']);
		$this->db->bind(':supply', $data['psreliable']);
		$this->db->bind(':backup', $data['bgavailable']);
		$this->db->bind(':cooking', $data['cesource']);
		$this->db->bind(':expenditure', $data['ceexpense']);
		$this->db->bind(':electricbill', $data['mebill']);

		$this->db->execute();
	}

	/*
	* Registering school ict infrastructure
	*/
	public function registerschoolictinfrastructure($data){
		$this->db->query("INSERT INTO
		ict_infrastructure(School, Computers, Number, CompLab, Internet, ConnectionMode)
		VALUES(:school, :computers, :number, :complab, :internet, :connectionmode)
		"); 

		$this->db->bind(':school', $data['schoolname']);
		$this->db->bind(':computers', $data['fcavailable']);
		$this->db->bind(':number', $data['compnum']);
		$this->db->bind(':complab', $data['clabavailable']);
		$this->db->bind(':internet', $data['icavailable']);
		$this->db->bind(':connectionmode', $data['connectionmode']);

		$this->db->execute();
	}

	/*
	* Registering school suggestions
	*/
	public function registerschoolsuggestions($data){
		$this->db->query("INSERT INTO
		suggestions(School, Suggestions)
		VALUES(:school, :suggestion)
		");
		$this->db->bind(':school', $data['schoolname']);
		$this->db->bind(':suggestion', $data['suggestions']);

		$this->db->execute();
	}

	/*
	* Registering subcounty
	*/

	public function registersubcounty($data){

		$this->db->query("INSERT INTO sub_counties(county, subcounty)
				VALUES(:county, :subcounty)
			");

		$this->db->bind(':county', $data['county']);
		$this->db->bind(':subcounty', $data['subcounty']);

		$this->db->execute();

	}

	/*
	* Registering constituency
	*/

	public function registerconstituency($data){

		$this->db->query("INSERT INTO constituents(county, subcounty, constituency)
				VALUES(:county, :subcounty, :constituency)
			");

		$this->db->bind(':county', $data['county']);
		$this->db->bind(':subcounty', $data['subcounty']);
		$this->db->bind(':constituency', $data['constituency']);

		$this->db->execute();

	}

	/*
	* Registering ward
	*/

	public function registerward($data){

		$this->db->query("INSERT INTO wards(county, subcounty, constituency, ward)
				VALUES(:county, :subcounty, :constituency, :ward)
			");

		$this->db->bind(':county', $data['county']);
		$this->db->bind(':subcounty', $data['subcounty']);
		$this->db->bind(':constituency', $data['constituency']);
		$this->db->bind(':ward', $data['ward']);

		$this->db->execute();

	}

	/*
	* Getting location details
	*/
	public function locationdetails($county, $subcounty, $ward, $location){
		$this->db->query("SELECT * FROM Location_Details WHERE (County_Code = :code AND Subcounty = :subcounty AND Ward = :ward AND Name = :location)");

		$this->db->bind(':code', $county);
		$this->db->bind(':subcounty', $subcounty);
		$this->db->bind(':ward', $ward);
		$this->db->bind(':location', $location);

	$details = $this->db->resultset();

	return $details;
	}

	/*
	* Getting selected subcounty details
	*/
	public function subcountycountydetails($county =  NULL){

		if($county === NULL){
			$this->db->query("SELECT * FROM sub_counties");
		}else{
			$this->db->query("SELECT * FROM sub_counties WHERE county LIKE :county");
			$this->db->bind(":county",$county);
		}

		$details = $this->db->resultset();

		return $details;
	}

	/*
	* Getting selected constituency details
	*/
	public function constituencycategorydetails($county =  NULL){

		if($county === NULL){
			$this->db->query("SELECT * FROM constituents");
		}else{
			$this->db->query("SELECT * FROM constituents WHERE county LIKE :county");
			$this->db->bind(":county",$county);
		}

		$details = $this->db->resultset();

		return $details;
	}

	/*
	* Getting selected ward details
	*/
	public function wardcategorydetails($county =  NULL, $subcounty =  NULL, $constituency =  NULL){
		if($county === NULL || $subcounty ===  NULL || $constituency ===  NULL){
			$this->db->query("SELECT * FROM wards");
		}
		else{
			$this->db->query("SELECT * FROM wards WHERE(county LIKE :county AND subcounty LIKE :subcounty AND constituency LIKE :constituency)");
			$this->db->bind(":county",$county);
			$this->db->bind(":subcounty",$subcounty);
			$this->db->bind(":constituency",$constituency);
		}

		$details = $this->db->resultset();

		return $details;
	}

	/*
	* deleting project
	*/
	public function deleteproject($project){
		$this->db->query("DELETE FROM projects WHERE(pname LIKE :pname)");
		$this->db->bind(":pname",$project);
		$this->db->execute();
	}
}
?>