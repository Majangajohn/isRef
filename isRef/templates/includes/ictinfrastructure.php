							<!-- ICT Infrastructure-->
							<div class="card">
								<div class="card-header" id="headingNine">
								<h2 class="mb-0">
									<button class="btn btn-block w-100" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine" style="margin: auto;">
									ICT Infrastructure
									</button>
								</h2>
								</div>

								<div id="collapseNine" class="collapse show" aria-labelledby="headingNine" data-parent="#accordionExample">
								<div class="card-body">

									
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="form-group">
												<label class="float-left">Functional computers available:</label>
												<select class="form-control" name="fcavailable" id="fcavailable">
													<option value=""> -- Choose whether school has functional computers --</option>
													<?php foreach($opiniontypes as $opiniontype) : ?>
														<option value="<?php echo  $opiniontype->opinionid; ?>"><?php echo  $opiniontype->opinionvalue; ?></option>
													<?php endforeach; ?>
												</select> 
												<span id="fcavailable-error"></span>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-12">
												<div class="form-group">
													<label class="float-left">Number of Computers:</label>
													<input type="number" name="compnum" autocomplete="off" class="form-control">
												</div>
											</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="form-group">
												<label class="float-left">Computer lab availability:</label>
												<select class="form-control" name="clabavailable" id="clabavailable">
													<option value=""> -- Choose whether school has computer lab --</option>
													<?php foreach($opiniontypes as $opiniontype) : ?>
														<option value="<?php echo  $opiniontype->opinionid; ?>"><?php echo  $opiniontype->opinionvalue; ?></option>
													<?php endforeach; ?>
												</select> 
												<span id="clabavailable-error"></span>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="form-group">
												<label class="float-left"> Internet connectivity available:</label>
												<select class="form-control" name="icavailable" id="icavailable">
													<option value=""> -- Choose whether school has internet connectivity --</option>
													<?php foreach($opiniontypes as $opiniontype) : ?>
														<option value="<?php echo  $opiniontype->opinionid; ?>"><?php echo  $opiniontype->opinionvalue; ?></option>
													<?php endforeach; ?>
												</select> 
												<span id="icavailable-error"></span>
											</div>
										</div>
									</div>
									<div class="row mx-1" style="border: 1px solid #eee;">
										<div class="col">
											<div class="form-group">
												<label>Internet connection mode:</label><br/>
												<?php foreach($connectivitymodes as $connectivitymode) : ?>
												<label>
												<input type="checkbox" name="connectionmode[]" value="<?php echo $connectivitymode->typeid; ?>">
												<?php echo $connectivitymode->typevalue; ?>
												</label>&nbsp;
												<?php endforeach; ?>
												<label>
													<input type="text" name="otherconnectionmode" autocomplete="off" class="form-control" placeholder="Other(specify)">
												</label>
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>