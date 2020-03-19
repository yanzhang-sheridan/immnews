
<?php session_start();

$articleId=$_GET['articleId']; 
$username=$_SESSION['username'];
$userId=$_SESSION['userId'];



//article admin editing.php?userId=5
//Show the information to edit and have an edit button
//Show the information to edit and have an edit button


	include("includes/db-config.php");

	$stmt = $pdo->prepare("SELECT * FROM `article` where `articleId`=$articleId;");

	$stmt->execute();

	$row = $stmt->fetch();
	// echo("SELECT * FROM `article` where `articleId`=$articleId;");
	// echo($row['dateWritten']);
	// echo($row['category']);
	// echo($row['imgFile']);
	// echo($row['isFeatured']);


?>






<!doctype html>
<html>

<?php include("includes/header.php");?>


		<section class="response">
			

			<form action="articleadminEditProcessing.php" enctype='multipart/form-data' method="POST">
				<p></p>
				<table align="center"  width=60% height=60%  bgcolor="lightgrey"  padding=5px margin=5px>
					<tr>
						<td align= right class="texts" >
							<label for="title" ><b>Title &nbsp;</b></label>
						</td>
						<td  class="texts">
							<input  type="text" name="title" maxlength="50" size="30" value="<?php echo($row['title']);?>" required/>
						</td>
					</tr>

					<tr>
						<td align= right class="texts" >
							<label for="author"><b>Author&nbsp;</b></label>
						</td>
						<td class="texts">
							<input  type="text" name="author" maxlength="50" size="30"
							value="<?php echo($row['author']);?>" />
						</td>
					</tr>


					


					<tr>
						<td align= right class="texts" >
							<label for="dateWritten"><b>Written On</b></label>
						</td>
						<td class="texts">
							<input  type="date" name="dateWritten" maxlength="50" size="30" value="<?php echo($row['dateWritten']);?>" />
						</td>
					</tr>

					<tr>
						<td align= right class="texts" >
						<label for="isFeatured"><b>Featured?&nbsp;</b></label>
						</td>	
						<td class="texts">
							<input name="isFeatured" type="radio" <?php if ($row["isFeatured"]==1) { echo("checked");} ;?> value="1"/>YES
							<input name="isFeatured" type="radio"  <?php if ($row["isFeatured"]==0) {echo("checked");}; ?> value="0"/>NO
						</td>
					</tr>


					<tr>
						<td align= right class="texts" >
						<label for="category"><b>Category&nbsp;</b></label>
						</td>	
						<td class="texts">

							<select name="category">
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
								value="<?php echo($row['link']);?>" />
							</td>
					</tr>
					

					<tr>
						<td align= right class="texts" >
							<label for="imgFile"><b>Image&nbsp;</b></label>
						</td>
						<td class="texts">
							<input  type="file" name="imgFile" maxlength="50" size="30"/>
							<br>
							<a href="<?php echo($row['imgFile']);?>"  target="_blank">
								<?php echo($row['imgFile']);?></a>
						</td>
					</tr>




				<!-- 	<tr>
						<td align= right class="texts" >
							<label for="imgFile"><b>Image&nbsp;</b></label>
						</td>
						<td class="texts">
							<input  type="file" name="imgFile" maxlength="50" size="30" value="<?php //echo($row['imgFile']);?>" />
							<br>
							<a href="<?php// echo($row['imgFile']);?>" >
								<?php //echo($row['imgFile']);?></a>
						</td>
					</tr>-->


					<tr>
							<td align= right valign=top class="texts" >
								<label for="Content"><b>Content&nbsp;</b></label>
							</td>
							
							<td class="texts"  align=left>
								<textarea  rows="50" cols="80" name="content"  width=60% align=center style="font-size: 15px;" 
								value="<?php echo($row['content']);?>"><?php echo($row['content']);?>
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
						<input type="hidden" value="<?php echo($row['imgFile']);?>"
							 name="orgimgFile"/>
						<input type="submit" value="UPDATE" />
					</td>
					</tr>

					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>


				</table>

			</form>


			<p><a href="articleManaging.php"  class="readmore">Back to article ist&gt;&gt;</a><a href="loginVipResponse.php" class="readmore">Back to log in&gt;&gt;></p></a>



		</section>

		<?php include("includes/footer.php");?>





</body>



</html>