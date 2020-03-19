<?php
//Article add Processing.php

//receive user variables
	$articleId= $_POST['articleId'];
	$title = $_POST['title'];
	$author = $_POST['author'];
	$dateWritten =  $_POST['dateWritten'];
	$link = $_POST['link'];
	$category = $_POST['category'];
	//$imgFile = $_POST['imgFile'];
	$content = $_POST['content'];
	$isFeatured = $_POST['isFeatured'];
	$_SESSION['articleId']=$articleId;

	//echo($imgFile);

	
	if (empty(basename($_FILES['imgFile']['name']))){

		$uploadfile = $_POST['orgimgFile'];

	} else {
			$uploaddir = "./images/";
			$uploadfile = $uploaddir . basename($_FILES['imgFile']['name']);

			


			$articleadminAddresp="Sucessfully added!";

			if (move_uploaded_file($_FILES['imgFile']['tmp_name'], $uploadfile)) {

				  $articleadminAddresp =   $articleadminAddresp."  File was succesfully loaded.\n";
			    //echo "File is valid, and was successfully uploaded.\n";
			} else {
					  $articleadminAddresp =   $articleadminAddresp.  "Possible file upload attack!\n";

			  	  echo ("Possible file upload attack!\n");
					//echo($uploadfile);
			}


	};

	try {

			include("includes/db-config.php");

			

			$stmt = $pdo->prepare("UPDATE `article` SET
				`author`='$author',`title`='$title', `category`='$category', 
				`link`='$link',`imgFile`='$uploadfile', `content`='$content',
				 `isFeatured`='$isFeatured',
				 `dateWritten`='$dateWritten' WHERE `articleId`=$articleId;");


// echo("UPDATE `article` SET
// 				`author`='$author',`title`='$title', `category`='$category', 
// 				`link`='$link',`imgFile`='$uploadfile', `content`='$content', 
// 				`lastModified`='CURRENT_TIME()', `isFeatured`='$isFeatured',
// 				 `dateWritten`='$dateWritten' WHERE `articleId`=$articleId;");



			$stmt->execute();

		
			

    // PDO error occouring
		} catch(PDOException $e) {   
				    echo 'Error: ' . $e->getMessage(); 
				    $articleadminAddresp = 'connection failed: ' . $e->getMessage(); 

		};


// 			$stmt = $pdo->prepare("SELECT * FROM `article`
// 				 WHERE articleId=$articleId;");


// // echo("UPDATE `article` SET
// // 				 `author`='$author',`title`='$title', `category`='$category', 
// // 				`link`='$link',`imgFile`='$uploadfile', `content`='$content', 
// // 				`lastModified`=CURRENT_TIME(), `isFeatured`=$isFeatured,
// // 				 `dateWritten`='$dateWritten' WHERE articleId=$articleId;");



// 			$stmt->execute();

// 			$row = $stmt->fetch();
// 	echo("SELECT * FROM `article` where `articleId`=$articleId;");
// 	echo($row['dateWritten']);
// 	echo($row['category']);
// 	echo($row['imgFile']);
// 	echo($row['isFeatured'])
// 	 //echo("Error: did not update?");

		
		
	


			header("Location: articleAdminEdit.php?articleId=$articleId");


	//////header("Location: articleAdminAddResponse.php?responsemsg=$articleadminAddresp");

	?>
