<?php

class What_is_linkedIn extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index($msg = NULL){
		// Load our view to be displayed
		// to the user
		$this->load->helper('url');

		if($this->session->userdata('username')){
			redirect('common/settings', 'refresh');
		}else{
			$data['msg'] = $msg;
			$this->load->view('header_view',$data);
			$this->load->view('what_is_linkedIN_view', $data);
			$this->load->view('footer_view', $data);
		}
		//$this->load->view('common/footer',$data);
	}
}	
?>