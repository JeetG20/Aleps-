<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Schoolmaster Add</h3>
            </div>
            <?php echo form_open('schoolmaster/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="school_name" class="control-label">School Name</label>
						<div class="form-group">
							<input type="text" name="school_name" value="<?php echo $this->input->post('school_name'); ?>" class="form-control" id="school_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="school_address" class="control-label">School Address</label>
						<div class="form-group">
							<input type="text" name="school_address" value="<?php echo $this->input->post('school_address'); ?>" class="form-control" id="school_address" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="school_email" class="control-label">School Email</label>
						<div class="form-group">
							<input type="text" name="school_email" value="<?php echo $this->input->post('school_email'); ?>" class="form-control" id="school_email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="school_number" class="control-label">School Number</label>
						<div class="form-group">
							<input type="text" name="school_number" value="<?php echo $this->input->post('school_number'); ?>" class="form-control" id="school_number" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="school_city" class="control-label">School City</label>
						<div class="form-group">
							<input type="text" name="school_city" value="<?php echo $this->input->post('school_city'); ?>" class="form-control" id="school_city" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="school_pincode" class="control-label">School Pincode</label>
						<div class="form-group">
							<input type="text" name="school_pincode" value="<?php echo $this->input->post('school_pincode'); ?>" class="form-control" id="school_pincode" />
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
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo $this->input->post('status'); ?>" class="form-control" id="status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="school_inc" class="control-label">School Inc</label>
						<div class="form-group">
							<input type="text" name="school_inc" value="<?php echo $this->input->post('school_inc'); ?>" class="form-control" id="school_inc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="logoimagepath" class="control-label">Logoimagepath</label>
						<div class="form-group">
							<input type="text" name="logoimagepath" value="<?php echo $this->input->post('logoimagepath'); ?>" class="form-control" id="logoimagepath" />
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