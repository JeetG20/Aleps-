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
?><link href="<?php echo site_url('resources/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- Custom styles for this template-->
<link href="<?php echo site_url('resources/css/sb-admin-2.min.css');?>" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="<?php echo site_url('resources/css/style.css');?>" />
  <div class="modal-content">
         <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Ward Encroachment officer<span>Gopal Narayan </span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> 
        <div class="modal-body">
          <div>  <!-- class="float-left" width="800" -->
            <a href="http://117.197.122.138:8080/scmdbimg/<?php echo str_replace("../","",($this->input->post('intrusion_imagepath') ? $this->input->post('intrusion_imagepath') : $intrusiondetail['intrusion_imagepath'])); ?>" target="_blank">
			<img src="http://117.197.122.138:8080/scmdbimg/<?php echo str_replace("../","",($this->input->post('intrusion_imagepath') ? $this->input->post('intrusion_imagepath') : $intrusiondetail['intrusion_imagepath'])); ?>" alt="" />
			<!-- width="800" -->
            </a>
            </div>
			<?php /*
			<div class="float-right">
				   <p><span>Intrusion ID </span><?php echo ($intrusiondetail['intrusion_id']); ?></p>
				   <p><span>Location </span><?php echo ($intrusiondetail['locationname']); ?></p>
				  <p><span>Address</span><?php echo ($intrusiondetail['address']); ?></p>
				  <p><span>Intrusion Date/Time</span><?php 
				  $d=strtotime($intrusiondetail['intrusion_time']);
				  echo formatTimeString($d);
				  #echo formatTimeString($d)."<br>" . date("d M Y", $d) . "<br>". date(" h:i:s a", $d); ?></p>
				  <p><span>Cam ID</span><?PHP
				  #echo $intrusiondetail['intrusion_imagepath'];
				  $slash = explode("_", $intrusiondetail['intrusion_imagepath']);
				  print($slash[2]);
				  ?></p>
				 <!--  <p><span>Rasberry Pie ID</span><?php echo ($intrusiondetail['raspieid']); ?></p>
				  <p><span></span><?php echo ($this->input->post('intrusion_time') ? $this->input->post('intrusion_time') : $intrusiondetail['intrusion_time']); ?></p>
				  <p><a href="#">False alert  </a></p> -->
				  </div>
        	</div> */ ?>
        <div class="modal-footer"> 
		<?PHP /* if($_SESSION['role'] == 'Admin' && ($intrusiondetail['incidentstatus'] == 'V' or $intrusiondetail['incidentstatus'] == 'U')){ ?>
           <button type="false"  data-id="<?php echo ($intrusiondetail['intrusion_id']); ?>"  id="falsealert" class="btn btn-primary">False Alert</button>
		<?PHP } ?>
		<?PHP if($_SESSION['role'] == 'Admin' && ($intrusiondetail['incidentstatus'] == 'V' or $intrusiondetail['incidentstatus'] == 'U')){ ?>
           <button type="Incident" id="Incident" data-id="<?php echo ($intrusiondetail['intrusion_id']); ?>" class="btn btn-primary">Incident</button>
		<?PHP } ?>
		<?PHP if($intrusiondetail['incidentstatus'] == 'O'){ ?>
			  <button type="submit" id="resolved"  data-id="<?php echo ($intrusiondetail['intrusion_id']); ?>"  class="btn btn-primary">Resolved</button>
		<?PHP } */ ?>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
	<script type='text/javascript'>
		$('#Incident').click(function(){			 
			var intrusionid = $(this).data('id');
			var incidentstatus = 'O';
			console.log(intrusionid);
			// AJAX request
			$.ajax({
				url: '/intrusiondetail/insertOrUpdateIntrusionDetails/'+intrusionid,
				type: 'post',
				data: {incidentstatus: incidentstatus},
				success: function(response){ 
					window.location.replace('/intrusiondetail/index/'+incidentstatus);
				}
			});			
		});
		
		$('#falsealert').click(function(){
			var intrusionid = $(this).data('id');
			var incidentstatus = 'F';
			console.log(intrusionid);
			// AJAX request
			$.ajax({
				url: '/intrusiondetail/insertOrUpdateIntrusionDetails/'+intrusionid,
				type: 'post',
				data: {incidentstatus: incidentstatus},
				success: function(response){ 
					window.location.replace('/intrusiondetail/index/'+incidentstatus);
				}
			});			
		}); 
		
		$('#resolved').click(function(){
			var intrusionid = $(this).data('id');
			var incidentstatus = 'R';
			console.log(intrusionid);
			// AJAX request
			$.ajax({
				url: '/intrusiondetail/insertOrUpdateIntrusionDetails/'+intrusionid,
				type: 'post',
				data: {incidentstatus: incidentstatus},
				success: function(response){ 
					window.location.replace('/intrusiondetail/index/'+incidentstatus);
				}
			});			
		});
</script>