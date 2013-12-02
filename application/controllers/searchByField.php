<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class SearchByField extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index()
	{
		$this->load->view('searchByField_view');
	}
	
	
/*	
	public function index($msg = NULL){
		// Load our view to be displayed
		// to the user
		$this->load->helper('url');

		if($this->session->userdata('userEmail'))
		{
			//redirect('what_is_linkedin', 'refresh');
			$this->load->view('header_view');
			$this->load->view('default_view');
		
		}
		else
		{
			$data['msg'] = $msg;
			//$this->load->view('header_view',$data);
			$this->load->view('signIn_view', $data);
		}
		//$this->load->view('common/footer',$data);
	}
*/
	
	public function search_by_field(){
		// Load the model
		$this->load->model('searchByField_model');
		// Validate the user can login
		$result = $this->searchByField_model->search();
		
		
		
		
		// Now we verify the result /* no need to do this */
/*		if(! $result){
			// If user did not validate, then show them login page again
			$msg = '<font color=red>Invalid username and/or password.</font><br />';
			$this->index($msg);
		}else{
			// If user did validate, 
			// Send them to members area
			//$this->load->view('header_view');
			redirect('defaultt','refresh');
			//$this->load->view('default_view');
				}		
*/
	}
	/* no need */
/*	public function do_logout(){
		$this->session->sess_destroy();
		redirect('login/login','refresh');
	}
*/	
}
?>