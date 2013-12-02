<?php
class Home_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function validate()
	{
		$query=$this->db->get('linkedin_users');
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
		$this->load->library('encrypt');


		$path='icon_no_photo_no_border_offset_100x100.png';
		$pwd=$this->encrypt->sha1($this->input->post('pwd'));
	//	echo ($pwd);
		$data=array('userEmail'=>$this->input->post('Email'),'userFirstName'=>$this->input->post('firstname'),'userLastName'=>$this->input->post('lastname'),'userPassword'=>$pwd,'profilePic'=> $path );
	
		// $sql = "INSERT INTO linkedin_users (userEmail,userFirstName,userLastName,userPassword) 
        // VALUES (".this->input->post('Email').",".this->.",".this->input->post('lastname').",".this->input->post('pwd').") ";
		//echo $this->input->post('firstname');
		$this->db->insert('linkedin_users',$data);
	
		$email=$this->input->post('Email');
		$this->db->where('userEmail', $email);
		$query = $this->db->get('linkedin_users');
		$row = $query->row();
		$userId=$row->userId;
				$data=array('userId'=>$userId,'userEmail'=>$this->input->post('Email'),'userFirstName'=>$this->input->post('firstname'),'userLastName'=>$this->input->post('lastname'),'userPassword'=>$pwd,'profileImagePath'=> $path );

		$this->session->set_userdata($data);
		return true;

	}

	public function addPost()
	{
		$this->load->helper('date');
		$datestring = "Year: %Y Month: %m Day: %d - %h:%i %a";
		$time = time();

		$date= mdate($datestring, $time);

		$link_parse=$this->input->post('link_parse');
		if($link_parse=='link')
		{
			$link_title=$this->input->post('link_title');
			$link_description=$this->input->post('link_description');
			$link_image=$this->input->post('link_image');
			$post=$this->security->xss_clean($this->input->post('post'));
			$filePath=$this->input->post('path');
			$userId=$this->session->userdata('userId');
			if($filePath=='noPic')
			{
				$data=array(
				'userId'=>$userId,
				'postContent'=>$post,			
				'date'=>date('Y-m-d h-m-s'),
				'shareWith'=>$this->input->post('shareWith'),
				'parse_link'=>true,
				'title'=>$link_title,
				'description'=>$link_description,
				'link_image'=>$link_image
				);
			}
			else
			{
				$data=array(
				'userId'=>$userId,
				'postContent'=>$post,			
				'date'=>date('Y-m-d h-m-s'),
				'filePath'=>$filePath,
				'shareWith'=>$this->input->post('shareWith'),
				'parse_link'=>true,
				'title'=>$link_title,
				'description'=>$link_description,
				'link_image'=>$link_image
				
				);

			}
		}
		else
		{

			$post=$this->security->xss_clean($this->input->post('post'));
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
				'shareWith'=>$this->input->post('shareWith'),
				);

			}
		}

		$this->db->insert('posts',$data);

	}
/*
	function displayPost()
	{
		$userId=$this->session->userdata('userId');
		$this->db->join('linkedin_users','posts.userId=linkedin_users.userId');
		$this->db->join('connection','connection.userFriendId=posts.userId','left');
		$operation=array('shareWith'=>'public');
		$this->db->where($operation);
		$operation2=array('connection.userId' =>$userId );
		$this->db->or_where($operation2);
		$this->db->where('connection.userFriendId ','posts.userId' );
		$operation3=array('posts.userId'=>$userId);
		$this->db->or_where($operation3);
		 $this->db->order_by("posts.postId", "asce");

		$query=$this->db->get('posts');
		//echo ($query->num_rows());

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
					$data[$ind]['postId']=$row->postId;
					

			//echo $row->userFirstName;
			//echo $row->userLastName;
			//echo '    ';
				$ind=$ind+1;
		}	
		//}
		return $data;
	}
*/
	/*function displayPost()
	{
		$userId=$this->session->userdata('userId');
		$this->db->where('userId',$userId);
		$friends=$this->db->get('connection');

		$this->db->join('linkedin_users','posts.userId=linkedin_users.userId');
		$this->db->join('connection','connection.userFriendId=posts.userId','left');
		$operation=array('shareWith'=>'public');
		$this->db->where($operation);		
		if($friends->num_rows()>0)
		{
			$operation2=array();
			$ind=0;
		//$operation2=$data[0]['connection.userId'] =$userId;
			foreach($friends->result() as $r)
			{
				$operation2[$ind]['posts.userId']=$r->userFriendId;
				$ind=$ind+1;
			}
			$this->db->or_where($operation2);
		}
		//$this->db->where('connection.userFriendId ','posts.userId' );
			$operation3=array('posts.userId'=>$userId);
			$this->db->or_where($operation3);
		 	$this->db->order_by("posts.postId", "asce");

			$query=$this->db->get('posts');
		//echo ($query->num_rows());

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
					$data[$ind]['postId']=$row->postId;
					

			//echo $row->userFirstName;
			//echo $row->userLastName;
			//echo '    ';
				$ind=$ind+1;
			}	
		//}
		return $data;
	}
*/



