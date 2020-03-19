<?php session_start();
//show contacts from database

include("includes/db-config.php");
//include("includes/header.php");

$stmt = $pdo->prepare("SELECT * FROM `contact`;");

$stmt->execute();



//$row = $stmt->fetch();

?>




<!doctype html>
<html>
<?php include("includes/header.php");?>


	<div class="response">
		
		<table width=80%  align=left border=1>

		       	<caption>Contacts</caption>

		         <tr >
		            <td class="texts" align=center valign=center width=5% ><b>ID</b></td>
		            <td class="texts" align=center valign=center width=10%><b>First Name</b></td>
		          	<td class="texts" align=center valign=center width=10%><b>Last Name</b></td>
		            <td class="texts" align=center valign=center width=15%><b>Email</b></td>
		            <td class="texts" align=center valign=center width=15%><b>Catgory<br> Interested</b></td>
		            <td class="texts" align=center valign=center width=15%><b>Role</b></td>
		             <td class="texts" align=center valign=center width=10%><b>Date Added</b></td>
		            <td class="texts" align=center valign=center width=20%><b>Comments</b></td>
		          </tr>

					<?php

					//display the data
						while($row = $stmt->fetch()) {

					?>

					 <tr >
			            <td class="texts" align=right valign=center ><b><?php echo($row["contactId"]);?></b>
		            </td>
		            <td class="texts" align=center valign=center><b><?php echo($row["firstname"]);?></b>
		            </td>
		             <td class="texts" align=center valign=center><b><?php echo($row["lastname"]);?></b>
		            </td>
		          	<td class="texts" align=center valign=center ><b><?php echo($row["email"]);?></b>
		          	</td>
		          	<td class="texts" align=center valign=center ><b>
		          	 	<?php
				           	 switch ($row["category"]) {
								    case "F":
								        echo "Featured";
								        break;
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
                    <td class="texts" align=center valign=center ><b>
		          	 	<?php
				           	 switch ($row["role"]) {
								    case "W":
								        echo "Writer";
								       break;
								    case "C":
								        echo "Contributer";
								       break;
								    case "A":
								        echo "Administrator";
								        break;
								    default:
								        echo "n/a";
								        break;
								}
						?></b>
					</td>
					<td class="texts" align=center valign=center ><b><?php echo($row["DateAdded"]);?></b>
		          	</td>

		          	<td class="texts" align=center valign=center ><b><?php echo($row["comments"]);?></b>
		          	</td>
		          </tr>

							 <?php }; ?>
	         </table><br>
	         <p></p>
	      </div>

	  		
		<p>
				<a href="loginVipResponse.php"  class="readmore" align=left >Back to admin log in&gt;&gt;</a> &nbsp;&nbsp;&nbsp;&nbsp;
					&copy: 2020 IMM News Network &nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#" class="btn" align=left id="openBanner" 
			                     onclick="openwin();">Accept Cookies</a>
         </p>

	
</body>



</html>