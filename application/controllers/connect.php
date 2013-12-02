<?php


class Connect extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		}
	
	
	public function index($msg = NULL){
		// Load our view to be displayed
		
		//$this->load->view('connect');
		$this->load->view('connect_view');
	}
	
	//public function sendEmail()
	//{
		
		/*
		$this->load->library('email');
		
	
		
		
		 ini_set("SMTP","ssl://smtp.gmail.com");
         ini_set("smtp_port","465");
		
		$config['protocol'] = 'smtp';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		
		/*		$config = Array(
				'protocol' => 'smtp',
				 'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 25,
				'smtp_user' => 'arahim4298@gmail.com',
				'smtp_pass' => '37659125',
				'mailtype'  => 'text', 
				'charset'   => 'iso-8859-1'
				);
		
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		
		$this->email->from('arahim4298@gmail.com', 'Abdul');
		$this->email->to('arahim4298@gmail.com'); 
		//$this->email->cc('another@another-example.com'); 
		//$this->email->bcc('them@their-example.com'); 

		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');	

		//$this->email->send();
		
		/*$config['protocol'] = 'smtp';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		*/
		//$config['smtp_host']='smtp.gmail.com';
		
		//$config['smtp_ssl']='ssl';
		//$config['smtp_user']='arahim4298@gmail.com';
		//$config['smtp_pass']='37659125';
		//$config['smtp_port']='465';
		//$this->email->initialize($config);
		
		//$this->email->send();
		//{
			//echo "Mail send successfully!";
		//}
		
	//	{
	//		echo ($this->email->print_debugger());
	//	}
		
		
	
	//}
	


	public function connectNow()
	{
		//echo ("success");
		$this->load->model('connect_model');
		$result=$this->connect_model->connect();
		if($result==true)
		{
			$response='<p style="text-align:center; background-color:green;"> Your invitation is sent sucrssfully</p>';
			echo ($response);
		}
		else
		{
			$response='<p style="text-align:center; background-color:red; line-height:15px;">Your Invitation has already been sent<p>';
			echo ($response);
		}
	} 








	
}

?>