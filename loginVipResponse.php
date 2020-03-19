<?php session_start();

	$userId=$_SESSION['userId'];
 
?>


<!doctype html>
<html>

<?php include("includes/header.php");?>



		<div class="response" >
				
				<p><span style="font-size: 1.5em;"><b>Successfully logged in! </b></span><p>

				<p>
					<a href="logout.php?userId=<?php echo("$userId")?>" class="btn" align=center>
					<u><b>log out </b></u></a>


				</p>




				<p><b><a href="contactlist.php" class="btn" align=center>
					<b> Browse contacts</b></a>
				</p>
				<p><b><a href="aboutEditing.php" class="btn" align=center>
					<b> Edit about content</b></a>
				</p>
					<p><b><a href="articleManaging.php" class="btn" align=center>
					<b> Manage articles</b></a>
				</p>


				
		 </div>

		
	<?php include("includes/footer.php");?>


	

</body>



</html>