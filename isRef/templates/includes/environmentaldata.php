<!-- Environmental Data-->
<div class="card">
								<div class="card-header" id="headingFive">
								<h2 class="mb-0">
									<button class="btn btn-block w-100" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="margin: auto;">
									Environmental Data
									</button>
								</h2>
								</div>

								<div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample">
								<div class="card-body">

									
									<div class="row">
										<div class="col-md-3 col-sm-6 col-sm-12">
											<div class="form-group">
												<label class="float-left required">School coverage(Acres):</label>
												<input type="text" name="coverage" id="coverage" autocomplete="off" class="form-control">
												<span id="coverage-error"></span>
											</div>
										</div>
										<div class="col-md-3 col-sm-6 col-sm-12">
											<div class="form-group">
												<label class="float-left required">School built Area(Acres):</label>
												<input type="text" name="built" id="built" autocomplete="off" class="form-control">
												<span id="built-error"></span>
											</div>
										</div>
										<div class="col-md-3 col-sm-6 col-sm-12">
											<div class="form-group">
												<label class="required">Space for tree planting available:</label>
												<select class="form-control" name="treespace" id="treespace">
													<option value=""> -- Select whether there is tree planting space -- </option>
													<?php foreach($opiniontypes as $opiniontype) : ?>
														<option value="<?php echo  $opiniontype->opinionid; ?>"><?php echo  $opiniontype->opinionvalue; ?></option>
													<?php endforeach; ?>
												</select> 
												<span id="treespace-error"></span>
											</div>
										</div>
										<div class="col-md-3 col-sm-6 col-sm-12">
											<div class="form-group">
												<label class="required">Tree planting initiative:</label>
												<select class="form-control" name="tinitiative" id="tinitiative">
													<option value=""> -- Select whether there is tree planting initiative -- </option>
													<?php foreach($opiniontypes as $opiniontype) : ?>
														<option value="<?php echo  $opiniontype->opinionid; ?>"><?php echo  $opiniontype->opinionvalue; ?></option>
													<?php endforeach; ?>
												</select> 
												<span id="tinitiative-error"></span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label class="float-left required">Tree planting initiative summary:</label>
													<textarea name="tireason" class="form-control" rows="3">
													</textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12">
											<label class="required"> Environmental club available: </label>
											<select class="form-control" name="eclub" id="eclub">
												<option value=""> -- choose whether there is environmental club -- </option>
												<?php foreach($opiniontypes as $opiniontype) : ?>
														<option value="<?php echo  $opiniontype->opinionid; ?>"><?php echo  $opiniontype->opinionvalue; ?></option>
													<?php endforeach; ?>
											</select> 
											<span id="eclub-error"></span>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Age opinion Environmental Education child introduction:</label>
													<input type="text" name="eopinion" id="eopinion" autocomplete="off" class="form-control">
													<span id="eopinion-error"></span>
											</div>
										</div>
										
									</div>
									<div class="row mx-1" style="border: 1px solid #eee;">
										<div class="col">
											<div class="form-group">
												<label class="required">Fruit Trees grown in school:</label><br/>
												<?php foreach($fruittrees as $fruittree) : ?> 
												<label><input type="checkbox" name="fruittree[]" value="<?php echo $fruittree->typeid; ?>"><?php echo $fruittree->typevalue; ?></label>&nbsp;
												<?php endforeach; ?>
												<label>
													<input type="text" name="otherfruittree" autocomplete="off" class="form-control" placeholder="Other(specify)">
												</label>
											</div>
										</div>
									</div>
									<div class="row mx-1 mt-2" style="border: 1px solid #eee;">
									<div class="form-group">
										<div class="col"> 
												<label class="required">Other trees in school:</label><br/>
												<?php foreach($trees as $tree) : ?> 
												<label><input type="checkbox" name="tree[]" value="<?php echo $tree->typeid; ?>"><?php echo $tree->typevalue; ?></label>&nbsp;
												<?php endforeach; ?>
												<label>
													<input type="text" name="othertree" autocomplete="off" class="form-control" placeholder="Other(specify)">
												</label>
											</div>
										</div>
										
									</div>
									<div class="row mx-1 mt-2" style="border: 1px solid #eee;">
										<div class="col">
											
											<label class="required">Tress use:</label><br/>
											<?php foreach($treesuse as $treeuse) : ?> 
												<label><input type="checkbox" name="treeuse[]" value="<?php echo $treeuse->typeid; ?>"><?php echo $treeuse->typevalue; ?></label>&nbsp;
												<?php endforeach; ?>
											
										</div>
									</div>
									<div class="row">
										<div class="col-md-4 col-sm-12 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Environment Head Name:</label>
												<input type="text" name="ehname" id="ehname" autocomplete="off" class="form-control">
												<span id="ehname-error"></span>
											</div>
										</div>
										<div class="col-md-4 col-sm-12 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Environment Head Tel:</label>
												<input type="text" name="ehtel" id="ehtel" autocomplete="off" class="form-control">
												<span id="ehtel-error"></span>
												
											</div>
										</div>
										<div class="col-md-4 col-sm-12 col-xs-12">
											<div class="form-group">
												<label class="float-left required">Environment Head Email:</label>
												<input type="email" name="ehemail" id="ehemail" autocomplete="off" class="form-control">
												<span id="ehemail-error"></span>
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>