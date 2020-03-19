<?php session_start();
//show contacts from database

include("includes/db-config.php");
//include("includes/header.php");

$stmt = $pdo->prepare("SELECT * FROM `article`;");

$stmt->execute();



//$row = $stmt->fetch();

?>




<!doctype html>
<html>
<?php include("includes/header.php");?>


			<div class="response">
		
				<table width=80%  align=left border=1>

		      		 <caption>Manage Article</caption>
		          <tr >
		            <td class="texts" align=center valign=center width=5% ><b>ID</b></td>
		            <td class="texts" align=center valign=center width=10%><b>Title</b></td>
		          	<td class="texts" align=center valign=center width=10%><b>Author</b></td>
		            <td class="texts" align=center valign=center width=15%><b>Category</b></td>
		            <td class="texts" align=center valign=center width=15% size=12px align=center>
		            		<b>Date<br>Written</b></td>
		            <td class="texts" align=center valign=center width=15%><b>Source<br>Link</td>
		            <td class="texts" align=center valign=center width=10%><b>Featured<br>Article</b></td>	
		         	<td class="texts" align=center valign=center width=10%><b>&nbsp;</b></td>
		            <td class="texts" align=center valign=center width=10%><b>&nbsp;</b></td>



		          </tr>

					<?php

					//display the data
						while($row = $stmt->fetch()) {

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
		         
		          	<td class="texts" align=center ><b>
						<?php
				           	 switch ($row["isFeatured"]) {
								    //case "A":
								       // echo "Featured";
								        //break;
								    case "1":
								        echo "yes";
								        break;
								    case "0":
								        echo "no";
								        break;
								 
								}
							?></b>
					 </td>

		         
					<td  align=center><a href="articleAdminEdit.php?articleId=<?php echo($row["articleId"]); ?>">
						<span class="texts"><b><u>EDIT</u></b></span></a>
					</td>
		
					<td align=center><a href="articleAdminDelete.php?articleId=<?php echo($row["articleId"]); ?>">
						<span class="texts" ><b><u>DELETE</u></b></span></a>
					</td>




		          </tr>

							 <?php }; ?>


				  

				  <tr rowspan=2 align=left valign=top>

						<td colspan=9><a href="articleAdminAdd.php?>">
						<span class="texts"><br><b><u>&nbsp;&nbsp;&nbspADD AN ARTICLE</u>></b></span></a>
					</td>
				  </tr>

	         </table><br>
	         <p></p>
	      </div>

	  		 <!-- <p><a href="loginVipResponse.php"  class="readmore" align=center >Back to log in&gt;&gt;</a></br></p>
			</p> -->

		<footer>
			
			<p>
				<a href="loginVipResponse.php"  class="readmore" align=left >Back to admin log in&gt;&gt;</a> &nbsp;&nbsp;&nbsp;&nbsp;
					&copy: 2020 IMM News Network &nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#" class="btn" align=left id="openBanner" 
			                     onclick="openwin();">Accept Cookies</a>
            </p>
		
		</footer>



	</div>

</body>



</html>