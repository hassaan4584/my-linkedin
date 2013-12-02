
<link rel="stylesheet" type="text/css" href="home.css"/>
<link rel="stylesheet" type="text/css" href="liveurl.css"/>
<body>
	<div class="wrapper-home">

		<div class="post-box ">

			<img class="profile-img" height="65" width="66" src="uploads/<?php echo $picPath?>" >
			<form class="post-form"  id="addPost" name="addPost" method="post" enctype="multipart/form-data">
				<ul id="form-elements">
					<li class="post-form-item">

					</li>
					<li >
						 <link rel="stylesheet" href="liveurl.css" />
          

          <input type="hidden" value="0"  id="link-image" name="link_image">
          <input type="hidden" value="0"  id="link-description" name="link_description">
          <input type="hidden" value="0"  id="link-title" name="link_title">
        
          <input type="hidden" value"not link"  id="link-parse" name="link_parse">
        <textarea name="post" cols="60" placeholder="Share an update..." id="post" rows="2" value="" ></textarea>
        <div id="uploadedImage">
        </div>

      <div class="liveurl-loader"></div>

        <div class="liveurl">
            <div class="close" title="Entfernen"></div>
            <div class="inner">
                <div class="image" id="image-link"> </div>
                <div class="details" id="details">
                    <div class="info">
                        <div class="title" id="title-link"> </div>
                        <div class="description" id="description-link"> </div> 
                        <div class="url"> </div>
                    </div>

                    <div class="video"></div>
                </div>

            </div>
        </div>

        <script type="text/javascript">
            $("#comment-input").live('keypress',function(e){
              var p = e.which;
              if(p==13){
                 document.getElementById("comment-input").rows=document.getElementById("comment-input").rows+1;
              //document.getElementById("temp").margin-top=document.getElementById("temp").margint-top+20;
              }
            });
            $("#post").live("keypress",function(e){

              //  alert("sucess");
                 
              var p = e.which;
              if(p==13){
                 //alert("sucess");
                 document.getElementById("post").rows=document.getElementById("post").rows+1;
              //document.getElementById("temp").margin-top=document.getElementById("temp").margint-top+20;
                }
           });  

            $("#fileUpload").click(upload);



        </script>


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" > </script>
            <script src="jquery.liveurl.js"> </script>
            <script> 

                var curImages = new Array();
                
                $('textarea').liveUrl({
                    loadStart : function(){
                      document.getElementById("link-parse").value="link";
                      //alert ("sucess");
                        $('.liveurl-loader').show();
                    },
                    loadEnd : function(){
                        $('.liveurl-loader').hide();
                    },
                    success : function(data) 
                    {                        
                        var output = $('.liveurl');
                        output.find('.title').text(data.title);
                        output.find('.description').text(data.description);
                        output.find('.url').text(data.url);
                        output.find('.image').empty();
                        
                        output.find('.close').one('click', function() 
                        {
                            var liveUrl     = $(this).parent();
                            liveUrl.hide('fast');
                            liveUrl.find('.video').html('').hide();
                            liveUrl.find('.image').html('');
                            liveUrl.find('.controls .prev').addClass('inactive');
                            liveUrl.find('.controls .next').addClass('inactive');
                            liveUrl.find('.thumbnail').hide();
                            liveUrl.find('.image').hide();

                            $('textarea').trigger('clear'); 
                            curImages = new Array();
                            document.getElementById("hidden-input").value="link";
                  
                        });
                        
                        output.show('fast');
                        
                        if (data.video != null) {                       
                            var ratioW        = data.video.width  /350;
                            data.video.width  = 350;
                            data.video.height = data.video.height / ratioW;
        
                            var video = 
                            '<object width="' + data.video.width  + '" height="' + data.video.height  + '">' +
                                '<param name="movie"' +
                                      'value="' + data.video.file  + '"></param>' +
                                '<param name="allowScriptAccess" value="always"></param>' +
                                '<embed src="' + data.video.file  + '"' +
                                      'type="application/x-shockwave-flash"' +
                                      'allowscriptaccess="always"' +
                                      'width="' + data.video.width  + '" height="' + data.video.height  + '"></embed>' +
                            '</object>';
                            output.find('.video').html(video).show();
                            
                         
                        }
                    },
                    addImage : function(image)
                    {   
                        var output  = $('.liveurl');
                        var jqImage = $(image);
                        jqImage.attr('alt', 'Preview');
                        
                        if ((image.width / image.height)  > 7 
                        ||  (image.height / image.width)  > 4 ) {
                            // we dont want extra large images...
                            return false;
                        } 

                        curImages.push(jqImage.attr('src'));
                        output.find('.image').append(jqImage);
                        
                        
                        if (curImages.length == 1) {
                            // first image...
                            
                            output.find('.thumbnail .current').text('1');
                            output.find('.thumbnail').show();
                            output.find('.image').show();
                            jqImage.addClass('active');
                            
                        }
                        
                        if (curImages.length == 2) {
                            output.find('.controls .next').removeClass('inactive');
                        }
                        
                        output.find('.thumbnail .max').text(curImages.length);
                    }
                });
              
              
                $('.liveurl ').on('click', '.controls .button', function() 
                {
                    var self        = $(this);
                    var liveUrl     = $(this).parents('.liveurl');
                    var content     = liveUrl.find('.image');
                    var images      = $('img', content);
                    var activeImage = $('img.active', content);

                    if (self.hasClass('next')) 
                         var elem = activeImage.next("img");
                    else var elem = activeImage.prev("img");
      
                    if (elem.length > 0) {
                        activeImage.removeClass('active');
                        elem.addClass('active');  
                        liveUrl.find('.thumbnail .current').text(elem.index() +1);
                        
                        if (elem.index() +1 == images.length || elem.index()+1 == 1) {
                            self.addClass('inactive');
                        }
                    }

                    if (self.hasClass('next')) 
                         var other = elem.prev("img");
                    else var other = elem.next("img");
                    
                    if (other.length > 0) {
                        if (self.hasClass('next')) 
                               self.prev().removeClass('inactive');
                        else   self.next().removeClass('inactive');
                   } else {
                        if (self.hasClass('next')) 
                               self.prev().addClass('inactive');
                        else   self.next().addClass('inactive');
                   }
                   
                   
                   
                });
          </script>
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

		<div class="post-box2">
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

								echo '<div class="image" id="image" <li><img class="image-post" heigh="150" width="200" src="uploads/'.$query[$ind]['filePath'].'"> </li>';
							}
              if($query[$ind]['parse_link']==true)
              {
                echo '<div class="image">'.$query[$ind]['parse_image'].'</div>
                     <div class="details parse-detail"   >
                     
                        <div class="parse-title">'.$query[$ind]['parse_title'].' </div>
                        <div class="parse-description">'.$query[$ind]['parse_description'].'</div> 
                        <div class="url"> </div>
                    </div>' ;
              }
							echo '<li> <div class="comment-box" > <input type="button"  class="comment" onclick="displayComments('.$query[$ind]['postId'].')" value="Comment"> 
							</div>
							 <div class="display-comments-div" id="display-comments-div'.$query[$ind]['postId'].'"><div class="comment-heading"><h4>Comments</h4></div> <ul class="display-comments" id="display-comments'.$query[$ind]['postId'].'"> </ul>
               <form method="post" name="comment-form" class="comment-form">
               <li> <textarea id="comment-input" class="comment-input" rows="2" name="comment" type="text" placeholder="Comment Here...">       </textarea></li>
               <li> <input type="button" name="comment-button " id="comment-button" class="comment-button btn-primary" value="Comment" onclick="postComment(';
                echo $query[$ind]['postId'];
                echo ' )" ></li>      </form> </div> </li> </ul></li>';
			               	
						}
					}
				?>




			</ul>




		</div>




