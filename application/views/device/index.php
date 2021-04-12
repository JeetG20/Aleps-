<!-- Begin Page Content -->
        <div class="container-fluid"> 
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Devices 
		  <?PHP if($_SESSION['role'] == 'Admin' ){ ?> 
			 <a href="<?php echo site_url('device/add'); ?>" class="btn btn-success btn-sm">Add</a> 
			<a href="#" class="addUser btn btn-primary float-right" data-toggle="modal" data-target="#addDevice">Add new device</a>
			<?PHP } ?> 
			</h1>

          <div class="table-responsive">

            <table class="table table-striped" id="table">
              <thead>
                <tr>
                  <th></th>
                  <th colspan="2">Location Details</th>
                  <th colspan="1">Raspberry Pie</th>
                  <th colspan="5">Cameras</th>
                  <th>Actions</th>
                </tr>
                <tr>
                  <th>Sr.no</th>
                  <th>ID</th>
                  <th>Name</th>
                  <th>ID</th>
                  <th>ID-1</th>
                  <th>ID-2</th>
                  <th>ID-3</th>
                  <th>ID-4</th>
                  <th>ID-5</th>
                  <th>Status</th>

                  <th class="no-sort"></th>
                </tr>
              </thead>
              <tbody>
                <?php $i =0; foreach($devices as $d){ $i =$i+1;?>
                    <tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $d['deviceid']; ?></td>
						<td><?php echo $d['locationid']; ?></td>
						<td><?php echo $d['raspieid']; ?></td>
 						<td><?php echo $d['camera1id']; ?></td>
 						<td><?php echo $d['camera2id']; ?></td>
 						<td><?php echo $d['camera3id']; ?></td>
 						<td><?php echo $d['camera4id']; ?></td>
 						<td><?php echo $d['camera5id']; ?></td>
 						<td><?php echo $d['devicestatus']; ?></td>
						<td>
						 <?PHP if($_SESSION['role'] == 'Admin' ){ ?> 
                            <a class="edit" title="Edit" data-toggle="modal" data-target="#deviceEdit1"><i class="fas fa-edit"></i></a>
							<a class="remove" title="Remove"><i class="fa fa-trash" aria-hidden="true"></i></a> 
							<a href="<?php echo site_url('device/edit/'.$d['deviceid']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('device/remove/'.$d['deviceid']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                         <?php } ?>
						 </td>
                    </tr>
                    <?php } ?>
                
              </tbody>
            </table>
<div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>      
          </div>

        </div>
        <!-- /.container-fluid -->
		
		 