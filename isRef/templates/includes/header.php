<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="../templates/images/favicon.png" type="image/ico" />

    <title>Lake Basin Development Authority | </title>

    <!-- Bootstrap -->
    <link href="../templates/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../templates/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Theme Style --> 
    <link href="../templates/build/css/custom.min.css" rel="stylesheet">
    <!-- hero clock -->
    <script language="javascript" type="text/javascript">
      // <!-- Begin  
      var timerID = null;
      var timerRunning = false;
      function stopclock (){
        if(timerRunning)
          clearTimeout(timerID);
          timerRunning = false;
      }

      function showtime () {
        var now = new Date();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds()
        var timeValue = "" + ((hours >12) ? hours -12 :hours)
        if (timeValue == "0") timeValue = 12;
        timeValue += ((minutes < 10) ? ":0" : ":") + minutes
        timeValue += ((seconds < 10) ? ":0" : ":") + seconds
        timeValue += (hours >= 12) ? " P.M." : " A.M."
        
        document.clock.face.value = timeValue;
        
        timerID = setTimeout("showtime()",1000);
        timerRunning = true;

      }
      function startclock() {
        stopclock();
        showtime();
      }
      window.onload=startclock;
    </script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="frontpage.php" class="site_title"><i class="fa fa-paw"></i> <span>ISREF</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../templates/images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['username']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                <?php if($_SESSION['category'] == "Data Entry") : ?>
                  <li><a><i class="fa fa-home"></i> Data Entry <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a>Administration <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu"> 
                          <li><a href="administrationcapture.php">Capture</a></li>
                          <li><a href="administrationlisting.php">Listing</a></li>
                        </ul>
                      </li>
                      <li><a href="schoolsentry.php">Schools</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-list"></i>Verification<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">School records</a></li>
                    </ul>
                  </li>
                  <?php elseif($_SESSION['category'] == "Admin 1") : ?>

                    <li><a><i class="fa fa-edit"></i> Reports <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="countyreports.php">County</a></li>
                      <li><a href="subcountyreports.php">Sub County</a></li>
                      <li><a href="wardreports.php">Ward</a></li>
                      <li><a href="locationreports.php">Location</a></li>
                      <li><a href="schoolsreports.php">Schools</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-info"></i>Statistics<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Analysis Data</a></li>
                    </ul>
                  </li>

                <?php else : ?>

                  <li><a><i class="fa fa-home"></i> Data Entry <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a>Administration <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu"> 
                          <li><a href="administrationcapture.php">Capture</a></li>
                          <li><a href="administrationlisting.php">Listing</a></li>
                        </ul>
                      </li>
                      <li><a href="schoolsentry.php">Schools</a></li>
                    </ul>
                  </li>
                  
                  
                  <li><a><i class="fa fa-list"></i>Verification<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">School records</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-user"></i>Users<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="user.php">Available Users</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-edit"></i> Reports <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="reports.php">View Reports</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Projects <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="createproject.php">Create Project</a></li>
                      <li><a href="monitoring&evaluation.php">Monitoring & Evaluation</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-info"></i>Statistics<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="analysis.php">Data Analysis</a></li>
                    </ul>
                  </li>

                <?php endif; ?>

                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class="navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="../templates/images/user.png" alt=""> <?php echo $_SESSION['username']; ?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="../index.php?user=<?php echo $_SESSION['login']; ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
                <!-- <li>
                  <form name="clock">
                    <span class="float-left py-2">
                      <?php
                      // $Today = date('y:m:d',time());
                      // $new = date('l, F d, Y', strtotime($Today));
                      // echo $new;
                      ?> -->
                    <!-- </span>
                    <span class="float-left">
                    <input name="face" value="" class="dropdown-item" readonly=""/>
                    </span>
                  </form> 
               </li> -->
                
            </nav>
          </div>
        </div>