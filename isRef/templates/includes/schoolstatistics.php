
							<!-- school statistics -->
							<div class="card">
								<div class="card-header" id="headingTwo">
								<h2 class="mb-0">
									<button class="btn btn-block w-100" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="margin: auto;">
									School statistics
									</button>
								</h2>
								</div>

								<div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
								<div class="card-body">

									
									<div class="row">
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Male students/pupils:</label>
												<input type="number" name="malestudents" id="malestudents" autocomplete="off" class="form-control">
												<span id="malestudents-error"></span>
											</div>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Female students/pupils:</label>
												<input type="number" name="femalestudents" id="femalestudents" autocomplete="off" class="form-control">
												<span id="femalestudents-error"></span>
											</div>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Total students/pupils:</label>
												<input type="number" name="totalstudents" id="totalstudents" autocomplete="off" class="form-control">
												<span id="totalstudents-error"></span>
											</div>
										</div>
										
									</div>
								
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12">
												<div class="form-group">
													<label class="float-left required">students/pupils in lower:</label>
													<input type="number" name="lowerstudents" id="lowerstudents" autocomplete="off" class="form-control">
													<span id="lowerstudents-error"></span>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="form-group">
													<label class="float-left required">students/pupils in upper:</label>
													<input type="number" name="upperstudents" id="upperstudents" autocomplete="off" class="form-control">
													<span id="upperstudents-error"></span>
											</div>
										</div>
									</div>
									<!-- teachers details -->
									<div class="row">
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Male Teachers:</label>
												<input type="number" name="mteachers" id="mteachers" autocomplete="off" class="form-control">
												<span id="mteachers-error"></span>
											</div>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Female Teachers:</label>
												<input type="number" name="fteachers" id="fteachers" autocomplete="off" class="form-control">
												<span id="fteachers-error"></span>
											</div>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Total Teachers:</label>
												<input type="number" name="tteachers" id="tteachers" autocomplete="off" class="form-control">
												<span id="tteachers-error"></span>
											</div>
										</div>
									</div>
									<!-- non Teacher details -->
									<div class="row">
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Male Non-Teachers:</label>
												<input type="number" name="mnteachers" id="mnteachers" autocomplete="off" class="form-control">
												<span id="mnteachers-error"></span>
											</div>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Female Non-Teachers:</label>
												<input type="number" name="fnteachers" id="fnteachers" autocomplete="off" class="form-control">
												<span id="fnteachers-error"></span>
											</div>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Total Non-Teachers:</label>
												<input type="number" name="tnteachers" id="tnteachers" autocomplete="off" class="form-control">
												<span id="tnteachers-error"></span>
											</div>
										</div>
									</div>
									<!-- disabled details -->
									<div class="row">
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Disabled male students:</label>
												<input type="number" name="dmstudents" id="dmstudents" autocomplete="off" class="form-control">
												<span id="dmstudents-error"></span>
											</div>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Disabled female students:</label>
												<input type="number" name="dfstudents" id="dfstudents" autocomplete="off" class="form-control">
												<span id="dfstudents-error"></span>
											</div>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Total disabled Students:</label>
												<input type="number" name="tdstudents" id="tdstudents" autocomplete="off" class="form-control">
												<span id="tdstudents-error"></span>
											</div>
										</div>
									</div>

									<!-- School Contact Teacher details -->
									<div class="row mx-1" style="border: 1px solid #eee;">
										<div class="col">
											<div class="form-group">
												<label >Disability types:</label><br/>
												<?php foreach($disabilitytypes as  $disabilitytype) : ?>
												<label><input type="checkbox" name = "disability[]" value = "<?php echo $disabilitytype->typeid; ?>"><?php echo $disabilitytype->typevalue; ?></label>&nbsp;
												<?php endforeach; ?>
												<label>
													<input type="text" name="otherdisability" autocomplete="off" class="form-control" placeholder="Other(specify)">
												</label>
											</div>
										</div>
									</div>

									
								</div>
								</div>
							</div>