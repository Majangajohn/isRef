
							<!-- school infrustructure -->
							<div class="card">
								<div class="card-header" id="headingThree">
								<h2 class="mb-0">
									<button class="btn btn-block w-100" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="margin: auto;">
									School Infrastructure
									</button>
								</h2>
								</div>

								<div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
								<div class="card-body">

									
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Total classrooms:</label>
												<input type="number" name="classrooms" id="classrooms" autocomplete="off" class="form-control">
												<span id="classrooms-error"></span>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="form-group">
												<label class="required">Structure type:</label>
												<select class="form-control" name="structuretype" id="structuretype">
													<option value=""> -- select structure type -- </option>
													<?php foreach($classroomstructures as $classroomstructure) : ?>
														<option value="<?php echo $classroomstructure->structureid; ?>"><?php echo $classroomstructure->structurevalue; ?></option>
													<?php endforeach; ?>
												</select> 
												<span id="structuretype-error"></span>
											</div>
										</div>
										
									</div>
									<div class="row mx-1" style="border: 1px solid #eee;">
										<div class="col">
											<div class="form-group">
												<label class="required">Roof type:</label><br/>
												<?php foreach($rooftypes as $rooftype) :?>
												<label>
													<input type="checkbox" name="rtsheets[]" value="<?php echo $rooftype->typeid; ?>"> <?php echo $rooftype->typevalue; ?>
												</label>&nbsp;
												<?php endforeach; ?>
												
													
												<label>
													<input type="text" name="rooftypeother" autocomplete="off" class="form-control" placeholder="Other(specify)">
												</label>
											</div>
										</div>	
									</div>
								
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="form-group">
												<label class="float-left required">School fenced:</label>
													<select class="form-control" name="fenced" id="fenced">
														<option value=""> -- select whether compound fenced --</option>
														<?php foreach($opiniontypes as $opiniontype) : ?>
															<option value="<?php echo  $opiniontype->opinionid; ?>"><?php echo  $opiniontype->opinionvalue; ?></option>
														<?php endforeach; ?>
												</select> 
												<span id="fenced-error"></span>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-12">
												<div class="form-group">
													<label class="float-left required">Fence type:</label>
													<select class="form-control" name="fencetype" id="fencetype">
													<option value=""> -- select fence type --</option>
													<?php foreach($fencetypes as $fencetype) : ?>
														<option value="<?php echo $fencetype->typeid; ?>"><?php echo $fencetype->typevalue; ?></option>
													<?php endforeach; ?>
												</select> 
												<span id="fencetype-error"></span>
											</div>
										</div>
									</div>
									<!-- teachers details -->
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="form-group">
												<label class="float-left required">library room available:</label>
													<select class="form-control" name="library" id="library">
														<option value=""> -- choose whether library room is available -- </option>
														<?php foreach($opiniontypes as $opiniontype) : ?>
															<option value="<?php echo  $opiniontype->opinionid; ?>"><?php echo  $opiniontype->opinionvalue; ?></option>
														<?php endforeach; ?>
													</select> 
												<span id="library-error"></span>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Games/Sports room available:</label>
												<select class="form-control" name="games" id="games">
													<option value=""> -- choose whether sports room is available --</option>
													<?php foreach($opiniontypes as $opiniontype) : ?>
															<option value="<?php echo  $opiniontype->opinionid; ?>"><?php echo  $opiniontype->opinionvalue; ?></option>
														<?php endforeach; ?>
												</select> 
												<span id="games-error"></span>
											</div>
										</div>
									</div>
									<!-- non Teacher details -->
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Staff room available:</label>
												<select class="form-control" name="staffroom" id="staffroom">
													<option value=""> -- choose whether staff room is available --</option>
													<?php foreach($opiniontypes as $opiniontype) : ?>
														<option value="<?php echo  $opiniontype->opinionid; ?>"><?php echo  $opiniontype->opinionvalue; ?></option>
													<?php endforeach; ?>
												</select> 
												<span id="staffroom-error"></span>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Headteacher's office:</label>
												<select class="form-control" name="headteacherroom" id="headteacherroom">
													<option value=""> -- choose whether headteacher's office is available --</option>
													<?php foreach($opiniontypes as $opiniontype) : ?>
														<option value="<?php echo  $opiniontype->opinionid; ?>"><?php echo  $opiniontype->opinionvalue; ?></option>
													<?php endforeach; ?>
												</select>
												<span id="headteacherroom-error"></span>
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>
