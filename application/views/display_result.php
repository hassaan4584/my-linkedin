
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>result.css"/>

<body>

<div class="text_body">

<div id="message-bar"> </div>

<div id="advs">

<div class="advs-heading">	<h3>Advanced People Search</h3></div>
<div class="left">
	<ul class="search-types ">

		<li class="search-types-item">
			<a class="item-link">People</a>
		</li>
		
	</ul>
	<div class="advs-ssearch-form">
		<form class="advs-form" action="<?php echo base_url();?>index.php/header2/advance_search"  method="get">
		
		<fieldset class="text-input-fields">
			<ol class="list">

				<li class="form-list-item">
					<label class="input-label"> Keyword </label>
					<input type="text" name="keyword" class="input-text"> 
				</li>
				<li class="form-list-item">
					<label class="input-label"> Firstname</label>
					<input type="text" name="firstname" class="input-text"> 
				</li>
				<li class="form-list-item">
					<label class="input-label"> Lastname </label>
					<input type="text" name="lastname" class="input-text"> 
				</li>
				<li class="form-list-item">
					<label class="input-label"> Title </label>
					<input type="text" name="title" class="input-text"> 
				</li><li class="form-list-item">
					<label class="input-label"> Company </label>
					<input type="text" name="company" class="input-text"> 
				</li><li class="form-list-item">
					<label class="input-label"> School </label>
					<input type="text" name="school" class="input-text"> 
				</li>			
				<li>
					
						<input type="submit" value="Search" class="btn-primary search_button">
						
				</li>	
			</ol>
		</fieldset>

		


		</form>
	  </div>
</div>

 </div>


<script>
$(document).ready(function(){
$("#advs").hide();
$("#advance_link").click(displayAdvancePage);
});
function displayAdvancePage()
{
	$("#advs").toggle();
}




</script>










	<div class="wrapper-result mod">

			<div id="srp_container">
				<div class="srp-title">

					<h2> SEARCH</h2>

				</div>


				<div id="facets-col" >

					<a class="mod advs-link" id="advance_link"> Advanced <span class="advs-indicator" ></span></a>




				</div>




			</div>










<div class="display-members">




<ul class="result_list">






