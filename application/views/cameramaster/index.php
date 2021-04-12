<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Cameramaster Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('cameramaster/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Camera Id</th>
						<th>Camera Name</th>
						<th>Camera StartTime</th>
						<th>Camera StopTime</th>
						<th>Camera Inc</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($cameramaster as $c){ ?>
                    <tr>
						<td><?php echo $c['camera_id']; ?></td>
						<td><?php echo $c['camera_name']; ?></td>
						<td><?php echo $c['camera_startTime']; ?></td>
						<td><?php echo $c['camera_stopTime']; ?></td>
						<td><?php echo $c['camera_inc']; ?></td>
						<td>
                            <a href="<?php echo site_url('cameramaster/edit/'.$c['camera_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('cameramaster/remove/'.$c['camera_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
