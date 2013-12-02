<?php


class Header2 extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index($msg = NULL){
		// Load our view to be displayed
		// to the user
		$this->load->helper('url');

		if($this->session->userdata('userEmail'))
		{
			//redirect('what_is_linkedin', 'refresh');
			//$this->load->model('header2_model');
		//$query=$this->header2_model->requests();
			//echo ($this->session->userdata('nRequests'));
			
			$data['picPath']=$this->session->userdata('profileImagePath');
			$data['nRequests']=$this->session->userdata('nRequests');
				//echo ($data['picPath']);
			$this->load->view('header2_view',$data);
			
			//$this->load->view('default_view');
		
		}
		else
		{
			//$data['msg'] = $msg;
			//$this->load->view('header_view',$data);
			//$this->load->view('home_view');
			//$this->load->view('home_view', $data);
			$data['msg'] = $msg;
			$this->load->view('header_view',$data);
			$this->load->view('home_view', $data);
			$this->load->view('footer_view', $data);
		}
		}
		//$this->load->view('common/footer',$data);
	

	
	public function search()
	{


		$this->load->model('header2_model');
		$query=$this->header2_model->search();
		$nResult=count($query);
		//echo $query[0]['userFirstName'];
		///print_r(array_keys($query[0]));

		$data['query']=$query;
		$data['nResult']=$nResult;
		$query2=$this->header2_model->search2();
		$nResult2=count($query2);
		$query3=$this->header2_model->search3();
		$nResult3=count($query3);
		$data['query2']=$query2;
		$data['nResult2']=$nResult2;
		$data['query3']=$query3;
		$data['nResult3']=$nResult3;
		
		$data['picPath']=$this->session->userdata('profileImagePath');
		$data['picPath']=$this->session->userdata('profileImagePath');
		$data['nRequests']=$this->session->userdata('nRequests');
		$this->load->view('header2_view',$data);
		$this->load->view('display_result',$data);


	}



	public function advance_search()
	{


		$title=$this->input->get('title');
		$this->load->model('header2_model');
		//echo $query[0]['userFirstName'];
		///print_r(array_keys($query[0]));
		if($title=='')
		{
		$query=$this->header2_model->advance_search();
		$nResult=count($query);
		
		$data['query']=$query;
		$data['nResult']=$nResult;
		$query2=$this->header2_model->advance_search1();
		$nResult2=count($query2);
		$query3=$this->header2_model->advance_search2();
		$nResult3=count($query3);
		$data['query2']=$query2;
		$data['nResult2']=$nResult2;
		$data['query3']=$query3;
		$data['nResult3']=$nResult3;
		}
		else
			if($title=='student' || $title=='Student')
			{
				$query=$this->header2_model->advance_search();
				$nResult=count($query);
				$data['query']=$query;
				$data['nResult']=$nResult;
				$data['query2']='';
				$data['nResult2']='';
				$data['query3']='';
				$data['nResult3']='';
			}
			else
			{
				$data['query']='';
				$data['nResult']='';
				$query2=$this->header2_model->advance_search1();
				$nResult2=count($query2);
				$query3=$this->header2_model->advance_search2();
				$nResult3=count($query3);
				$data['query2']=$query2;
				$data['nResult2']=$nResult2;
				$data['query3']=$query3;
				$data['nResult3']=$nResult3;
			}
		$data['picPath']=$this->session->userdata('profileImagePath');
		$data['picPath']=$this->session->userdata('profileImagePath');
		$data['nRequests']=$this->session->userdata('nRequests');
		$this->load->view('header2_view',$data);
		$this->load->view('display_result',$data);


	}


	public function alumini()
	{
		$this->load->model('header2_model');
		$query=$this->header2_model->aluminiSearch();
		$userSchool=$this->header2_model->userSchool();
		$nResult=count($query);
		//$data['query']=$query;
		//$data['nResult']=$nResult;
		$data['picPath']=$this->session->userdata('profileImagePath');
		$data['picPath']=$this->session->userdata('profileImagePath');
		$data['nRequests']=$this->session->userdata('nRequests');
		$data['userSchool']=$userSchool;
		$data['nResult']=$nResult;

				$hint="";
  				for($i=0; $i<$nResult; $i++)
    			{
    				
    				$hint=$hint.'<li class="person">
								<a class="profile-link">
									<img  src="uploads/'.$query[$i]['profilePic'].'" />
								</a>
								<div class="details">
									<h3 class="full-name">
										<div class="distance">
											<a class="profile-link" href="index.php/header2/viewProfile?id='.$query[$i]['userId'].'">'.$query[$i]['userFirstName'].' '.$query[$i]['userLastName'].'</a>
										</div>
									</h3>
									<p class="headline">Student at '. $query[$i]['userSchool'].'</p>
									<ul class="specifics">
										<li class="first">'.$query[$i]['userCountry'].'</li>
									</ul>
								</div>
								<div class="ft">';
								if($query[$i]['connectionAlready']=='true'){
								$hint=$hint.'	<span class="connect-logo"></span>
									<a class="left-action connect ">Message</a>';
								}else if($query[$i]['connectionAlready']=='false')
								{

									$hint=$hint.'<span class="connect-logo"></span><button class="left-action connect alumni-connect-button" onclick="connectNow('.$query[$i]['userId'].')"> Connect</button>';		
								}
								$hint=$hint.'<span class="divider">&nbsp; </span>
								
								</div>
							</li>';
      					
    			}
  			$nPakistan=0;
  			$nIndia=0;
  			$nFrance=0;
    			for($i=0;$i<$nResult;$i++)
    			{
    				if($query[$i]['userCountry']=='Pakistan')
    				{
    					$nPakistan=$nPakistan+1;
    				}
    			}
    			for($i=0;$i<$nResult;$i++)
    			{
    				if($query[$i]['userCountry']=='India')
    				{
    					$nIndia=$nIndia+1;
    				}
    			}
    			for($i=0;$i<$nResult;$i++)
    			{
    				if($query[$i]['userCountry']=='France')
    				{
    					$nFrance=$nFrance+1;
    				}
    			}
    			$nPPercent=($nPakistan/$nResult)*100;
    			$nIPercent=($nIndia/$nResult)*100;
    			$nFPercent=($nFrance/$nResult)*100;
    			$data['nPakistan']=$nPakistan;
    			$data['nIndia']=$nIndia;
    			$data['nFrance']=$nFrance;
    			$data['nPakistanPercent']=$nPPercent;
    			$data['nIndiaPercent']=$nIPercent;
    			$data['nFrancePercent']=$nFPercent;
    	$data['response']=$hint;
		$this->load->view('header2_view',$data);
		$this->load->view('alumini_view',$data);



	}


	public function findPeopleCountry()
	{
		$this->load->model('header2_model');
		$query=$this->header2_model->findPeopleCountry();
		$userSchool=$this->header2_model->userSchool();
		$nResult=count($query);

			$hint="";
  				for($i=0; $i<$nResult; $i++)
    			{
    				
    				$hint=$hint.'<li class="person">
								<a class="profile-link">
									<img  src="uploads/'.$query[$i]['profilePic'].'" />
								</a>
								<div class="details">
									<h3 class="full-name">
										<div class="distance">
											<a class="profile-link" href="index.php/header2/viewProfile?id='.$query[$i]['userId'].'">'.$query[$i]['userFirstName'].' '.$query[$i]['userLastName'].'</a>
										</div>
									</h3>
									<p class="headline">Student at '. $query[$i]['userSchool'].'</p>
									<ul class="specifics">
										<li class="first">'.$query[$i]['userCountry'].'</li>
									</ul>
								</div>
								<div class="ft">';
								if($query[$i]['connectionAlready']=='true'){
								$hint=$hint.'	<span class="connect-logo"></span>
									<a class="left-action connect ">Message</a>';
								}else
								{
$hint=$hint.'<span class="connect-logo"></span><button class="left-action connect alumni-connect-button" onclick="connectNow('.$query[$i]['userId'].')"> Connect</button>';		
																}
								$hint=$hint.'<span class="divider">&nbsp; </span>
								
								</div>
							</li>';
      					
    			}
  			$response=$hint;
		
		echo ($response);

	}




	public function viewProfile()
	{
		$this->load->model('header2_model');
		$result=$this->header2_model->wall();

		$userId=$this->input->get('userId');
		$data['picPath']=$this->session->userdata('profileImagePath');
		$data['nRequests']=$this->session->userdata('nRequests');
		$this->load->view('header2_view',$data);
		$this->load->model('header2_model');
		$result= array();
		$result=$this->header2_model->wall();
		$data['result']=$result;
		

		$this->load->view('profileView',$data);
		


	}



	public function searchSuggestion()
	{

		$q=$_GET["keywords"];



		$this->load->model('header2_model');
		$query=$this->header2_model->search();
		$nResult=count($query);
		//echo ($nResult);
		//lookup all hints from array if length of q>0
		  if (strlen($q) > 0)
  			{
  				$hint="";
  				for($i=0; $i<$nResult; $i++)
    			{
    		
      						if ($hint=="")
        						{
        							$hint='<li class="record"> <a href="index.php/header2/viewProfile?userId='.$query[$i]['userId'].'"><img class="profilePic" src="uploads/'.$query[$i]['profilePic'].'"> <h4 class="name"> '. $query[$i]['userFirstName'].' '.$query[$i]['userLastName'].'</h4> <p class="info">'.$query[$i]['userSchool'].'</p></a></li>';
        						}
      						else
        						{
        							$hint=$hint.'<li class="record"> <a href="index.php/header2/viewProfile?userId='.$query[$i]['userId'].'"><img class="profilePic" src="uploads/'.$query[$i]['profilePic'].'"> <h4 class="name"> '. $query[$i]['userFirstName'].$query[$i]['userLastName'].'</h4> <p class="info">'.$query[$i]['userSchool'].'</p></a></li>';
          						}
      					
    			}
  			}



  		$query2=$this->header2_model->search2();
		$nResult2=count($query2);
		
			if (strlen($q) > 0)
  			{
  				$hint2="";
  				for($i=0; $i<$nResult2; $i++)
    			{
    		
      						if ($hint2=="")
        						{
        							$hint2='<li class="record"> <a href="index.php/header2/viewProfile?userId='.$query2[$i]['userId'].'"><img class="profilePic" src="uploads/'.$query2[$i]['profilePic'].'"> <h4 class="name"> '. $query2[$i]['userFirstName'].' '.$query2[$i]['userLastName'].'</h4> <p class="info">'.$query2[$i]['userCompany'].'</p></a></li>';
        						}
      						else
        						{
        							$hint2=$hint2.'<li class="record"> <a href="index.php/header2/viewProfile?userId='.$query2[$i]['userId'].'"><img class="profilePic" src="uploads/'.$query2[$i]['profilePic'].'"> <h4 class="name"> '. $query2[$i]['userFirstName'].$query2[$i]['userLastName'].'</h4> <p class="info">'.$query2[$i]['userCompany'].'</p></a></li>';
          						}
      					
    			}
  			}



  		$query3=$this->header2_model->search3();
		$nResult3=count($query3);
		
			if (strlen($q) > 0)
  			{
  				$hint3="";
  				for($i=0; $i<$nResult3; $i++)
    			{
    		
      						if ($hint3=="")
        						{
        							$hint3='<li class="record"> <a href="index.php/header2/viewProfile?userId='.$query3[$i]['userId'].'"><img class="profilePic" src="uploads/'.$query3[$i]['profilePic'].'"> <h4 class="name"> '. $query3[$i]['userFirstName'].' '.$query3[$i]['userLastName'].'</h4> <p class="info">'.$query3[$i]['userRecentCompany'].'</p></a></li>';
        						}
      						else
        						{
        							$hint3=$hint3.'<li class="record"> <a href="index.php/header2/viewProfile?userId='.$query3[$i]['userId'].'"><img class="profilePic" src="uploads/'.$query3[$i]['profilePic'].'"> <h4 class="name"> '. $query3[$i]['userFirstName'].$query3[$i]['userLastName'].'</h4> <p class="info">'.$query3[$i]['userRecentCompany'].'</p></a></li>';
          						}
      					
    			}
  			}


// Set output to "no suggestion" if no hint were found
// or to the correct values
		//if ($hint == "")
  		   //{
  			//	$response="no suggestion";
  		  // }
		//else
  			{
  				$response=$hint.$hint2.$hint3;
  			}

		//output the response
		echo $response;

	}





	

	public function displayNotifications()
	{

		$this->load->model('header2_model');
		$query=$this->header2_model->searchNotification();
		$nResult=count($query);
		$hint='<li class="heading"> <p class="h">Invitations('.$nResult.')</p> </li>';
		if($nResult==0)
		{
			$hint=$hint.'<li class="noRecord"> <h4 class="noRecord"> No Invitation </h4> </li>';

		}
		else
		{
		//$hint="";
  				for($i=0; $i<$nResult; $i++)
    			{
    		
      						if ($hint=="")
        						{
        							$hint='<li class="record2"> <img class="profilePic" src="uploads/'.$query[$i]['profilePic'].'"> <h4 class="name"> '. $query[$i]['userFirstName'].' '.$query[$i]['userLastName'].'</h4><div class="controls-invitation"><button class="connect_button_'.$query[$i]['userId'].' accept" class="btn-primary connect_button accept" onclick="add('.$query[$i]['userId'].')">Accept</button><button class="connect_button_'.$query[$i]['userId'].' ignore" class="btn-primary connect_button ignore" onclick="ignore('.$query[$i]['userId'].')">Ignore</button></div><p id="'.$query[$i]['userId'].'" class="message"></p></li>';
        						}
      						else
        						{
        							$hint=$hint.'<li class="record2"> <img class="profilePic" src="uploads/'.$query[$i]['profilePic'].'"> <h4 class="name"> '. $query[$i]['userFirstName'].' '.$query[$i]['userLastName'].'</h4><div class="controls-invitation"> <button class="connect_button_'.$query[$i]['userId'].' accept" class="btn-primary connect_button accept" onclick="add('.$query[$i]['userId'].')">Accept</button><button class="connect_button_'.$query[$i]['userId'].' ignore" class="btn-primary connect_button ignore" onclick="ignore('.$query[$i]['userId'].')">Ignore</button></div><p id="'.$query[$i]['userId'].'" class="message"></p></li>';
        						}
      					
    			}
    		}
    			$response=$hint;
    			echo ($response);



	}

	public function addNow()
	{
		$this->load->model('header2_model');
		$query=$this->header2_model->add();
		$response='accepted';
		echo ($response);
	}
	public function ignore()
	{
		$this->load->model('header2_model');
		$query=$this->header2_model->ignore();
		$response='Rejected';
		echo ($response);
	}

	public function invitations()
	{
		$this->load->model('header2_model');
		$query=$this->header2_model->requests();
		$response=$query;
		echo $response;
	}
	public function notifications()
	{
		$this->load->model('header2_model');
		$query=$this->header2_model->notifications();
		$response=$query;
		echo $response;
	}
	public function findNotifications()
	{

		$this->load->model('header2_model');
		$query=$this->header2_model->findNotifications();
		$nResult=count($query);
		$hint='<li class="heading"> <p class="h">Notifications('.$nResult.')</p> </li>';
		if($nResult==0)
		{
			$hint=$hint.'<li class="noRecord"> <h4 class="noRecord"> No Notification </h4> </li>';

		}
		else
		{
		//$hint="";
  				for($i=0; $i<$nResult; $i++)
    			{
    		
      						if ($hint=="")
        						{
        							$hint='<li class="record2"> <img class="profilePic" src="uploads/'.$query[$i]['profilePic'].'"> <h4 class="name"> '. $query[$i]['userFirstName'].' '.$query[$i]['userLastName'].'</h4> <p class="info"> is now a connection </p></li>';
        						}
      						else
        						{
        							$hint=$hint.'<li class="record2"> <img class="profilePic" src="uploads/'.$query[$i]['profilePic'].'"> <h4 class="name"> '. $query[$i]['userFirstName'].' '.$query[$i]['userLastName'].'</h4> <p class="info"> is now a connection </p></li>';
        						}
      					
    			}
    		}
    			$response=$hint;
    			echo ($response);



	}




}





?>