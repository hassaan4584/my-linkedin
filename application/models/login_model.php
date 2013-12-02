<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Login_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function validate(){
		$this->load->library('encrypt');
		// grab user input
		$userEmail = $this->security->xss_clean($this->input->post('userEmail'));
		$password = $this->security->xss_clean($this->input->post('password'));

		$pwd=$this->encrypt->sha1($this->input->post('password'));
		
		// Prep the query
		$this->db->where('userEmail', $userEmail);
		$this->db->where('userPassword', $pwd);
		
		// Run the query
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
					'profileImagePath'=>$row->profilePic,
					'nRequests'=>0
					);

			$this->db->where('requestReceiverId', $data['userId']);
			$this->db->where('requestStatus','pending');
			$query2=$this->db->get('requests');
			$data['nRequests']=$query2->num_rows;



			$this->session->set_userdata($data);
			return true;
		}
		// If the previous process did not validate
		// then return false.
		return false;
	}
}
?>