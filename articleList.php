<?php session_start();

//show articles from database

	$userId=$_SESSION['userId'];
	//echo("$userId");
	include("includes/db-config.php");


	//include("includes/header.php");

	$stmt = $pdo->prepare("SELECT `b`.`userId`, b.`likeId`, `a`.*  FROM `articlewithlike` as `a` LEFT JOIN (SELECT  * FROM `userarticle` WHERE `userarticle`.`userId`= $userId) as `b`  ON `a`.`articleId`=`b`.`articleId`");

	$stmt->execute();

	// echo("SELECT `b`.`userId`, b.`likeId`, `a`.*  FROM `articlewithlike` as `a` LEFT JOIN (SELECT  * FROM `userarticle` WHERE `userarticle`.`userId`= $userId) as `b`  ON `a`.`articleId`=`b`.`articleId`");



	// $row = $stmt->fetch();


	

?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>article list </title>
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


		<section class="texts">
				<h2>Artcles</h2>
			
		 </section>


		 <section>
	

	      		<table width=80%  align=left  bgcolor="lightgrey" border="1" padding=5px margin=5px>
		         
		         <tr >
		            <td class="texts" align=center valign=center width=5% ><b>ID</b></td>
		            <td class="texts" align=center valign=center width=10%><b>Title</b></td>
		          	<td class="texts" align=center valign=center width=10%><b>Author</b></td>
		            <td class="texts" align=center valign=center width=15%><b>Category</b></td>
		            <td class="texts" align=center valign=center width=15% size=12px align=center>
		            	<b>Date<br>Written</b></td>
		            <td class="texts" align=center valign=center width=25%><b>Source<br>Link</td>
		             <td class="texts" align=center valign=center width=10%><b>Likes<br>Total</br></b></td> 	
		            <td class="texts" align=center valign=center width=10%><b>Like<br>Yes/No</br></b></td>

		         	<td class="texts" align=center valign=center width=10%><b>&nbsp;</b></td>
		           


		          </tr>

					<?php

					//display the data
						while($row = $stmt->fetch()) {

							if (empty($row["numLikes"])){

								  $numLikes = 0;
							} else{

								 $numLikes=$row["numLikes"];
	 						};



					?>

					 <tr >
			            <td class="texts" align=right valign=center ><b>
			            	<?php echo($row["articleId"]);?></b>
		            </td>
		            <td class="texts" align=center valign=center><b>
		            	<?php echo($row["title"]); ?></b>
		            </td>
		             <td class="texts" align=center valign=center><b><?php echo($row["author"]);?></b>
		            </td>
		           	<td class="texts" align=center valign=center ><b>
		          	 	<?php
				           	 switch ($row["category"]) {
								    //case "A":
								       // echo "Featured";
								        //break;
								    case "I":
								        echo "Industry";
								        break;
								    case "T":
								        echo "Technical";
								        break;
								     case "C":
								        echo "Career";
								        break;
								    default:
								        echo "n/a";
								        break;
								}
						?></b>
					</td>
                   	<td class="texts" align=center ><b><?php echo($row["dateWritten"]);?></b>
		          	</td> 
		          	<td>
		          	    <a href="<?php echo($row["link"]); ?>" target="_blank"><?php echo($row["link"]); ?></a>
		          	</td>
					<td class="texts" align=center ><b><?php echo($numLikes); ?></b>
		          	</td>

		          	<td class="texts" align=center ><b>
						<?php
				           	 switch ($row["likeId"]) {
								    //case "A":
								       // echo "Featured";
								        //break;
								    case "1":
								        echo "yes";
								        break;
								    case "0":
								        echo "no";
								        break;
							       default:
							            echo "n/a";
							             break;   
								 
								}
							?></b>
					 </td>





		         
					<td  align=center><a class="readmore" href="articleView.php?articleId=<?php echo($row["articleId"]); ?>">
						<span class="texts"><b><u>Details</u></b></span></a>
					</td>
		
					

		          </tr>

							 <?php }; ?>


				  


	         </table><br>
	         <p></p>
	      </section>

	  		 <!-- <p><a href="loginVipResponse.php"  class="readmore" align=center >Back to log in&gt;&gt;</a></br></p>
			</p> -->

		<footer>
			
			<p>
				<a href="loginResponse.php"  class="readmore" align=left >Back to log in&gt;&gt;</a> &nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#" class="readmore" align=right>Accept Cookies</a> 
				&copy: 2020 IMM News Network
			</p>
		</footer>



	</div>

</body>



</html>