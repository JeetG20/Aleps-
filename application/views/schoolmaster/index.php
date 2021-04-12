<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Schoolmaster Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('schoolmaster/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>School Id</th>
						<th>School Name</th>
						<th>School Address</th>
						<th>School Email</th>
						<th>School Number</th>
						<th>School City</th>
						<th>School Pincode</th>
						<th>CreatedBy</th>
						<th>CreatedOn</th>
						<th>ModifiedBy</th>
						<th>ModifiedOn</th>
						<th>Status</th>
						<th>School Inc</th>
						<th>Logoimagepath</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($schoolmaster as $s){ ?>
                    <tr>
						<td><?php echo $s['school_id']; ?></td>
						<td><?php echo $s['school_name']; ?></td>
						<td><?php echo $s['school_address']; ?></td>
						<td><?php echo $s['school_email']; ?></td>
						<td><?php echo $s['school_number']; ?></td>
						<td><?php echo $s['school_city']; ?></td>
						<td><?php echo $s['school_pincode']; ?></td>
						<td><?php echo $s['createdBy']; ?></td>
						<td><?php echo $s['createdOn']; ?></td>
						<td><?php echo $s['modifiedBy']; ?></td>
						<td><?php echo $s['modifiedOn']; ?></td>
						<td><?php echo $s['status']; ?></td>
						<td><?php echo $s['school_inc']; ?></td>
						<td><?php echo $s['logoimagepath']; ?></td>
						<td>
                            <a href="<?php echo site_url('schoolmaster/edit/'.$s['school_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('schoolmaster/remove/'.$s['school_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
