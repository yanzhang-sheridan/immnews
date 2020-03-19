<?php
//Article delete Processing.php

//receive user variables
	$articleId= $_POST['articleId'];
	// $title = $_POST['title'];
	// $author = $_POST['author'];
	// $dateWritten =  $_POST['dateWritten'];
	// $link = $_POST['link'];
	// $category = $_POST['category'];
	// //$imgFile = $_POST['imgFile'];
	// $content = $_POST['content'];
	// $isFeatured = $_POST['isFeatured'];
	 $_SESSION['articleId']=$articleId;

	// //echo($imgFile);

	// $uploaddir = "./images/";
	// $uploadfile = $uploaddir . basename($_FILES['imgFile']['name']);


	// $articleadminAddresp="Sucessfully added!";

	// if (move_uploaded_file($_FILES['imgFile']['tmp_name'], $uploadfile)) {

	// 	  $articleadminAddresp =   $articleadminAddresp."  File was succesfully loaded.\n";
	//     //echo "File is valid, and was successfully uploaded.\n";
	// } else {
	// 		  $articleadminAddresp =   $articleadminAddresp.  "Possible file upload attack!\n";

	//   	  echo ("Possible file upload attack!\n");
	// 		echo($uploadfile);
	// }




	try {

			include("includes/db-config.php");

			$stmt = $pdo->prepare("DELETE FROM `article`  WHERE articleId=$articleId;");

			$stmt->execute();

		
			

    // PDO error occouring
		} catch(PDOException $e) {   
				    echo 'Error: ' . $e->getMessage(); 
				    $articleadmindeleteresp = 'article delete failed: ' . $e->getMessage(); 
				    echo($articleadmindeleteresp);
				    exit;

		};

	try {

						

			$stmt = $pdo->prepare("DELETE FROM `userarticle`  WHERE articleId=$articleId;");

			$stmt->execute();

		
			

    // PDO error occouring
		} catch(PDOException $e) {   
				    echo 'Error: ' . $e->getMessage(); 
				    $articleadminDeleteresp = 'userarticle deletefailed: ' . $e->getMessage(); 
				     echo($articleadmindeleteresp);
				    exit;

		};



	


			header("Location: articleManaging.php?");


	//header("Location: articleAdminAddResponse.php?responsemsg=$articleadminAddresp");

	?>