<?php    
if(! is_null($query)) {
for($ind=0;$ind<$nResult;$ind++)
{
	//$i=0;
	//echo $result[$i]['userEmail'];
	//foreach($query->result() as $row)
	
	//{
		//$row=each($query);
		//echo $query;
	//}
	echo '<li class="result mod">  <a href="'. base_url().'index.php/header2/viewProfile?userId='.$query[$ind]['userId'].'">';
	echo '<img class="result_img" src="uploads/';
	 //echo base_url(); 
	echo $query[$ind]['profilePic'];
	echo '" width="60" height="60" alt="No Photo" > <input type="hide" id="hidden';
	echo $ind;
	echo '" class="hidden" value="';
	echo $query[$ind]['userFirstName'];
	echo '" name="user"> <div class="bd">  ';
	echo $query[$ind]['userFirstName'];
	echo ' '; 
	echo $query[$ind]['userLastName'];
	echo '</h3> </a>';
	echo '<p > Student at ';
	echo $query[$ind]['userSchool'];
	echo '</p>';
	echo '<p>';
	echo $query[$ind]['userCountry'];
	
	//echo '<form action="index.php/connect/connectNow?id=';
	//echo $query[$ind]['userId'];
	//echo '">';
	if($query[$ind]['connectionAlready']=='false')
	{
	echo '<button id="connect_button_'.$query[$ind]['userId'].'" class="btn-primary connect_button" onclick="connectNow(';
		echo $query[$ind]['userId'];
		//echo ')
		echo ')"">Connect</button><p id="'.$query[$ind]['userId'].'" class="message"></p></p></li>';
	}
	else
		if($query[$ind]['connectionAlready']=='true')
	{
	echo '<button id="connect_button_'.$query[$ind]['userId'].'" class="btn-primary connect_button" onclick="';
		//echo $query[$ind]['userId'];
		//echo ')
		echo '"">Message</button><p id="'.$query[$ind]['userId'].'" class="message"></p></p></li>';
	}
	else
	if($query[$ind]['connectionAlready']=='me')
	{
	echo '<button id="connect_button_'.$query[$ind]['userId'].'" class="btn-primary connect_button" onclick="';
		//echo $query[$ind]['userId'];
		//echo ')
		echo '""><a href="index.php/uploadProfileImage" >Me<a></button><p id="'.$query[$ind]['userId'].'" class="message"></p></p></li>';
	}	
		//print_r(array_keys($query[0]));
}
}
if(! is_null($query2)) {
for($ind=0;$ind<$nResult2;$ind++)
{
	//$i=0;
	//echo $result[$i]['userEmail'];
	//foreach($query->result() as $row)
	
	//{
		//$row=each($query);
		//echo $query;
	//}
	echo '<li class="result mod">  <a href="'. base_url().'index.php/header2/viewProfile?userId='.$query2[$ind]['userId'].'">';
	echo '<img class="result_img" src="uploads/';
	 ///echo base_url(); 
	echo $query2[$ind]['profilePic'];
	echo '" width="60" height="60" alt="No Photo" > <input type="hide" id="hidden';
	echo $ind;
	echo '" class="hidden" value="';
	echo $query2[$ind]['userFirstName'];
	echo '" name="user"> <div class="bd">  ';
	echo $query2[$ind]['userFirstName'];
	echo ' '; 
	echo $query2[$ind]['userLastName'];
	echo '</h3> </a>';
	echo '<p>';
	echo $query2[$ind]['userJobTitle'];
	echo (' at ');
	echo $query2[$ind]['userCompany'];
	echo '</p>';
	echo '<p>';
	echo $query2[$ind]['userCountry'];

	if($query2[$ind]['connectionAlready']=='false')
	{
	echo '<button id="connect_button_'.$query2[$ind]['userId'].'" class="btn-primary connect_button" onclick="connectNow(';
		echo $query2[$ind]['userId'];
		//echo ')
		echo ')"">Connect</button><p id="'.$query2[$ind]['userId'].'" class="message"></p></p></li>';
	}
	else
		if($query2[$ind]['connectionAlready']=='true')
	{
	echo '<button id="connect_button_'.$query2[$ind]['userId'].'" class="btn-primary connect_button" onclick="';
		//echo $query[$ind]['userId'];
		//echo ')
		echo '"">Message</button><p id="'.$query2[$ind]['userId'].'" class="message"></p></p></li>';
	}
	else
	if($query2[$ind]['connectionAlready']=='me')
	{
	echo '<button id="connect_button_'.$query2[$ind]['userId'].'" class="btn-primary connect_button" onclick="';
		//echo $query[$ind]['userId'];
		//echo ')
		echo '""><a href="index.php/uploadProfileImage" >Me<a></button><p id="'.$query2[$ind]['userId'].'" class="message"></p></p></li>';
	}		//print_r(array_keys($query[0]));
}
}
if(! is_null($query3)) {
for($ind=0;$ind<$nResult3;$ind++)
{
	//$i=0;
	//echo $result[$i]['userEmail'];
	//foreach($query->result() as $row)
	
	//{
		//$row=each($query);
		//echo $query;
	//}
	echo '<li class="result mod">  <a href="'. base_url().'index.php/header2/viewProfile?userId='.$query3[$ind]['userId'].'">';
	echo '<img class="result_img" src="uploads/';
	 //echo base_url(); 
	echo $query3[$ind]['profilePic'];
	echo '" width="60" height="60" alt="No Photo" > <input type="hide" id="hidden';
	echo $ind;
	echo '" class="hidden" value="';
	echo $query3[$ind]['userFirstName'];
	echo '" name="user"> <div class="bd">  ';
	echo $query3[$ind]['userFirstName'];
	echo ' '; 
	echo $query3[$ind]['userLastName'];
	echo '</h3> </a>';
	echo '<p>';
	echo $query3[$ind]['userRecentJob'];
	echo (' at ');
	echo $query3[$ind]['userRecentCompany'];
	echo '</p>';
	echo '<p>';
	echo $query3[$ind]['userCountry'];
	if($query3[$ind]['connectionAlready']=='false')
	{
	echo '<button id="connect_button_'.$query3[$ind]['userId'].'" class="btn-primary connect_button" onclick="connectNow(';
		echo $query3[$ind]['userId'];
		//echo ')
		echo ')"">Connect</button><p id="'.$query3[$ind]['userId'].'" class="message"></p></p></li>';
	}
	else
		if($query3[$ind]['connectionAlready']=='true')
	{
	echo '<button id="connect_button_'.$query3[$ind]['userId'].'" class="btn-primary connect_button" onclick="';
		//echo $query[$ind]['userId'];
		//echo ')
		echo '"">Message</button><p id="'.$query3[$ind]['userId'].'" class="message"></p></p></li>';
	}
	else
	if($query3[$ind]['connectionAlready']=='me')
	{
	echo '<button id="connect_button_'.$query3[$ind]['userId'].'" class="btn-primary connect_button" onclick="';
		//echo $query[$ind]['userId'];
		//echo ')
		echo '""><a href="index.php/uploadProfileImage" >Me<a></button><p id="'.$query3[$ind]['userId'].'" class="message"></p></p></li>';
	}//print_r(array_keys($query[0]));
}
}
?>






</ul>




<script>

$("#message-bar").hide();

function connectNow(userId)
{
	//alert (userId);// $('#connect_button').hide();

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
                        	$("#message-bar").show();
                        	//aler
                        	//$("#connect_button_"+userId).hide();
                            document.getElementById("message-bar").innerHTML=xmlhttp.responseText;
                            setInterval(function(){$("#message-bar").hide();},3000);

                        }
                  }
                  
                xmlhttp.open("GET","index.php/connect/connectNow?id="+userId,true);
                xmlhttp.send();






}

</script>


</div>

<div class="temp">
</div>


</div>

   
</div>
</div>
</div>
</body>







