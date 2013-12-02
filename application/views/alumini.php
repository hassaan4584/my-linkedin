<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>result.css"/>

<body>

<div class="text_body">

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
	echo '<p> Studied at ';
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
		echo '""><a href="index.php/uploadProfileImage" >me<a></button><p id="'.$query[$ind]['userId'].'" class="message"></p></p></li>';
	}	
		//print_r(array_keys($query[0]));
}
}
?>
</ul>




<script>

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
                        	//aler
                        	$("#connect_button_"+userId).hide();
                            document.getElementById(userId).innerHTML=xmlhttp.responseText;
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