function displayPost()
	{

			$userId=$this->session->userdata('userId');
			$this->db->where('userId',$userId);
			$friend=$this->db->get('connection');

			$this->db->join('linkedin_users','posts.userId=linkedin_users.userId');		
			$query=$this->db->get('posts');

			$data=array();
			$ind=0;

			if($query->num_rows>0)
			foreach($query->result() as $row)
			{
				$bool=false;
				if($row->shareWith=='Public')
				{
						$data[$ind]=array();
					$data[$ind]['userId']=$row->userId;
					$data[$ind]['userFirstName']=$row->userFirstName;
					$data[$ind]['userLastName']=$row->userLastName;
					$data[$ind]['profilePic']=$row->profilePic;
					$data[$ind]['postContent']=$row->postContent;
					$data[$ind]['filePath']=$row->filePath;
					$data[$ind]['postId']=$row->postId;
					$data[$ind]['parse_link']=$row->parse_link;
					$data[$ind]['parse_title']=$row->title;
					$data[$ind]['parse_description']=$row->description;
					$data[$ind]['parse_image']=$row->link_image;
					
					$bool=true;

			
					$ind=$ind+1;		
				}
					else if($row->userId==$userId)
					{
							$data[$ind]=array();
						$data[$ind]['userId']=$row->userId;
						$data[$ind]['userFirstName']=$row->userFirstName;
						$data[$ind]['userLastName']=$row->userLastName;
						$data[$ind]['profilePic']=$row->profilePic;
						$data[$ind]['postContent']=$row->postContent;
						$data[$ind]['filePath']=$row->filePath;
						$data[$ind]['postId']=$row->postId;
						$data[$ind]['parse_link']=$row->parse_link;
						$data[$ind]['parse_title']=$row->title;
						$data[$ind]['parse_description']=$row->description;
						$data[$ind]['parse_image']=$row->link_image;
						
						$bool=true;

						$ind=$ind+1;
					}
					else
					{
						foreach($friend->result() as $f)
						{
							if($f->userFriendId==$row->userId)
							{
								$data[$ind]=array();
								$data[$ind]['userId']=$row->userId;
								$data[$ind]['userFirstName']=$row->userFirstName;
								$data[$ind]['userLastName']=$row->userLastName;
								$data[$ind]['profilePic']=$row->profilePic;
								$data[$ind]['postContent']=$row->postContent;
								$data[$ind]['filePath']=$row->filePath;
								$data[$ind]['postId']=$row->postId;
								
								$data[$ind]['parse_link']=$row->parse_link;
								$data[$ind]['parse_title']=$row->title;
								$data[$ind]['parse_description']=$row->description;
								$data[$ind]['parse_image']=$row->link_image;
								
								$bool=true;

						//echo $row->userFirstName;
						//echo $row->userLastName;
						//echo '    ';
								$ind=$ind+1;
							}
						}
					}
				 
			
			}	
		//}
		return $data;
	}









	function postComment()
	{


		$comment=$this->input->get('comment');
		$postId=$this->input->get('postId');
		$userId=$this->session->userdata('userId');
		$data=array(
			'postId'=>$postId,
			'userId'=>$userId,
			'comment'=>$comment
			);
		$this->db->insert('comments',$data);
	}


	function displayComments()
	{
		$postId=$this->input->get('postId');

		$this->db->join('linkedin_users','comments.userId=linkedin_users.userId');		
		$this->db->where('postId',$postId);
		$query=$this->db->get('comments');

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
					$data[$ind]['comment']=$row->comment;
					//$data[$ind]['filePath']=$row->filePath;
					$data[$ind]['postId']=$row->postId;
					

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