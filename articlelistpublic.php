<?php session_start();

//show articles from database for public user

	//$userId=$_SESSION['userId'];
	//echo("$userId");
	include("includes/db-config.php");


	//include("includes/header.php");

	$stmt = $pdo->prepare("SELECT `a`.*  FROM `articlewithlike` as `a`");

	$stmt->execute();

	// echo("SELECT `b`.`userId`, b.`likeId`, `a`.*  FROM `articlewithlike` as `a` LEFT JOIN (SELECT  * FROM `userarticle` WHERE `userarticle`.`userId`= $userId) as `b`  ON `a`.`articleId`=`b`.`articleId`");



	// $row = $stmt->fetch();


	

?>


<!DOCTYPE HTML>
<html>
	<?php include("includes/header.php");?>
	
	<div class="response">

		

	

	      		<table width=80%  align=left  border="1" >
		         
		         	<caption>Artcles</caption>	
		         <tr >
		            <td class="texts" align=center valign=center width=5% ><b>ID</b></td>
		            <td class="texts" align=center valign=center width=10%><b>Title</b></td>
		          	<td class="texts" align=center valign=center width=10%><b>Author</b></td>
		            <td class="texts" align=center valign=center width=15%><b>Category</b></td>
		            <td class="texts" align=center valign=center width=15% size=12px align=center>
		            	<b>Date<br>Written</b></td>
		            <td class="texts" align=center valign=center width=25%><b>Source<br>Link</td>
		             <td class="texts" align=center valign=center width=10%><b>Likes<br>Total</br></b></td> 	
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
		          	    <a href="<?php echo($row["link"]);?>"target="_blank" ><?php echo($row["link"]); ?></a>
		          	</td>
					<td class="texts" align=center ><b><?php echo($numLikes); ?></b>
		          	</td>

		          	
					<td  align=center><a class="readmore" href="articleViewPublic.php?articleId=<?php echo($row["articleId"]); ?>">
						<span class="texts"><b><u>Details</u></b></span></a>
					</td>
		
					

		          </tr>

							 <?php }; ?>


				  


	         </table><br>
	         <p></p>
	   

	  		 <!-- <p><a href="loginVipResponse.php"  class="readmore" align=center >Back to log in&gt;&gt;</a></br></p>
			</p> -->
		</div>

	<?php include("includes/footer.php");?>


	
 </body>



</html>