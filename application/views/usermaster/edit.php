<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Usermaster Edit</h3>
            </div>
			<?php echo form_open('usermaster/edit/'.$usermaster['userid']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="srofficerid" class="control-label">Usermaster</label>
						<div class="form-group">
							<select name="srofficerid" class="form-control">
								<option value="">select usermaster</option>
								<?php 
								foreach($all_usermaster as $usermaster)
								{
									$selected = ($usermaster['userid'] == $usermaster['srofficerid']) ? ' selected="selected"' : "";

									echo '<option value="'.$usermaster['userid'].'" '.$selected.'>'.$usermaster['name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label">Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $usermaster['username']); ?>" class="form-control" id="username" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="userpwd" class="control-label">Userpwd</label>
						<div class="form-group">
							<input type="text" name="userpwd" value="<?php echo ($this->input->post('userpwd') ? $this->input->post('userpwd') : $usermaster['userpwd']); ?>" class="form-control" id="userpwd" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="useremail" class="control-label">Useremail</label>
						<div class="form-group">
							<input type="text" name="useremail" value="<?php echo ($this->input->post('useremail') ? $this->input->post('useremail') : $usermaster['useremail']); ?>" class="form-control" id="useremail" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="usernumber" class="control-label">Usernumber</label>
						<div class="form-group">
							<input type="text" name="usernumber" value="<?php echo ($this->input->post('usernumber') ? $this->input->post('usernumber') : $usermaster['usernumber']); ?>" class="form-control" id="usernumber" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="userrole" class="control-label">Userrole</label>
						<div class="form-group">
							<input type="text" name="userrole" value="<?php echo ($this->input->post('userrole') ? $this->input->post('userrole') : $usermaster['userrole']); ?>" class="form-control" id="userrole" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="school_id" class="control-label">School Id</label>
						<div class="form-group">
							<input type="text" name="school_id" value="<?php echo ($this->input->post('school_id') ? $this->input->post('school_id') : $usermaster['school_id']); ?>" class="form-control" id="school_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="location" class="control-label">Location</label>
						<div class="form-group">
							<input type="text" name="location" value="<?php echo ($this->input->post('location') ? $this->input->post('location') : $usermaster['location']); ?>" class="form-control" id="location" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="team" class="control-label">Team</label>
						<div class="form-group">
							<input type="text" name="team" value="<?php echo ($this->input->post('team') ? $this->input->post('team') : $usermaster['team']); ?>" class="form-control" id="team" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="phoneno" class="control-label">Phoneno</label>
						<div class="form-group">
							<input type="text" name="phoneno" value="<?php echo ($this->input->post('phoneno') ? $this->input->post('phoneno') : $usermaster['phoneno']); ?>" class="form-control" id="phoneno" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label">Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $usermaster['name']); ?>" class="form-control" id="name" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>