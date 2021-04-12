<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Members/Users 
		  <?PHP if($_SESSION['role'] == 'Admin'){ ?>
		  <a href="<?php echo site_url('usermaster/add'); ?>" class="addUser btn btn-primary float-right"  >Add new user</a>
 		  <?PHP } ?>
		  </h1> 
          <div class="table-responsive">

            <table class="table table-striped" id="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">User id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Team</th>
                  <th scope="col">Role</th>
                  <th scope="col">Location</th>
                  <th scope="col">Phone no</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                
               <?php foreach($usermaster as $u){ ?>
                    <tr>
						<td><?php echo $u['username']; ?></td>
						<td><?php echo $u['name']; ?></td>
						<td><?php echo $u['useremail']; ?></td>
 						<td><?php echo $u['userrole']; ?></td>
 						<td><?php echo $u['location']; ?></td>
 						<td><?php echo $u['phoneno']; ?></td>
						<td>
                           <?PHP if($_SESSION['role'] == 'Admin'){ ?>
 						   <a href="<?php echo site_url('usermaster/edit/'.$u['userid']); ?>" class="edit" title="Edit" ><i class="fas fa-edit"></i></a>
                            <a href="<?php echo site_url('usermaster/remove/'.$u['userid']); ?>" class="remove" title="Remove"><i class="fa fa-trash" aria-hidden="true"></i></a>
						   <?PHP } ?>
                         </td>
						 
                    </tr>
                    <?php } ?>
                 
              </tbody>
            </table>

          </div>
		<div class="row">
			<div class="col-sm-12 col-md-5">
				<div class="dataTables_info" id="table_info" role="status" aria-live="polite">Showing 1 to 6 of 6 entries</div>
			</div>
			<div class="col-sm-12 col-md-7">
				<div class="dataTables_paginate paging_simple_numbers" id="table_paginate">
					<ul class="pagination">
						<li class="paginate_button page-item previous disabled" id="table_previous">
							<a href="#" aria-controls="table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
						</li>
						<li class="paginate_button page-item active">
							<a href="#" aria-controls="table" data-dt-idx="1" tabindex="0" class="page-link">1</a>
						</li>
						<li class="paginate_button page-item next disabled" id="table_next">
							<a href="#" aria-controls="table" data-dt-idx="2" tabindex="0" class="page-link">Next</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
        </div>
        <!-- /.container-fluid -->
		
</div>
		<div class="row">
    <div class="col-md-12">
        <div class="box">
           		  
            <div class="box-body">
                
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div> 
	</div>
	
