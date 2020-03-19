<?php session_start();

$userid=$_SESSION['userId']; 
$username=$_SESSION['username'];

$articleId=$_GET["articleId"];

//abouediting.php?userId=5
//Show the information to edit and have an edit button
//Show the information to edit and have an edit button


	include("includes/db-config.php");

	$stmt = $pdo->prepare("SELECT * FROM `article` WHERE `articleId` = $articleId");

	$stmt->execute();

	$row = $stmt->fetch();
	//echo($row["content"]);

?>


<!!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>IMM News Network - edit article</title>
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
	</head> 

	
<body>

	<div>

		<header>
		      <img class="logo" src="images/logo.png" alt="IMM News Network" >
		      </img>
					<!--<h1>IMM News Network</h1>
		                 <i>The latest Interactive Media news and breaking technologies </i>
		 			<br></br>-->
		     <nav id="nav" width=100%>
		      	<ul>
		            <li><a href="immnewsnetwork.html"   class="texts" width=20% align=left ><b>home</b></a></li>
		            <li><a href="about.html"  class="texts" width=15% align=left ><b>about</b></a></li>
		            <li><a href="contact.html"  class="texts" width=15% align=left ><b>contact</b></a></li>
		             <li><a href="index.html" class="texts" width=15% align=left><b>member</b></a></li>
		        </ul>
		     </nav>
		</header>

		
		<section class="texts" >
				<h2><center>Edit Article</center></h2>
		 </section>

		<section>

			<form action="articleEditingProcessing.php" enctype='multipart/form-data' method="POST">
					<p></p>

					<table align="center"  width=60% height=60%  bgcolor="lightgrey"  padding=5px margin=5px>
					<tr>
						<td align= right class="texts" >
							<label for="firstname" >First Name &nbsp;</label>
						</td>
						<td  class="texts">
							<input  type="text" name="firstname" maxlength="50" size="30" required>
						</td>
					</tr>

					<tr>
						<td align= right class="texts" >
							<label for="lastname">Last Name&nbsp;</label>
						</td>
						<td class="texts">
							<input  type="text" name="lastname" maxlength="50" size="30">
						</td>
					</tr>

					<tr>
						<td align= right class="texts" >
							<label for="email">Email Address&nbsp;</label>
						</td>
						<td class="texts">
							<input  type="text" name="email" maxlength="80" size="30" required>
						</td>
					</tr>

					<tr>
						<td align= right class="texts" >
							<label for="telephone">Telephone Number&nbsp;</label>
						</td>
						<td class="texts">
							<input  type="text" name="phone" maxlength="30" size="30" placeholder="xxx-xxx-xxxx">
						</td>
					</tr>


					<tr>
						<td align= right class="texts" >
						<label for="category">Catgory Interested&nbsp;</label>
						</td>	
						<td class="texts">
							<input name="category" type="radio" checked value="I"/>Industry
							<input name="category" type="radio" value="T"/>Technical
							<input name="category" type="radio" value="C"/>Career
						</td>
					</tr>

					<tr>
						<td align= right class="texts" >
						<label for="role" valign=top>You are a&nbsp;</label>
						</td>
						<td class="texts">
							<select name="role">
								<option selected value="W">Writer</option>
								<option value="C">Contributer</option>
								<option value="A">Administrator</option>
							</select>
						</td>
					</tr>

					

					<tr>
						<td align= right class="texts" valign=top >
						<label for="comments" >Comments&nbsp;</label>
						</td>
						<td class="texts">
						<textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
						</td>
					</tr>

					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2" style="text-align:center;font-weight:bold; ">
						<input type="submit" value="SEND" />
					</td>
					</tr>

					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>


				</table>
					<table align="center"  width=60% height=60%  bgcolor="lightgrey"  padding=5px margin=5px>
						<tr style="text-align:center;font-weight:bold; font-size: 12px">
							<td align= right class="texts" valign=top>
							<label for="info"> Last modified on <?php echo($row["dateAdded"])?> &nbsp;
							</label>
							</td>
						</tr>
						<tr>
							<td align= right class="texts" >
								<label for="title" >Tiltle &nbsp;</label>
							</td>
							<td  class="texts">
							<input  type="text" name="title" maxlength="50" size="30" value="<?php echo($row["title"]);?>" >
							</td>
						</tr>
						<tr>
							<td align= right class="texts" >
								<label for="title" >Author &nbsp;</label>
							</td>
							<td  class="texts">
							<input  type="text" name="title" maxlength="50" size="30" value="<?php echo($row["author"]);?>" >
							</td>
						</tr>

						<tr>
							<td align= right class="texts" >
								<label for="title" >Written Date</label>
							</td>
							<td  class="texts">
								<input  type="date" name="dateAdded" maxlength="50" size="30" value="<?php echo($row["dateAddded"]);?>" >
							</td>
						</tr>

						<tr>
							<td align= right class="texts" >
								<label for="title" >Category &nbsp;</label>
							</td>
							 <td>
									<select name="category">
										<option <?php if($row["category"] == 'I'){echo('selected');} ?> value="I">Industry
										</option>
										<option <?php if($row["category"] == 'T'){echo('selected');} ?> value="T">Technical
										</option>
										<option <?php if($row["category"] == 'C'){echo('selected');} ?> value="C">
										Career</option>
									</select>
							 </td>
						 </tr>

						 
						<tr>
							<td align= right class="texts" >
								<label for="title" >Article URL</label>
							</td>
							<td  class="texts">
								<input  type="text" name="url" maxlength="50" size="30" value="<?php echo($row["url"]);?>" >
							</td>
						</tr>

						<tr>
							<td align= right class="texts" >
								<label for="title" >Article image</label>
							</td>
							<td  class="texts">
								<input  type="text" name="img" maxlength="50" size="30" value="<?php echo($row["img"]);?>" >
							</td>
						</tr>

						<tr>
							<td align= right class="texts" >
								<label for="title" > Is Featured?</label>
							</td>
							<td  class="texts">
									<input name="isFeatured" type="radio" <?php if($row["isFeatured"] == '1'){echo('checked');} ?> value="1"/>True
									<input name="rating" type="radio" <?php if($row["isFeatured"] == '0'){echo('checked');} ?> value="0"/>False
							
							</td>
						</tr>



						
						<tr>	
						<td class="texts"  align=left>
							<textarea  rows="30" cols="80" name="content"   width=60% align=center style="font-size: 18px;"><?php echo($row['content']);?>
								
							</textarea>
							</td>
						</tr>

						<tr>
							<td colspan="2">&nbsp;</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:center;font-weight:bold; ">
							<input type="submit" value="UPDATE" />
						</td>
						</tr>





						<tr>
							<td colspan="2">&nbsp;</td>
						</tr>


					</table>

				</form>

				

		</section>

		<footer>

			<p>
				<a href="loginVipResponse.php"  class="readmore" align=left >Back to admin log in&gt;&gt;</a> &nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#" class="readmore" align=right>Accept Cookies</a> 
				&copy: 2020 IMM News Network
			</p>

		</footer>


	</div>

</body>



</html>