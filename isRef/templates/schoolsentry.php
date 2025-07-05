<?php require_once("../templates/includes/header.php");?>
        <!-- page content -->
        <div class="right_col" role="main">
			<div class="loader">
				<img src="../templates/build/images/loading.gif" alt="Loading..."/>
			</div>
			 <div class="right_chat">
					<h3 class="title py-2">Schools Needs Assessment</h3>
					<div class="row">
						<div class="col">
							<p><?php  echo displayMessage(); ?></p>		
						</div>
					</div>
					<form action="schoolsentry.php" method="POST" onsubmit = "return validateschoolsentry(); ">
						<div class="accordion" id="accordionExample">
							
							<!-- school information -->
							<?php require("../templates/includes/schoolinformation.php");?>
							<!-- school statistics -->
							<?php require("../templates/includes/schoolstatistics.php");?>
							<!-- school infrastructure -->
							<?php require("../templates/includes/schoolinfrastructure.php");?>
							<!-- school sanitation facilities -->
							<?php require("../templates/includes/sanitationfacilities.php");?>
							<!-- school environmental data-->
							<?php require("../templates/includes/environmentaldata.php");?>
							<!-- school water sources -->
							<?php require("../templates/includes/watersources.php");?>
							<!-- school health facilities -->
							<?php require("../templates/includes/healthyfacilities.php");?>
							<!-- school electricity -->
							<?php require("../templates/includes/electricity.php");?>
							<!-- school ict infrastructure -->
							<?php require("../templates/includes/ictinfrastructure.php");?>
							<!-- school suggestions -->
							<?php require("../templates/includes/suggestion.php");?>
						</div>
						<div class="form-group mt-1">

							<button type="submit" class="btn float-right px-4" name="schoolsregister">
									Submit  
							</button>
			
						</div>
					</form>

			</div>

				
			</div>
        </div>
        <!-- /page content -->
<?php require_once("../templates/includes/schoolsfooter.php");?>