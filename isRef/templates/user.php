<?php require_once("../templates/includes/header.php");?>
        <!-- page content -->
        <div class="right_col" role="main" style="background: white; ">
            <div class="loader">
				<img src="../templates/build/images/loading.gif" alt="Loading..."/>
			</div>
            <div class="right_chat">
                <?php if(isset($_SESSION['assignrole'])) : ?>
                    <h3 class="title py-2">Edit user detail</h3>
                    <div class="row">
						<div class="col">
							<p><?php  echo displayMessage(); ?></p>		
						</div>
					</div>
                    <form action="user.php" method="POST">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="float-left">User Name:</label>
                                    <input class="form-control" value="<?php echo $usersspecific->username; ?>" readonly=""/>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="float-left">User Email:</label>
                                    <input class="form-control" value="<?php echo $usersspecific->email; ?>" readonly=""/>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="float-left">User Category:</label>
                                    <select class="form-control" name="usercategory" id="usercategory">
										<option value=""> -- Select user role --</option>
										<?php foreach($usercategories as $usercategory) : ?>
										<option value="<?php echo $usercategory->typevalue; ?>"><?php echo $usercategory->typevalue;?> </option>
										<?php endforeach; ?>
									</select>
                                    <span id="usercategory-error"> </span>
                                </div>
                            </div>
                            <div class="col-md-2"></div>    
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                
                            </div>
                            <div class="col">
                                 <div class="form-group mt-1">
                                    <button type="submit" class="btn float-right px-4" name="updateuser">
                                    Update 
                                    </button>
                                    <button type="submit" class="btn float-right px-4" name="canceluser">
                                    Cancel
                                    </button>
            
                                </div>
                            </div>
                            <div class="col-md-2">
                                
                            </div>
                            
                        </div>
                    </form>
                    
                <?php else : ?>
                <h3 class="title py-2">Available Users</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr style="background: #f4f4f4;">
                            <th>Number</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                        <?php $i = 0;  ?>
                        <?php foreach($usersdata as $userdata) : ?>
                        <tr>
                            <td><?php echo ++$i; ?></td>
                            <td> <?php echo $userdata->username; ?> </td>
                            <td> <?php echo $userdata->email; ?> </td>
                            <td> <?php echo $userdata->status; ?> </td>
                            <td> <?php echo $userdata->category; ?> </td>
                            <td>
                                <a href="user.php?assignrole=<?php echo $userdata->email; ?>" class="float-left" title="Click to Assign Role" > 
                                <button class="btn-warning btn-sm"> <i class="fa fa-edit text-white"></i></button> 
                                </a>&nbsp;

                                <a href="user.php?revokerole=<?php echo $userdata->email; ?>" class="float-left" title="Click to Revoke Role"> 
                                <button class="btn-danger btn-sm"> <i class="fa fa-trash text-white"></i></button> 
                                </a>&nbsp;

                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
                <?php unset($_SESSION['assignrole']); ?>
            </div>
        </div>
        <!-- /page content -->
<?php require_once("../templates/includes/footer.php");?>