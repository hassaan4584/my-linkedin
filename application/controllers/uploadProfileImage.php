<?php


class UploadProfileImage extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index($msg = NULL){
		// Load our view to be displayed
		// to the user
		$this->load->helper('url');

		if($this->session->userdata('userId'))
		{
			//redirect('what_is_linkedin', 'refresh');
			//$this->load->view('header_view');
			$this->load->model('uploadImage_model');
			$path=$this->uploadImage_model->imagePath();
		
			//$path='./My Profile  Add Photo   LinkedIn_files/icon_no_photo_no_border_offset_100x100.png';

			$data['picPath'] = $path;
			$this->load->view("header2_view",$data);
			
			$this->load->view('uploadImage_View',$data);
		
		}
		else
		{
			$data['msg'] = $msg;
			//$this->load->view('header_view',$data);
			$this->load->view('header_view');
			$this->load->view('home_view', $data);

			$this->load->view('footer_view', $data);
		}
		//$this->load->view('common/footer',$data);
	}
	public function  addImage()
	{
		
		
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);
		//$field_name = array('path'=>$this->input->post('file'));
		//echo ($field_name['path']);
		if ( ! $this->upload->do_upload())
		{
			$data = array('error' => $this->upload->display_errors());
			echo $data['error'];
			//$this->load->view('error', $data);
			//echo ($field_name['path']
			
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->model('uploadImage_model');
		//echo $this->input->post('path');
			$this->uploadImage_model->addImagePath();


			//$this->load->view('error', $data);
		
			$this->index();
				//$path=$this->uploadImage_model->imagePath();
				//$data['picPath'] = $path;
				//$this->load->view('upload_profile_image_view', $data);	
				

		}













		
	}	
}

?>	