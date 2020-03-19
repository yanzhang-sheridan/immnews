<?php session_start();

	$userId=$_SESSION['userId'];
	//echo($userId);
 
?>


<!DOCTYPE HTML>
<html>


<?php include("includes/header.php");?>



	<div class="response">


		<p><span style="font-size: 1.5em; color:red;"><b>Successfully logged in! </b></span></p>

		<p>

			<a href="logout.php?userId=<?php echo("$userId")?>" class="btn" align=center>
			<u><b>log out </b></u></a>

		</p>
		
		<p><b><a href="articlelist.php?userId=<?php echo("$userId")?>" class="btn" align=center>
		<b>Browse our article list</b></a>
		</p>

	</div>

	<?php include("includes/footer.php");?>


</body>



</html>