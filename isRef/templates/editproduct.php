<?php require_once("../templates/includes/editproductheader.php");?>
        <!-- page content -->
        <div class="right_col" role="main">
        <!-- Modal -->
        <form action="#" method="POST">
        <div class="modal fade" id="editproduct" tabindex="-1" role="dialog" aria-labelledby="editproductTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 id="editproductTitle" class="modal-title W-50"><i class="fa fa-plus-circle add"></i> Add Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <div class="row">
                    <div class="col">
                    <div class="form-group">
                        <label>Project Name:</label>
                        <input type="text" name="pname" autocomplete="off" class="form-control" required>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <fieldset class="border p-2">
                            <legend class="w-auto" style="fontsize: 7px;">
                        <h6>School Location Details </h6>
                            </legend>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                    <label>County:</label> 
                                    <select class="form-control" name="pcounty" id="pcounty" required>
                                        <option value="">--choose county-- </option>
                                            <?php foreach($counties as $county) : ?>
                                            <option value="<?php echo  $county->County; ?>"><?php echo  $county->County; ?></option>
                                            <?php endforeach; ?>
                                    </select>                
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                    <label>Sub County:</label> 
                                    <select class="form-control" name="psubcounty" id="psubcounty" required>
                                        <option value="">--choose sub county-- </option>
                                            <?php foreach($subcounties as $subcounty) : ?>
                                            <option value="<?php echo  $subcounty->Subcounty; ?>"><?php echo  $subcounty->Subcounty; ?></option>
                                            <?php endforeach; ?>
                                    </select>                
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                    <label>Constituency:</label> 
                                    <select class="form-control" name="pconstituency" id="pconstituency" required>
                                        <option value="">--choose constituency-- </option>
                                            <?php foreach($constituencies as $constituency) : ?>
                                            <option value="<?php echo  $constituency->Constituency; ?>"><?php echo  $constituency->Constituency; ?></option>
                                            <?php endforeach; ?>
                                    </select>                
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                    <label>ward:</label> 
                                    <select class="form-control" name="pward" id="pward" required>
                                        <option value="">--choose ward-- </option>
                                            <?php foreach($wards as $ward) : ?>
                                            <option value="<?php echo  $ward->Ward; ?>"><?php echo  $ward->Ward; ?></option>
                                            <?php endforeach; ?>
                                    </select>                
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                    <label>Location:</label> 
                                    <select class="form-control" name="plocation" id="plocation" required>
                                        <option value="">--choose location-- </option>
                                            <?php foreach($locations as $location) : ?>
                                            <option value="<?php echo  $location->Location; ?>"><?php echo  $location->Location; ?></option>
                                            <?php endforeach; ?>
                                    </select>                
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                    <label>Sublocation:</label> 
                                    <select class="form-control" name="psublocation" id="psublocation" required>
                                        <option value="">--choose sub location-- </option>
                                            <?php foreach($sublocations as $sublocation) : ?>
                                            <option value="<?php echo  $sublocation->Sublocation; ?>"><?php echo  $sublocation->Sublocation; ?></option>
                                            <?php endforeach; ?>
                                    </select>                
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <div class="form-group">
                        <label>School category:</label>
                        <select class="form-control" name="scategory" id="scategory" required>
                            <option value="">--choose school category level--</option>
                                <?php foreach($schoollevels as $schoollevel) : ?>
                                    <option value="<?php echo  $schoollevel->levelid; ?>"><?php echo  $schoollevel->levelvalue; ?></option>
                                <?php endforeach; ?>
                        </select> 
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                    <div class="form-group">
                        <label>School name:</label>
                        <select class="form-control" name="sname" id="sname" required>
                            <option value="">--choose school name-- </option>
                                <?php foreach($schools as $school) : ?>
                                    <option value="<?php echo  $school->School; ?>"><?php echo  $school->School; ?></option>
                                <?php endforeach; ?>
                        </select> 
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <div class="form-group">
                        <label>Project Facilitator:</label>
                        <input type="text" name="pfacilitator" id="pfacilitator" autocomplete="off" required class="form-control">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <div class="form-group">
                        <label>Project type:</label>
                        <input type="text" name="ptype" id="type" required autocomplete="off" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <div class="form-group">
                        <label>Project Size/Number:</label>
                        <input type="text" name="psize" id="psize" autocomplete="off" class="form-control" required>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <div class="form-group">
                        <label>Project Start Date:</label>
                        <input type="date" name="pdate" autocomplete="off" class="form-control" required>
                    </div>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
                <button type="submit" class="btn btn-success" name="saveproject"> <i class="fa fa-save"></i>Save</button>
                </div>
            </div>
            </div>
        </form>
        <!-- Modal -->
        </div>
        <!-- /page content -->
<?php require_once("../templates/includes/footer.php");?>