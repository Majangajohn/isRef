
							<!-- school information -->
							<div class="card">
								<div class="card-header" id="headingOne">
								<h2 class="mb-0">
									<button class="btn btn-block w-100" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="margin: auto;">
									School information
									</button>
								</h2>
								</div>

								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body">

									<!-- location details -->
									<div class="row">
										<div class="col-md-3 col-sm-6 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Institution Name:</label>
												<input type="text" name="schoolname" id="schoolname" autocomplete="off" class="form-control">
												<span id="name-error"></span>
											</div>
										</div>
										<div class="col-md-3 col-sm-6 col-xs-12">
											<div class="form-group">
												<label class="float-left required">School Code:</label>
												<input type="number" name="schoolcode" id="schoolcode" autocomplete="off" class="form-control">
												<span id="code-error"></span>
											</div>
										</div>
										<div class="col-md-3 col-sm-6 col-xs-12">
											<div class="form-group">
												<label class="required">Level:</label>
												<select class="form-control" name="schoollevel" id="schoollevel">
													<option value=""> -- Select school level -- </option>
													<?php foreach($schoollevels as $schoollevel):?>
													<option value="<?php echo $schoollevel->levelid; ?>"><?php echo $schoollevel->levelvalue; ?></option>
													<?php endforeach; ?>
												</select> 
												<span id="level-error"></span>
											</div>
										</div>
										<div class="col-md-3 col-sm-6 col-xs-12">
											<div class="form-group">
												<label class="required">Type:</label>
												<select class="form-control" name="schooltype" id="schooltype">
													<option value=""> -- Select school type -- </option>
													<?php foreach($schooltypes as $schooltype):?>
													<option value="<?php echo $schooltype->typeid; ?>"><?php echo $schooltype->typevalue; ?></option>
													<?php endforeach; ?>
												</select>
												<span id="type-error"></span>
											</div>
										</div>
										
									</div>
									<!-- location details continuation -->
									<div class="row">
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<label class="required">County:</label>
												<select class="form-control" name="county" id="schoolcounty">
												<option value="">-- select county -- </option>
													<?php foreach($counties as $county) : ?>
														<option value="<?php echo  $county->County_Name; ?>"><?php echo  $county->County_Name; ?></option>
													<?php endforeach; ?>
												</select> 
												<span id="county-error"></span>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<label class="required">Sub County:</label>
												<select class="form-control" name="subcounty" id="schoolsubcounty">
													<option value="">-- Select subcounty -- </option>
														<?php foreach($subcounties as $subcounty) : ?>
															<option value="<?php echo  $subcounty->subcounty; ?>"><?php echo  $subcounty->subcounty; ?></option>
														<?php endforeach; ?>
												</select> 
												<span id="subcounty-error"></span>
											</div>
										</div>
										<div class="col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label class="required">Constituency:</label>
													<select class="form-control" name="constituency" id="schoolconstituency">
														<option value="">-- select constituency -- </option>
														<?php foreach($constituencies as $constituency) : ?>
															<option value="<?php echo $constituency->constituency; ?>"><?php echo  $constituency->constituency; ?></option>
														<?php endforeach; ?>
													</select>
													<span id="constituency-error"></span>
												</div>
										</div>
									</div>
									<!-- location details -->
									<div class="row">
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<label class="required">Ward:</label>
												<select class="form-control" name="sward" id="schoolward">
														<option value="">-- select ward -- </option>
														<?php foreach($wards as $ward) : ?>
															<option value="<?php echo $ward->ward; ?>"><?php echo  $ward->ward; ?></option>
														<?php endforeach; ?>
												</select>
												<span id="ward-error"></span>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
												<div class="form-group">
													<label class="required">Location:</label>
													<input type="text" name="slocation" id="slocation" autocomplete="off"class="form-control">
													<span id="location-error"></span>
												</div>
										</div>
										<div class="col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label class="required">Sub Location:</label>
													<input type="text" name="sublocation" id="sublocation" autocomplete="off" class="form-control">
													<span id="sublocation-error"></span>
												</div>
										</div>
										
									</div>
									<!-- School Contact Teacher details -->
									<div class="row">
										<div class="col-md-6 col-sm-12 col-xs-12">
												<div class="form-group">
													<label class="required">School Physical Address:</label>
													<input  class="form-control" type="text" name="sphyaddress" id="sphyaddress" autocomplete="off">
													<span id="physicaladdress-error"></span>
												</div>
										</div>
										<div class="col-md-6 col-sm-12 col-xs-12">
											<div class="form-group">
												<label class="required">Facility type:</label>
													<select class="form-control" name="facility_type" id="facility_type">
													<option value=""> -- Select school facilty type --</option>
													<?php foreach($schoolfacilitytypes as $schoolfacilitytype) : ?>
													<option value="<?php echo $schoolfacilitytype->facilityid;  ?>"><?php echo $schoolfacilitytype->facilityvalue;  ?> </option>
													<?php endforeach; ?>
													</select>
												<span id="facilitytype-error"></span>
											</div>
										</div>
									</div>

									<!-- School Contact Teacher details -->
									<div class="row">
										<div class="col-md-4 col-sm-12 col-xs-12">
												<div class="form-group">
													<label class="required">Contact Person Name:</label>
													<input  class="form-control" type="text" name="scontactteacher" id="scontactteacher" autocomplete="off">
													<span id="contactperson-error"></span>
												</div>
										</div>
										<div class="col-md-4 col-sm-12 col-xs-12">
											<div class="form-group">
												<label class="required">Contact Person Tel:</label>
												<input type="phone" name="scontactteachertel" id="scontactteachertel" autocomplete="off" class="form-control">
											</div>
											<span id="contactpersontel-error"></span>
										</div>
										<div class="col-md-4 col-sm-12 col-xs-12">
											<div class="form-group">
												<label class="required">Contact Person Email:</label>
												<input type="email" name="scontactteacheremail" id="scontactteacheremail"autocomplete="off" class="form-control">
												<span id="contactpersonemail-error"></span>
											</div>
										</div>
									</div>

									
								</div>
								</div>
							</div>