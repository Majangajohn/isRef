<?php
        require('../core/init.php'); 

        //creating details object
        $accountdetails = new Details;

        if(isset($_SESSION['editedcounty'])){
            unset($_SESSION['editedcounty']);
        }

        //getting template and assigning variables
        $template = new Template('../templates/user.php');

        if(isset($_GET['revokerole'])){
            $user = $_GET['revokerole'];

            //revoking role
            if($accountdetails->revokeuser($user)){
                redirect('user.php');
            }else{
                redirect('user.php');
            }

        }

        if(isset($_GET['assignrole'])){
            $_SESSION['assignrole'] = true;
            $_SESSION['userspecific'] = $_GET['assignrole'];;
            redirect('user.php');
        }

        if(isset($_POST['canceluser'])){
            redirect('user.php');
            unset($_SESSION['userspecific']);
        }
        if(isset($_POST['updateuser'])){
            $usercategory = $_POST['usercategory'];
            if($usercategory != ""){
                if($accountdetails->updateuserspecific($_SESSION['userspecific'], $usercategory)){
                    unset($_SESSION['userspecific']);
                    redirect('user.php');
                }else{
                    unset($_SESSION['userspecific']);
                    redirect('user.php');
                }
            }else{
                $_SESSION['assignrole'] = true;
                redirect('user.php','** please select user category','error');
            }
        }
        if(isset($_SESSION['userspecific'])){
            //pulling user details
            $template->usersspecific = $accountdetails->retriveuserspecific($_SESSION['userspecific']);
        }

        //pulling user details
        $template->usercategories = $accountdetails->usercategories();

        //pulling user details
        $template->usersdata = $accountdetails->retriveuserdetails();
    if(isset($_SESSION['login'])){
        //display template
        echo $template;
    }else{
        redirect('../index.php');
    }
?>