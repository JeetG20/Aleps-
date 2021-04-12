<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Device Add</h3>
            </div>
            <?php echo form_open('device/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="locationid" class="control-label">Location</label>
						<div class="form-group">
							<select name="locationid" class="form-control">
								<option value="">select location</option>
								<?php 
								foreach($all_location as $location)
								{
									$selected = ($location['locationid'] == $this->input->post('locationid')) ? ' selected="selected"' : "";

									echo '<option value="'.$location['locationid'].'" '.$selected.'>'.$location['locationname'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="raspieid" class="control-label">Raspieid</label>
						<div class="form-group">
							<input type="text" name="raspieid" value="<?php echo $this->input->post('raspieid'); ?>" class="form-control" id="raspieid" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="raspiename" class="control-label">Raspiename</label>
						<div class="form-group">
							<input type="text" name="raspiename" value="<?php echo $this->input->post('raspiename'); ?>" class="form-control" id="raspiename" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="camera1id" class="control-label">Camera1id</label>
						<div class="form-group">
							<input type="text" name="camera1id" value="<?php echo $this->input->post('camera1id'); ?>" class="form-control" id="camera1id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="camera1name" class="control-label">Camera1name</label>
						<div class="form-group">
							<input type="text" name="camera1name" value="<?php echo $this->input->post('camera1name'); ?>" class="form-control" id="camera1name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="camera2id" class="control-label">Camera2id</label>
						<div class="form-group">
							<input type="text" name="camera2id" value="<?php echo $this->input->post('camera2id'); ?>" class="form-control" id="camera2id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="camera2name" class="control-label">Camera2name</label>
						<div class="form-group">
							<input type="text" name="camera2name" value="<?php echo $this->input->post('camera2name'); ?>" class="form-control" id="camera2name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="camera3id" class="control-label">Camera3id</label>
						<div class="form-group">
							<input type="text" name="camera3id" value="<?php echo $this->input->post('camera3id'); ?>" class="form-control" id="camera3id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="camera3name" class="control-label">Camera3name</label>
						<div class="form-group">
							<input type="text" name="camera3name" value="<?php echo $this->input->post('camera3name'); ?>" class="form-control" id="camera3name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="camera4id" class="control-label">Camera4id</label>
						<div class="form-group">
							<input type="text" name="camera4id" value="<?php echo $this->input->post('camera4id'); ?>" class="form-control" id="camera4id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="camera4name" class="control-label">Camera4name</label>
						<div class="form-group">
							<input type="text" name="camera4name" value="<?php echo $this->input->post('camera4name'); ?>" class="form-control" id="camera4name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="camera5id" class="control-label">Camera5id</label>
						<div class="form-group">
							<input type="text" name="camera5id" value="<?php echo $this->input->post('camera5id'); ?>" class="form-control" id="camera5id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="camera5name" class="control-label">Camera5name</label>
						<div class="form-group">
							<input type="text" name="camera5name" value="<?php echo $this->input->post('camera5name'); ?>" class="form-control" id="camera5name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="devicestatus" class="control-label">Devicestatus</label>
						<div class="form-group">
							<input type="text" name="devicestatus" value="<?php echo $this->input->post('devicestatus'); ?>" class="form-control" id="devicestatus" />
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