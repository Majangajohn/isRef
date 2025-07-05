							<!-- Water Resources Facilities-->
							<div class="card">
								<div class="card-header" id="headingSix">
								<h2 class="mb-0">
									<button class="btn btn-block w-100" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" style="margin: auto;">
									Water Resources Facilities
									</button>
								</h2>
								</div>

								<div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordionExample">
								<div class="card-body">

									
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label class="float-left">Water Access:</label>
												<select class="form-control" name="water" id="water">
													<option value=""> -- choose whether school has water acess --</option>
														<?php foreach($opiniontypes as $opiniontype) : ?>
															<option value="<?php echo  $opiniontype->opinionid; ?>"><?php echo  $opiniontype->opinionvalue; ?></option>
														<?php endforeach; ?>
												</select> 
												<span id="water-error"></span>
											</div>
										</div>
						
									</div>
									<div class="row mx-1" style="border: 1px solid #eee;">
										<div class="col">
											<div class="form-group">
												<label>Main Source of water:</label><br/>
												<?php foreach($watersources as $watersource) :?>
												<label>
													<input type="checkbox" name="wsources[]" value="<?php echo $watersource->typeid; ?>"> 
													<?php echo $watersource->typevalue; ?>
												</label>&nbsp;
												<?php endforeach; ?>
												<label>
													<input type="text" name="wsourcesother" autocomplete="off" class="form-control" placeholder="Other(specify)">
												</label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4 col-sm-12 col-xs-12">
											<div class="form-group">
												<label class="float-left">Average water spenditure(Kshs):</label>
												<select class="form-control" name="waterexpense" id="waterexpense">
													<option value=""> --choose average water expenditure per month--</option>
													<?php foreach($watercosts as $watercost) :?>
													<option value="<?php echo $watercost->typeid; ?>"><?php echo $watercost->typevalue; ?></option>
													<?php endforeach; ?>
											</select> 
											<span id="waterexpense-error"></span>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<label> Water treated: </label>
												<select class="form-control" name="treatedwater" id="treatedwater">
													<option value=""> -- choose whether water is treated --</option>
													<?php foreach($opiniontypes as $opiniontype) : ?>
														<option value="<?php echo  $opiniontype->opinionid; ?>"><?php echo  $opiniontype->opinionvalue; ?></option>
													<?php endforeach; ?>
												</select> 
												<span id="treatedwater-error"></span>
											</div>
											
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<label> Water reliable: </label>
												<select class="form-control" name="waterreliable" id="waterreliable">
													<option value=""> -- choose whether water is reliable --</option>
													<?php foreach($opiniontypes as $opiniontype) : ?>
														<option value="<?php echo  $opiniontype->opinionid; ?>"><?php echo  $opiniontype->opinionvalue; ?></option>
													<?php endforeach; ?>
												</select> 
												<span id="waterreliable-error"></span>
											</div>
											
										</div>
									</div>
									<div class="row">
										<div class="col-md-4 col-sm-12 col-xs-12">
											<div class="form-group">
												<label class="float-left">Water storage facilities:</label>
												<select class="form-control" name="waterstorage" id="waterstorage">
													<option value=""> -- choose whether school has water storage facilities --</option>
													<?php foreach($opiniontypes as $opiniontype) : ?>
														<option value="<?php echo  $opiniontype->opinionid; ?>"><?php echo  $opiniontype->opinionvalue; ?></option>
													<?php endforeach; ?>
											</select> 
											<span id="waterstorage-error"></span>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<label> Distance to water source: </label>
												<select class="form-control" name="distancewater" id="distancewater">
													<option value=""> -- choose distance to water source -- </option>
													<?php foreach($distances as $distance) : ?>
														<option value="<?php echo  $distance->typeid; ?>"><?php echo  $distance->typevalue; ?></option>
													<?php endforeach; ?>
												</select> 
												<span id="distancewater-error"></span>
											</div>
											
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="form-group">
												<label> Livestock available: </label>
												<select class="form-control" name="lavailable" id="lavailable">
													<option value=""> -- choose school has livestock -- </option>
													<?php foreach($opiniontypes as $opiniontype) : ?>
														<option value="<?php echo  $opiniontype->opinionid; ?>"><?php echo  $opiniontype->opinionvalue; ?></option>
													<?php endforeach; ?>
												</select> 
												<span id="lavailable-error"></span>
											</div>
											
										</div>
									</div>
									<div class="row mx-1" style="border: 1px solid #eee;">
										<div class="col">
											<label>Type of livestock:</label>
											<div class="form-group">
												<label class="float-left">
													<input type="checkbox">Cows Approx No
												</label>&nbsp;
												<label>
													<input type="number" name="cows" autocomplete="off"  class="form-control">
												</label>
												<div class="clear-fix"></div>
												
											</div>
											<div class="form-group">
												<label class="float-left">
													<input type="checkbox">Pigs Approx No
												</label>&nbsp;
												<label>
													<input type="number" name="pigs" autocomplete="off"  class="form-control">
												</label>
												<div class="clear-fix"></div>
												
											</div>
										</div>
										<div class="col">
											<label></label>
											<div class="form-group">
												<label class="float-left">
													<input type="checkbox">Goats Approx No
												</label>&nbsp;
												<label>
													<input type="number" name="goats" autocomplete="off"  class="form-control">
												</label>
												<div class="clear-fix"></div>
												
											</div>
											<div class="form-group">
												<label class="float-left">
													<input type="checkbox">Sheeps Approx No
												</label>&nbsp;
												<label>
													<input type="number" name="sheep" autocomplete="off"  class="form-control">
												</label>
												<div class="clear-fix"></div>
												
											</div>
										</div>
										<div class="col">
											<label></label>
											<div class="form-group">
												<label class="float-left">
													<input type="checkbox">Others
												</label>&nbsp;
												<label>
													<input type="text" name="lotype" autocomplete="off"  class="form-control" placeholder="specify type"><br/>
													<input type="number" name="lonumber" autocomplete="off"  class="form-control" placeholder="approximate No">
												</label>
												<div class="clear-fix"></div>
												
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>