
<?php session_start();

$articleId=$_GET['articleId']; 
// $username=$_SESSION['username'];
// $userId=$_SESSION['userId'];



//viewarticle .php?userId=5
//Show /edit the information to like/dislike 

	include("includes/db-config.php");



	


	// $count= $pdo->prepare("SELECT userId
	// 						 FROM `userarticle`
	// 						  WHERE `articleId`=$articleId and `userId`=$userId and `likeId`= 1;");

	// //echo("SELECT userID
	// 						// FROM `userarticle`
	// 						  //WHERE `articleId`=$articleId and `userId`=$userId and `likeId`= 1;");


	// $count->execute();

	// $num=$count->rowCount();

	// 	//echo("num.$num");






	$stmt = $pdo->prepare("SELECT   `userarticle`.`userId`,`articlewithlike`.*  
							 FROM `articlewithlike`  LEFT JOIN  `userarticle`
							  ON  `articlewithlike`.`articleId`=`userarticle`.`articleId`
							  WHERE `articlewithlike`.`articleId`=$articleId;");

	$stmt->execute();

	$row = $stmt->fetch();
	// echo("SELECT `articlewithlike`.* , `userarticle`.`userId`
	// 						 FROM `articlewithlike`  LEFT JOIN  `userarticle`
	// 						  ON  `articlewithlike`.`articleId`=`userarticle`.`articleId`
	// 						  WHERE `articlewithlike`.`articleId`=$articleId;");


	if (empty($row["numLikes"])){

		  $numLikes = 0;
		} else{

			 $numLikes=$row["numLikes"];
	 	};

?>



<!DOCTYPE HTML>
<html>
<?php include("includes/header.php");?>

<div class="response"> 
		<section class="texts" >
				<span style="color:red; font-size: 16px; "><u><b><?php echo($numLikes);?></b>
					</u></style></span>&nbsp;<span style="color:white;" ><b>users like this article</b></span>
			
		 </section>
		<!--  <section class="texts">
			
				<h4 align=left><span style="color:red;">
					<u><?php //echo($numLikes);?>
					</u></style></span>&nbsp;users like this article
				</h4>
			
		 </section> -->



		<section>
			

			<form action="articleViewProcessing.php" enctype='multipart/form-data' method="POST">
				<p></p>

				<table align="center" height=60%>
			

					<tr>
						<td align= left class="texts" >
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
								<textarea rows="10" cols="50" name="content"  width=60% align=center style="font-size: 15px;overflow: auto;" 
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

						</td>
					</tr>

					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>


				</table>

			</form>


			<p>
				<a href="articlelistpublic.php"  class="readmore">Back to article list&gt;&gt;</a>
			</p>



		</section>

		
	
 </div> 

 <?php include("includes/footer.php");?>


</body>



</html>