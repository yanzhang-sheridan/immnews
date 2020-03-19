<!doctype html>
<html>
<?php include("includes/header.php");?>


		<section class="contacts">
			

			<form action="signupProcessing.php" enctype='multipart/form-data' method="POST">
				<p></p>
				<table align="center"  width=100%  margin:20px padding:20px>
					<tr>
						<td align= right class="texts" >
							<label for="username" >Name &nbsp;</label>
						</td>
						<td  class="texts">
							<input  type="text" name="username" maxlength="50" size="30" required>
						</td>
					</tr>

					<tr>
						<td align= right class="texts" >
							<label for="email">Email &nbsp;</label>
						</td>
						<td class="texts">
							<input  type="text" name="email" maxlength="80" size="30" required>
						</td>
					</tr>

					<tr>
						<td align= right class="texts" >
							<label for="password">password&nbsp;</label>
						</td>
						<td class="texts">
							<input  type="password"  name="password" maxlength="6" size="6" placeholder="6 characters" required>
						</td>
					</tr>


					
					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2" style="text-align:center;font-weight:bold; ">
						<input type="submit" value="REGISTER" />
					</td>

					</tr>

					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>


				</table>

			</form>

			<p></p>

		</section>

		<?php include("includes/footer.php");?>

	

</body>



</html>