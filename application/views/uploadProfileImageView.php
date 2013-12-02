 

 
 <!DOCTYPE html>
<!-- saved from url=(0071)http://www.linkedin.com/profile/edit-picture-info?trk=prof-photo-ul-cta -->
<html lang="en" class="os-win"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<base href="<?php echo base_url(); ?>" />                  
                    <script type="text/javascript" src="./My Profile  Add Photo   LinkedIn_files/js"></script>
<link rel="openid.server" href="https://www.linkedin.com/uas/openid/authorize">

<link rel="apple-touch-icon-precomposed" href="http://www.linkedin.com/img/icon/apple-touch-icon.png">
<!--[if lte IE 8]>
  <link rel="shortcut icon" href="http://s.c.lnkd.licdn.com/scds/common/u/images/logos/favicons/v1/16x16/favicon.ico">
<![endif]-->
<!--[if IE 9]>
  <link rel="shortcut icon" href="http://s.c.lnkd.licdn.com/scds/common/u/images/logos/favicons/v1/favicon.ico">
<![endif]-->
<link rel="icon" href="http://s.c.lnkd.licdn.com/scds/common/u/images/logos/favicons/v1/favicon.ico">

 <link rel="stylesheet" type="text/css" href="./My Profile  Add Photo   LinkedIn_files/css">
 <link rel="stylesheet" type="text/css" href="./My Profile  Add Photo   LinkedIn_files/css(1)">


 <div id="body" class="" role="main">
      



<div id="section-header">
  <ul id="nav-secondary">
    <li id="nav-edit-profile" class=""><a href="http://www.linkedin.com/profile/edit?locale=en_US"><span>Edit Profile</span></a></li>
    <li id="nav-my-profile" class=""><a href="http://www.linkedin.com/profile/view?id=297902411&locale=en_US&trk=tab_pro"><span>View Profile</span></a></li>
  </ul>
</div>

<div class="wrapper hp-nus-wrapper">
 

<div id="global-error">
</div>
  
  <div id="messaging"></div>
  <div id="main" class="grid-b profile-photo upload-gradient">
    <h1>Add Photo</h1>
		<p class="back"><a href="http://www.linkedin.com/home?goback=">Go back to Home Page</a></p>
		<div id="sidebar">
      <div class="current-photo">
        <div class="title">
          <h3>Current Photo</h3>
        </div>
        <div class="content">
           
              
      
          <img src=" <?php echo $picPath;?>" width="100" height="100" alt="No Photo">
        
     
            
        </div>
      </div>      
    </div>

    <div id="content">

      <form class="standard-form stacked simple"  action="<?php echo base_url();?>index.php/uploadProfileImage/addImage" method="post"  >
   
        <h2>Upload a Photo</h2>
        <p class="instructions">You can upload a JPG, GIF or PNG file (File size limit is 4 MB).</p>
        <div class="fieldgroup">
            <span class="error" id="upload-error-cause-time">Upload timed out.</span>
            <span class="error" id="upload-error-cause-size">File size too large.</span>
            <span class="error" id="upload-error-cause-dimension">Image dimensions too large.</span>
            <span class="error" id="upload-error-cause-invalid-media">File type not supported.</span>
            <span class="error" id="upload-error-cause-not-specified">Unspecified problem.</span>
            <span class="error" id="upload-error-cause-no-file">Please choose a photo to upload.</span>
            <input type="file" name="file" id="picture-file" size="30">
        </div>
        <p class="actions">
            <input class="btn-primary" id="bt-upload-submit" type="submit" value="Upload Photo"> 
              <span class="alternate">or 
                <a href="http://www.linkedin.com/home?goback=" class="cancel">Cancel</a>
              </span>
        </p>
        <p class="note">By clicking “Upload Photo”, you certify that you have the right to distribute this photo and that it does not violate the <a href="http://www.linkedin.com/static?key=user_agreement">User Agreement</a>.</p>
      </form>

              
 
      
	
    </div>