<?php require_once("../templates/includes/header.php");?>
        <!-- page content -->
        <div class="right_col" role="main">
			<div class="loader">
				<img src="../templates/build/images/loading.gif" alt="Loading..."/>
			</div>
        	<div class="right_chat">
				<h3 class="title py-2">Administration Entry</h3>
				<div class="row">
					<div class="col">
						<p> <?php echo displayMessage(); ?></p>
					</div>
				</div>

				<div class="row py-3 style="border-bottom: 1px solid #f4f4f4>
					<div class="col">
						<label>Category:</label>
						<select class="form-control" id="category">
							<option value="">-- Select administrative category --</option>
							<option value="county">County</option>
							<option value="subcounty">Subcounty</option>
							<option value="constituency">Constituency</option>
							<option value="ward">Ward</option>
									 				
						</select>
										
					</div>
				</div>	
									
						<?php if(isset($_SESSION['county'])) : ?>
							<form action="administrationcapture.php" method="POST" onsubmit = "return validateadministrationcountyfields();">
								<div class="accordion" id="accordionExample">
									<div class="card">
									    <div class="card-header" id="headingOne">
									      <h2 class="mb-0">
									        <button class="btn btn-block w-100" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="margin: auto;">
									          County Register Details
									        </button>
									      </h2>
									    </div>

									    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
									      <div class="card-body" >

									      	<!-- location details -->
									      	<div class="row">
									      		<div class="col">
									      			<div class="form-group">
											 			<label>County</label>
											 			<input type="text" name="county" id="county" autocomplete="off" class="form-control">
														 <span id="county-error"></span>
											 		</div>
									      		</div>
									      		
									      	</div>
									      </div>
									    </div>
									</div>

								</div>

								<div class="form-group mt-1">
						
									<button type="submit" class="btn float-right px-4" name="countydetails">
											Submit
									</button>
				
						 		</div>
								
							</form>

						<?php else : ?>

						<?php endif; ?>
						<?php unset($_SESSION['county']);?>

					<?php if(isset($_SESSION['subcounty'])) : ?>
						<form action="administrationcapture.php" method="POST" onsubmit = "return validateadministrationsubcountyfields();">
							<div class="accordion" id="accordionExample">
								<div class="card">
								    <div class="card-header" id="headingTwo">
								      <h2 class="mb-0">
								        <button class="btn btn-block w-100" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="margin: auto;">
								          SubCounty Register Details
								        </button>
								      </h2>
								    </div>
								    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
								      <div class="card-body">
								      	<!-- location details -->
								      	<div class="row">
								      		<div class="col">
								      			<div class="form-group">
										 			<label>county</label>
										 			<select class="form-control" name="county" id="county">
														<option value="">-- select county -- </option>
														<?php foreach($counties as $county) : ?>
															<option value="<?php echo  $county->County_Name; ?>"><?php echo  $county->County_Name; ?></option>
														<?php endforeach; ?>
												</select> 
												<span id="county-error"></span>
										 		</div>
								      		</div>
								      		<div class="col">
								      			<div class="form-group">
										 			<label>Sub County</label>
										 			<input type="text" name="subcounty" id="subcounty" autocomplete="off" class="form-control">
													 <span id="subcounty-error"></span>
										 		</div>
								      		</div>		      		
								      	</div>
								      </div>
								    </div>
							  	</div>
							</div>
							<div class="form-group mt-1">
						
								<button type="submit" class="btn float-right px-4" name="subcountydetails">
											Submit
									</button>
				
						 	</div>

						</form>	
					<?php else : ?>

					<?php endif; ?>

					<?php unset($_SESSION['subcounty']);?>

					<?php if(isset($_SESSION['constituency'])) : ?>
						<form action="administrationcapture.php" method="POST" onsubmit = "return validateadministrationsubcountyfields();">
							<div class="accordion" id="accordionExample">

							<div class="card">
								    <div class="card-header" id="headingTwo">
								      <h2 class="mb-0">
								        <button class="btn btn-block w-100" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="margin: auto;">
								          Constituency Register Details
								        </button>
								      </h2>
								    </div>
								    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
								      <div class="card-body">
								      	<!-- location details -->
								      	<div class="row">
								      		<div class="col">
								      			<div class="form-group">
										 			<label>county</label>
										 			<select class="form-control" name="county" id="county">
														<option value="">-- select county -- </option>
														<?php foreach($counties as $county) : ?>
															<option value="<?php echo  $county->County_Name; ?>"><?php echo  $county->County_Name; ?></option>
														<?php endforeach; ?>
												</select> 
												<span id="county-error"></span>
										 		</div>
								      		</div>
											  <div class="col">
								      			<div class="form-group">
										 			<label>sub county</label>
										 			<select class="form-control" name="subcounty" id="subcounty">
														<option value="">-- Select subcounty -- </option>
														<?php foreach($subcounties as $subcounty) : ?>
															<option value="<?php echo  $subcounty->subcounty; ?>"><?php echo  $subcounty->subcounty; ?></option>
														<?php endforeach; ?>
												</select> 
												<span id="subcounty-error"></span>
										 		</div>
								      		</div>
								      		<div class="col">
								      			<div class="form-group">
										 			<label>Constituency: </label>
										 			<input type="text" name="constituency" id="constituency" autocomplete="off" class="form-control">
													 <span id="constituency-error"></span>
										 		</div>
								      		</div>		      		
								      	</div>
								      </div>
								    </div>
							  	</div>
							</div>
							<div class="form-group mt-1">
						
								<button type="submit" class="btn float-right px-4" name="constituencydetails">
											Submit
									</button>
				
						 	</div>

						</form>	
					<?php else : ?>

					<?php endif; ?>

					<?php unset($_SESSION['constituency']);?>	


					<?php if(isset($_SESSION['ward'])) : ?>
						<form action="administrationcapture.php" method="POST" onsubmit = "return validateadministrationsubcountyfields();">
							<div class="accordion" id="accordionExample">
								<div class="card">
								    <div class="card-header" id="headingThree">
								      <h2 class="mb-0">
								        <button class="btn btn-block w-100" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="margin: auto;">
								          Ward Registration Details
								        </button>
								      </h2>
								    </div>
								    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
								      <div class="card-body">
								      	<div class="card-body">
								      	<!-- location details -->
								      	<div class="row">
								      		<div class="col">
								      			<div class="form-group">
										 			<label>county</label>
										 			<select class="form-control" name="county" id="county">
														<option value="">-- select county -- </option>
														<?php foreach($counties as $county) : ?>
															<option value="<?php echo  $county->County_Name; ?>"><?php echo  $county->County_Name; ?></option>
														<?php endforeach; ?>
												</select> 
												<span id="county-error"></span>
										 		</div>
								      		</div>
											<div class="col">
								      			<div class="form-group">
										 			<label>sub county</label>
										 			<select class="form-control" name="subcounty" id="subcounty">
														<option value="">-- select subcounty -- </option>
														<?php foreach($subcounties as $subcounty) : ?>
															<option value="<?php echo  $subcounty->subcounty; ?>"><?php echo  $subcounty->subcounty; ?></option>
														<?php endforeach; ?>
													</select> 
												<span id="subcounty-error"></span>
										 		</div>
								      		</div>		      		
								      	</div>
								      	<div class="row">
								      		<div class="col">
								      			<div class="form-group">
										 			<label>Constituency: </label>
										 			<select class="form-control" name="constituency" id="constituency">
														<option value="">-- select constituency -- </option>
														<?php foreach($constituencies as $constituency) : ?>
															<option value="<?php echo $constituency->constituency; ?>"><?php echo  $constituency->constituency; ?></option>
														<?php endforeach; ?>
													</select> 
													<span id="constituency-error"></span>
										 		</div>
								      		</div>
								      		<div class="col">
								      			<div class="form-group">
										 			<label>Ward: </label>
										 			<input type="text" name="ward" id="ward" autocomplete="off" class="form-control">
													 <span id="ward-error"></span>
										 		</div>
								      		</div>
								      	</div>
								      </div>
								      </div>
								    </div>
							  	</div>

							</div>
							<div class="form-group mt-1">
					
								<button type="submit" class="btn float-right px-4" name="warddetails">
										Submit
								</button>
			
					 		</div>
							
						</form>
					<?php else : ?>

					<?php endif; ?>

					<?php unset($_SESSION['ward']);?>
			</div>
            
        </div>
        <!-- /page content -->
<?php require_once("../templates/includes/footer.php");?>