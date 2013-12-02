<?php
class Home_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function validate()
	{
		$query=$this->db->query('SELECT userEmail FROM linkedin_users');
		$newEmail=$this->input->post('Email');
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
		$data=array('userEmail'=>$this->input->post('Email'),'userFirstName'=>$this->input->post('firstname'),'userLastName'=>$this->input->post('lastname'),'userPassword'=>$this->input->post('pwd'),'profilePic'=> $path );
	
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

	public function addPost()
	{
		$this->load->helper('date');
		$datestring = "Year: %Y Month: %m Day: %d - %h:%i %a";
		$time = time();

		$date= mdate($datestring, $time);


		$post=$this->input->post('post');
		$filePath=$this->input->post('path');
		$userId=$this->session->userdata('userId');
		if($filePath=='noPic')
		{
			$data=array(
			'userId'=>$userId,
			'postContent'=>$post,			
			'date'=>date('Y-m-d h-m-s'),
			'shareWith'=>$this->input->post('shareWith')
			);
		}
		else
		{
			$data=array(
			'userId'=>$userId,
			'postContent'=>$post,			
			'date'=>date('Y-m-d h-m-s'),
			'filePath'=>$filePath,
			'shareWith'=>'public'
			);

		}

		$this->db->insert('posts',$data);

	}

	function displayPost()
	{
		$this->db->join('posts','linkedin_users.userId=posts.userId');
		$this->db->where('shareWith','public');
		$query=$this->db->get('linkedin_users');

		$data=array();
		$ind=0;
		//$dat = $query->row();
		if($query->num_rows>0)
		foreach($query->result() as $row)
		{
					$data[$ind]=array();
					$data[$ind]['userId']=$row->userId;
					$data[$ind]['userFirstName']=$row->userFirstName;
					$data[$ind]['userLastName']=$row->userLastName;
					$data[$ind]['profilePic']=$row->profilePic;
					$data[$ind]['postContent']=$row->postContent;
					$data[$ind]['filePath']=$row->filePath;
					

			//echo $row->userFirstName;
			//echo $row->userLastName;
			//echo '    ';
				$ind=$ind+1;
		}	
		//}
		return $data;
	}

}


?>