<?php

 $errmsg=$_GET['responsemsg'];
 
?>


<!doctype html>
<html>
<?php include("includes/header.php");?>


		
		<div class="response">


				<p><span style="font-size: 1.5em; color:red;"><b><?php echo("$errmsg");?></b></span></p>

		</div>

		<?php include("includes/footer.php");?>



	</div>

</body>



</html>