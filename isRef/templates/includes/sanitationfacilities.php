							<!-- sanitation facilities -->
							<div class="card">
								<div class="card-header" id="headingFour">
								<h2 class="mb-0">
									<button class="btn btn-block w-100" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="margin: auto;">
									Sanitation Facilities
									</button>
								</h2>
								</div>

								<div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
								<div class="card-body">

									
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label class="float-left required">Sanitation facilities available:</label>
												<select class="form-control" name="sanitation" id="sanitation">
													<option value=""> -- choose whether sanitation facility available -- </option>
													<?php foreach($opiniontypes as $opiniontype) : ?>
														<option value="<?php echo  $opiniontype->opinionid; ?>"><?php echo  $opiniontype->opinionvalue; ?></option>
													<?php endforeach; ?>
												</select> 
												<span id="sanitation-error"></span>
											</div>
										</div>
										
									</div>
									<div class="row">
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Male/boys number of toiltes/latrines:</label>
												<input type="number" name="boystoilets" id="boystoilets" autocomplete="off" class="form-control">
												<span id="boystoilets-error"></span> 
											</div>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Female/girls number of toiltes/latrines:</label>
												<input type="number" name="girltoilets" id="girltoilets" autocomplete="off" class="form-control">
												<span id="girltoilets-error"></span> 
											</div>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Shared number of toiltes/latrines by students/pupils:</label>
												<input type="number" name="ssharedtoilets" id="ssharedtoilets" autocomplete="off" class="form-control">
												<span id="ssharedtoilets-error"></span> 
											</div>
										</div>
										
									</div>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label class="float-left required">Teachers toilets/latrines available:</label>
												<select class="form-control" name="ttoilets" id="ttoilets">
													<option value=""> -- choose whether teachers toilet available --</option>
													<?php foreach($opiniontypes as $opiniontype) : ?>
														<option value="<?php echo  $opiniontype->opinionid; ?>"><?php echo  $opiniontype->opinionvalue; ?></option>
													<?php endforeach; ?>
												</select> 
												<span id="ttoilets-error"></span>
											</div>
										</div>
										
									</div>
									<div class="row">
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Male teachers number of toiltes/latrines:</label>
												<input type="number" name="tmaletoilets" id="tmaletoilets" autocomplete="off" class="form-control">
												<span id="tmaletoilets-error"></span> 
											</div>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Female teachers  number of toiltes/latrines:</label>
												<input type="number" name="tfemaletoilets" id="tfemaletoilets" autocomplete="off" class="form-control">
												<span id="tfemaletoilets-error"></span> 
											</div>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Shared number of toiltes/latrines by teachers:</label>
												<input type="number" name="tsharedtoilets" id="tsharedtoilets" autocomplete="off" class="form-control">
												<span id="tsharedtoilets-error"></span> 
											</div>
										</div>
										
									</div>
									<div class="row mx-1" style="border: 1px solid #eee;">
										<div class="col">
											<div class="form-group">
												<label class="required">Waste management:</label><br/>
												<?php foreach($wastes as $waste) :?>
												<label>
												<input type="checkbox" name="waste[]" value="<?php echo $waste->typeid; ?>"><?php echo $waste->typevalue; ?></label>
												<?php endforeach;?>
												<label>
													<input type="text" name="otherwaste" autocomplete="off" class="form-control" placeholder="Other(specify)">
												</label>
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>