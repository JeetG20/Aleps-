<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Intrusiondetails Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('intrusiondetail/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Intrusion Id</th>
						<th>School Id</th>
						<th>Camera Id</th>
						<th>Intrusion Imagepath</th>
						<th>Intrusion Status</th>
						<th>Intrusion Time</th>
						<th>Intrusion ResolvedTime</th>
						<th>CreatedBy</th>
						<th>CreatedOn</th>
						<th>ModifiedBy</th>
						<th>ModifiedOn</th>
						<th>Intrusion FileName</th>
						<th>Intrusiontype</th>
						<th>Intrusiondetailscol</th>
						<th>Deleteflag</th>
						<th>Delete Flag</th>
						<th>Locationid</th>
						<th>Raspieid</th>
						<th>Incidentstatus</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($intrusiondetails as $i){ ?>
                    <tr>
						<td><?php echo $i['intrusion_id']; ?></td>
						<td><?php echo $i['school_id']; ?></td>
						<td><?php echo $i['camera_id']; ?></td>
						<td><?php echo $i['intrusion_imagepath']; ?></td>
						<td><?php echo $i['intrusion_status']; ?></td>
						<td><?php echo $i['intrusion_time']; ?></td>
						<td><?php echo $i['intrusion_resolvedTime']; ?></td>
						<td><?php echo $i['createdBy']; ?></td>
						<td><?php echo $i['createdOn']; ?></td>
						<td><?php echo $i['modifiedBy']; ?></td>
						<td><?php echo $i['modifiedOn']; ?></td>
						<td><?php echo $i['intrusion_fileName']; ?></td>
						<td><?php echo $i['intrusiontype']; ?></td>
						<td><?php echo $i['intrusiondetailscol']; ?></td>
						<td><?php echo $i['deleteflag']; ?></td>
						<td><?php echo $i['delete_flag']; ?></td>
						<td><?php echo $i['locationid']; ?></td>
						<td><?php echo $i['raspieid']; ?></td>
						<td><?php echo $i['incidentstatus']; ?></td>
						<td>
                            <a href="<?php echo site_url('intrusiondetail/edit/'.$i['intrusion_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('intrusiondetail/remove/'.$i['intrusion_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
