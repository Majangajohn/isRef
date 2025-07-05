<?php require_once("../templates/includes/header.php");?>
        <!-- page content -->
        <div class="right_col bg-white" role="main">
                <div class="loader">
                        <img src="../templates/build/images/login.gif" alt="Loading..."/>
                </div>
                <div>
                    <div class="contentheader">
                        <i class="fa fa-table"></i> Create Project
                    </div>
                    <ul class="breadcrumb">
                        <li><a href="frontpage.php" class="text-info">ISREF</a></li> /
                        <li class="active">Projects</li> / 
                        <li class="active">Create Project</li>
                    </ul>
                </div>
                <div style="margin-top: -19px; margin-bottom: 21px;">
                <a  href="frontpage.php"><button class="btn btn-light btn-large mt-1" style="float: left;"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</button></a>
                <div style="text-align:center;">
                    Total Number of Projects:  <font color="green" style="font:bold 22px 'Aleo';">[<?php echo projects(); ?>]</font>
                </div>
                </div>

                <div class="row">
                  <div class="col">
                    <p> <?php echo displayMessage(); ?></p>
                  </div>
                </div>
                <fieldset class="border p-2">
                    <legend class="w-auto">
                    <button data-backdrop="static" data-keyboard="false"  class="btn btn-info px-2 py-1" data-toggle="modal" data-target="#exampleModalLong">
                    <i class="fa fa-plus-circle"></i>
                        Add Project
                    </button>
                    </legend>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <select class="form-control" name="projects">
                                    <option value=""> -- choose project facilitator --</option>
                                    <option value="LBDA"> -- LBDA --</option>
                                    <option value="RICE MILL"> -- RICE MILL --</option>
                                    <option value="CHEMELIL"> -- CHEMELIL --</option>
                                </select> 
                                                    
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <tr style="background: #f4f4f4;">
                                <th>Serial</th>
                                <th>Project Name</th>
                                <th>School</th>
                                <th>Facilitator</th>
                                <th>Project Type</th>
                                <th>Capacity</th>
                                <th>Start Date</th>
                                <th>Action</th>
                            </tr>
                            <?php
                              $i = 0;  
                            ?>
                            <?php foreach($schoolprojects as $schoolproject) : ?>
                            <tr class="record">   
                              <td><?php echo ++$i; ?></td>
                              <td>
                              <?php 
                              echo $schoolproject->pname; 
                              ?> <br/>
                              <label class="text-info" style="text-decoration: underline;"
                              data-toggle="modal" data-target="#exampleModalLong2"> (Read more...)
                              </label>
                              </td>
                              <td>
                              <?php 
                              echo $schoolproject->sname; 
                              $_SESSION['selectedproject'] = $schoolproject->sname;
                              
                              ?></td>
                              <td><?php echo $schoolproject->facilitator; ?></td>
                              <td><?php echo $schoolproject->type; ?></td>
                              <td><?php echo $schoolproject->size; ?></td>
                              <td><?php echo date('l, F d, Y', strtotime($schoolproject->date)); ?></td>
                              <td>
                              <a title="Click to edit the project" 
                                href="editproduct.php?editprojectid=<?php echo $schoolproject->sname; ?>">
                                <button class="btn btn-warning btn-sm" data-backdrop="static" data-keyboard="false"  
                                data-toggle="modal" data-target="#editproduct"><i class="fa fa-edit text-white"></i> </button> 
                              </a>

                              <a title="Click to delete the project" 
                                href="#" id="<?php echo $schoolproject->pname; ?>" class="delbutton">
                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash text-white"></i> </button> 
                              </a>
                              </td>
                            </tr>
                            <?php endforeach; ?>
                          </table>
                        </div>
                      </div>
                    </div>
                </fieldset>
        </div>   
        <!-- /page content -->

<!-- /selected school modal details -->
<div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong2Title" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <center><h6 id="exampleModalLong2Title" class="modal-title W-50 text-info"><?php echo $_SESSION['pname']. " ";?> Project details</h6></center>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col">
                <b> School Name: </b> &nbsp; <?php echo $_SESSION['sname']; ?> <br/>
                <b> School Category: </b> &nbsp; <?php echo getschoolcategory(1)->levelvalue; ?><br/>
                <b> project partnership: </b> &nbsp; <?php echo $_SESSION['facilitator']; ?><br/>
                <b> project type: </b> &nbsp; <?php echo $_SESSION['type']; ?><br/>
                <b> project type size: </b> &nbsp; <?php echo $_SESSION['size']; ?><br/>
                <b> Start Date: </b> &nbsp; <?php echo date('l, F d, Y', strtotime($_SESSION['date'])); ?><br/>
                <fieldset class="border p-2">
                    <legend class="w-auto"> <h6 class="text-info">Location </h6></legend>
                    <b> County: </b> &nbsp; <?php echo $_SESSION['pcounty']; ?> <br/>
                    <b> Sub County: </b> &nbsp; <?php echo $_SESSION['psubcounty']; ?> <br/>
                    <b> Constituency: </b> &nbsp; <?php echo $_SESSION['pconstituency']; ?> <br/>
                    <b> Ward: </b> &nbsp; <?php echo $_SESSION['pward']; ?> <br/>
                    <b> Location: </b> &nbsp; <?php echo $_SESSION['plocation']; ?> <br/>
                    <b> Sub Location: </b> &nbsp; <?php echo $_SESSION['psublocation']; ?> <br/>
                </fieldset>
            </div>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
          
        </div>
      </div>
    </div>
</div>
<!-- /selected school modal details -->

<!-- Button trigger modal -->

<!-- Modal -->
<form action="createproject.php" method="POST">
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="exampleModalLongTitle" class="modal-title W-50"><i class="fa fa-plus-circle add"></i> Add Project</h5>
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

<!-- /selected school modal details -->
</div>
<!-- /page content -->
<?php require_once("../templates/includes/projectfooter.php");?>