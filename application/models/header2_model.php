<?php

class Header2_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function search()
	{

		$userId=$this->session->userdata('userId');
		$keyword=$this->input->get('keywords');
		//$this->db->from('linkedin_users');
		$this->db->join('student','linkedin_users.userId=student.userId');
		$this->db->like('userFirstName', $keyword, 'after'); 
		//$this->db->where('title LIKE', "%$keyword%")		
		$query = $this->db->get('linkedin_users');

		$data=array();
		$ind=0;
		//$dat = $query->row();

		foreach($query->result() as $row)
		{
					$data[$ind]=array();
					$data[$ind]['userId']=$row->userId;
					$data[$ind]['userFirstName']=$row->userFirstName;
					$data[$ind]['userLastName']=$row->userLastName;
					$data[$ind]['profilePic']=$row->profilePic;
					$data[$ind]['userCountry']=$row->userCountry;
					$data[$ind]['userSchool']=$row->userSchool;
					if($userId==$row->userId)
						{
							$data[$ind]['connectionAlready']='me';					
						}
						else
						{
					$this->db->where('userId',$userId);
					$this->db->where('userFriendId',$row->userId);
					$result=$this->db->get('connection');

					if($result->num_rows()==1)
					{
						$data[$ind]['connectionAlready']='true';
					}
					else if ($result->num_rows()!=1)
					{
						$data[$ind]['connectionAlready']='false';
						
					}
					}

					

			//echo $row->userFirstName;
			//echo $row->userLastName;
			//echo '    ';
				$ind=$ind+1;
						}	
		//}
		return $data;


	}


	public function userSchool()
	{
		$userId=$this->session->userdata('userId');
		$this->db->where('userId',$userId);
		$result=$this->db->get('student');

		$userSchool='';
		foreach($result->result() as $row)
		{
			$userSchool=$row->userSchool;
		}
		return $userSchool;
	}



	public function aluminiSearch()
	{

		$userId=$this->session->userdata('userId');
		//$keyword=$this->input->get('keywords');
		//$this->db->from('linkedin_users');
		$this->db->where('userId',$userId);
		$result=$this->db->get('student');
		$school='';
		foreach($result->result() as $row)
		{
			$school=$row->userSchool;
		}


		$this->db->join('student','linkedin_users.userId=student.userId');
		$this->db->where('student.userSchool', $school); 
		//$this->db->where('title LIKE', "%$keyword%")		
		$query = $this->db->get('linkedin_users');

		$data=array();
		$ind=0;
		//$dat = $query->row();

		foreach($query->result() as $row)
		{
					$data[$ind]=array();
					$data[$ind]['userId']=$row->userId;
					$data[$ind]['userFirstName']=$row->userFirstName;
					$data[$ind]['userLastName']=$row->userLastName;
					$data[$ind]['profilePic']=$row->profilePic;
					$data[$ind]['userCountry']=$row->userCountry;
					$data[$ind]['userSchool']=$row->userSchool;
					if($userId==$row->userId)
						{
							$data[$ind]['connectionAlready']='me';					
						}
						else
						{
					$this->db->where('userId',$userId);
					$this->db->where('userFriendId',$row->userId);
					$result=$this->db->get('connection');

					if($result->num_rows()==1)
					{
						$data[$ind]['connectionAlready']='true';
					}
					else if ($result->num_rows()!=1)
					{
						$data[$ind]['connectionAlready']='false';
						
					}
					}

					

			//echo $row->userFirstName;
			//echo $row->userLastName;
			//echo '    ';
				$ind=$ind+1;
						}	
		//}
		return $data;


	
	}


	public function advance_search()
	{
		$userId=$this->session->userdata('userId');
		
		$firstName=$this->input->get('firstname');
		$lastName=$this->input->get('lastname');
		$title=$this->input->get('title');

		$school=$this->input->get('school');
		//$this->db->from('linkedin_users');
		$this->db->join('student','linkedin_users.userId=student.userId');

		if($firstName!='')
		$this->db->where('userFirstName', $firstName); 
		if($lastName!='')
		$this->db->where('userLastName', $lastName); 
		if($title=='student' && $school!='')
		$this->db->where('userSchool',$school); 
		if($title=='' && $school!='')	
		$this->db->where('userSchool',$school); 
		
		//$this->db->where('title LIKE', "%$keyword%")		
		$query = $this->db->get('linkedin_users');

		$data=array();
		$ind=0;
		//$dat = $query->row();

		foreach($query->result() as $row)
		{
					$data[$ind]=array();
					$data[$ind]['userId']=$row->userId;
					$data[$ind]['userFirstName']=$row->userFirstName;
					$data[$ind]['userLastName']=$row->userLastName;
					$data[$ind]['profilePic']=$row->profilePic;
					$data[$ind]['userCountry']=$row->userCountry;
					$data[$ind]['userSchool']=$row->userSchool;
					if($userId==$row->userId)
						{
							$data[$ind]['connectionAlready']='me';					
						}
						else
						{
					$this->db->where('userId',$userId);
					$this->db->where('userFriendId',$row->userId);
					$result=$this->db->get('connection');

					if($result->num_rows()==1)
					{
						$data[$ind]['connectionAlready']='true';
					}
					else if ($result->num_rows()!=1)
					{
						$data[$ind]['connectionAlready']='false';
						
					}
					}

			//echo $row->userFirstName;
			//echo $row->userLastName;
			//echo '    ';
				$ind=$ind+1;
						}	
		//}
		return $data;


	}
	public function advance_search1()
	{
		$userId=$this->session->userdata('userId');
		
		$firstName=$this->input->get('firstname');
		$lastName=$this->input->get('lastname');
		$title=$this->input->get('title');

		$company=$this->input->get('company');
		//$this->db->from('linkedin_users');
		$this->db->join('employed','linkedin_users.userId=employed.userId');

		if($firstName!='')
		$this->db->where('userFirstName', $firstName); 
		if($lastName!='')
		$this->db->where('userLastName', $lastName); 
		if($title!='')
		$this->db->where('userJobTitle',$title); 
		if( $company!='')	
		$this->db->where('userCompany',$company); 
		
		//$this->db->where('title LIKE', "%$keyword%")		
		$query = $this->db->get('linkedin_users');

		$data=array();
		$ind=0;
		//$dat = $query->row();

		foreach($query->result() as $row)
		{
					$data[$ind]=array();
					$data[$ind]['userId']=$row->userId;
					$data[$ind]['userFirstName']=$row->userFirstName;
					$data[$ind]['userLastName']=$row->userLastName;
					$data[$ind]['profilePic']=$row->profilePic;
					$data[$ind]['userCountry']=$row->userCountry;
					$data[$ind]['userJobTitle']=$row->userJobTitle;
					$data[$ind]['userCompany']=$row->userCompany;
					if($userId==$row->userId)
						{
							$data[$ind]['connectionAlready']='me';					
						}
						else
						{
					$this->db->where('userId',$userId);
					$this->db->where('userFriendId',$row->userId);
					$result=$this->db->get('connection');

					if($result->num_rows()==1)
					{
						$data[$ind]['connectionAlready']='true';
					}
					else if ($result->num_rows()!=1)
					{
						$data[$ind]['connectionAlready']='false';
						
					}
					}

			//echo $row->userFirstName;
			//echo $row->userLastName;
			//echo '    ';
				$ind=$ind+1;
						}	
		//}
		return $data;


	}
	
	public function advance_search2()
	{

		$userId=$this->session->userdata('userId');
		
		$firstName=$this->input->get('firstname');
		$lastName=$this->input->get('lastname');
		$title=$this->input->get('title');

		$company=$this->input->get('company');
		//$this->db->from('linkedin_users');
		$this->db->join('job_seeker','linkedin_users.userId=job_seeker.userId');

		if($firstName!='')
		$this->db->where('userFirstName', $firstName); 
		if($lastName!='')
		$this->db->where('userLastName', $lastName); 
		if($title!='')
		$this->db->where('userRecentJob',$title); 
		if( $company!='')	
		$this->db->where('userRecentCompany',$company); 
		
		//$this->db->where('title LIKE', "%$keyword%")		
		$query = $this->db->get('linkedin_users');

		$data=array();
		$ind=0;
		//$dat = $query->row();

		foreach($query->result() as $row)
		{
					$data[$ind]=array();
					$data[$ind]['userId']=$row->userId;
					$data[$ind]['userFirstName']=$row->userFirstName;
					$data[$ind]['userLastName']=$row->userLastName;
					$data[$ind]['profilePic']=$row->profilePic;
					$data[$ind]['userCountry']=$row->userCountry;
					$data[$ind]['userRecentJob']=$row->userRecentJob;
					$data[$ind]['userRecentCompany']=$row->userRecentCompany;
					if($userId==$row->userId)
						{
							$data[$ind]['connectionAlready']='me';					
						}
						else
						{
					$this->db->where('userId',$userId);
					$this->db->where('userFriendId',$row->userId);
					$result=$this->db->get('connection');

					if($result->num_rows()==1)
					{
						$data[$ind]['connectionAlready']='true';
					}
					else if ($result->num_rows()!=1)
					{
						$data[$ind]['connectionAlready']='false';
						
					}
					}

			//echo $row->userFirstName;
			//echo $row->userLastName;
			//echo '    ';
				$ind=$ind+1;
						}	
		//}
		return $data;


	}
	public function search2()
	{
		$userId=$this->session->userdata('userId');
		
		$keyword=$this->input->get('keywords');
		//$this->db->from('linkedin_users');
		$this->db->join('employed','linkedin_users.userId=employed.userId');
		$this->db->like('userFirstName', $keyword, 'after'); 
		//$this->db->where('title LIKE', "%$keyword%")		
		$query = $this->db->get('linkedin_users');

		$data=array();
		$ind=0;
		//$dat = $query->row();

		foreach($query->result() as $row)
		{
					$data[$ind]=array();
					$data[$ind]['userId']=$row->userId;
					$data[$ind]['userFirstName']=$row->userFirstName;
					$data[$ind]['userLastName']=$row->userLastName;
					$data[$ind]['profilePic']=$row->profilePic;
					$data[$ind]['userCountry']=$row->userCountry;
					$data[$ind]['userJobTitle']=$row->userJobTitle;
					$data[$ind]['userCompany']=$row->userCompany;
					if($userId==$row->userId)
						{
							$data[$ind]['connectionAlready']='me';					
						}
						else
						{
					$this->db->where('userId',$userId);
					$this->db->where('userFriendId',$row->userId);
					$result=$this->db->get('connection');

					if($result->num_rows()==1)
					{
						$data[$ind]['connectionAlready']='true';
					}
					else if ($result->num_rows()!=1)
					{
						$data[$ind]['connectionAlready']='false';
						
					}
					}

			//echo $row->userFirstName;
			//echo $row->userLastName;
			//echo '    ';
				$ind=$ind+1;
						}	
		//}
		return $data;


	}
	public function search3()
	{
		$userId=$this->session->userdata('userId');
		
		$keyword=$this->input->get('keywords');
		//$this->db->from('linkedin_users');
		$this->db->join('job_seeker','linkedin_users.userId=job_seeker.userId');
		$this->db->like('userFirstName', $keyword, 'after'); 
		//$this->db->where('title LIKE', "%$keyword%")		
		$query = $this->db->get('linkedin_users');

		$data=array();
		$ind=0;
		//$dat = $query->row();

		foreach($query->result() as $row)
		{
					$data[$ind]=array();
					$data[$ind]['userId']=$row->userId;
					$data[$ind]['userFirstName']=$row->userFirstName;
					$data[$ind]['userLastName']=$row->userLastName;
					$data[$ind]['profilePic']=$row->profilePic;
					$data[$ind]['userCountry']=$row->userCountry;
					
					$data[$ind]['userRecentJob']=$row->userRecentJob;
					$data[$ind]['userRecentCompany']=$row->userRecentCompany;
						if($userId==$row->userId)
						{
							$data[$ind]['connectionAlready']='me';					
						}
						else
						{
					$this->db->where('userId',$userId);
					$this->db->where('userFriendId',$row->userId);
					$result=$this->db->get('connection');

					if($result->num_rows()==1)
					{
						$data[$ind]['connectionAlready']='true';
					}
					else if ($result->num_rows()!=1)
					{
						$data[$ind]['connectionAlready']='false';
						
					}
					}

			//echo $row->userFirstName;
			//echo $row->userLastName;
			//echo '    ';
				$ind=$ind+1;
						}	
		//}
		return $data;


	}

	public function requests()
	{
		$userId=$this->session->userdata('userId');
		$this->db->where('requestReceiverId', $userId);
		$this->db->where('requestStatus','pending');
			$query2=$this->db->get('requests');
			$data2=array();

		return $query2->num_rows;

	}	
	public function notifications()
	{
		$userId=$this->session->userdata('userId');
		$this->db->where('userId', $userId);
		$this->db->where('visited','false');
			$query2=$this->db->get('request_notifications');
			$data2=array();

		return $query2->num_rows;

	}	
	public function searchNotification()
	{
		$userId=$this->session->userdata('userId');
		$this->db->join('requests','linkedin_users.userId=requests.requestSenderId');
		$this->db->where('requestReceiverId',$userId);
		$this->db->where('requestStatus','pending');
		$query=$this->db->get('linkedin_users');;

		$data=array();
		$ind=0;
		//$dat = $query->row();

		foreach($query->result() as $row)
		{
					$data[$ind]=array();
					$data[$ind]['userId']=$row->userId;
					$data[$ind]['userFirstName']=$row->userFirstName;
					$data[$ind]['userLastName']=$row->userLastName;
					$data[$ind]['profilePic']=$row->profilePic;

			//echo $row->userFirstName;
			//echo $row->userLastName;
			//echo '    ';
				$ind=$ind+1;
						}	


		return $data;

	}
	public function add()
	{
		$userId=$this->session->userdata('userId');

		$friendId=$this->input->get('id');
		$data=array(
			'userId'=>$userId,
			'userFriendId'=>$friendId
			);


		$this->db->insert('connection',$data);
		$data2=array(
			'userId'=>$friendId,
			'userFriendId'=>$userId
			);
		$this->db->insert('connection',$data2);

		$data3=array(
			'userId'=>$friendId,
			'friendId'=>$userId,
			'visited'=>'false'
			);
		$this->db->insert('request_notifications',$data3);

		
		$this->db->where('requestSenderId',$friendId);
		$this->db->where('requestReceiverId',$userId);
		$data4 = array(
               'requestStatus' => 'accepted'
            );

		$this->db->update('requests', $data4);


	}
	public function ignore()
	{
		$userId=$this->session->userdata('userId');

		$friendId=$this->input->get('id');
		$data=array(
			'userId'=>$userId,
			'userFriendId'=>$friendId
			);


		//2$this->db->insert('connection',$data);
		$this->db->where('requestSenderId',$friendId);
		$this->db->where('requestReceiverId',$userId);
		$data2 = array(
               'requestStatus' => 'rejected'
            );

		$this->db->update('requests', $data2);
	}

	public function findNotifications()
	{
		$userId=$this->session->userdata('userId');
		$this->db->join('request_notifications','linkedin_users.userId=request_notifications.friendId');
		$this->db->where('request_notifications.userId',$userId);
		$query=$this->db->get('linkedin_users');;

		$data=array();
		$ind=0;
		//$dat = $query->row();
		
		
		foreach($query->result() as $row)
		{
					$data[$ind]=array();
					$data[$ind]['userId']=$row->userId;
					$data[$ind]['userFirstName']=$row->userFirstName;
					$data[$ind]['userLastName']=$row->userLastName;
					$data[$ind]['profilePic']=$row->profilePic;

			//echo $row->userFirstName;
			//echo $row->userLastName;
			//echo '    ';
				$ind=$ind+1;
		
		}	
						$data2 = array(
               'visited' => 1
            );

		$this->db->where('userId',$userId);
		$this->db->update('request_notifications',$data2);

		return $data;

	}

	public function wall()
	{
		$userId=$this->input->get('userId');
		$this->db->where('userId',$userId);
		$query=$this->db->get('linkedin_users');
		$data=array();
		foreach ($query->result() as $row) {
			$data['userId']=$userId;
			$data['userFirstName']=$row->userFirstName;
			$data['userLastName']=$row->userLastName;
			$data['profilePic']=$row->profilePic;
			if($row->userStatus=='employed')
			{
				$this->db->where('userId',$userId);
				$query2=$this->db->get('employed');
				foreach ($query2->result() as $row2)
				 {
					$data['userProfession']=$row2->userJobTitle.'at'.$row2->userCompany;
				}

			}
			else if($row->userStatus=='looking')
			{
				$this->db->where('userId',$userId);
				$query2=$this->db->get('job_seeker');
				foreach ($query2->result() as $row2)
				 {
					$data['userProfession']=$row2->userRecentJob.'at'.$row2->userRecentCompany;
				}

			}
			else if($row->userStatus=='student')
			{
				$this->db->where('userId',$usrId);
				$query2=$this->db->get('student');
				foreach ($query2->result() as $row2)
				 {
					$data['userProfession']='Studied at'.$row2->userSchool;
				}

			}
			
		}
		return $data;
	}

	public function findPeopleCountry()  
	{
			$country=$this->input->get('country');
		$userId=$this->session->userdata('userId');
		//$keyword=$this->input->get('keywords');
		//$this->db->from('linkedin_users');
		$this->db->where('userId',$userId);
		$result=$this->db->get('student');
		$school='';
		foreach($result->result() as $row)
		{
			$school=$row->userSchool;
		}


		$this->db->join('student','linkedin_users.userId=student.userId');
		$this->db->where('student.userSchool', $school); 
		$this->db->where('linkedin_users.userCountry',$country);
		//$this->db->where('title LIKE', "%$keyword%")		
		$query = $this->db->get('linkedin_users');

		$data=array();
		$ind=0;
		//$dat = $query->row();

		foreach($query->result() as $row)
		{
					$data[$ind]=array();
					$data[$ind]['userId']=$row->userId;
					$data[$ind]['userFirstName']=$row->userFirstName;
					$data[$ind]['userLastName']=$row->userLastName;
					$data[$ind]['profilePic']=$row->profilePic;
					$data[$ind]['userCountry']=$row->userCountry;
					$data[$ind]['userSchool']=$row->userSchool;
					if($userId==$row->userId)
						{
							$data[$ind]['connectionAlready']='me';					
						}
						else
						{
							$this->db->where('userId',$userId);
							$this->db->where('userFriendId',$row->userId);
							$result=$this->db->get('connection');

							if($result->num_rows()==1)
							{
								$data[$ind]['connectionAlready']='true';
							}
							else if ($result->num_rows()!=1)
							{
								$data[$ind]['connectionAlready']='false';
								
							}
						}

					

			
					$ind=$ind+1;
		}	
		
		return $data;

	}


}





















?>