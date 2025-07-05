<?php require_once("../templates/includes/header.php");?>
        <!-- page content -->
        <div class="right_col" role="main" style="background: #ffffff; ">
            <div class="loader" style="background: #eee; ">
				<img src="../templates/build/images/giphy.gif" alt="Loading..."/>
			</div>
            <div class="rightchat">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr style="background: #f4f4f4;">
                            <th>Serial</th>
                            <th>County</th>
                            <th>Subcounties</th>
                            <th>Constituencies</th>
                            <th>Wards</th>
                            <th>Locations</th>
                            <th>Sub Locations</th>
                            <th>Primary Schools</th>
                            <th>Secondary Schools</th>
                            <th>Tertiary Institutes</th>
                            <th>Total Schools</th>
                        </tr>
                        <?php
                         $i = 0;  
                         ?>
                        <?php foreach($availablecounties as $availabylecount) : ?>
                        <tr>
                            <?php $totalschools = 0; ?>
                            <td><?php echo ++$i; ?></td>
                            <td><?php echo $availabylecount->County; ?></td>
                            <td><?php echo getsubcounties($availabylecount->County); ?></td>
                            <td><?php echo getconstituencies($availabylecount->County); ?></td>
                            <td><?php echo getwards($availabylecount->County); ?></td>
                            <td><?php echo getlocations($availabylecount->County); ?></td>
                            <td><?php echo getsublocations($availabylecount->County); ?></td>
                            <td><?php echo getPrimarySchools($availabylecount->County); ?></td>
                            <td><?php echo getSecondarySchools($availabylecount->County); ?></td>
                            <td><?php echo gettertiaryinstitutes($availabylecount->County); ?></td>
                            <td>
                                <?php echo $totalschools += 
                                    getPrimarySchools($availabylecount->County) + 
                                    getSecondarySchools($availabylecount->County) + 
                                    gettertiaryinstitutes($availabylecount->County)
                                    ;
                                ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        <!-- /page content -->
<?php require_once("../templates/includes/footer.php");?> 