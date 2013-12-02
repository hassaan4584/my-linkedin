
 <!DOCTYPE html>
 <html>

 	<head>
<base href="<?php echo base_url(); ?>" /> 
 <link rel="stylesheet" type="text/css" href="StyleSheet1.css"/>

 		<style>

 			.upload-gradient {
				padding: 10px 15px;
				margin: 0 0 15px 0;
				border: 1px solid #ccc;
				overflow: hidden;
				border-radius: 5px;
				
				font-size: 200%;


			}

			#sidebar {
			width: 18%;
			float: left;
			}


			.current-photo {
				width: 140px;
				margin: 0 auto;
				text-align: center;
			}
			.title {
				background-position: top right;
				margin: 0 -20px 0 0;
				padding: 0 20px 0 0;
			}
			h3 {
background-position: top left;
margin: 0;
border: 0;
padding: 0px 0 10px 0px;
height: 1%;
font-size: 130%;
color: #333;
font-weight: bold;
}


.content-img {
background-position: bottom left;
margin-right: 0px;
padding: 0px;
}
.profileImg {
border: 1px solid #e6e6e6;
padding: 2px;
}

#nav-secondary{

margin: 10px 0 0 0;

}
.edit-item
{
	 
	margin: 5px 0 0 0;
	font-size: 80%;

}

.edit-link
{
	color: #666 !important;
text-decoration: underline;
}

#content {
width: 81%;
float: right;

}
.standard-form {
margin-bottom: 20px;
}
.stacked {
margin: 0 10px;
}

h2 {
font-size: 130%;
color: #333;
font-weight: bold;
margin-bottom: 5px;
}

.fieldgroup {
margin: 0 0 12px 0;

}


.standard-form .error {
font-size: 12px;
color: #900;
font-weight: bold;
}
.standard-form-input
{
font-size: 13px;
}


.upload-error-cause {
display: none;
}
.actions
{
	border-top-style: dotted;
	border-color: black;
	border-width: 1px;
	padding-top: 20px;
	margin-top: 20px;
	font-size: 13px;


}

