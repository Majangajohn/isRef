<?php
require('../core/init.php'); 

//getting template and assigning variables
$template = new Template('../templates/createproject.php');

$names = new Details;

if(isset($_GET['county'])){

    $county = $_GET['county'];
    $_SESSION['projectcounty'] = $county;
    echo json_encode($names->availablesubcounties($county));
    
    die();

}

if(isset($_GET['subcounty'])){

    $subcounty = $_GET['subcounty'];
    $_SESSION['projectsubcounty'] = $subcounty;
    echo json_encode($names->availableconstituencies($subcounty));
    
    die();

}

if(isset($_GET['constituency'])){

    $constituency = $_GET['constituency'];
    $_SESSION['projectconstituency'] = $constituency;
    echo json_encode($names->availablewards($constituency));
    
    die();

}
if(isset($_GET['ward'])){

    $ward = $_GET['ward'];
    $_SESSION['projectward'] = $ward;
    echo json_encode($names->availablelocations($ward));
    
    die();

}

if(isset($_GET['location'])){

    $location = $_GET['location'];
    $_SESSION['projectlocation'] = $location;
    echo json_encode($names->availablesublocations($location));
    
    die();

}
if(isset($_GET['sublocation'])){

    $sublocation = $_GET['sublocation'];
    $_SESSION['projectsublocation'] = $sublocation;

    die();

}

if(isset($_GET['category'])){

    $category = $_GET['category'];

    echo json_encode($names->schools($_SESSION['projectcounty'], $_SESSION['projectsubcounty'],
    $_SESSION['projectconstituency'], $_SESSION['projectward'], $_SESSION['projectlocation'],$_SESSION['projectsublocation'], $category
    ));
    
    die();
}

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str) {
    $str = @trim($str);
    if(get_magic_quotes_gpc()) {
        $str = stripslashes($str);
    }
    return $str;
}
if(isset($_POST['saveproject'])){
    //Sanitize the POST values
    $project = array();
    $project['pname'] = clean($_POST['pname']);
    $project['scategory'] = clean($_POST['scategory']);
    $project['sname'] = clean($_POST['sname']);
    $project['pfacilitator'] = clean($_POST['pfacilitator']);
    $project['ptype'] = clean($_POST['ptype']);
    $project['psize'] = clean($_POST['psize']);
    $project['pdate'] = clean($_POST['pdate']);

    if($names->checkprojectexists($project)){
        redirect('createproject.php', 'Project is already registered','error');
    }else{
        redirect('createproject.php', 'Project Successfully created!!!!','success');
    }
}
//getting school project details
$template->schoolprojects = $names->schoolprojects();

//getting school level details
$template->schoollevels = $names->schoolLevel();

//getting schools
$template->schools = $names->schools();

//getting counties
$template->counties = $names->availablecounties();

//getting subcounty details
$template->subcounties = $names->availablesubcounties();
        
//getting constituencies
$template->constituencies = $names->availableconstituencies();

//getting wards
$template->wards = $names->availablewards();

//getting locations
$template->locations = $names->availablelocations();

//getting sub locations
$template->sublocations = $names->availablesublocations();
  
//display template
if(isset($_SESSION['login'])){
    echo $template;
}else{
    redirect('../index.php');
}
?>