
<link rel="stylesheet" type="text/css" href="home.css"/>

<body>
	<div class="wrapper-home">

		<div class="post-box">

			<img class="profile-img" height="70" width="70" src="uploads/<?php echo $picPath?>" >
			<form class="post-form"  id="addPost" name="addPost" method="post" enctype="multipart/form-data">
				<ul id="form-elements">
					<li class="post-form-item">

					</li>
					<li >
						<textarea type="text" rows="2" id="post" name="post" cols="40"  class="post-text-box" placeholder="Share an update..." name="postText" ></textarea>
					</li>
					<li class="post-list-item" id="controls" >
						<select name="shareWith" class="select-sharing-type">
						 	<option class="select-option" value="Public"> Public </option>
						 	<option class="select-option" value="Connections"> Connections </options>
						 </select> 

						<input type="button" name="post-button" id="post-button" class="btn-primary post-button" value="Share" onclick="uploading()">  
						<input type="file" name="userfile" class="file-upload" id="fileUpload"  >
						<input type="hidden" value="noPic" name="path" id="path">
					</li>
				</ul>

			</form>


		</div>

		<div class="post-box">
			<ul class="post-list">

				<?php
					if(! is_null($query)) {
						for($ind=$nResult-1;$ind>=0;$ind--)
						{
							echo '<ul class="user-post"> <li class="user-post"> <img class="profile-img" height="70" width="70" src="uploads/';
							echo $query[$ind]['profilePic'];
							echo '"> <li><h4 class="user-name">'.$query[$ind]['userFirstName'].' '.$query[$ind]['userLastName']. '</h4></li><li><p class="post-content">'.$query[$ind]['postContent'].'</p> </li>';
							if($query[$ind]['filePath']!='')
							{

								echo '<div class="image" <li><img class="image-post" heigh="150" width="200" src="uploads/'.$query[$ind]['filePath'].'"> </li>';
							}
							echo '<li> <div class="comment-box" > <input type="button"  class="comment" onclick="displayComments('.$query[$ind]['postId'].')" value="Comment"> 
							<form method="post" name="comment-form">
							 <li> <textarea class="comment-input" rows="2" name="comment" type="text" placeholder="Comment Here...">       </textarea></li>
							 <li> <input type="button" name="comment-button " id="comment-button" class="comment-button btn-primary" value="Comment" onclick="postComment(';
							 	echo $query[$ind]['postId'];
								echo ' )" ></li>      </form></div>
							 <div class="display-comments-div" id="display-comments-div'.$query[$ind]['postId'].'"><div class="comment-heading"><h4>Comments</h4></div> <ul class="display-comments" id="display-comments'.$query[$ind]['postId'].'"> </ul> </div> </li> </ul></li>';
			               	
						}
					}
				?>




			</ul>




		</div>




<script>



//$("#post-button").click(fileUploading);

$('live').liveUrl({
  success : function(data) 
  {  
    console.log(data);
    // this return the first found url data
  }
});








function displayComments(postId)
{
	alert(postId);
	      var xmlhttp;
                if (window.XMLHttpRequest)
                  {// code for IE7+, Firefox, Chrome, Opera, Safari
                     xmlhttp=new XMLHttpRequest();
                  }
                else
                  {// code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                xmlhttp.onreadystatechange=function()
                  {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200)
                        {

                        	$("#display-comments-div"+postId).show();
                        	document.getElementById("display-comments"+postId).innerHTML=xmlhttp.responseText;


                           // $("#txtNoti").show();
                            //document.getElementById("notification").innerHTML=xmlhttp.responseText;
                            //var a=document.getElementById("notification").innerHTML=xmlhttp.responseText;
                            //if(a==0)
                            //{
                              //  $("#notification").hide();
                            //}
                           // document.forms["comment-form"]["comment"].value="";
                        }
                  }
                //  var namevalue=encodeURIComponent(document.getElementById("comment").value);
			//	var agevalue=encodeURIComponent(posr_id);
			//	var parameters="name="+namevalue+"&post_id="+agevalue;

                xmlhttp.open("GET","index.php/home/displayComments?postId="+postId,true);
                xmlhttp.send();
                //xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				//xmlhttp.send(parameters);
                
}


function postComment(postId)
{
	alert (postId);
	 var path=document.forms["comment-form"]["comment"].value;
                  if(path!="")
                  {
                  //var size=path.length;
                  //path=path.substring(12,size);
                  	alert (path);
                     var xmlhttp;
                if (window.XMLHttpRequest)
                  {// code for IE7+, Firefox, Chrome, Opera, Safari
                     xmlhttp=new XMLHttpRequest();
                  }
                else
                  {// code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                xmlhttp.onreadystatechange=function()
                  {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200)
                        {
                           // $("#txtNoti").show();
                            //document.getElementById("notification").innerHTML=xmlhttp.responseText;
                            //var a=document.getElementById("notification").innerHTML=xmlhttp.responseText;
                            //if(a==0)
                            //{
                              //  $("#notification").hide();
                            //}
                            document.forms["comment-form"]["comment"].value="";
                        }
                  }
                //  var namevalue=encodeURIComponent(document.getElementById("comment").value);
			//	var agevalue=encodeURIComponent(posr_id);
			//	var parameters="name="+namevalue+"&post_id="+agevalue;

                xmlhttp.open("GET","index.php/home/postComment?postId="+postId+"&comment="+path,true);
                xmlhttp.send();
                //xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				//xmlhttp.send(parameters);
                }
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
                    ///document.getElementById("post-button").type="submit";
                    //document.getElementById("addPost").action="index.php/home/addPost";          


}













function uploading()
{
				//alert ("sucess");
                  var path=document.forms["addPost"]["userfile"].value;
                  if(path!="")
                  {
                  var size=path.length;
                  path=path.substring(12,size);
                  
                    //xmlhttp.open("GET","index.php/home/addPost",true);
                	//xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");	

                //	xmlhttp.send();
                	alert(path);
                  document.forms["addPost"]["path"].value=path;
                  }

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
                    document.getElementById("post-button").type="submit";
                    document.getElementById("addPost").action="index.php/home/addPost";                                    
}

$(document).ready(function(){    

	$('#controls').hide();
	$("#post").focus(buttonShow);
	$(".display-comments-div").hide();
	//$("post").keypress();	
	$("#post").live('keypress',function(e){
     var p = e.which;
     if(p==13){
         document.getElementById("post").rows=document.getElementById("post").rows+1;
    	document.getElementById("temp").margin-top=document.getElementById("temp").margint-top+20;
     }


 });


});

function buttonShow()
{
	$("#controls").show();
}




</script>

<a href="<?php echo base_url();?>index.php/login/login/do_logout"> Log out</a>

</div>
</div>
</div>










</body>



</html>