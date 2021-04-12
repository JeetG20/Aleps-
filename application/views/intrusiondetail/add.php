<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Intrusiondetail Add</h3>
            </div>
            <?php echo form_open('intrusiondetail/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="school_id" class="control-label">School Id</label>
						<div class="form-group">
							<input type="text" name="school_id" value="<?php echo $this->input->post('school_id'); ?>" class="form-control" id="school_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="camera_id" class="control-label">Camera Id</label>
						<div class="form-group">
							<input type="text" name="camera_id" value="<?php echo $this->input->post('camera_id'); ?>" class="form-control" id="camera_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="intrusion_imagepath" class="control-label">Intrusion Imagepath</label>
						<div class="form-group">
							<input type="text" name="intrusion_imagepath" value="<?php echo $this->input->post('intrusion_imagepath'); ?>" class="form-control" id="intrusion_imagepath" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="intrusion_status" class="control-label">Intrusion Status</label>
						<div class="form-group">
							<input type="text" name="intrusion_status" value="<?php echo $this->input->post('intrusion_status'); ?>" class="form-control" id="intrusion_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="intrusion_time" class="control-label">Intrusion Time</label>
						<div class="form-group">
							<input type="text" name="intrusion_time" value="<?php echo $this->input->post('intrusion_time'); ?>" class="has-datetimepicker form-control" id="intrusion_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="intrusion_resolvedTime" class="control-label">Intrusion ResolvedTime</label>
						<div class="form-group">
							<input type="text" name="intrusion_resolvedTime" value="<?php echo $this->input->post('intrusion_resolvedTime'); ?>" class="has-datetimepicker form-control" id="intrusion_resolvedTime" />
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
						<label for="intrusion_fileName" class="control-label">Intrusion FileName</label>
						<div class="form-group">
							<input type="text" name="intrusion_fileName" value="<?php echo $this->input->post('intrusion_fileName'); ?>" class="form-control" id="intrusion_fileName" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="intrusiontype" class="control-label">Intrusiontype</label>
						<div class="form-group">
							<input type="text" name="intrusiontype" value="<?php echo $this->input->post('intrusiontype'); ?>" class="form-control" id="intrusiontype" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="intrusiondetailscol" class="control-label">Intrusiondetailscol</label>
						<div class="form-group">
							<input type="text" name="intrusiondetailscol" value="<?php echo $this->input->post('intrusiondetailscol'); ?>" class="form-control" id="intrusiondetailscol" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="deleteflag" class="control-label">Deleteflag</label>
						<div class="form-group">
							<input type="text" name="deleteflag" value="<?php echo $this->input->post('deleteflag'); ?>" class="form-control" id="deleteflag" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="delete_flag" class="control-label">Delete Flag</label>
						<div class="form-group">
							<input type="text" name="delete_flag" value="<?php echo $this->input->post('delete_flag'); ?>" class="form-control" id="delete_flag" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="locationid" class="control-label">Locationid</label>
						<div class="form-group">
							<input type="text" name="locationid" value="<?php echo $this->input->post('locationid'); ?>" class="form-control" id="locationid" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="raspieid" class="control-label">Raspieid</label>
						<div class="form-group">
							<input type="text" name="raspieid" value="<?php echo $this->input->post('raspieid'); ?>" class="form-control" id="raspieid" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="incidentstatus" class="control-label">Incidentstatus</label>
						<div class="form-group">
							<input type="text" name="incidentstatus" value="<?php echo $this->input->post('incidentstatus'); ?>" class="form-control" id="incidentstatus" />
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