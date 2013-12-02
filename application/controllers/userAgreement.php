<?php

class UserAgreement extends CI_Controller
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
			redirect('default_view', 'refreshs');
		}else{
			$data['msg'] = $msg;
			//$this->load->view('header_view',$data);
			$this->load->view('userAgreement_view', $data);
			//$this->load->view('footer_view', $data);
		}
		//$this->load->view('common/footer',$data);
	}
	}
?>