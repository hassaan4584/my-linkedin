<?php



class Build_profile_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function common_update()
	{
		$email=$this->session->userdata('userEmail');
		$this->db->where('userEmail', $email);
		$query = $this->db->get('linkedin_users');
		$row = $query->row();
		$userid=$row->userId;
		
		$data = array(
               'userCountry' => $this->input->post('countryCode'),
               'userPostalCode' => $this->input->post('postalCode'),
               'userStatus' => $this->input->post('status-chooser')
            );

		$this->db->where('userId', $userid);
		$this->db->update('linkedin_users', $data); 
		//return $userid;
		
	}
	
	function employee()
	{	
		$email=$this->session->userdata('userEmail');
		$this->db->where('userEmail', $email);
		$query = $this->db->get('linkedin_users');
		$row = $query->row();
		$userid=$row->userId;
	
			
		$data = array(
               'userId' => $userid,
               'userJobTitle' => $this->input->post('workCompanyTitle'),
               'userSelfEmployee' => $this->input->post('selfEmployed'),
			   'userCompany'=>$this->input->post('companyName'),
			   'userIndustry'=> $this->input->post('industryChooser')
            );
		$this->db->insert('employed',$data);
					
	}

	function job_seeker()
	{
		$email=$this->session->userdata('userEmail');
		$this->db->where('userEmail', $email);
		$query = $this->db->get('linkedin_users');
		$row = $query->row();
		$userid=$row->userId;
		
		
		
		
		$data = array(
               'userId' => $userid,
               'userRecentJob' => $this->input->post('workCompanyTitle'),
			   'userRecentCompany' => $this->input->post('companyName'),
               'userSelfEmployee' => $this->input->post('selfEmployed'),
			   'userJobStart'=>$this->input->post('startYear.0'),
			   'userJobEnd'=> $this->input->post('endYear.0')
            );
		$this->db->insert('job_seeker',$data);
					
	}
	function student()
	{
		$email=$this->session->userdata('userEmail');
		$this->db->where('userEmail', $email);
		$query = $this->db->get('linkedin_users');
		$row = $query->row();
		$userid=$row->userId;
		
		
		
		$data = array(
               'userId' => $userid,
               'userSchool' => $this->input->post('schoolText'),
               'userAttendedStart' => $this->input->post('startYear'),
			   'userAttendedEnd'=>$this->input->post('endYear')
            );
		$this->db->insert('student',$data);
					
	}
	
	
	



}




























?>