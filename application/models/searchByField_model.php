<?php
class SearchByField_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function search()
	{
	echo"search model <br/>";
		// yahan pay db ki query kase likhain gay?
		// aur jis  f name ko db k first names k sath compare krna hay,,  
		// wo f name kahan say aye ga

/*new query */
		echo "my search query ";
		$l_name = "Ahmed";
		$this->db->where('userLastName', $l_name);
		$query = "SELECT userFirstName AS ufn, userLastName AS uln, userEmail AS ue FROM linkedin_users WHERE userFirstName=? OR userLastName=?";
		$query1=$this->db->query ($query, array($this->input->post('f_name'), $this->input->post('l_name')));
		
		echo $query1->num_rows();
		foreach ($query1->result_array() as $row)
		{
		   echo "<br/>";
		   echo $row['ufn'];
		   echo " ";
		   echo $row['uln'];
		   echo " ";
		   echo $row['ue'];
		   echo "<br/>";
		}
/* new query ends */
		
		// echo "my search query ";
		// $query = $this->db->query('SELECT userFirstName AS ufn, userLastName AS uln, userEmail AS ue FROM linkedin_users');
		// echo $query->num_rows();

		// $userEmail = $this->input->post('userEmail');

		// $this->db->where('userEmail', $userEmail);
		// $query = $this->db->get('linkedin_users');
		// $row = $query->row();
		// $userid=$row->userId;




		$query=$this->db->query('SELECT userFirstName FROM linkedin_users');
		$newEmail=$this->input->post('f_name');
		//echo $newEmail;
		foreach($query->result() as $row)
		{
			if($row->userFirstName==$newEmail)
			{
				return true;
			}				
		}
		return false;
	
	}
/*
	public function addUser()
	{
		$data=array('userEmail'=>$this->input->post('email'),'userFirstName'=>$this->input->post('firstName'),'userLastName'=>$this->input->post('lastName'),'userPassword'=>$this->input->post('password'));
	
		// $sql = "INSERT INTO linkedin_users (userEmail,userFirstName,userLastName,userPassword) 
        // VALUES (".this->input->post('Email').",".this->.",".this->input->post('lastname').",".this->input->post('pwd').") ";
		//echo $this->input->post('firstname');
		$this->db->insert('linkedin_users',$data);
		$this->session->set_userdata($data);
		return true;

	}
*/
	
}


?>