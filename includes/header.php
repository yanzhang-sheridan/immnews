<?php 
//header.php
?>
	<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>IMM News Network</title>
		<meta name="keywords" content="imm ,news network, industry, industry,Technical,Career" />
		<meta name="description" content="imm news network, brainstorm, leading technologies" />
		<meta name="copyright" content="YAN ZHANG">

		

		<!-- <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"> -->
		<meta content="width=device-width, initial-scale=1" name="viewport" />

		<link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
		<link rel="manifest" href="./favicon/site.webmanifest">
		<link rel="mask-icon" href="./favicon/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">

		<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

		<link href="css/main_new.css" rel="stylesheet">
		<link href="css/articles.css" rel="stylesheet">
		<link href="css/animatedlogo.css" rel="stylesheet">
		<link href="css/cookie.css" rel="stylesheet">

		<!-- <link href="css/articlelayout.css" rel="stylesheet"> -->
		 <style>
		
	    	@import url("css/mobile.css") screen and (max-width: 576px) and (min-width: 350px);
		
		</style>

		<script src="scripts/toggleContrast.js" type="text/javascript"></script>

		<script>    
		
			function openwin(){    
			  var openBanner = document.getElementById("openBanner");
			  window.open("cookiePolicy.html","","width=350,height=350");
			 
			  openBanner.innerHTML="Cookies were accepted. Would you like to revoke?";
			  openBanner.setAttribute("onclick","revokecookie();");
			  }
				  
			  function revokecookie(){  
				  var openBanner = document.getElementById("openBanner");  
				  openBanner.innerHTML="Accepet Cookies";
				  openBanner.setAttribute("onclick","openwin();");
			 }

			function get_cookie(cname) {
			  var name = cname + "=";
			  var decodedCookie = decodeURIComponent(document.cookie);
			  var ca = decodedCookie.split(';');
			  for(var i = 0; i < ca.length; i++) {
			    var c = ca[i];
			    while (c.charAt(0) == ' ') {
			      c = c.substring(1);
			    }
			    if (c.indexOf(name) == 0) {
			      return c.substring(name.length, c.length);
			    }
			  }
			  return "";
			}

			function loadpopup(){    
			  if (get_cookie('popped')==''){    
			    openwin();   
			    document.cookie="popped=yes" ;   
				}    
			}  





			 // document.addEventListener('keydown', shortkey(), false);   


		</script>

	</head> 

	
<body οnlοad="loadpopup()">

	
	<div >
		<header id="header">
		      <a href="immnewsnetwork.html">

		      	<!-- <img src="images/logo.jpg" alt="IMM news network" ></img> -->

		      	<div id="animatedlogo">
	    			 <img src="images/logo.jpg" alt="IMM news network"  style="border-radius: 50%;">
	    			 <span></span><span></span>
	 			</div>




		      </a><h1>IMM News Network </h1><span >the latest Interactive Media news and breaking technologies</span>
					<!--<h1>IMM News Network</h1>
		                 <i>The latest Interactive Media news and breaking technologies </i>
		 			<br></br>-->
		     <nav id="navbar">
		      	<ul>
		            <li><a href="immnewsnetwork.html"   class="texts" width=20%><b>home</b></a></li>
		            <li><a href="about.html"  class="texts" ><b>about</b></a></li>
		            <li><a href="contact.html"  class="texts"  ><b>contact</b></a></li>
		             <li><a href="index.html" class="texts"><b>member</b></a></li>
		             <li><button id="toggleBtn" class="btn"  onclick="toggleOn();">Toggle Contrast</button></li>
		


		        </ul>
		     </nav>
		</header>
	</div>


