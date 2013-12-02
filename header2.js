
                
                    $("#category-list").hide();       
                    $("#txtNoti").hide();
              
                     $("#drop-down-image").click(function(){
                   //alert("enterd")
                    $("#category-list").toggle();
                
                });  


                $(document).ready(function(){    


                    $("#category-list").hide();       
                    $("#txtNoti").hide();
                $("#drop-down-image").click(function(){
                   //alert("enterd")
                    $("#category-list").toggle();
                
                });  

                $("#all").click(all);
                $("#people").click(people);
                $("#jobs").click(jobs);
                $("#groups").click(groups);
                $("#message").click(message);
                $("#university").click(university);
                $("#companies").click(companies);
                $("#messages").mouseover(displayNoti);
                  $("#noti").mouseover(displayNotifications);
               
                $("#search").keypress(search);

                //$("#noti").click(displayNoti);
                //$("#txtNoti").(dex);
                
                $("#dropBox").mouseover(dex);
                $("#dropBox").mouseout(abc);

                $("#menue-profile-pic").click(minMenue);
                messages();
                notifications();

                 });


                function minMenue()
                { 
                  
                  $("#txtNoti").show();
                 
                  var value="<li class='record2'> <a href='index.php/uploadProfileImage'> Change Image</a> '</li><li class='record2'><a href='index.php/login/login/do_logout'> Log out</a></li>";
                  
                   document.getElementById("txtNoti").innerHTML=value;
                        

                }



                function messages()
                {

                    //alert("abc");
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
                            document.getElementById("notification").innerHTML=xmlhttp.responseText;
                            var a=document.getElementById("notification").innerHTML=xmlhttp.responseText;
                            if(a==0)
                            {
                                $("#notification").hide();
                            }
                        }
                  }
                xmlhttp.open("GET","index.php/header2/invitations",true);
                xmlhttp.send();
                }

                 function notifications()
                {

                    //alert("abc");
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
                          //alert("abc");
                    
                           // $("#txtNoti").show();
                            document.getElementById("notifications").innerHTML=xmlhttp.responseText;
                            var a=document.getElementById("notifications").innerHTML=xmlhttp.responseText;
                            if(a==0)
                            {
                                $("#notifications").hide();
                            }
                        }
                  }
                xmlhttp.open("GET","index.php/header2/notifications",true);
                xmlhttp.send();
                }

                function dex()
                {
                 $("#txtNoti").show();
                   
                }

                function abc()
                {
                    $("#txtNoti").hide();
                }

                function all()
                {
                var search=document.getElementById("search");
                search.placeholder="Search for people, jobs, companies, and more...";
                $("#category-list").toggle();
                document.getElementById("drop-down-image").src="all2.png";
                document.getElementById("search-category").value="all";
                }
                function people()
                {
                    var search=document.getElementById("search");
                    search.placeholder="Search people ...";
                    $("#category-list").toggle();
                    document.getElementById("drop-down-image").src="people2.png";
                    document.getElementById("search-category").value="people";
                }
                 function jobs()
                {
                    var search=document.getElementById("search");
                    search.placeholder="Search jobs ...";
                     $("#category-list").toggle();
                        document.getElementById("drop-down-image").src="jobs2.png";
                    document.getElementById("search-category").value="jobs";
                }
                function companies()
                {                       
                var search=document.getElementById("search");
                search.placeholder="Search companies ...";
                $("#category-list").toggle();
                document.getElementById("drop-down-image").src="companies2.png";
                document.getElementById("search-category").value="companies";
                }
                function university()
                {
                var search=document.getElementById("search")
                search.placeholder="Search university ...";
                $("#category-list").toggle();
                document.getElementById("drop-down-image").src="university2.png";
                document.getElementById("search-category").value="university";
                }
                function groups()
                {
                var search=document.getElementById("search");
                search.placeholder="Search groups ...";
                $("#category-list").toggle();
                document.getElementById("drop-down-image").src="groups2.png";
                document.getElementById("search-category").value="search";

                }
                function message()
                {
                var search=document.getElementById("search");
                search.placeholder="Search message ...";
                $("#category-list").toggle();
                document.getElementById("drop-down-image").src="message2.png";
                document.getElementById("search-category").value="message";
                }
            
                function search()
                {
                var text = document.forms["commonSearch"]["keywords"].value;

                }

                 function displayNoti()
                    {

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
                            $("#txtNoti").show();
                            document.getElementById("txtNoti").innerHTML=xmlhttp.responseText;
                        }
                  }
                xmlhttp.open("GET","index.php/header2/displayNotifications",true);
                xmlhttp.send();

                    }

                    function displayNotifications()
                    {
                     // alert("abc");
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
                            $("#txtNoti").show();
                            document.getElementById("txtNoti").innerHTML=xmlhttp.responseText;
                            notifications();

                        }
                  }
                xmlhttp.open("GET","index.php/header2/findNotifications",true);
                xmlhttp.send();

                    }



      function showHint(str)
        {
            //alert ();
                var xmlhttp;
                if (str.length==0)
                  { 
                      document.getElementById("txtHint").innerHTML="";
                      return;
                  }
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
                            document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
                        }
                  }
                xmlhttp.open("GET","index.php/header2/searchSuggestion?keywords="+str,true);
                xmlhttp.send();
        }



function add(userId)
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
                            $(".connect_button_"+userId).hide();
                            document.getElementById(userId).innerHTML=xmlhttp.responseText;
                            messages();
                        }
                  }
                  
                xmlhttp.open("GET","index.php/header2/addNow?id="+userId,true);
                xmlhttp.send();

}

function ignore(userId)
{
    alert (userId);// $('#connect_button').hide();

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
                            $(".connect_button_"+userId).hide();
                            document.getElementById(userId).innerHTML=xmlhttp.responseText;
                          message();
                        }
                  }
                  
                xmlhttp.open("GET","index.php/header2/ignore?id="+userId,true);
                xmlhttp.send();

}




                    $(document).ready(function(){    
                        $("#sub-profile").hide();
                        $("#sub-network").hide();
                        $("#sub-intrests").hide();

                        $("#profile").hover(displayProfile,hideProfile);
                        $("#network").hover(displayNetwork,hideNetwork);
                        $("#intrests").hover(displayIntrests,hideIntrests);
                        
                    });
                       
                    function displayProfile()
                    {
                        $("#sub-profile").slideDown();
                    }
                    function hideProfile()
                    {
                        $("#sub-profile").hide();   
                    }
                    function displayNetwork()
                    {
                        $("#sub-network").slideDown();
                    }
                    function displayIntrests()
                    {
                        $("#sub-intrests").slideDown();
                    }
                    function hideNetwork()
                    {
                        $("#sub-network").hide();   
                    }
                    function hideIntrests()
                    {
                        $("#sub-intrests").hide();   
                    }




                   


              































