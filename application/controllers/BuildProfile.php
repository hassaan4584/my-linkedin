<?php




class BuildProfile extends CI_Controller
{


	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	function index()
	{
		$this->load->view('build_profile');
		$this->load->helper('url');

		if($this->session->userdata('userEmail'))
		{
			//redirect('what_is_linkedin', 'refresh');
			$this->load->view('build_profile');
			//$this->load->view('default_view');
		
		}
		else
		{
			$data['msg'] = $msg;
			//$this->load->view('header_view',$data);
			$this->load->view('home_view', $data);
		}
	}

	function process()
	{
		$this->load->model('build_profile_model');
		$this->build_profile_model->common_update();
		if($this->input->post('status-chooser')=='employed')
		{
			$this->build_profile_model->employee();							
		}
		else if($this->input->post('status-chooser')=='looking')
		{
			$this->build_profile_model->job_seeker();							
		}
		else if($this->input->post('status-chooser')=='student')
		{
			$this->build_profile_model->student();							
		}
		redirect('uploadProfileImage','refresh');
				
	}	
















}

























?>