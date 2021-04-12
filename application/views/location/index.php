 <div class="container-fluid"> 
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Locations 
		 <?PHP if($_SESSION['role'] == 'Admin' ){ ?> 
		 <a href="#" class="addUser btn btn-primary float-right" data-toggle="modal" data-target="#addLocation">Add new location</a>
		 <?PHP } ?> 
		 </h1>
          <div class="table-responsive"> 
            <?PHP if($_SESSION['role'] == 'Admin' ){ ?> 
			 
			<?PHP } ?> 
			<table class="table table-striped" id="table">
            <thead>
              <tr>
                <th></th>
                <th colspan="3">Location Details</th>
                <th colspan="2">Yotaka PoC</th>
                <th colspan="2">VMC PoC</th>
                <th>Actions</th>
              </tr>
              <tr>
                <th style="text-align: left;">Sr.no</th>
                <th style="text-align: left;">ID</th>
                <th style="text-align: left;">Location Name</th>
                <th style="text-align: left;">Location Address</th>
                <th style="text-align: left;">Name</th>
                <th style="text-align: left;">Phone no</th>
                <th style="text-align: left;">Name</th>
                <th style="text-align: left;">Phone no</th>
                <th style="text-align: left;"></th>
              </tr>
            </thead>
             <tbody> 
			  <?php $i =0; foreach($location as $l){ $i = $i+1;?>
                    <tr>
						<td><?php echo $i; ?></td> 
						<td><?php echo $l['locationid']; ?></td>
						<td><?php echo $l['locationname']; ?></td>
 						<td><?php echo $l['address']; ?></td>
						<td>Gopal Narayan</td>
                        <td>9881377857</td>
						<td>Chitraa Narayan</td>
						<td>+60149008732</td><td>
                           <?PHP if($_SESSION['role'] == 'Admin' ){ ?> 
						   <a class="edit" title="Edit" data-toggle="modal" data-target="#locationEdit1"><i class="fas fa-edit"></i></a>
							<a class="remove" title="Remove"><i class="fa fa-trash" aria-hidden="true"></i></a>
						   <?PHP } ?>
							</td>
                    </tr>
                    <?php } ?> 
            </tbody> 
          </table> 
          </div> 
        </div> 
 <!-- Modal -->
  <div class="modal fade locationForm" id="locationEdit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Add new location</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col">
                <label for="exampleInputEmail1">Location name *</label>
                <input type="text" class="form-control" value="Gopal">
              </div>
              <div class="col">
                <label for="exampleInputEmail1">Location *</label>
                <input type="text" class="form-control" value="Gopal">
              </div>
            </div> 
            <div class="row">
              <div class="col">
                <label for="exampleInputEmail1">Address *</label>
                <input type="text" class="form-control" value="Gopal">
              </div> 
            </div> 
            <div class="row nameIdsec">
              <div class="col">
                <span>Yotoka PoC</span>
                <label for="exampleInputEmail1">Name/ID</label>
                <select class="custom-select my-1 mr-sm-2" id="role">
                  <option selected>Choose...</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select> 
                <label for="exampleInputEmail1">Phone no *</label>
                <input type="text" class="form-control" value="94234423423">
              </div>  
              <div class="col">
                <span>VMC PoC</span>
                <label for="exampleInputEmail1">Name/ID</label>
                <select class="custom-select my-1 mr-sm-2" id="role">
                  <option selected>Choose...</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select> 
                <label for="exampleInputEmail1">Phone no *</label>
                <input type="text" class="form-control" value="94234423423">
              </div> 
            </div> 
            <div class="row officerNo">
              <div class="col">
                <label for="exampleInputEmail1">Sr. Officer name</label>
               <input type="text" class="form-control" value="">
               <label for="exampleInputEmail1">Phone no *</label>
               <input type="text" class="form-control" value="94234423423">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Save location</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="addLocation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Add new location</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col">
                <label for="exampleInputEmail1">Location name *</label>
                <input type="text" class="form-control" value="">
              </div>
              <div class="col">
                <label for="exampleInputEmail1">Location *</label>
                <input type="text" class="form-control" value="">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="exampleInputEmail1">Address *</label>
                <input type="text" class="form-control" value="">
              </div>
            </div>
            <div class="row nameIdsec">
              <div class="col">
                <span>Yotoka PoC</span>
                <label for="exampleInputEmail1">Name/ID</label>
                <select class="custom-select my-1 mr-sm-2" id="role">
                  <option selected>Choose...</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                <label for="exampleInputEmail1">Phone no *</label>
                <input type="text" class="form-control" value="">
              </div>
              <div class="col">
                <span>VMC PoC</span>
                <label for="exampleInputEmail1">Name/ID</label>
                <select class="custom-select my-1 mr-sm-2" id="role">
                  <option selected>Choose...</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                <label for="exampleInputEmail1">Phone no *</label>
                <input type="text" class="form-control" value="">
              </div>
            </div> 
            <div class="row officerNo">
              <div class="col">
                <label for="exampleInputEmail1">Sr. Officer name</label>
               <input type="text" class="form-control" value="">
               <label for="exampleInputEmail1">Phone no *</label>
               <input type="text" class="form-control" value="">
              </div>
            </div 
          </form> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Save user</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->