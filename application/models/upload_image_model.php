<?php



class Upload_image_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function addImagePath()
	{
		$email=$this->session->userdata('userEmail');
		$this->db->where('userEmail', $email); 
			$query = $this->db->get('linkedin_users');
		$row = $query->row();
		$userid=$row->userId;
		
		$data = array(
               'profilePic' => $this->input->post('path')
            );
		//echo $data['profilePic'];
		$this->db->where('userId', $userid);
		$this->db->update('linkedin_users', $data);


		$email=$this->session->userdata('userEmail');
		$this->db->where('userEmail', $email); 
		
		$query = $this->db->get('linkedin_users');
		// Let's check if there are any results
		if($query->num_rows == 1)
		{
			// If there is a user, then create session data
			$row = $query->row();
			$data = array(
					'userId' => $row->userId,
					'userEmail' => $row->userEmail,
					'userFirstName' => $row->userFirstName,
					'userLastName' => $row->userLastName,					
					'validated' => true,
					'profileImagePath'=>$row->profilePic
					);
			$this->session->set_userdata($data);
		}
	
	}
	function imagePath()
	{
		$email=$this->session->userdata('userEmail');
		$this->db->where('userEmail', $email); 	
		$query = $this->db->get('linkedin_users');
		$row = $query->row();
		$path=$row->profilePic;
		

		return $path;
		
	}

	
	
	



	
}	
?>