<html>

<head>


<base href="<?php echo base_url(); ?>" />



 <link rel="stylesheet" type="text/css" href="StyleSheet6.css"/>
 
<link rel="icon" type="image/png"  href="logo.jpg" />

<title>World's Largest Proffesional</title>

</head>


<body>
  <div class="global-header">
    <div class="header"> 
        <div class="mainbody">  
            <a  href="<?php echo base_url();?>index.php/home/index">
                <img class="logo" src="logo3.png" />
            </a> 
        <ul class="menue_list">
            <li class="menue_item">
                <a href="<?php echo base_url();?>index.php/what_is_linkedIn/index" class="menue_link">
                    What is LinkedIn?
                </a>
            </li>
            
            <li class="menue_item">
                <a href="<?php echo base_url();?>index.php/joinNow/index" class="menue_link" >
                    Join Today
                </a>
            </li>

            <li class="menue_item">
                <a href="<?php echo base_url();?>index.php/login/login/index" class="menue_link" >
                   Sign In
                </a>
            </li>

         </ul>
               
        </div>
    </div>
 </div>
 

<div class="text_body">
        <div class="wrapper">
           <div class="page_title">
                <h1>Sign in to LinkedIn</h1>
           </div>
			<form action="<?php echo base_url();?>index.php/login/login/process" method="post" name="process">
				<ul class="sign_in_box">
					<?php if(! is_null($msg)) echo $msg;?>
					<li class="sign_in_list_item">
						
						<label class="sing_in_label">Email address: </label> <input  class="sign_in_input" type="Email" name="userEmail" /><br />
					</li>
					<li class="sign_in_list_item">           
						<label class="sing_in_label">Password: </label> <input  class="sign_in_input" type="password" name="password" />
						<a class="forgot_password_link" href="<?php echo base_url();?>index.php/forgot_password/index">Forgot password?</a>
					</li>
					<li class="button">
						<input class=" primary_button" type="submit" name="button" value="Sign In"  />
					
					<bt>&nbsp or <a href="<?php echo base_url();?>index.php/joinNow/index">Join LinkedIN</a></bt>
					</li>
				</ul>
			</form>
         </div>    
    </div>
	<div class="footer">
        <div class="wrapper" style="padding:0">
            <ul class="f_nav_list">
                <p class="copy_right">
             <span>LinkedIn Corporation</span><em style="font-family:Sans-Serif">© 2013</em>
            </p>
                <li class="f_nav_list_item">
                    <a href="<?php echo base_url();?>index.php/userAgreement/index">User Agreement</a>
                </li>
                <li class="f_nav_list_item">
                    <a href="<?php echo base_url();?>index.php/home/index">Privacy Policy</a>
                </li>
                <li class="f_nav_list_item">
                    <a href="<?php echo base_url();?>index.php/home/index">Community Guidelines</a>
                </li>
                <li class="f_nav_list_item">
                    <a href="<?php echo base_url();?>index.php/home/index">Cookie Policy</a>
                </li>
                <li class="f_nav_list_item" style="border-right:0" >
                    <a href="<?php echo base_url();?>index.php/home/index">Copyright Policy</a>
                </li>                
            </ul>
        </div>
    </div>





</body>
</html>
