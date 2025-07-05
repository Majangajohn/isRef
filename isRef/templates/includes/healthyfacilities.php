							<!-- Health Facilities-->
							<div class="card">
								<div class="card-header" id="headingSeven">
								<h2 class="mb-0">
									<button class="btn btn-block w-100" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" style="margin: auto;">
									Health Facilities
									</button>
								</h2>
								</div>

								<div id="collapseSeven" class="collapse show" aria-labelledby="headingSeven" data-parent="#accordionExample">
								<div class="card-body">

									
									<div class="row">
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="form-group">
												<label class="float-left">Medical facility access:</label>
												<select class="form-control" name="mfacility" id="mfacility">
													<option value=""> -- Choose whether school has medical facility access --</option>
													<?php foreach($opiniontypes as $opiniontype) : ?>
														<option value="<?php echo  $opiniontype->opinionid; ?>"><?php echo  $opiniontype->opinionvalue; ?></option>
													<?php endforeach; ?>
												</select> 
												<span id="mfacility-error"></span>
											</div>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="form-group">
												<label class="float-left">Trained medical personnel:</label>
												<select class="form-control" name="mpersonnel" id="mpersonnel">
													<option value=""> -- Choose whether school has trained medical personnel --</option>
													<?php foreach($opiniontypes as $opiniontype) : ?>
														<option value="<?php echo  $opiniontype->opinionid; ?>"><?php echo  $opiniontype->opinionvalue; ?></option>
													<?php endforeach; ?>
												</select> 
												<span id="mpersonnel-error"></span>
											</div>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="form-group">
												<label class="float-left">Medical cases per term:</label>
												<input type="number" name="medicalcases" id="medicalcases" autocomplete="off" class="form-control">
												<span id="medicalcases-error"></span>
											</div>
										</div>
						
									</div>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label class="float-left">Emergency medical response:</label>
												<textarea type="text" name="emergencymedicalcases"
												autocomplete="off" class="form-control" rows="3"></textarea>
												<span id="emergencymedicalcases-error"></span>
											</div>
										</div>
										
									</div>
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="form-group">
												<label class="float-left">Distance to nearest health facility:</label>
												<select class="form-control" name="dhfacility" id="dhfacility">
													<option value=""> -- choose average average distance to nearest health facility --</option>
													<?php foreach($distances as $distance) : ?>
														<option value="<?php echo  $distance->typeid; ?>"><?php echo  $distance->typevalue; ?></option>
													<?php endforeach; ?>
											</select> 
											<span id="dhfacility-error"></span>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="form-group">
												<label> Health facility type: </label>
												<select class="form-control" name="hftype" id="hftype">
													<option value="">choose health facility is type</option>
													<?php foreach($schooltypes as $schooltype):?>
													<option value="<?php echo $schooltype->typeid; ?>"><?php echo $schooltype->typevalue; ?></option>
													<?php endforeach; ?>
												</select> 
												<span id="hftype-error"></span>
											</div>
											
										</div>
									</div>
								</div>
								</div>
							</div>