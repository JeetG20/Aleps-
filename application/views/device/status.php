<!-- Begin Page Content -->
        <div class="container-fluid"> 
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Devices/Camera Status</h1>
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
                   <th>Name</th>
                  <th>ID</th>
                  <th>Camera-1</th>
                  <th>Camera-2</th>
                  <th>Camera-3</th>
                  <th>Camera-4</th>
                  <th>Camera-5</th>
                  <th>Status</th>

                  <th class="no-sort"></th>
                </tr>
              </thead>
              <tbody>
                <?php $i =0; foreach($devices as $d){ $i =$i+1;?>
                    <tr>
						<td><?php echo $i; ?></td>
 						<td><?php echo $d['locationname']; ?></td>
						<td><?php echo $d['raspieid']; ?></td>
 						<td><?php echo $d['camera1id']; ?><a href="#" id="pop">
    <img id="imageresource" src="http://patyshibuya.com.br/wp-content/uploads/2014/04/04.jpg" style="width: 100px; height: 64px;">
    <br> <a data-toggle="modal" data-target="#incidentPopup">Click to Enlarge</a>
</a></td>
 						<td><?php echo $d['camera2id']; ?></td>
 						<td><?php echo $d['camera3id']; ?></td>
 						<td><?php echo $d['camera4id']; ?></td>
 						<td><?php echo $d['camera5id']; ?></td>
 						<td><?php echo $d['devicestatus']; ?></td>
						 
                    </tr>
                    <?php } ?>
                
              </tbody>
            </table>
<div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>      
          </div>

        </div>
		

<!-- Creates the bootstrap modal where the image will appear -->
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Image preview</h4>
      </div>
      <div class="modal-body">
        <img src="" id="imagepreview" style="width: 400px; height: 264px;" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->

  <div class="modal fade incidentPopup" id="incidentPopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Ward Encroachment officer<span>Gopal Narayan<br />Sr. Encroachment officer</span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="float-left">

            <a href="<?php echo site_url('resources/img/incident-img-1.png'); ?>" target="_blank"><img src="<?php echo site_url('resources/img/incident-img-1.png'); ?>" alt="" />
            </a>
            </div>
				  <div class="float-right">
				  <p><span>Location</span>Parampara Ground</p>
				  <p><span>Address</span>Parampara Ground</p>
				  <p><span>Date</span>16/04/2020</p>
				  <p><span>Cam ID</span>001</p>
				  <p><span>Rasberry Pie ID</span>002</p>
				  <p><span>Time</span>5:01:04 PM</p>
				  <p><a href="falsealert.html">False alert</a></p>
				  </div>
        </div>
        <div class="modal-footer">
		<?PHP print("<-->&nbsp;&nbsp;&nbsp;");?>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Resolved</button>
        </div>
      </div>
    </div>
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


<script>
$("#pop").on("click", function() {
   $('#imagepreview').attr('src', $('#imageresource').attr('src')); // here asign the image to the modal when the user click the enlarge link
   $('#incidentPopup').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
});
</script>
        <!-- /.container-fluid -->
		
		 