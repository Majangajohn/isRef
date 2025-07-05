<?php require_once("../templates/includes/header.php");?>
    <!-- page content -->
    <div class="right_col" role="main">
		<div class="loader">
			<img src="../templates/build/images/loading.gif" alt="Loading..."/>
		</div>
        <div class="right_chat">
		<?php if(!isset($_SESSION['editing'])) : ?>
			<h3 class="title py-2">Administration Listing</h3>
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
		<?php else : ?>
		<?php if(isset($_SESSION['countyedit'])) : ?>
				<h3 class="title py-2">Administration Edit </h3>
				<div class="row">
					<div class="col">
						<p> <?php echo displayMessage(); ?></p>
					</div>
				</div>
				<form method="POST" action="administrationlisting.php">
					<div class="row">
                        <div class="col-md-2"></div>
                        <div class="col">
                            <div class="form-group">
                                <label class="float-left">County Name:</label>
                                <input class="form-control" name="countyname" value="<?php echo $_SESSION['editedcounty']; ?>"/>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
					<div class="row">
                            <div class="col-md-2">
                                
                            </div>
                            <div class="col">
                                 <div class="form-group mt-1">
                                    <button type="submit" class="btn float-right px-4" name="updatecounty">
                                    Update 
                                    </button>
                                    <button type="submit" class="btn float-right px-4" name="cancelcounty">
                                    Cancel
                                    </button>
            
                                </div>
                            </div>
                            <div class="col-md-2">
                                
                            </div>
                            
                        </div>
				</form>
		<?php else : ?>
		<?php endif; ?>
        <?php unset($_SESSION['countyedit']); ?>

		<!-- sub county edit -->
		<?php if(isset($_SESSION['subcountyedit'])) : ?>
				<h3 class="title py-2">Administration Edit </h3>
				<div class="row">
					<div class="col">
						<p> <?php echo displayMessage(); ?></p>
					</div>
				</div>
				<form method="POST" action="administrationlisting.php">
					<div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="float-left">County Name:</label>
                                <input class="form-control" name="county" value="<?php echo $_SESSION['selectedsubcountycounty']; ?>" readonly=""/>
                            </div>
                        </div>
                        <div class="col">
						<div class="form-group">
                                <label class="float-left">Subcounty Name:</label>
                                <input class="form-control" name="subcounty" value="<?php echo $_SESSION['selectedsubcountysubcounty']; ?>"/>
                            </div>
						</div>
                    </div>
					<div class="row">
                            <div class="col-md-2">
                                
                            </div>
                            <div class="col">
                                 <div class="form-group mt-1">
                                    <button type="submit" class="btn float-right px-4" name="updatesubcounty">
                                    Update 
                                    </button>
                                    <button type="submit" class="btn float-right px-4" name="cancelsubcounty">
                                    Cancel
                                    </button>
            
                                </div>
                            </div>
                            <div class="col-md-2">
                                
                            </div>
                            
                        </div>
				</form>
		<?php else : ?>
		<?php endif; ?>
		<?php 
			unset($_SESSION['subcountyedit']); 
			unset($_SESSION['selectedsubcountycounty']); 
			unset($_SESSION['selectedsubcountysubcounty']); 
		?>

		<!-- constituency edit -->
		<?php if(isset($_SESSION['constituencyedit'])) : ?>
				<h3 class="title py-2">Administration Edit </h3>
				<div class="row">
					<div class="col">
						<p> <?php echo displayMessage(); ?></p>
					</div>
				</div>
				<form method="POST" action="administrationlisting.php">
					<div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label class="float-left">County Name:</label>
                                <input class="form-control" name="county" value="<?php echo $_SESSION['selectedconstituencycounty']; ?>" readonly=""/>
                            </div>
                        </div>
						<div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label class="float-left">Subcounty Name:</label>
                                <input class="form-control" name="subcounty" value="<?php echo $_SESSION['selectedconstituencysubcounty']; ?>" readonly=""/>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
						<div class="form-group">
                                <label class="float-left">Constituency Name:</label>
                                <input class="form-control" name="constituency" value="<?php echo $_SESSION['selectedconstituencyconstituency']; ?>"/>
                            </div>
						</div>
                    </div>
					<div class="row">
                            <div class="col-md-2">
                                
                            </div>
                            <div class="col">
                                 <div class="form-group mt-1">
                                    <button type="submit" class="btn float-right px-4" name="updateconstituency">
                                    Update 
                                    </button>
                                    <button type="submit" class="btn float-right px-4" name="cancelconstituency">
                                    Cancel
                                    </button>
            
                                </div>
                            </div>
                            <div class="col-md-2">
                                
                            </div>
                            
                        </div>
				</form>
		<?php else : ?>
		<?php endif; ?>
		<?php 
			unset($_SESSION['constituencyedit']); 
			unset($_SESSION['selectedconstituencycounty']); 
			unset($_SESSION['selectedconstituencysubcounty']); 
			unset($_SESSION['selectedconstituencyconstituency']); 
		?>

		<!-- ward edit -->
		<?php if(isset($_SESSION['wardedit'])) : ?>
				<h3 class="title py-2">Administration Edit </h3>
				<div class="row">
					<div class="col">
						<p> <?php echo displayMessage(); ?></p>
					</div>
				</div>
				<form method="POST" action="administrationlisting.php">
					<div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="float-left">County Name:</label>
                                <input class="form-control" value="<?php echo $_SESSION['selectedwardcounty']; ?>" readonly=""/>
                            </div>
                        </div>
						<div class="col">
                            <div class="form-group">
                                <label class="float-left">Subcounty Name:</label>
                                <input class="form-control"  value="<?php echo $_SESSION['selectedwardsubcounty']; ?>" readonly=""/>
                            </div>
						</div>
					</div>	
					<div class="row">
                        <div class="col">
							<div class="form-group">
                                <label class="float-left">Constituency Name:</label>
                                <input class="form-control" value="<?php echo $_SESSION['selectedwardconstituency']; ?>" readonly=""/>
                            </div>
						</div>
						<div class="col">
							<div class="form-group">
                                <label class="float-left">Ward Name:</label>
                                <input class="form-control" name="wardname" value="<?php echo $_SESSION['selectedwardward']; ?>"/>
                            </div>
						</div>
                    </div>
					<div class="row">
                            <div class="col-md-2">
                                
                            </div>
                            <div class="col">
                                 <div class="form-group mt-1">
                                    <button type="submit" class="btn float-right px-4" name="updateward">
                                    Update 
                                    </button>
                                    <button type="submit" class="btn float-right px-4" name="cancelward">
                                    Cancel
                                    </button>
            
                                </div>
                            </div>
                            <div class="col-md-2">
                                
                            </div>
                            
                        </div>
				</form>
		<?php else : ?>
		<?php endif; ?>
		<?php 
			unset($_SESSION['wardedit']); 
			unset($_SESSION['selectedwardcounty']); 
			unset($_SESSION['selectedwardsubcounty']); 
			unset($_SESSION['selectedwardconstituency']); 
			unset($_SESSION['selectedwardward']);
		?>


		<?php endif; ?>
		<?php unset($_SESSION['editing']); ?>

			<?php if(isset($_SESSION['county'])) : ?>
					<div class="accordion" id="accordionExample">
						<div class="card">
							<div class="card-header" id="headingOne">
								<h2 class="mb-0">
									<button class="btn btn-block w-100" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="margin: auto;">
										Registered Counties
									</button>
								</h2>
							</div>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body" >
									<div class="row">
									    <div class="col">
										<form action="" method="POST" id="myform">
										<div class="table-responsive">
									      	<table class="table table-bordered">
											  	<tr style="background: #f4f4f4;">
													<th>Number</th>
													<th>County Name</th>
													<th>Action </th>
				  								</tr>
												  <?php $i = 0;  ?>
												  <?php foreach($counties as $county) : ?>
												<tr>
													<td><?php echo ++$i; ?></td>
													<td><?php echo $county->County_Name; ?></td>

													<td style="margin: 10px;">
														<a href="administrationlisting.php?countyedit=<?php echo $county->County_Name; ?>" 
														class="btn-warning btn-sm" title="click to Edit County"><i class="fa fa-edit text-white"></i></a> &nbsp;

														<a href="administrationlisting.php?countydelete=<?php echo $county->County_Name; ?>" 
														class="btn-danger btn-sm inline" title="click to Delete County"><i class="fa fa-trash"></i></a>
													</td>
												</tr>
												  <?php endforeach; ?>
											</table>
										</div>
										</form>
									    </div>
									      		
									</div>
								</div>
							</div>
						</div>

					</div>

			<?php else : ?>

			<?php endif; ?>
			<?php unset($_SESSION['county']);?>	
		<!-- subcounty -->
		<?php if(isset($_SESSION['subcounty'])) : ?>
			<div class="accordion" id="accordionExample">
						<div class="card">
							<div class="card-header" id="headingOne">
								<h2 class="mb-0">
									<button class="btn btn-block w-100" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="margin: auto;">
										Registered Sub Counties
									</button>
								</h2>
							</div>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body">
								<form action="administrationlisting.php" method="POST">
									<div class="row">
										<div class="col">
											<div class="form-group">
												<select class="form-control" name="county" id="county">
													<option value="">-- select county -- </option>
													<?php foreach($counties as $county) : ?>
													<option value="<?php echo  $county->County_Name; ?>"><?php echo  $county->County_Name; ?></option>
													<?php endforeach; ?>
												</select> 
											</div>
										</div>
									</div>
									</form>
									<div class="row">
									    <div class="col">
											<div class="table-responsive">
												<table class="table table-bordered">
													<tr style="background: #f4f4f4;">
														<th>Number</th>
														<th>County</th>
														<th>Subcounty</th>
														<th>Action </th>
													</tr>
													<?php $i = 0;  ?>
													<?php if(isset($_SESSION['viewsubcountycategory'])) : ?>
														<?php foreach($subcountydetails as $subcountycountydetail) : ?>
													<tr>
														<td><?php echo ++$i; ?></td>
														<td><?php echo $subcountycountydetail->county; ?></td>
														<td><?php echo $subcountycountydetail->subcounty; ?></td>
														<td>
															<a href="administrationlisting.php?subcountyedit=<?php echo $subcountycountydetail->subcounty; ?>" 
															class="btn-info btn-sm"><i class="fa fa-edit"></i>&nbsp; Edit</a> &nbsp;

															<a href="administrationlisting.php?subcountydelete=<?php echo $subcountycountydetail->subcounty; ?>" 
															class="btn-danger btn-sm inline"><i class="fa fa-trash"></i> &nbsp;Delete</a>
														</td>
													</tr>
													<?php endforeach; ?>
													<?php else : ?>
													<?php foreach($subcountycountydetails as $subcountycountydetail) : ?>
													<tr>
														<td><?php echo ++$i; ?></td>
														<td><?php echo $subcountycountydetail->county; ?></td>
														<td><?php echo $subcountycountydetail->subcounty; ?></td>
														<td>
															<a href="administrationlisting.php?subcountyedit=<?php echo $subcountycountydetail->subcounty; ?>" 
															class="btn-info btn-sm"><i class="fa fa-edit"></i>&nbsp; Edit</a> &nbsp;

															<a href="administrationlisting.php?subcountydelete=<?php echo $subcountycountydetail->subcounty; ?>" 
															class="btn-danger btn-sm inline"><i class="fa fa-trash"></i> &nbsp;Delete</a>
														</td>
													</tr>
													<?php endforeach; ?>
														
													<?php endif; ?>
													
												</table>
											</div>
									    </div>
									      		
									</div>
								</div>
							</div>
						</div>

					</div>
		<?php else : ?>

		<?php endif; ?>

		<?php 
		unset($_SESSION['viewsubcountycategory']);
		unset($_SESSION['subcounty']);
		?>	

		<!-- constituency -->
		<?php if(isset($_SESSION['constituency'])) : ?>
			<div class="accordion" id="accordionExample">
						<div class="card">
							<div class="card-header" id="headingOne">
								<h2 class="mb-0">
									<button class="btn btn-block w-100" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="margin: auto;">
										Registered Constituencies
									</button>
								</h2>
							</div>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body">
								<form>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<select class="form-control" name="county" id="constituencycounty">
													<option value="">-- select county -- </option>
													<?php foreach($counties as $county) : ?>
													<option value="<?php echo  $county->County_Name; ?>"><?php echo  $county->County_Name; ?></option>
													<?php endforeach; ?>
												</select> 
											</div>
										</div>
										<script type="text/javascript">
											const constituencycountySelector = document.getElementById("constituencycounty")

											constituencycountySelector.addEventListener('change', function(){
													var constituencycounty = constituencycountySelector.options[constituencycountySelector.selectedIndex].value;

													$.ajax({
														type: "GET",
														url: "http://localhost/LBDA/main/administrationlisting.php",
														data: {
															constituencycounty: constituencycounty
														},
														success: function(result){
															window.location.href = 'administrationlisting.php'
														}, 
														error: function(xhr, ajaxOptions, thrownerror) { }
													});
											})
										</script>
									</div>
									</form>
									<div class="row">
									    <div class="col">
											<div class="table-responsive">
												<table class="table table-bordered">
													<tr style="background: #f4f4f4;">
														<th>Number</th>
														<th>County</th>
														<th>Subcounty</th>
														<th>Constituency</th>
														<th>Action </th>
													</tr>
													<?php $i = 0;  ?>
													<?php if(isset($_SESSION['viewconstituencycategory'])) : ?>
														<?php foreach($selectedconstituencycategorydetails as $selectedconstituencycategorydetail) : ?>
													<tr>
														<td><?php echo ++$i; ?></td>
														<td><?php echo $selectedconstituencycategorydetail->county; ?></td>
														<td><?php echo $selectedconstituencycategorydetail->subcounty; ?></td>
														<td><?php echo $selectedconstituencycategorydetail->constituency; ?></td>
														<td>
															<a href="administrationlisting.php?constituencyedit=<?php echo $selectedconstituencycategorydetail->constituency; ?>" 
															class="btn-info btn-sm"><i class="fa fa-edit"></i>&nbsp; Edit</a> &nbsp;

															<a href="administrationlisting.php?constituencydelete=<?php echo $selectedconstituencycategorydetail->constituency; ?>" 
															class="btn-danger btn-sm inline"><i class="fa fa-trash"></i> &nbsp;Delete</a>
														</td>
													</tr>
													<?php endforeach; ?>
													<?php else : ?>
													<?php foreach($constituencycategorydetails as $constituencycategorydetail) : ?>
													<tr>
														<td><?php echo ++$i; ?></td>
														<td><?php echo $constituencycategorydetail->county; ?></td>
														<td><?php echo $constituencycategorydetail->subcounty; ?></td>
														<td><?php echo $constituencycategorydetail->constituency; ?></td>
														<td>
															<a href="administrationlisting.php?constituencyedit=<?php echo $constituencycategorydetail->constituency; ?>" 
															class="btn-info btn-sm"><i class="fa fa-edit"></i>&nbsp; Edit</a> &nbsp;

															<a href="administrationlisting.php?constituencydelete=<?php echo $constituencycategorydetail->constituency; ?>" 
															class="btn-danger btn-sm inline"><i class="fa fa-trash"></i> &nbsp;Delete</a>
														</td>
													</tr>
													<?php endforeach; ?>
														
													<?php endif; ?>
													
												</table>
											</div>
									    </div>
									      		
									</div>
								</div>
							</div>
						</div>

					</div>
		<?php else : ?>

		<?php endif; ?>
		<?php 
		unset($_SESSION['viewconstituencycategory']);	
		unset($_SESSION['constituency']);
		
		?>

		<!-- ward -->
		<?php if(isset($_SESSION['ward'])) : ?>

			<div class="accordion" id="accordionExample">
						<div class="card">
							<div class="card-header" id="headingOne">
								<h2 class="mb-0">
									<button class="btn btn-block w-100" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="margin: auto;">
										Registered Wards
									</button>
								</h2>
							</div>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body">
								<form action="administrationlisting.php">
									<div class="row">
										<div class="col">
											<div class="form-group">
												<select class="form-control" id="wardcounty">
													<option value="">-- select county -- </option>
													<?php foreach($counties as $county) : ?>
													<option value="<?php echo  $county->County_Name; ?>">
														<a href="administrationlisting.php?countyvalue=<?php echo  $county->County_Name; ?>"> 
															<?php echo $county->County_Name; ?>
														</a>
													</option>
													<?php endforeach; ?>
												</select> 
											</div>
										</div>

										<div class="col">
											<div class="form-group">
												<select class="form-control" id="wardsubcounty">
													<option value="">-- select subcounty -- </option>
													<?php foreach($subcounties as $subcounty) : ?>
													<option value="<?php echo  $subcounty->subcounty; ?>"><?php echo  $subcounty->subcounty; ?></option>
													<?php endforeach; ?>
												</select> 
											</div>
										</div>

										<div class="col">
											<div class="form-group">
												<select class="form-control" id="wardconstituency">
													<option value="">-- select constituency -- </option>
													<?php foreach($constituencies as $constituency) : ?>
													<option value="<?php echo  $constituency->constituency; ?>"><?php echo  $constituency->constituency; ?></option>
													<?php endforeach; ?>
												</select> 
											</div>
										</div>
										<script type="text/javascript">

										const categorySelector = document.getElementById("category")

										categorySelector.addEventListener('change', function(){
											var category = categorySelector.options[categorySelector.selectedIndex].value;

											$.ajax({
												type: "GET", 
												url: "http://localhost/LBDA/main/administrationlisting.php",
												data: {
													category: category
												}, 
												success: function(results){
													window.location.href = 'administrationlisting.php'
												},
												error: function(xhr, ajaxOptions, thrownerror) { }
											});
										})

										const countySelector = document.getElementById("wardcounty")

										countySelector.addEventListener('change', function(){
											var county = countySelector.options[countySelector.selectedIndex].value;

											$.ajax({
												type: "GET",
												url: "http://localhost/LBDA/main/administrationlisting.php",
												data: {
													wardcounty: county
												},
												success: function(result){
													let parsedResult = JSON.parse(result)	

													var subcountyInnerHtml = `<option value=""> -- Select subcounty -- </option>`

													parsedResult.forEach(subcounty => {

														subcountyInnerHtml += `<option value="${subcounty.subcounty}">${subcounty.subcounty}</option>`;

													});

													const subcountySelect = document.getElementById("wardsubcounty")

													subcountySelect.innerHTML = subcountyInnerHtml;
												}
											});
										})

										const subcountyselector = document.getElementById("wardsubcounty");

										subcountyselector.addEventListener('change', function(){

											var subcounty = subcountyselector.options[subcountyselector.selectedIndex].value;

											$.ajax({
												type: "GET",
												url: "http://localhost/LBDA/main/administrationlisting.php",
												data: {
													subcountyname: subcounty
												},
												success: function(result){

													let parsedResult = JSON.parse(result)	

													var constituencyInnerHtml = `<option value=""> -- Select constituency-- </option>`

													parsedResult.forEach(constituency => {

														constituencyInnerHtml += `<option value="${constituency.constituency}">${constituency.constituency}</option>`;

													});

													const constituencySelect = document.getElementById("wardconstituency")

													constituencySelect.innerHTML = constituencyInnerHtml;
												}

											})
											
										})

										const wardconstituencySelector = document.getElementById("wardconstituency")

										wardconstituencySelector.addEventListener('change', function(){
											var wardconstituencySelectorcategory = wardconstituencySelector.options[wardconstituencySelector.selectedIndex].value;

											$.ajax({
												type: "GET", 
												url: "http://localhost/LBDA/main/administrationlisting.php",
												data: {
													wardconstituencySelector: wardconstituencySelectorcategory
												}, 
												success: function(results){
													window.location.href = 'administrationlisting.php'
												},
												error: function(xhr, ajaxOptions, thrownerror) { }
											});
										})
									</script>
									</div>
									</form>
									<div class="row">
									    <div class="col">
											<div class="table-responsive">
												<table class="table table-bordered">
													<tr style="background: #f4f4f4;">
														<th>Number</th>
														<th>County</th>
														<th>Subcounty</th>
														<th>Constituency</th>
														<th>Wards</th>
														<th>Action </th>
													</tr>
													<?php $i = 0;  ?>
													<?php 
													if(isset($_SESSION['wardconstituencySelector']) && isset($_SESSION['wardcounty']) && isset($_SESSION['wardsubcounty'])) : ?>

														<?php foreach($selectedwardcategorydetails as $selectedwardcategorydetail) : ?>
													<tr>
														<td><?php echo ++$i; ?></td>
														<td><?php echo $selectedwardcategorydetail->county; ?></td>
														<td><?php echo $selectedwardcategorydetail->subcounty; ?></td>
														<td><?php echo $selectedwardcategorydetail->constituency; ?></td>
														<td><?php echo $selectedwardcategorydetail->ward; ?></td>
														<td>
															<a href="administrationlisting.php?wardedit=<?php echo $selectedwardcategorydetail->ward; ?>" 
															class="btn-info btn-sm"><i class="fa fa-edit"></i>&nbsp; Edit</a> &nbsp;

															<a href="administrationlisting.php?warddelete=<?php echo $selectedwardcategorydetail->ward; ?>" 
															class="btn-danger btn-sm inline"><i class="fa fa-trash"></i> &nbsp;Delete</a>
														</td>
													</tr>
													<?php endforeach; ?>
													<?php else : ?>
													<?php foreach($wardcategorydetails as $wardcategorydetail) : ?>
													<tr>
														<td><?php echo ++$i; ?></td>
														<td><?php echo $wardcategorydetail->county; ?></td>
														<td><?php echo $wardcategorydetail->subcounty; ?></td>
														<td><?php echo $wardcategorydetail->constituency; ?></td>
														<td><?php echo $wardcategorydetail->ward; ?></td>
														<td>
															<a href="administrationlisting.php?wardedit=<?php echo $wardcategorydetail->ward; ?>" 
															class="btn-info btn-sm"><i class="fa fa-edit"></i>&nbsp; Edit</a> &nbsp;

															<a href="administrationlisting.php?warddelete=<?php echo $wardcategorydetail->ward; ?>" 
															class="btn-danger btn-sm inline"><i class="fa fa-trash"></i> &nbsp;Delete</a>
														</td>
													</tr>
													<?php endforeach; ?>
														
													<?php endif; ?>
													
												</table>
											</div>
									    </div>
									      		
									</div>
								</div>
							</div>
						</div>

					</div>
		<?php else : ?>

		<?php endif; ?>
		<?php 
		unset($_SESSION['wardcounty']);
		unset($_SESSION['wardsubcounty']);
		unset($_SESSION['wardconstituencySelector']);
		unset($_SESSION['ward']);
		?>

        </div>

    </div>
    <!-- page content -->
<?php require_once("../templates/includes/listingfooter.php");?>