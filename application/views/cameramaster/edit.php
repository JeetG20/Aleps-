<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Cameramaster Edit</h3>
            </div>
			<?php echo form_open('cameramaster/edit/'.$cameramaster['camera_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="camera_name" class="control-label">Camera Name</label>
						<div class="form-group">
							<input type="text" name="camera_name" value="<?php echo ($this->input->post('camera_name') ? $this->input->post('camera_name') : $cameramaster['camera_name']); ?>" class="form-control" id="camera_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="camera_startTime" class="control-label">Camera StartTime</label>
						<div class="form-group">
							<input type="text" name="camera_startTime" value="<?php echo ($this->input->post('camera_startTime') ? $this->input->post('camera_startTime') : $cameramaster['camera_startTime']); ?>" class="has-datetimepicker form-control" id="camera_startTime" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="camera_stopTime" class="control-label">Camera StopTime</label>
						<div class="form-group">
							<input type="text" name="camera_stopTime" value="<?php echo ($this->input->post('camera_stopTime') ? $this->input->post('camera_stopTime') : $cameramaster['camera_stopTime']); ?>" class="has-datetimepicker form-control" id="camera_stopTime" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="camera_inc" class="control-label">Camera Inc</label>
						<div class="form-group">
							<input type="text" name="camera_inc" value="<?php echo ($this->input->post('camera_inc') ? $this->input->post('camera_inc') : $cameramaster['camera_inc']); ?>" class="form-control" id="camera_inc" />
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