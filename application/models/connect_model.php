<?php

class Connect_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}



	function connect()
	{
		$friendId=$this->input->get('id');
		//echo ($friendId);

		$userId=$this->session->userdata('userId');
		//echo ($userId);
		
		$this->db->where('requestSenderId',$userId);
		$this->db->where('requestReceiverId',$friendId);
		$answer=$this->db->get('requests');
		if($answer->num_rows()==1)
		{
			return false;
		}

		
		$data=array('requestSenderId'=>$userId,'requestReceiverId'=>$friendId,'requestStatus'=>'pending');
		$this->db->insert('requests',$data);
		return true;
	


	}
}
?>