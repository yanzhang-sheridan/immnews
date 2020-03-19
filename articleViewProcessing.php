<?php session_start();
//articleviewprocess.php

//receive user variables

	$articleId=$_POST['articleId']; 
	$username=$_SESSION['username'];
	$userId=$_SESSION['userId'];
	

	if ($_POST['likeId'] =="YES" ) {

				$likeId = 1;

	} else {

				$likeId = 0;

	};






	//echo("UPDATE `article` 
							//SET `content` = '$content', `author` = '$author', `dateAdded` = CURRENT_DATE()
							//WHERE `article`.`category` = 'A';");


	//update the database record
	include("includes/db-config.php");

	$stmt = $pdo->prepare("UPDATE `userarticle` 
							SET `likeId` = $likeId
							WHERE `articleId` = $articleId AND `userId` = $userId
						;");

	// echo("UPDATE `userarticle` 
	// 						SET `likeId` = $likeId
	// 						WHERE `articleId` = $articleId AND `userId` = $userId");

	$stmt->execute();




	$num = $stmt->rowCount();

	if ($num !=1 ) {

			  $pdo->exec("INSERT INTO `userarticle`
				    	   			  (`userId`,`articleId`, `likeId`)
				    	     	  VALUES ($userId, $articleId, $likeId);");




	}


		header("Location: articleView.php?articleId=$articleId");
?>