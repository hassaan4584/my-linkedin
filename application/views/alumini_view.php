<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>result.css"/>

<body>

<div id="body" class="globalnav-showStop">
	
	<div class="wrapper-result2">
		<div id="alumni" class="active">
							
						<div class="edu-header">
							<div class="header-title">
								<h2 class="title"><?php echo $userSchool; ?></h2>
							</div>
						</div>
					</div>
				
			<div id="container-ptc-control-bar">
				<div class="typeahead-results-container alumni-typeahead-results-container facet-typeahead-results-container yui-ac-container"> </div>
				<div class="cmpt-ptc-control-bar">
					<div class="date-wrapper attended">
						<div class="select-wrapper">
							<div class="action-menu styled-dropdown year">
								<span class="label" style="float:left">
									<span class="text"> Attended </span>
									<span class="drop-down-arrow"></span>
								</span>
								</div>
						</div>
						<span class="date-dropdown attended">
							<select onChange="ajax_post();" class="start-date date-input" name="startDate" id="startDate">
								<option selected="" value="2013">2013</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
								<option value="2005">2005</option>									
							</select>
							<span class="date-separator">to</span>
							<select onChange="ajax_post();" class="end-date date-input" name="endDate" id="endDate">
								<option value="2020">2020</option>
								<option value="2019">2019</option>
								<option value="2018">2018</option>
								<option selected="" value="2017">2017</option>
								<option value="2016">2016</option>
								<option value="2015">2015</option>
								<option value="2014">2014</option>
								<option value="2013">2013</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
							</select>
						</span>
						<span class="no-date-wrapper">
							<input id="show-with-no-date" type="checkbox" name="show-with-no-date" />
							<label for="show-with-no-date">Include people with no dates</label>
						</span>
					</div>			
				</div>
			</div>
						<div id="container-ptc-facet-bar">
							<div class="cmpt-ptc-facet-bar cf">
					<div class="container-cmpt-bucket-bar cf"></div>
					<div class="top-shadow"></div>
					<div class="carousel carousel-first">
						<div class="carousel-viewport">
							<ul class="facets" style="left: 0px;">
								<li class="cmpt-ptc-facet facet has-typeahead first">
									<h2>Where they live</h2>
									<ul>
										<li class="bucket pinned active not-selected" title="Pakistan">
											<a class="facet-item" id="Pakistan">
												<span class="count"><?php echo $nPakistan?></span>
												<label>Pakistan</label>
											</a>
											<div class="bar-graph" style="width=" <?php echo $nPakistanPercent?>%;""></div>
											<div class="bar-bg"></div>
										</li>
										<li class="bucket pinned active not-selected" title="Pakistan">
											<a class="facet-item" id="India" >
												<span class="count"><?php echo $nIndia?></span>
												<label>India</label>
											</a>
											<div class="bar-graph" style="width: <?php echo $nIndiaPercent?>%;"></div>
											<div class="bar-bg"></div>
										</li>
										<li class="bucket pinned active not-selected" title="Pakistan">
											<a class="facet-item" id="France">
												<span class="count"><?php echo $nFrance?></span>
												<label>France</label>
											</a>
											<div class="bar-graph" style="width: <?php echo $nFrancePercent;?>%;"></div>
											<div class="bar-bg"></div>
										</li>
									</ul>
									
								</li>
								
							</ul>
						</div>
					</div>
							</div>
						</div>
						<div id="container-ptc-guide-module"></div>
			<div id="container-ptc-status-bar">
				<div class="cmpt-ptc-status-bar cf">
					<div class="call-out-arrow"></div>
					<div class="results-wrapper">
						<span class="num-results-label"><?php echo $nResult ?> Students &amp; alumni found</span>
						<span class="hide-connections-wrapper">
							<input id="hide-my-connections" type="checkbox" name="hide-my-connections" />
							<label for="hide-my-connections">Hide my connections</label>
						</span>
					</div>
				</div>
			</div>
			<div id="container-ptc-people-results">
				<div class="cmpt-ptc-people-results cf">
					<div class="content active">
						<ul class="people-cards" id="people-cards">
							
							<?php echo $response  ?>

						

						<?php //}} ?>
						</ul>

					</div>
				</div>
			</div>
			





<script>

$(document).ready(function(){    
$("#Pakistan").click(findPeople);
$("#India").click(findPeople);
$("#France").click(findPeople);
});

$("#message-bar").hide();
function findPeople()
{
	var country="Pakistan";
                  alert("sucess");
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
                        	document.getElementById("message-bar").innerHTML=xmlhttp.responseText;
                            setInterval(function(){$("#message-bar").hide();},3000);
						}
                  }
                
                xmlhttp.open("GET","index.php/header2/findPeopleCountry?country="+country,true);
                xmlhttp.send();


}
function connectNow(userId)
{
	//alert (userId);// $('#connect_button').hide();
alert("sucess");
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















<?php  /*  
if(! is_null($query)&&$nResult!=0) {
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
else
{
	echo '<h2>No result found</h2>';
}
?>
</ul>


<li class="person">
								<a class="profile-link">
									<img alt="<?php //echo $res->fname ?>" src="<?php //echo 'uploads/30_'.$res->imageUrl.'.jpg' ?>download.jpg" />
								</a>
								<div class="details">
									<h3 class="full-name">
										<div class="distance">
											<a class="profile-link" href="#"><?php //echo $res->fname.' '.$res->lname ?>Abdul Rahim</a>
										</div>
									</h3>
									<p class="headline">Student at <?php //echo $uni_name ?>Lahore University</p>
									<ul class="specifics">
										<li class="first"><?php //echo $res->Country ?>Pakistan</li>
									</ul>
								</div>
								<div class="ft">
									<span class="connect-logo"></span>
									<a class="left-action connect ">Connect</a>
									<span class="divider">&nbsp; </span>
								</div>
							</li>
							<li class="person">
								<a class="profile-link">
									<img alt="<?php //echo $res->fname ?>" src="<?php //echo 'uploads/30_'.$res->imageUrl.'.jpg' ?>download.jpg" />
								</a>
								<div class="details">
									<h3 class="full-name">
										<div class="distance">
											<a class="profile-link" href="#"><?php //echo $res->fname.' '.$res->lname ?>Abdul Rahim</a>
										</div>
									</h3>
									<p class="headline">Student at <?php //echo $uni_name ?>Lahore University</p>
									<ul class="specifics">
										<li class="first"><?php //echo $res->Country ?>Pakistan</li>
									</ul>
								</div>
								<div class="ft">
									<span class="connect-logo"></span>
									<a class="left-action connect ">Connect</a>
									<span class="divider">&nbsp; </span>
								</div>
							</li>

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
*/
?>


</div>


</div>

   
</div>
</body>
