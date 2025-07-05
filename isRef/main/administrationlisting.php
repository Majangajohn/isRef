<?php
        require('../core/init.php'); 

        //creating details object
        $requireddetails = new Details;
        if(isset($_SESSION['userspecific'])){
            unset($_SESSION['userspecific']);
        }

        //getting template and assigning variables
        $template = new Template('../templates/administrationlisting.php');


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


        if(isset($_GET['wardcounty'])){

            $county = $_GET['wardcounty'];
            $_SESSION['wardcounty'] = $_GET['wardcounty']; 
            echo json_encode($requireddetails->subcounties($county));
            
            die();

        }

        if(isset($_GET['subcountyname'])){

            $subcounty = $_GET['subcountyname'];
            $_SESSION['wardsubcounty'] = $_GET['subcountyname']; 
            echo json_encode($requireddetails->constituencies($subcounty));
            
            die();

        }

        //selected county category
        if(isset($_GET['county'])){
            $_SESSION['viewsubcountycategory'] = $_GET['county']; 
            die();
        }

        //selected constituency category
        if(isset($_GET['constituencycounty'])){
            $_SESSION['viewconstituencycategory'] = $_GET['constituencycounty'];
            die();
        }
        //selected ward 
        if(isset($_GET['wardconstituencySelector'])){
            $_SESSION['wardconstituencySelector'] = $_GET['wardconstituencySelector'];
            die();
        }

        //selected subcounty category
        if(isset($_SESSION['viewsubcountycategory'])){
            $template->subcountydetails = $requireddetails->subcountycountydetails($_SESSION['viewsubcountycategory']);
            $_SESSION['subcounty'] = true;
        }

        //selected constituency category
        if(isset($_SESSION['viewconstituencycategory'])){
            $template->selectedconstituencycategorydetails = $requireddetails->constituencycategorydetails($_SESSION['viewconstituencycategory']);
            $_SESSION['constituency'] = true;
            
        }
        //selected constituency category
        if(isset($_SESSION['wardconstituencySelector']) && isset($_SESSION['wardcounty']) && isset($_SESSION['wardsubcounty'])){
            $template->selectedwardcategorydetails = $requireddetails->wardcategorydetails(
                $_SESSION['wardcounty'],$_SESSION['wardsubcounty'],$_SESSION['wardconstituencySelector']
            );
            $_SESSION['ward'] = true;
        }

        //county delete
        if(isset($_GET['countydelete'])){
            $deletecounty = $_GET['countydelete'];
            if($requireddetails->deletecounty($deletecounty)){
                $_SESSION['county'] = true;
                redirect('administrationlisting.php');
            }

        }
        //sub county delete
        if(isset($_GET['subcountydelete'])){
            $deletesubcounty = $_GET['subcountydelete'];
            if($requireddetails->deletesubcountysubcounty($deletesubcounty)){
                $_SESSION['subcounty'] = true;
                redirect('administrationlisting.php');
            }
        }

        //constituency delete
        if(isset($_GET['constituencydelete'])){
            $deleteconstituency = $_GET['constituencydelete'];
            if($requireddetails->deleteconstituencyconstituency($deleteconstituency)){
                $_SESSION['constituency'] = true;
                redirect('administrationlisting.php');
            }
        }

        //ward delete
        if(isset($_GET['warddelete'])){
            $deleteward = $_GET['warddelete'];
            if($requireddetails->deletewardward($deleteward)){
                $_SESSION['ward'] = true;
                redirect('administrationlisting.php');
            }
        }
        //county edit
        if(isset($_GET['countyedit'])){
            $_SESSION['countyedit'] = true;
            $_SESSION['editing'] = true;  
            $_SESSION['editedcounty'] = $_GET['countyedit'];
            redirect('administrationlisting.php');
        }

        //subcounty edit
        if(isset($_GET['subcountyedit'])){

            $_SESSION['editing'] = true;  

            $_SESSION['editedsubcounty'] = $_GET['subcountyedit'];
            //getting subcounty subcounties
            if($requireddetails->subcountysubcounties($_SESSION['editedsubcounty'])){
                $_SESSION['subcountyedit'] = true; 
                redirect('administrationlisting.php');
            }
        }

        //constituency edit
        if(isset($_GET['constituencyedit'])){

            $_SESSION['editing'] = true;  

            $_SESSION['editedconstituency'] = $_GET['constituencyedit'];
            //getting subcounty subcounties
            if($requireddetails->constituencyconstituencies($_SESSION['editedconstituency'])){
                $_SESSION['constituencyedit'] = true; 
                redirect('administrationlisting.php');
            }
        }

        //ward edit
        if(isset($_GET['wardedit'])){

            $_SESSION['editing'] = true;  

            $_SESSION['editedward'] = $_GET['wardedit'];
            //getting subcounty subcounties
            if($requireddetails->wardwards($_SESSION['editedward'])){
                $_SESSION['wardedit'] = true; 
                redirect('administrationlisting.php');
            }
        }

        //cancel county
        if(isset($_POST['cancelcounty'])){
            $_SESSION['county'] = true;
            redirect('administrationlisting.php');
            unset($_SESSION['editedcounty']);
        }

        //cancel subcounty
        if(isset($_POST['cancelsubcounty'])){
            $_SESSION['subcounty'] = true;
            redirect('administrationlisting.php');
            unset($_SESSION['editedsubcounty']);
        }

        //cancel constituency
        if(isset($_POST['cancelconstituency'])){
            $_SESSION['constituency'] = true;
            redirect('administrationlisting.php');
            unset($_SESSION['editedconstituency']);
        }

        //cancel ward
        if(isset($_POST['cancelward'])){
            $_SESSION['ward'] = true;
            redirect('administrationlisting.php');
            unset($_SESSION['editedward']);
        }


        //updating county
        if(isset($_POST['updatecounty'])){
            $newcountyname = $_POST['countyname'];
            if($requireddetails->updatecounty($_SESSION['editedcounty'], $newcountyname)){
                $_SESSION['county'] = true;
                unset($_SESSION['editedcounty']);
                redirect('administrationlisting.php');
            }else{
                $_SESSION['county'] = true;
                unset($_SESSION['editedcounty']);
                redirect('administrationlisting.php');
            }
        }
        //update subcounty

        if(isset($_POST['updatesubcounty'])){
            $newsubcountyname = $_POST['subcounty'];
            if($requireddetails->updatesubcountysubcounty($_SESSION['editedsubcounty'], $newsubcountyname)){
                $_SESSION['subcounty'] = true;
                unset($_SESSION['editedsubcounty']);
                redirect('administrationlisting.php');
            }else{
                $_SESSION['subcounty'] = true;
                unset($_SESSION['editedsubcounty']);
                redirect('administrationlisting.php');
            }
        }
        //update constituency
        if(isset($_POST['updateconstituency'])){
            $newconstituencyname = $_POST['constituency'];
            if($requireddetails->updateconstituencyconstituency($_SESSION['editedconstituency'], $newconstituencyname)){
                $_SESSION['constituency'] = true;
                unset($_SESSION['editedconstituency']);
                redirect('administrationlisting.php');
            }else{
                $_SESSION['constituency'] = true;
                unset($_SESSION['editedconstituency']);
                redirect('administrationlisting.php');
            }
        }

        //update ward
        if(isset($_POST['updateward'])){
            $newwardname = $_POST['wardname'];
            if($requireddetails->updatewardward($_SESSION['editedward'], $newwardname)){
                $_SESSION['ward'] = true;
                unset($_SESSION['editedward']);
                redirect('administrationlisting.php');
            }else{
                $_SESSION['ward'] = true;
                unset($_SESSION['editedward']);
                redirect('administrationlisting.php');
            }
        }

        //getting counties
        $template->counties = $requireddetails->counties();
        
        //getting sub counties
        $template->subcounties = $requireddetails->subcounties();

        //getting constituencies
        $template->constituencies = $requireddetails->constituencies();

        //getting counties details
        $template->subcountycountydetails = $requireddetails->subcountycountydetails();

        //getting constituency details
        $template->constituencycategorydetails = $requireddetails->constituencycategorydetails();

        //getting wards details
        $template->wardcategorydetails = $requireddetails->wardcategorydetails();

    if(isset($_SESSION['login'])){

        //display template
        echo $template;
    }else{
        redirect('../index.php');
    }
?>