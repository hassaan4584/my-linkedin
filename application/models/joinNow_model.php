<?php
class JoinNow_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function validate()
	{
		$query=$this->db->query('SELECT userEmail FROM linkedin_users');
		$newEmail=$this->input->post('email');
		foreach($query->result() as $row)
		{
			if($row->userEmail==$newEmail)
			{
				return true;
			}				
		}
		return false;
	
	}

	public function addUser()
	{
		$path='icon_no_photo_no_border_offset_100x100.png';
		$data=array('userEmail'=>$this->input->post('email'),'userFirstName'=>$this->input->post('firstName'),'userLastName'=>$this->input->post('lastName'),'userPassword'=>$this->input->post('password'), 'profilePic'=> $path  );
	
		// $sql = "INSERT INTO linkedin_users (userEmail,userFirstName,userLastName,userPassword) 
        // VALUES (".this->input->post('Email').",".this->.",".this->input->post('lastname').",".this->input->post('pwd').") ";
		//echo $this->input->post('firstname');
		$this->db->insert('linkedin_users',$data);

		$email=$this->input->post('email');
		$this->db->where('userEmail', $email);
		$query = $this->db->get('linkedin_users');
		$row = $query->row();
		$userId=$row->userId;
				$data=array('userId'=>$userId,'userEmail'=>$this->input->post('Email'),'userFirstName'=>$this->input->post('firstname'),'userLastName'=>$this->input->post('lastname'),'userPassword'=>$this->input->post('pwd'),'profileImagePath'=> $path );


		$this->session->set_userdata($data);
		return true;

	}
}


?>