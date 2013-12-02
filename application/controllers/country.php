<?php
class Country extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index($msg = NULL){
		// Load our view to be displayed
		// to the user
		$this->load->helper('url');

		if($this->session->userdata('userEmail'))
		{
			//redirect('what_is_linkedin', 'refresh');
			$this->load->view('header_view');
			$this->load->view('default_view');
		
		}
		else
		{
			$data['msg'] = $msg;
			$this->load->view('header_view',$data);
			$this->load->view('country_view', $data);
		}
		//$this->load->view('common/footer',$data);
	}
}	
?>