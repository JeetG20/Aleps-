<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Memberdetails Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('memberdetail/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Member Id</th>
						<th>Member Name</th>
						<th>School Id</th>
						<th>Member Address</th>
						<th>Member Email</th>
						<th>Member Number</th>
						<th>CreatedBy</th>
						<th>CreatedOn</th>
						<th>ModifiedBy</th>
						<th>ModifiedOn</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($memberdetails as $m){ ?>
                    <tr>
						<td><?php echo $m['member_id']; ?></td>
						<td><?php echo $m['member_name']; ?></td>
						<td><?php echo $m['school_id']; ?></td>
						<td><?php echo $m['member_address']; ?></td>
						<td><?php echo $m['member_email']; ?></td>
						<td><?php echo $m['member_number']; ?></td>
						<td><?php echo $m['createdBy']; ?></td>
						<td><?php echo $m['createdOn']; ?></td>
						<td><?php echo $m['modifiedBy']; ?></td>
						<td><?php echo $m['modifiedOn']; ?></td>
						<td>
                            <a href="<?php echo site_url('memberdetail/edit/'.$m['member_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('memberdetail/remove/'.$m['member_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
