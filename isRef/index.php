<?php
require('core/inituser.php'); 

//creating details object
$accountdetails = new Details;

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str) {
  $str = @trim($str);
  if(get_magic_quotes_gpc()) {
    $str = stripslashes($str);
  }
  return $str;
}

//registration
if(isset($_POST['submit'])){
  $data = array();

  $data['username'] = clean($_POST['username']);
  $data['email'] = clean($_POST['email']);
  $password = clean($_POST['password']);
  $newpass = md5($password);
  $data['password'] = $newpass;
  if($accountdetails->checkifuserexists($data)){
    echo '<script type="text/javascript">alert("Already registered,, You can now login");</script>';
		echo '<script type="text/javascript">window.open("index.php", "_self");</script>';
  }else{
    echo '<script type="text/javascript">alert("successfully registered,, You can now login");</script>';
		echo '<script type="text/javascript">window.open("index.php", "_self");</script>';
  }

}

//login
if(isset($_POST['login'])){
  $data = array();
  $data['email'] = clean($_POST['useremail']);
  $password = clean($_POST['password']);
  $newpass = md5($password);
  $data['password'] = $newpass;

  if($accountdetails->checkifuserregistered($data)){
    if(isset($_SESSION['login'])){
      if($_SESSION['status'] == "dormant"){
        redirect('index.php', 'Await authorization by the administrator','error');
      }else{
        redirect('main/frontpage.php');
      }
    }else{
      redirect('../index.php');
    }
  }else{
    redirect('index.php', 'invalid login, register to login','error');
  }

}

//logout
if(isset($_GET['user'])){
  unset($_SESSION['login']);
  unset($_SESSION['category']);
  unset($_SESSION['status']);
  unset($_SESSION['username']);
  session_destroy();
}

//getting template and assigning variables
$template = new Template('templates/index.php');

//display template
echo $template;
?>