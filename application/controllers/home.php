<?php

class Home extends CI_Controller
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

			$this->load->model('home_model');
			$query=$this->home_model->displayPost();
			$nResult=count($query);
			echo ($nResult);
			
			$data['picPath']=$this->session->userdata('profileImagePath');
			$data['nRequests']=$this->session->userdata('nRequests');
			$this->load->view('header2_view',$data);
			$data['query']=$query;
			$data['nResult']=$nResult;
			$data['picPath']=$this->session->userdata('profileImagePath');			
			$this->load->view('default_view',$data);
			//redirect('common/settings', 'refresh');
		}else{
			$data['msg'] = $msg;
			$this->load->view('header_view',$data);
			$this->load->view('home_view', $data);
			$this->load->view('footer_view', $data);
		}
		//$this->load->view('common/footer',$data);
	}
	
	public function process()
	{
		
		$this->load->model('home_model');
		$result=$this->home_model->validate();
		
		if( $result==true){
			// If user did not validate, then show them login page again
			$msg = '<font color=red>LinkedIn account already does exist against this email account</font><br />';
			$this->index($msg);
		}else{
			// If user did validate, 
			// Send them to members area
			
			//echo $this->input->post('firstname');
		
			if($this->home_model->addUser()==true){
				$this->load->view('build_profile',$this->session->userdata('userFirstName'));
		
			}	
		}
	}


	public function fileUpload()
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
			
		}
	
	}

	public function addPost()
	{

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);
		//$field_name = array('path'=>$this->input->post('file'));
		//echo ($field_name['path']);
		$check=$this->input->post('path');
		if($check!='noPic')
		{
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
			
		}
	}
		$this->load->model('home_model');
			$this->home_model->addPost();


		
		$this->index();
	}

	public function postComment()
	{
		$this->load->model('home_model');
		$this->home_model->postComment();

		$response='sucess';
		echo $response;
	}

	public function displayComments()
	{
		$this->load->model('home_model');
		$query=$this->home_model->displayComments();
		$hint='';
		//$response=count($query);
		$nResult=count($query);
		
		for($ind=0; $ind<$nResult; $ind++)
    	{
    		if($hint=='')
    		{
				$hint='<li class="friend-comment">
							<img class="comment-img" src="uploads/'.$query[$ind]['profilePic'].'" width="30" height="30" >
		 					<p><a class="user-name">'.$query[$ind]['userFirstName'].' '.$query[$ind]['userLastName'].'</a> 
		 					  '.$query[$ind]['comment'].'</p> 
		 					</li>';

    		}
    		else
    		{

			$hint= $hint.'<li class="friend-comment">
							<img class="comment-img" src="uploads/'.$query[$ind]['profilePic'].'" width="30" height="30" >
		 					<p><a class="user-name">'.$query[$ind]['userFirstName'].' '.$query[$ind]['userLastName'].'</a> 
		 					  '.$query[$ind]['comment'].'</p> 
		 					</li>';
			}

		}


		$response=$hint;
		echo $response;

	}





	
}

?>