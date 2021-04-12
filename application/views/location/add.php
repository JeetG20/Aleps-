<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Location Add</h3>
            </div>
            <?php echo form_open('location/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="locationname" class="control-label">Locationname</label>
						<div class="form-group">
							<input type="text" name="locationname" value="<?php echo $this->input->post('locationname'); ?>" class="form-control" id="locationname" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="locationplace" class="control-label">Locationplace</label>
						<div class="form-group">
							<input type="text" name="locationplace" value="<?php echo $this->input->post('locationplace'); ?>" class="form-control" id="locationplace" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="address" class="control-label">Address</label>
						<div class="form-group">
							<input type="text" name="address" value="<?php echo $this->input->post('address'); ?>" class="form-control" id="address" />
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