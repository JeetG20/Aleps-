<!-- Begin Page Content -->
        <div class="container-fluid incidentsRow">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Incidents</h1>



      <div class="row"> 
      <?php foreach($intrusiondetails as $i){ ?>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <a data-toggle="modal" data-target="#incidentPopup"><img src="http://117.197.122.138:8080/scmdbimg/Detector/<?php if($i['incidentstatus'] == 'V')echo 'output_done';else echo 'Output_Images';?>/<?php echo $i['intrusion_fileName']; ?>" alt="" /></a>
            <span><?php echo $i['createdOn']; ?></span>
            <span><?php echo $i['locationid']; ?>  </span>
          </div> 
        </div>
      </div> 
						<!--<tr><td><?php echo $i['intrusion_id']; ?></td>
						<td><?php echo $i['school_id']; ?></td>
						<td><?php echo $i['camera_id']; ?></td>
						<td><?php echo $i['intrusion_imagepath']; ?></td>
						<td><?php echo $i['intrusion_status']; ?></td>
						<td></td>
						<td><?php echo $i['intrusion_resolvedTime']; ?></td>
						<td><?php echo $i['createdBy']; ?></td>
						<td></td>
						<td><?php echo $i['modifiedBy']; ?></td>
						<td><?php echo $i['modifiedOn']; ?></td>
						<td></td>
						<td><?php echo $i['intrusiontype']; ?></td>
						<td><?php echo $i['intrusiondetailscol']; ?></td>
						<td><?php echo $i['deleteflag']; ?></td>
						<td><?php echo $i['delete_flag']; ?></td>
						<td><?php echo $i['locationid']; ?></td>
						<td><?php echo $i['raspieid']; ?></td>
						<td><?php echo $i['incidentstatus']; ?></td>
						<td>
                            <a href="<?php echo site_url('intrusiondetail/edit/'.$i['intrusion_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('intrusiondetail/remove/'.$i['intrusion_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>-->
                    <?php } ?>

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
		<?PHP print("<-->");?>
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


  <!-- Modal -->