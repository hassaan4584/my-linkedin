
 <div class="text_body" >
        <div class="wrapper">
            <div class="content">
                <h1>
                    Over 225 million professionals use LinkedIn to exchange information, ideas and opportunities
                </h1>

                <ul>
                    <li id="reconnect" >
                        Stay informed about your contacts and industry
                    </li> 
                     <li id="answers" >
                        Find the people & knowledge you need to achieve your goals
                    </li> 
                     <li id="power" >
                       Control your professional identity online
                    </li>    
                </ul>
            </div>     
            <div class="join_today">
                <div class="join_header">
                    <h2>
                        Join LinkedIn Todays
                    </h2>
                </div>

                <form name ="form_signup2"  action="<?php echo base_url();?>index.php/home/process"    method="post" class="form_signup2"  id="singUp" >
                    <label class="form_signup" >First Name:</label>
					<div class="error" id="f_name" ></div>
					<input class="input_signup" type="text" name="firstname" >
					<br/>
                     <label class="form_signup" >Last Name: </label>
					 <div class="error" id="l_name" ></div>
					 <input class="input_signup" type="text" name="lastname" ><br />
                     <label class="form_signup" >Email: </label>
					 <div class="error" id="email" ><?php if(! is_null($msg)) echo $msg;?></div>
					 <input class="input_signup" type="email" name="Email"><br />
                     <label class="form_signup" >Password: </label>
					 <div class="error" id="password" ></div>
					 <input class="input_signup" style="margin-bottom:0" type="password" name="pwd" id="pwd">
                 				 
					<p class="hint">
						6 or more characters
					</p>
                
					<form_signup3>    
                    				 
						<input  type="button"   value="Join Now" class="button" onclick="validateForm()" name="signUpButton" id="su" />
						<a class="aggreement">*</a>
                 
					</form_signup3>
				
				</form>
                 
               <p class="hint2">Already on LinkedIn?<a class="already_signup" href="<?php echo base_url();?>index.php/login/login"> Sign in. </a></p>
            </div>
        </div>

        <div class="search-browse">
            <div class="search">
           
                
                <form>   
                    <h3> Search for someone by name: </h3>                  
                    <input class="search_input" type="text" name="Firstname" placeholder="First Name"/> 
                    <input class="search_input" type="text" name="Lastname" placeholder="Last Name"/> 
                    <input  type="button" value="Go" class="search_button"/>
                </form>       
            </div>

            <div class="directory">
                <h4>
                    LinkedIn member directory:
                </h4>
                <ol class="directory_list">
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">a</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">b</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">c</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">d</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">e</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">f</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">g</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">h</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">i</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">j</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">k</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">l</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">m</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">n</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">o</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">p</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">q</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">r</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">s</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">t</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">u</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">v</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">w</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">x</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">y</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">z</a>
                    </li>
                    <li class="d_li">
                        <a href="<?php echo base_url();?>index.php/home/index">more</a>
                    </li>  
                    <li class="country">
                        Browse members
                        <a href="<?php echo base_url();?>index.php/country/index""> by country</a>
                    </li>              
                </ol>
                
            </div>        
        </div>
        <p class="agreement">
            <strong>*</strong> By joining LinkedIn, you agree to LinkedIn's <a href="<?php echo base_url();?>index.php/userAgreement/index">User Agreement</a>, <a href="<?php echo base_url();?>index.php/home/index">Privacy Policy</a> and <a href="<?php echo base_url();?>index.php/home/index">Cookie Policy</a>.
        </p>
    </div>
    


    <script>

		jQuery(document).ready(function ()
        {
            $("input[name='signUpButton']").click(validateForm);
        })


	
	
			function validateForm() {
            // alert("okkkkk");
            var fName = document.forms["form_signup2"]["firstname"].value;
            var lName = document.forms["form_signup2"]["lastname"].value;
            var email = document.forms["form_signup2"]["Email"].value;
            var pwd = document.forms["form_signup2"]["pwd"].value;

			var bool=true;
            
			
			if (fName.length < 3) {
               document.getElementById("f_name").innerHTML = "The length of First Name is too short. The minimum length is 3 characters. Your text contains " + fName.length + " characters";
				bool=false;
		   }
		   else
		   {
				document.getElementById("f_name").innerHTML ="";
		   }
           if (lName.length < 3) {
               document.getElementById("l_name").innerHTML = "The length of Last Name is too short. The minimum length is 3 characters. Your text contains " + lName.length + " characters";
				bool=false;
		   }
		   else
		   {
				document.getElementById("l_name").innerHTML ="";
		   }
           if (email.length < 6) {
               document.getElementById("email").innerHTML = "Invalid Email";
				bool=false;
		   }
		   else
		   {
				document.getElementById("email").innerHTML ="";
		   }
		   
           if (pwd.length < 6) {
               document.getElementById("password").innerHTML = "The password you provided must have atleast 6 characters ";
				bool=false;
		   }
		   else
		   {
				document.getElementById("password").innerHTML ="";
		   }
			
			
			if (fName == "") {
                document.getElementById("f_name").innerHTML = "Please enter a first name";
            	bool=false;
			}
			else
		   {
				document.getElementById("f_name").innerHTML ="";
		   }
            if (lName == "") {
                document.getElementById("l_name").innerHTML = "Please enter a last name";
            	bool=false;
			}
			else
		   {
				document.getElementById("f_name").innerHTML ="";
		   }
            if (email == "") {
                document.getElementById("email").innerHTML = "Please enter a valid email";
				bool=false;
            }
			else
		   {
				document.getElementById("email").innerHTML ="";
		   }
            if (pwd == "") {
                document.getElementById("password").innerHTML = "Please enter a Password";
				bool=false;
            }
			else
		   {
				document.getElementById("password").innerHTML ="";
		   }
			
		   
		   
			if(bool==true)
			{
				//$("input[name='signUpButton']").click(validateForm);
				document.getElementById("su").type="submit";
				documnt.getElementById("signUp").action="<?php echo base_url();?>index.php/home/process";
			//alert("called");
			
			}
        }


</script>

</html>
