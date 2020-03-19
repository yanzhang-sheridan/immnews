<?php session_start();

$userid=$_SESSION['userId']; 
$username=$_SESSION['username'];

//abouediting.php?userId=5
//Show the information to edit and have an edit button
//Show the information to edit and have an edit button


	include("includes/db-config.php");

	$stmt = $pdo->prepare("SELECT * FROM `article` WHERE `category` = 'A'");

	$stmt->execute();

	$row = $stmt->fetch();
	//echo("SELECT * FROM `article` WHERE `category` = 'A'");
	//echo($row["content"]);

?>


<!!DOCTYPE HTML>
<html>

 <?php include("includes/header.php");?>


		
		<section class="texts" >
				<h2><center>Edit about content</center></h2>
		 </section>

		<section id="divabout">

			<form action="aboutEditingProcessing.php" enctype='multipart/form-data' method="POST">
					<p></p>
					<table align="center"  width=60% height=60%  bgcolor="lightgrey"  padding=5px margin=5px>
						<tr style="text-align:center;font-weight:bold; font-size: 12px">
							<td valign=top>
							<label for="info"> Last modified on <?php echo($row["lastModified"])?> by <?php echo($row["author"]);?> &nbsp;
							</label>
							</td>
						</tr>
						<tr>
							
							<td class="texts">
							<textarea  rows="30" cols="80" name="content"   width=60% align=center style="font-size: 18px;" value="<?php echo($row['content']);?>"><?php echo($row['content']);?>
								
							</textarea>
							</td>
						</tr>

						<tr>
							<td colspan="2">&nbsp;</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:center;font-weight:bold; ">
							<input type="submit" value="UPDATE CONTENT" />
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


	

</body>



</html>