<?php
require(APPPATH.'/libraries/REST_Controller.php');
 
class Api extends REST_Controller
{	
	function __construct()
    {
        parent::__construct();
        $this->load->model('Intrusiondetail_model');
    } 
	
    function user_get()
    {
        if(!$this->get('id'))
        {
            $this->response(NULL, 400);
        }
 
        $user = $this->user_model->get( $this->get('id') );
         
        if($user)
        {
            $this->response($user, 200); // 200 being the HTTP response code
        }
 
        else
        {
            $this->response(NULL, 404);
        }
    }
     
    function post()
    {
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				#'school_id' => $this->input->post('school_id'),
				#'camera_id' => $this->input->post('camera_id'),
				'intrusion_imagepath' => $this->input->post('imagePath'),
				#'intrusion_status' => $this->input->post('intrusion_status'),
				#'intrusion_time' => $this->input->post('intrusion_time'),
				#'intrusion_resolvedTime' => $this->input->post('intrusion_resolvedTime'),
				#'createdBy' => $this->input->post('createdBy'),
				#'createdOn' => $this->input->post('createdOn'),
				#'modifiedBy' => $this->input->post('modifiedBy'),
				#'modifiedOn' => $this->input->post('modifiedOn'),
				'intrusion_fileName' => $this->input->post('imageName'),
				#'intrusiontype' => $this->input->post('intrusiontype'),
				#'intrusiondetailscol' => $this->input->post('intrusiondetailscol'),
				#'deleteflag' => $this->input->post('deleteflag'),
				#'delete_flag' => $this->input->post('delete_flag'),
				'locationid' => $this->input->post('locationId'),
				#'raspieid' => $this->input->post('raspieid'),
				'incidentstatus' => $this->input->post('incendentType')
            );
		
		$intrusiondetail_id = $this->Intrusiondetail_model->add_intrusiondetail($params);
		
         
        if($intrusiondetail_id === FALSE)
        {
            $this->response(array('status' => 'failed'));
        }
         
        else
        {
            $this->response(array('status' => 'success'));
        }
         
    }
     
    function users_get()
    {
        $users = $this->user_model->get_all();
         
        if($users)
        {
            $this->response($users, 200);
        }
 
        else
        {
            $this->response(NULL, 404);
        }
    }
}
?>