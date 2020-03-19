<?php

 $errmsg=$_GET['responsemsg'];
 
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>IMMNewsNetwork login response Page</title>
<meta name="keywords" content="imm ,news network, industry, industry,Technical,Career" />
<meta name="description" content="imm news network, brainstorm, leading technologies" />
<meta name="copyright" content="YAN ZHANG">
<link href="css/main.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">

<link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
<link rel="manifest" href="./favicon/site.webmanifest">
<link rel="mask-icon" href="./favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">


<!--<a href="https://icons8.com/icon/39926/connect">Connect icon by Icons8</a>

<img src="https://img.icons8.com/windows/256/4a90e2/share-2.png">


<img src="https://img.icons8.com/windows/100/000000/archive.png">

<a href="https://icons8.com/icon/14442/archive">Archive icon by Icons8</a>-->


</head>


<body>

	<div>
	    <header>
			   <img class="logo" src="images/logo.png" alt="IMM News Network"></img><h1>IMM News Network</h1>
			                 <i>The latest Interactive Media news and breaking technologies </i>
			 	<br></br>
			     <nav id="nav"> 
			     	<ul>
			            <li><a href="immnewsnetworks.html"   class="texts" width=30% align=left ><b>home</b></a></li>
			            <li><a href="about.html"  class="texts" width=20% align=left ><b>about</b></a></li>
			            <li><a href="contact.html"  class="texts" width=20% align=left ><b>contact</b></a></li>
			             <li><a href="index.html" class="texts" width=20% align=left><b>member</b></a></li>
		       		</ul>
			     </nav>
		</header>


		<section class="texts" style="font-size:20px;">
				<p><center><b><?php echo("$errmsg");?></b></center></p>
				<p><b><a href="index.html" class="texts" align=center>
					<b>Back to member page</b></a>
				</p>
				
		 </section>

		<footer>
			<p>
				<a href="#" class="readmore" align=left>Accept Cookies</a>
				&copy: 2020 IMM News Network
			</p>
		</footer>



	</div>

</body>



</html>