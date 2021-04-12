<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Memberdetail Add</h3>
            </div>
            <?php echo form_open('memberdetail/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="member_name" class="control-label">Member Name</label>
						<div class="form-group">
							<input type="text" name="member_name" value="<?php echo $this->input->post('member_name'); ?>" class="form-control" id="member_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="school_id" class="control-label">School Id</label>
						<div class="form-group">
							<input type="text" name="school_id" value="<?php echo $this->input->post('school_id'); ?>" class="form-control" id="school_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="member_address" class="control-label">Member Address</label>
						<div class="form-group">
							<input type="text" name="member_address" value="<?php echo $this->input->post('member_address'); ?>" class="form-control" id="member_address" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="member_email" class="control-label">Member Email</label>
						<div class="form-group">
							<input type="text" name="member_email" value="<?php echo $this->input->post('member_email'); ?>" class="form-control" id="member_email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="member_number" class="control-label">Member Number</label>
						<div class="form-group">
							<input type="text" name="member_number" value="<?php echo $this->input->post('member_number'); ?>" class="form-control" id="member_number" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="createdBy" class="control-label">CreatedBy</label>
						<div class="form-group">
							<input type="text" name="createdBy" value="<?php echo $this->input->post('createdBy'); ?>" class="form-control" id="createdBy" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="createdOn" class="control-label">CreatedOn</label>
						<div class="form-group">
							<input type="text" name="createdOn" value="<?php echo $this->input->post('createdOn'); ?>" class="has-datetimepicker form-control" id="createdOn" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="modifiedBy" class="control-label">ModifiedBy</label>
						<div class="form-group">
							<input type="text" name="modifiedBy" value="<?php echo $this->input->post('modifiedBy'); ?>" class="form-control" id="modifiedBy" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="modifiedOn" class="control-label">ModifiedOn</label>
						<div class="form-group">
							<input type="text" name="modifiedOn" value="<?php echo $this->input->post('modifiedOn'); ?>" class="has-datetimepicker form-control" id="modifiedOn" />
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