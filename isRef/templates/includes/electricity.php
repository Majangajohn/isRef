							<!-- Electricity and energy resources-->
							<div class="card">
								<div class="card-header" id="headingEight">
								<h2 class="mb-0">
									<button class="btn btn-block w-100" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight" style="margin: auto;">
									Electricity and Energy Resources
									</button>
								</h2>
								</div>

								<div id="collapseEight" class="collapse show" aria-labelledby="headingEight" data-parent="#accordionExample">
								<div class="card-body">

									
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label class="float-left">School power connected:</label>
												<select class="form-control" name="spconnected" id="spconnected">
													<option value="">Choose whether school is power connected</option>
													<?php foreach($opiniontypes as $opiniontype) : ?>
														<option value="<?php echo  $opiniontype->opinionid; ?>"><?php echo  $opiniontype->opinionvalue; ?></option>
													<?php endforeach; ?>
												</select> 
												<span id="spconnected-error"></span>
											</div>
										</div>
						
									</div>
									<div class="row mx-1" style="border: 1px solid #eee;">
										<div class="col">
											<div class="form-group">
												<label>Source of power:</label><br/>
												<?php foreach($psources as $psource) :?>
												<label>
												<input type="checkbox"  name="powersource[]" value="<?php echo $psource->typeid; ?>">
												<?php echo $psource->typevalue; ?>
												</label>&nbsp;
												<?php endforeach; ?>
												<label>
													<input type="text" name="otherpowersource" autocomplete="off" class="form-control" placeholder="Other(specify)">
												</label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="form-group">
												<label class="float-left">Power Supply reliable:</label>
												<select class="form-control" name="psreliable">
													<option value=""> -- Choose whether power supply is reliable --</option>
													<?php foreach($opiniontypes as $opiniontype) : ?>
														<option value="<?php echo  $opiniontype->opinionid; ?>"><?php echo  $opiniontype->opinionvalue; ?></option>
													<?php endforeach; ?>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="form-group">
												<label class="float-left">Backup generator available:</label>
												<select class="form-control" name="bgavailable">
													<option value=""> -- Choose whether backup generator available --</option>
													<?php foreach($opiniontypes as $opiniontype) : ?>
														<option value="<?php echo  $opiniontype->opinionid; ?>"><?php echo  $opiniontype->opinionvalue; ?></option>
													<?php endforeach; ?>
												</select> 
											</div>
										</div>
						
									</div>
									<div class="row mx-1" style="border: 1px solid #eee;">
										<div class="col">
											<div class="form-group">
												<label>Source of cooking energy:</label><br/>
												<?php foreach($cesources as $cesource) :?>
												<label>
												<input type="checkbox"  name="cesource[]" value="<?php echo $cesource->typeid; ?>">
												<?php echo $cesource->typevalue; ?>
												</label>&nbsp;
												<?php endforeach; ?> 
												<label>
													<input type="text" name="othercesource" autocomplete="off" class="form-control" placeholder="Other(specify)">
												</label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="form-group">
												<label class="float-left">Cooking energy expense:</label>
												<select class="form-control" name="ceexpense" id="ceexpense">
													<option value=""> -- Choose amount spent on cooking energy --</option>
													<?php foreach($ceexpenses as $ceexpense) : ?>
													<option value="<?php echo $ceexpense->typeid; ?>"><?php echo $ceexpense->typevalue; ?></option>
													<?php endforeach; ?>
												</select> 
												<span id="ceexpense-error"></span>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="form-group">
												<label class="float-left">Monthly electricity bill:</label>
												<select class="form-control" name="mebill" id="mebill">
													<option value=""> -- Choose monthly electric bill --</option>
													<?php foreach($electricbills as $electricbill) : ?>
													<option value="<?php echo $electricbill->typeid; ?>"><?php echo $electricbill->typevalue; ?></option>
													<?php endforeach; ?>
												</select> 
												<span id="mebill-error"></span>
											</div>
										</div>
						
									</div>
								</div>
								</div>
							</div>