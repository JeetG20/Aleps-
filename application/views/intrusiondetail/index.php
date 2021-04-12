<?PHP
function formatTimeString($timeStamp) {
		$str_time = date("Y-m-d H:i:sP", $timeStamp);
		$time = strtotime($str_time);
		$d = new DateTime($str_time);

		$weekDays = ['Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat', 'Sun'];
		$months = ['Jan', 'Feb', 'Mar', 'Apr', ' May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
		if ($time > strtotime('-2 minutes')) {
		  return 'Just now';
		} elseif ($time > strtotime('-59 minutes')) {
		  $min_diff = floor((strtotime('now') - $time) / 60);
		  return $min_diff . ' min' . (($min_diff != 1) ? "s" : "") . ' ago';
		} elseif ($time > strtotime('-23 hours')) {
		  $hour_diff = floor((strtotime('now') - $time) / (60 * 60));
		  return $hour_diff . ' hour' . (($hour_diff != 1) ? "s" : "") . ' ago';
		} elseif ($time > strtotime('today')) {
		  return $d->format('G:i a');
		} elseif ($time > strtotime('yesterday')) {
		  return 'Yesterday at ' . $d->format('G:i a');
		} elseif ($time > strtotime('this week')) {
		  return $weekDays[$d->format('N') - 1] . ' at ' . $d->format('G:i');
		} else {
		  return $d->format('j') . ' ' . $months[$d->format('n') - 1] .
		  (($d->format('Y') != date("Y")) ? $d->format(' Y') : "") .
		  ' at ' . $d->format('G:i a');
		}
	}
?><!-- Begin Page Content -->
    <div class="container-fluid incidentsRow">
    <!-- Page Heading -->
	<div class="incident-header">
		<h1 class="h3 mb-4 text-gray-800">Incidents</h1>
		<div class="row">
			<form class="form-inline" action="<?php echo base_url().'intrusiondetail/index/'.$intrusionstatus ?>" method="POST">
				<div class="row">
				
					<div class="col-md-2">
						<!-- <label for="email">&nbsp;&nbsp;Start date:&nbsp;&nbsp;</label> -->
						<div class="form-group">
							<!-- <div class='input-group date' id='datetimepicker6'>
							<input type='text' name="strdate"  id="strdate" placeholder="Start date"  value="<?PHP// if(isset($_SESSION['strdate']))echo $_SESSION['strdate'];?>" class="form-control" />
							<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
							</span>
							</div> -->

							<div class="input-group mb-3" id='datetimepicker6'>
								<input type="text" class="form-control" name="strdate"  id="strdate" placeholder="Start Date" value="<?PHP if(isset($_SESSION['strdate']))echo $_SESSION['strdate'];?>" aria-describedby="basic-addon2">
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<!-- <label for="pwd">&nbsp;&nbsp;End date:&nbsp;</label> -->
							<div class="input-group mb-3" id='datetimepicker7'>
								<input type="text" class="form-control" name="enddate"  id="enddate" placeholder="End Date" value="<?PHP if(isset($_SESSION['enddate']))echo $_SESSION['enddate'];?>" aria-describedby="basic-addon2">
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Select Location 
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<?php foreach($locations as $i){ ?>
								<a data-id='<?php echo $i['locationid']; ?>' class="dropdown-item"><?PHP print($i['locationname']); ?></a>
								<?php } ?>
								<input type="text" name="location"  class="location"  id="location" value="<?PHP if(isset($_SESSION['location']))echo $_SESSION['location'];?>" style="display:none;" />
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<select name="status" class="form-control">
								<option value="">select status</option>
								<option value="O" <?PHP if(isset($_SESSION['status']) && $_SESSION['status']=="O")echo "selected";?>>Open</option>
								<option value="R" <?PHP if(isset($_SESSION['status']) && $_SESSION['status']=="R")echo "selected";?>>Resolved</option>
								<option value="F" <?PHP if(isset($_SESSION['status']) && $_SESSION['status']=="F")echo "selected";?>>False Alert</option>
								<option value="V" <?PHP if(isset($_SESSION['status']) && $_SESSION['status']=="V")echo "selected";?>>Detected</option>
								<option value="U" <?PHP if(isset($_SESSION['status']) && $_SESSION['status']=="U")echo "selected";?>>Non-Object Detected</option>
							</select>
						</div>
					</div>
					<div class="col-md-2">
						<button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
						<button type="submit" value="reset" name="submit" class="btn btn-primary">Rst</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="row"> 
	<br>&nbsp;&nbsp;<?PHP if($_SESSION['role'] == 'Admin'){ ?>
	<!-- &nbsp;&nbsp;<a href="<?php echo base_url().'intrusiondetail/index/V'; ?>">Detected</a>
	&nbsp;&nbsp;<a href="<?php echo base_url().'intrusiondetail/index/U'; ?>">Non-Object Detected</a> -->
	<?PHP } ?></div>
       
      <div class="row"> 

	  	<div class="table-responsive">

            <table class="table table-striped" id="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Reported Date</th>
                  <th scope="col">Camera Id</th>
                  <th scope="col">Incident Description</th>
                  <th scope="col">Status</th>
                  <th scope="col">Incident Image</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                
               <?php if(!empty($intrusiondetails)){ 
			   		foreach($intrusiondetails as $i){ ?>
						<tr>
							<td><?php echo $i['intrusion_id']; ?></td>
							<td><?php $d=strtotime($i['intrusion_time']);
									echo formatTimeString($d); ?></td>
							<td><?php echo $i['camera_id']; ?></td>
							<td><?php echo $i['locationname']; ?></td>
							<td><?php if($i['incidentstatus'] == 'R'){ 
									echo "Resolved";
								}else if($i['incidentstatus'] == 'F'){ 
									echo "False Alert";
								}else if($i['incidentstatus'] == 'V'){ 
									echo "Detected";
								}else if($i['incidentstatus'] == 'U'){ 
									echo "Non-Object Detected";
								}else if($i['incidentstatus'] == 'O'){ 
									echo "Open";
								}		
								?>		 
							</td>
							<td><a href="javascript:void(0)" data-target="#incidentPopup" data-id='<?php echo $i['intrusion_id']; ?>' class='userinfo'>Click Here</a></td>
							<td>
								<?php if($_SESSION['role'] == 'Admin' && ($i['incidentstatus'] == 'V' or $i['incidentstatus'] == 'U')){ ?>
									<button type="false"  data-id="<?php echo ($i['intrusion_id']); ?>"  id="falsealert" class="btn btn-primary falsealert">False Alert</button>
								<?php } ?>
								<?php if($_SESSION['role'] == 'Admin' && ($i['incidentstatus'] == 'V' or $i['incidentstatus'] == 'U')){ ?>
									<button type="Incident" id="Incident" data-id="<?php echo ($i['intrusion_id']); ?>" class="btn btn-primary Incident">Incident</button>
								<?php } ?>
								<?php if($i['incidentstatus'] == 'O'){ ?>
									<button type="submit" id="resolved"  data-id="<?php echo ($i['intrusion_id']); ?>"  class="btn btn-primary resolved">Resolved</button>
								<?php } ?>
							</td>
							
						</tr>
				<?php } }else{ ?>
					<tr>
						<td colspan="7" class="text-center">No data available.</td>
					</tr>
				<?php } ?>
              </tbody>
            </table>

          </div>
      <?php /* foreach($intrusiondetails as $i){ ?>
      <div class="col-sm-3">
        <div class="card">
			<div class="card-body">
            <a data-target="#incidentPopup" data-id='<?php echo $i['intrusion_id']; ?>' class='userinfo'>
			<!-- <img style="cursor:pointer;" src="http://117.197.122.138:8080/scmdbimg/Detector/<?php if($i['incidentstatus'] == 'V')echo 'output_done';else echo 'Output_Images';?>/<?php echo $i['intrusion_fileName']; ?>" alt="" /> -->
			</a>
            <span><?php $d=strtotime($i['intrusion_time']);
				  echo formatTimeString($d); ?></span>
            <span><?php echo $i['locationname']; ?>  </span>
          </div> 
        </div>
      </div> 
	  <?php } */ ?>
    </div>
	<div class="row">
			<div class="col-sm-12 col-md-5">
				<div class="dataTables_info" id="table_info" role="status" aria-live="polite">
					<?php echo $result_count;?>
				</div>
			</div>
			<div class="col-sm-12 col-md-7">
				<div class="dataTables_paginate paging_simple_numbers" id="table_paginate">
					<ul class="pagination"> 
						<?php echo $this->pagination->create_links(); ?>  
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
			<!-- Here goes the modal body -->
        </div>
        <div class="modal-footer">
		<?PHP print("<-->&nbsp;&nbsp;&nbsp;");?>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Resolved</button>
        </div>
      </div>
    </div>
  </div>
  
<script type='text/javascript'>
            $(document).ready(function(){
				$('.dropdown-item').click(function(){
                    var locationid = $(this).data('id');
					$('.location').val(locationid);
					console.log(locationid);
                });
                $('.userinfo').click(function(){
                    var intrusionid = $(this).data('id');
					console.log(intrusionid);
                    // AJAX request
                    $.ajax({
                        url: '<?php echo base_url(); ?>intrusiondetail/getdetails',
                        type: 'post',
                        data: {intrusionid: intrusionid},
                        success: function(response){ 
                            // Add response in Modal body
                            $('.modal-content').html(response); 
                            // Display Modal
                            $('#incidentPopup').modal('show'); 
                        }
                    });
                });
				
				$('#strdate').datetimepicker({format: 'YYYY-MM-DD'});
				$('#enddate').datetimepicker({format: 'YYYY-MM-DD'});
				$('#datetimepicker6').datetimepicker({format: 'YYYY-MM-DD'});
				$('#datetimepicker7').datetimepicker({
				  useCurrent: false,format: 'YYYY-MM-DD' //Important! See issue #1075
				});
				$("#datetimepicker6").on("dp.change", function(e) {
				  $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
				});
				$("#datetimepicker7").on("dp.change", function(e) {
				  $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
				});

				$('.Incident').click(function(){			 
					var intrusionid = $(this).data('id');
					var incidentstatus = 'O';
					console.log(intrusionid);
					// AJAX request
					$.ajax({
						url: '<?php echo base_url(); ?>intrusiondetail/insertOrUpdateIntrusionDetails/'+intrusionid,
						type: 'post',
						data: {incidentstatus: incidentstatus},
						success: function(response){ 
							// window.location.replace('<?php echo base_url(); ?>intrusiondetail/index/'+incidentstatus);
							window.location.reload();
						}
					});			
				});
				
				$('.falsealert').click(function(){
					var intrusionid = $(this).data('id');
					var incidentstatus = 'F';
					console.log(intrusionid);
					// AJAX request
					$.ajax({
						url: '<?php echo base_url(); ?>intrusiondetail/insertOrUpdateIntrusionDetails/'+intrusionid,
						type: 'post',
						data: {incidentstatus: incidentstatus},
						success: function(response){ 
							// window.location.replace('<?php echo base_url(); ?>intrusiondetail/index/'+incidentstatus);
							window.location.reload();
						}
					});			
				}); 
				
				$('.resolved').click(function(){
					var intrusionid = $(this).data('id');
					var incidentstatus = 'R';
					console.log(intrusionid);
					// AJAX request
					$.ajax({
						url: '<?php echo base_url(); ?>intrusiondetail/insertOrUpdateIntrusionDetails/'+intrusionid,
						type: 'post',
						data: {incidentstatus: incidentstatus},
						success: function(response){ 
							/* window.location.replace('<?php echo base_url(); ?>intrusiondetail/index/'+incidentstatus); */
							window.location.reload();
						}
					});			
				});
            });
			
			$( "#foo" ).bind( "click", function() {
			  alert( "User clicked on 'foo.'" );
			});
            </script>
  <!-- Modal -->