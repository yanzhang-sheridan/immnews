<!doctype html>
<html>
<?php include("includes/header.php");?>

		<section class="response">
			

			<form action="articleAdminaddProcessing.php" enctype='multipart/form-data' method="POST">
				<p></p>
				<table align="center"  width=60% height=60%  bgcolor="lightgrey"  padding=5px margin=5px>
					<tr>
						<td align= right class="texts" >
							<label for="title" ><b>Title &nbsp;</b></label>
						</td>
						<td  class="texts">
							<input  type="text" name="title" maxlength="50" size="30" required>
						</td>
					</tr>

					<tr>
						<td align= right class="texts" >
							<label for="author"><b>Author&nbsp;</b></label>
						</td>
						<td class="texts">
							<input  type="text" name="author" maxlength="50" size="30">
						</td>
					</tr>
					<tr>
						<td align= right class="texts" >
							<label for="dateWritten"><b>Written On</b></label>
						</td>
						<td class="texts">
							<input  type="date" name="dateWritten" maxlength="50" size="30">
						</td>
					</tr>






					<tr>
						<td align= right class="texts" >
						<label for="category"><b>Category&nbsp;</b></label>
						</td>	
						<td class="texts">
							<input name="category" type="radio" checked value="I"/>Industry
							<input name="category" type="radio" value="T"/>Technical
							<input name="category" type="radio" value="C"/>Career
							<input name="category" type="radio" checked value="A"/>About
						</td>
					</tr>
					<tr>
						<td align= right class="texts" >
							<label for="url"><b>Source&nbsp;</b></label>
						</td>
						<td class="texts">
							<input  type="url" name="link" maxlength="50" size="30"/>
						</td>
					</tr>
					
					<tr>
						<td align= right class="texts" >
							<label for="imgFile"><b>Image&nbsp;</b></label>
						</td>
						<td class="texts">
							<input  type="file" name="imgFile" maxlength="50" size="30"/>
						</td>
					</tr>


					<!--<tr>
						<td align= right class="texts" >
							<label for="imgURL"><b>Image&nbsp;</b></label>
						</td>
						<td class="texts">
							<input  type="file" name="imgFile"  id="imgFile" maxlength="50" size="30"/>
						</td>
					</tr>-->

					<tr>
						<td align= right class="texts" >
						<label for="isFeatured"><b>Featured?&nbsp;</b></label>
						</td>	
						<td class="texts">
							<input name="isFeatured" type="radio" checked value="1"/>YES
							<input name="isFeatured" type="radio" value="0"/>NO
						</td>
					</tr>

					<tr>
							<td align= right valign=top class="texts" >
								<label for="Content"><b>Content&nbsp;</b></label>
							</td>
							
							<td class="texts"  align=left>
								<textarea  rows="50" cols="80" name="content"  width=60% align=center style="font-size: 12px;">
								</textarea>
							</td>
					</tr>

					


					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>




					<tr>
						<td colspan="2" style="text-align:center;font-weight:bold; ">
						<input type="submit" value="ADD" />
					</td>
					</tr>

					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>


				</table>

			</form>

			<p><a href="loginVipResponse.php"  class="readmore">Back to log in&gt;&gt;</a></p>

		</section>

			<?php include("includes/footer.php");?>





</body>



</html>