<script>



//$("#post-button").click(fileUploading);










function displayComments(postId)
{
	//alert(postId);
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
	//alert (postId);
	 var path=document.forms["comment-form"]["comment"].value;
                  if(path!="")
                  {
                  //var size=path.length;
                  //path=path.substring(12,size);
    //              	alert (path);
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
                            displayComments(postId);
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



function upload()
{
     
                  var path=document.forms["addPost"]["userfile"].value;
                  if(path!="")
                  {
                  var size=path.length;
                  path=path.substring(12,size);
                  document.forms["addPost"]["path"].value=path;
                  }

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

                            dcument.getElementById("uploadedImage").value="<img src='uploads/"+document.forms["addPost"]["path"].value+"' width=100 height=150>";
                            $("#fileUpload").hide();
                            //displayComments(postId);
                        }
                  }
                //  var namevalue=encodeURIComponent(document.getElementById("comment").value);
      //  var agevalue=encodeURIComponent(posr_id);
      //  var parameters="name="+namevalue+"&post_id="+agevalue;

                xmlhttp.open("GET","index.php/home/uploadFile?userfile="+document.forms["addPost"]["userfile"].value,true);
                xmlhttp.send();




}













function uploading()
{
				//alert ("sucess");
     //             var abc=document.getElementById("abc").value;
              //alert(document.getElementById("link-parse").value);
                  var path=document.forms["addPost"]["userfile"].value;
                  if(path!="")
                  {
                  var size=path.length;
                  path=path.substring(12,size);
                  
                    //xmlhttp.open("GET","index.php/home/addPost",true);
                	//xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");	

                //	xmlhttp.send();
      //          	alert(path);
                  document.forms["addPost"]["path"].value=path;
                  }

                  

                   if(document.getElementById("link-parse").value==="link")
                   {
                    document.getElementById("link-title").value=document.getElementById("title-link").innerHTML;
                    //alert(document.getElementById("link-title").value);
                    document.getElementById("link-description").value=document.getElementById("description-link").innerHTML;
                  //alert(document.getElementById("link-description").value);
                   document.getElementById("link-image").value=document.getElementById("image-link").innerHTML;
                   document.getElementById("link-image").length=document.getElementById("link-image").length-2;
                    document.getElementById("link-image").value= document.getElementById("link-image").value;
                   //alert(document.getElementById("link-image").value); 
                   }




                    document.getElementById("post-button").type="submit";
                    document.getElementById("addPost").action="index.php/home/addPost";                                    
}

$(document).ready(function(){    
 //var abc=document.getElementById("abc").value;
   //               alert(abc);
	$('#controls').hide();
	$("#post").focus(buttonShow);
	$(".display-comments-div").hide();
	//$("post").keypress();	
	$("#post").live("keypress",function(e){

      alert("sucess");
         
     var p = e.which;
     if(p==13){
         //alert("sucess");
         document.getElementById("post").rows=document.getElementById("post").rows+1;
    	//document.getElementById("temp").margin-top=document.getElementById("temp").margint-top+20;
     }
   });
     $("#comment-input").live('keypress',function(e){
     var p = e.which;
     if(p==13){
         document.getElementById("comment-input").rows=document.getElementById("comment-input").rows+1;
      //document.getElementById("temp").margin-top=document.getElementById("temp").margint-top+20;
     }


 });


});

function buttonShow()
{
	$("#controls").show();
}




</script>



</div>
</div>
</div>










</body>



</html>