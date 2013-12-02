<?php

class hello extends CI_Controller
{
	function __construct(){
		parent::__construct();
	}
	
	function you()
	{
		$this->load->view('view');
	}
}
?>