.btn-primary
{

	background: #0571A6;
background: linear-gradient(top, #73aec9 0%,#73aec9 1px,#338ab0 1px,#0571a6 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#338AB0', endColorstr='#0571A6',GradientType=0 );
border-color: #045a8b;
color: #fff !important;
}

.alternate {
line-height: 2;
}

.note {
margin: 5px 0 0 0;
font-size: 11px;
}

.checkbox
{
	float: none;
}

 		</style>

 	</head>

 	<body>

 		<div class="text_body">

 			<div class="wrapper">
 				<div class="upload-gradient">
 				<div id="sidebar">

 					<div class="current-photo">

 						<div class="title">

 							<h3>Current Photo</h3>


 						</div>

 						<div class="content-img">
 						
 							<img src=" uploads/<?php echo $picPath;?>" width="100" height="100" alt="No Photo" class="profileImg">


 						</div>

 						<div id="section-header">
  							<ul id="nav-secondary">
    							<li id="nav-edit-profile" class="edit-item"><a href="http://www.linkedin.com/profile/edit?locale=en_US" class="edit-link"><span>Edit Profile</span></a></li>
    							<li id="nav-my-profile" class="edit-item"><a href="http://www.linkedin.com/profile/view?id=297902411&locale=en_US&trk=tab_pro" class="edit-link"><span>View Profile</span></a></li>
 							 </ul>
							</div>


 					</div>


 				</div>


 				 <div id="content">

      				<form class="standard-form stacked simple" name="imagePath"  method="post" enctype="multipart/form-data" id="imagePath" >
      					 <h2>Upload a Photo</h2>
        				<p class="instructions">You can upload a JPG, GIF or PNG file (File size limit is 4 MB).</p>
        					<div class="fieldgroup">
            					<span class="error upload-error-cause" id="upload-error-cause-time">Upload timed out.</span>
            					<span class="error upload-error-cause" id="upload-error-cause-size">File size too large.</span>
            					<span class="error upload-error-cause" id="upload-error-cause-dimension">Image dimensions too large.</span>
            					<span class="error upload-error-cause" id="upload-error-cause-invalid-media">File type not supported.</span>
            					<span class="error upload-error-cause" id="upload-error-cause-not-specified">Unspecified problem.</span>
            					<span class="error upload-error-cause" id="upload-error-cause-no-file">Please choose a photo to upload.</span>
            					<input type="file" name="userfile" id="picture-file" size="20" >
        					   <input type="hidden" name="path" id="path">

        					</div>
        					 <p class="actions">
           					 <input class="btn-primary" id="bt-upload-submit" type="button" value="Upload Photo" onclick="addPath()"> 
             				 <span class="alternate">or 
               					 <a href="" class="cancel">Cancel</a>
             				 </span>
        				</p>
        				<p class="note">By clicking 'Upload Photo', you certify that you have the right to distribute this photo and that it does not violate the <a href="">User Agreement</a>.</p>
    			  	</form>	

              <script>

                function addPath()
                {
                  var path=document.forms["imagePath"]["userfile"].value;
                  var size=path.length;
                  path=path.substring(12,size);
                  
                  document.forms["imagePath"]["path"].value=path;
                  //alert (document.forms["imagePath"]["path"].value);
                  


                  //alert (path);
                  //var pField=document.forms["imagePath"]["path"];
                  //var size=path.length;
                  //for(i=12,j=0;i<size;i++,j++)
                  //{
                    //pField.value[j]=path.value[i];
                  //}
                   //document.forms["imagePath"]["path"].value = document.forms["imagePath"]["userfile"].value;
                   //alert (document.forms["imagePath"]["path"].value[0]);
                    document.getElementById("bt-upload-submit").type="submit";
                    document.getElementById("imagePath").action="index.php/uploadProfileImage/addImage";
                   
                 }



              </script>



    			  	<form class="standard-form stacked simple"  action="<?php echo base_url();?>index.php/uploadProfileImage/addImage" method="post"  >

    			  		<h2>In addition to users I message, my profile photo is visible to...</h2>
    			  		 <ul class="fieldgroup checkbox">
   	   <li>
        <label><input type="radio" name="pictureVisibility" value="CONNECTIONS" id="CONNECTIONS-pictureVisibility-editPictureVisibilityForm"> My Connections</label>
      </li>
      <li title="Your network is comprised of your connections, colleagues, classmates and people you send messages to.">
        <label><input type="radio" name="pictureVisibility" value="NETWORK" id="NETWORK-pictureVisibility-editPictureVisibilityForm"> My Network</label>
      </li>
      <li>
        <label><input type="radio" name="pictureVisibility" value="EVERYONE" checked="" id="EVERYONE-pictureVisibility-editPictureVisibilityForm"> Everyone</label>
      </li>
    </ul>
  <p class="actions">
    <input type="submit" name="" value="Save Settings" class="btn-primary">
  </p>



      				</form>
      			</div>




 			</div>

 			<div>

 		</div>



<div class="footer">
        <div class="wrapper" style="padding:0">
            <ul class="f_nav_list">
                <li class="f_nav_list_item">
                    <a href="<?php echo base_url();?>index.php/home/index"><strong style="font-size:13px">Help Center</strong></a>
                </li>
                <li class="f_nav_list_item">
                    <a href="<?php echo base_url();?>index.php/home/index">About</a>
                </li>
                <li class="f_nav_list_item">
                    <a href="<?php echo base_url();?>index.php/home/index">Press</a>
                </li>
                <li class="f_nav_list_item">
                    <a href="<?php echo base_url();?>index.php/home/index">Blog</a>
                </li>
                <li class="f_nav_list_item">
                    <a href="<?php echo base_url();?>index.php/home/index">Careers</a>
                </li>
                <li class="f_nav_list_item">
                    <a href="<?php echo base_url();?>index.php/home/index">Advertising</a>
                </li>
                <li class="f_nav_list_item">
                    <a href="<?php echo base_url();?>index.php/home/index">Talent  Solutions</a>
                </li>
                <li class="f_nav_list_item">
                    <a href="<?php echo base_url();?>index.php/home/index">Tools</a>
                </li>
                <li class="f_nav_list_item">
                    <a href="<?php echo base_url();?>index.php/home/index">Mobile</a>
                </li>
                <li class="f_nav_list_item">
                    <a href="<?php echo base_url();?>index.php/home/index">Developers</a>
                </li>
                <li class="f_nav_list_item">
                    <a href="<?php echo base_url();?>index.php/home/index">Publishers</a>
                </li>
                <li class="f_nav_list_item">
                    <a href="<?php echo base_url();?>index.php/home/index">Language</a>
                </li>
                <li class="f_nav_list_item" style="border-right:0">
                    <a href="<?php echo base_url();?>index.php/home/index">SlideShare</a>
                </li>
            </ul>
             <ul class="f_nav_list">
                <li class="f_nav_list_item">
                    <a href="<?php echo base_url();?>index.php/home/index">Upgrade Your Account</a>
                </li>
              </ul>
            <ul class="f_nav_list f_nav_list_last">
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
                <li class="f_nav_list_item" style="border-right:0">
                    <a href="<?php echo base_url();?>index.php/home/index">Copyright Policy</a>
                </li>                
            </ul>
        </div>
    </div>





















 	</body>











 </html>