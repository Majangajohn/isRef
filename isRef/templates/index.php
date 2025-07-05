<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="templates/images/favicon.png" type="image/ico" />
    <title>Lake Basin Development Authority | </title>

    <!-- Bootstrap -->
    <link href="templates/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="templates/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="templates/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="templates/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="templates/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="index.php">
              <h1>Login Form</h1>
              <div>
              <p><?php  echo displayMessage(); ?></p>	
              </div>
              <div>
                <input type="email" name="useremail" class="form-control" required="" placeholder="Email" autocomplete="off"/>
              </div>
              <div>
                <input type="password" name="password" class="form-control" required=""  placeholder="Password" autocomplete="off"/>
              </div>
              <div>
                <button class="btn btn-default btn-sm" type="submit" name="login">Log in</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Powered by Lake Basin Development Authority</h1>
                  <p>©2020 All Rights Reserved. ISREF! is in Functionality with LBDA. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="POST" action="index.php" onsubmit="return validateregistration(); ">
              <h1>Create Account</h1>
              <div>
                <input type="text" name="username" id="username" autocomplete="off" class="form-control" placeholder="Username"/>
                <span id="username-error"></span>
              </div>
              <div>
                <input type="email" name="email" id="email" autocomplete="off" class="form-control" placeholder="Email"/>
                <span id="email-error"></span>
              </div>
              <div>
                <input type="password" name="password" id="password" autocomplete="off" class="form-control" placeholder="Password"/>
                <span id="password-error"></span>
              </div>
              <div>
                <input type="password" name="cpassword" id="cpassword" autocomplete="off" class="form-control" placeholder="Confirm Password"/>
                <span id="cpassword-error"></span>
              </div>
              <div>
                <button class="btn btn-default btn-sm" type="submit" name="submit">Submit</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Powered by Lake Basin Development Authority</h1>
                  <p>©2020 All Rights Reserved. ISREF! is in Functionality with LBDA. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
    <script src="templates/build/js/validatelogin.js"></script>
  </body>
</html>

