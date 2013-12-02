
    
<!DOCTYPE html>
<html>
<head>


<base href="<?php echo base_url(); ?>" />
<link rel="stylesheet" type="text/css" href="assets\css\bootstrap.css"/>
<script src="<?php echo base_url(); ?>jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url(); ?>\assets\js\jquery.js"></script>


 <link rel="stylesheet" type="text/css" href="StyleSheet1.css"/>
<link rel="stylesheet" type="text/css" href="header2.css"/>

<link href="<?php echo base_url();?>/assets/css/bootstrap.css" rel="stylesheet"><html>
 
<link rel="icon" type="image/png"  href="logo.jpg" />

<title>World's Largest Proffesional</title>




<style type="text/css">


    
</style>

</head>


<body>
  <div class="global-header">
      <div class="header"> 
         <div class="mainbody">  
         
                <a  href="<?php echo base_url();?>index.php/home/index">
                    <img class="header2_logo" src="logo_header2.png" />
                </a> 
			


                <form id="global-search" role="search" action="<?php echo base_url();?>index.php/header2/search" method="get" accept-charset="UTF-8" name="commonSearch" class="global-search ">



                <div class="search-scope global-nav-styled-dropdown" id="control_gen_2">
                    <span class="label">
            

                        <img src="all2.png" class="drop-down-image" id="drop-down-image"> 
            
                    </span>



                    <option   value="All" class="filter_select_option" > All</option><option value="All"><img src="unversity.png" style=" float : left; " > University</option><option value="All"><img src="people.png" style=" float : left; " > People</option>
            
                    <ul class="list-group selector-category" id="category-list">
                        <li class="list-group-item selector-item" id="all"> <img src="all.png"  style=" float:left"> All</li>
                        <li class="list-group-item selector-item" id="people"><img src="people.png"  style=" float:left">People</li>
                        <li class="list-group-item selector-item" id="jobs"><img src="jobs.png"  style=" float:left">Jobs</li>
                        <li class="list-group-item selector-item" id="companies"><img src="companies.png"  style=" float:left">Companies</li>
                        <li class="list-group-item selector-item" id="groups"><img src="groups.png"  style=" float:left">Groups</li>
                        <li class="list-group-item selector-item" id="message"><img src="message.png"  style=" float:left">Message</li>
                        <li class="list-group-item selector-item" id="university"><img src="university.png"  style=" float:left">University</li>
                    </ul>
                </div>
                <input id="search" name="keywords" id="main-search-box" class="search-term" type="text" value="" autocomplete="off" placeholder="Search for people, jobs, companies, and more..." onkeyup="showHint(this.value)">
                
                <button type="submit"  class="btn btn-primary search-button">  <img src="search_button.png" ></button>
                <div class="suggestionDiv"><ul  id="txtHint" class="suggestions"> </ul></div>
                <input name="search-category" type="text" id="search-category" class="search-category" value="all">
             
                </form>


                <script type="text/javascript">


                </script>



		
	   
                <div class="symbols">
			
			
			
            <ul class="menue_list">
                
                <li class="menue_item" id="messages">
                    <a  class="menue_link">
                     <img  class="header2_logo" src="message.png"/>
                     <span id="notification"> <?//php echo ($nRequests);?> </span>
                    </a>
                </li>
                
               <li class="menue_item" id="noti">
                    <a  class="menue_link" >
                        <img  class="header2_logo" src="notifications.png"/>
                         <span id="notifications"> <?//php echo ($nRequests);?> </span>
                    
                        
                    </a>
                    
                </li>


                 <li class="menue_item">
                    <a href="<?php echo base_url();?>index.php/home/index" class="menue_link" >
                       <img  class="header2_logo" src="add_friend.png"/>
                    </a>
                </li>
                 <li class="menue_item" >
                    <a id="menue-profile-pic" class="menue_link" >
                       <img  class="header2_logo pic" src="uploads/<?php echo ($picPath);?>" />
                    </a>
                </li>

            </ul>
            <div  id="dropBox" class="dropBox"><ul  id="txtNoti" class="noti"> </ul></div>
               
        </div>       
        </div>
    </div>















        <div class="responsive-nav">
        <div class="wrapper2">

            
                
                    
            <ul class="nav">
                <li class="nav-item first">
                    <a class="nav-link" href="<?php echo base_url();?>index.php/home/index">Home</a>
                </li>
               
                <li class="nav-item" id="profile">
                    <a class="nav-link" href="<?php echo base_url();?>index.php/home/index">Profile</a>
                    <ul class="sub-nav"  id="sub-profile">
                        <li  class="nav-sub-item" >
                            <a class="nav-sub-link" href="<?php echo base_url();?>index.php/home/index">Edit Profile</a>
                        </li>
                        <li  class="nav-sub-item">
                            <a class="nav-sub-link" href="<?php echo base_url();?>index.php/home/index">Who viewed your profile</a>
                        </li>
                    </ul>
                </li>
               
                <li class="nav-item" id="network" >
                    <a class="nav-link" href="<?php echo base_url();?>index.php/home/index">Network</a>
                    <ul class="sub-nav"  id="sub-network">
                        <li  class="nav-sub-item">
                            <a class="nav-sub-link" href="<?php echo base_url();?>index.php/home/index">Contacts</a>
                        </li>
                        <li  class="nav-sub-item">
                            <a class="nav-sub-link" href="<?php echo base_url();?>index.php/home/index">Find Connections</a>
                        </li>

                        <li  class="nav-sub-item">
                            <a class="nav-sub-link" href="<?php echo base_url();?>index.php/header2/alumini">Find Alumini</a>
                        </li>
                    </ul>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>index.php/home/index">Jobs</a>
                </li>
               
                <li class="nav-item" id="intrests">
                <a class="nav-link" href="<?php echo base_url();?>index.php/home/index">Intrests</a>
                 <ul class="sub-nav" id="sub-intrests">
                        <li  class="nav-sub-item">
                            <a class="nav-sub-link" href="<?php echo base_url();?>index.php/home/index">Companies</a>
                        </li>
                        <li  class="nav-sub-item">
                            <a class="nav-sub-link" href="<?php echo base_url();?>index.php/home/index">Groups</a>
                        </li>

                        <li  class="nav-sub-item">
                            <a class="nav-sub-link" href="<?php echo base_url();?>index.php/home/index">Influencers</a>
                        </li>

                        <li  class="nav-sub-item">
                            <a class="nav-sub-link" href="<?php echo base_url();?>index.php/home/index">Education</a>
                        </li>

                    </ul>
                </li>


            </ul>   
        
               
               <script>





               </script>


               
        


            
      
    </div>

    </div>


 </div>
 





 
 
 <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
 <script src="<?php echo base_url();?>/assets/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url();?>/header2.js"></script>

 

			
			