
<?php session_start();

$articleId=$_GET['articleId']; 
$username=$_SESSION['username'];
$userId=$_SESSION['userId'];



//abouediting.php?userId=5
//Show the information to edit and have an edit button
//Show the information to edit and have an edit button


	include("includes/db-config.php");

	$stmt = $pdo->prepare("SELECT * FROM `article` where `articleid`=$articleId;");

	$stmt->execute();

	$row = $stmt->fetch();
	echo("SELECT * FROM `article` where `articleid`=$articleId;");


?>






<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>IMMNewsNetwork admin edit article Page</title>
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
			   <img class="logo" src="images/logo.png" alt="IMM NewS Network"></img><h1>IMM News Network</h1>
			                 <i>The latest Interactive Media news and breaking technologies </i>
			 	<br></br>
			     <nav id="nav"> 
			     	<ul>
			            <li><a href="immnewsnetwork.html"   class="texts" width=30% align=left ><b>home</b></a></li>
			            <li><a href="about.html"   class="texts" width=30% align=left ><b>about</b></a></li>
			            <li><a href="contact.html"  class="texts" width=40% align=left ><b>contact</b></a></li>
			            <li><a href="index.html" class="texts" width=20% align=left><b>member</b></a></li>
			        </ul>
			     </nav>
		</header>


		<section>
			

			<form action="articleadminDeleteProcessing.php" enctype='multipart/form-data' method="POST">
				<p></p>
				<table align="center"  width=60% height=60%  bgcolor="lightgrey"  padding=5px margin=5px>
					<tr>
						<td align= right class="texts" >
							<label for="title" ><b>Title &nbsp;</b></label>
						</td>
						<td  class="texts">
							<input  type="text" name="title" maxlength="50" size="30" value="<?php echo($row['title']);?>" disabled/>
						</td>
					</tr>

					<tr>
						<td align= right class="texts" >
							<label for="author"><b>Author&nbsp;</b></label>
						</td>
						<td class="texts">
							<input  type="text" name="author" maxlength="50" size="30"
							value="<?php echo($row['author']);?>" disabled />
						</td>
					</tr>


					


					<tr>
						<td align= right class="texts" >
							<label for="dateWritten"><b>Written On</b></label>
						</td>
						<td class="texts">
							<input  type="date" name="dateWritten" maxlength="50" size="30" value="<?php echo($row['dateWritten']);?>" disabled/>
						</td>
					</tr>

					<tr>
						<td align= right class="texts" >
						<label for="isFeatured"><b>Featured?&nbsp;</b></label>
						</td>	
						<td class="texts">
							<input name="isFeatured" type="radio" checked value="1" disabled/>YES
							<input name="isFeatured" type="radio" value="0" disabled/>NO
						</td>
					</tr>


					<tr>
						<td align= right class="texts" >
						<label for="category"><b>Category&nbsp;</b></label>
						</td>	
						<td class="texts">

								<select name="category" disabled>
							<option <?php if($row["category"] == 'I'){echo('selected');} ?> value="I"/>Industry
							</option>
							<option <?php if($row["category"] == 'T'){echo('selected');} ?> value="T">Technical
							</option>
							<option <?php if($row["category"] == 'C'){echo('selected');} ?> value="C">Carrer
							</option>
							<option <?php if($row["category"] == 'A'){echo('selected');} ?> value="A">about</option>
							</select><br>
						</td>
					</tr>
					
					<tr>
							<td align= right class="texts" >
								<label for="url"><b>Source&nbsp;</b></label>
							</td>
							<td class="texts">
								<input  type="url" name="link" maxlength="50" size="30"
								value="<?php echo($row['link']);?>"  disabled/>
							</td>
					</tr>
					
					<tr>
						<td align= right class="texts" >
							<label for="imgFile"><b>Image&nbsp;</b></label>
						</td>
						<td class="texts">
								<a href="<?php echo($row['imgFile']);?>" disabled />
								<?php echo($row['imgFile']);?></a>
						</td>
					</tr>


					<tr>
							<td align= right valign=top class="texts" >
								<label for="Content"><b>Content&nbsp;</b></label>
							</td>
							
							<td class="texts"  align=left>
								<textarea rows="10" cols="50" name="content"  width=60% align=center style="font-size: 15px;" 
								value="<?php echo($row['content']);?>" disabled><?php echo($row['content']);?>
								</textarea>
							</td>
					</tr>

					


					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>




					<tr>
						<td colspan="2" style="text-align:center;font-weight:bold; ">
							<input type="hidden" value="<?php echo($articleId);?>"
								 name="articleId"/>
							<input type="submit"  value="CONFIRM DELETE" name="del"/>&nbsp;&nbsp;
							
						</td>
					</tr>

					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>


				</table>

			</form>


			<p><a href="articleManaging.php"  class="readmore">Back to article ist&gt;&gt;</a><a href="loginVipResponse.php" class="readmore">Back to log in&gt;&gt;></p></a>



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