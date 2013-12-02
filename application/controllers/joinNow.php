<?php

class JoinNow extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index($msg = NULL){
		// Load our view to be displayed
		// to the user
		$this->load->helper('url');

		if($this->session->userdata('userEmail')){
			$this->load->view('default_view');
			//redirect('common/settings', 'refresh');
		}else{
			$data['msg'] = $msg;
			//$this->load->view('header_view',$data);
			$this->load->view('joinNow_view', $data);
			//$this->load->view('footer_view', $data);
		}
		//$this->load->view('common/footer',$data);
	}

	public function process()
	{
		
		$this->load->model('joinNow_model');
		$result=$this->joinNow_model->validate();
		
		if( $result==true){
			// If user did not validate, then show them login page again
			$msg = '<font color=red>LinkedIn account already does exist against this email account</font><br />';
			$this->index($msg);
		}else{
			// If user did validate, 
			// Send them to members area
			
			//echo $this->input->post('firstname');
		
			if($this->joinNow_model->addUser()==true){
				$this->load->view('build_profile',$this->session->userdata('userFirstName'));
		
			}	
		}
	
	
	
	}
	
}

?>