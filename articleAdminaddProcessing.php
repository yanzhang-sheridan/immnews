<?php
//Article add Processing.php

//receive user variables
	$title = $_POST['title'];
	$author = $_POST['author'];
	$dateWritten =  $_POST['dateWritten'];
	$link = $_POST['link'];
	$category = $_POST['category'];
	//$imgFile = $_POST['imgFile'];
	$content = $_POST['content'];
	$isFeatured = $_POST['isFeatured'];

	//echo($imgFile);

	$uploaddir = "./images/";
	$uploadfile = $uploaddir . basename($_FILES['imgFile']['name']);


	$articleadminAddresp="Sucessfully added!";

	if (move_uploaded_file($_FILES['imgFile']['tmp_name'], $uploadfile)) {

		  $articleadminAddresp =   $articleadminAddresp."  File was succesfully loaded.\n";
	    //echo "File is valid, and was successfully uploaded.\n";
	} else {
			  $articleadminAddresp =   $articleadminAddresp." File is was successfully uploaded.\n";

	   // echo "Possible file upload attack!\n";
	}




	//var_dump($_POST);
	//echo($uploadfile);

	//save user data into the database
	// include("includes/db-config.php");

	

	// $stmt = $pdo->prepare("INSERT INTO `article` 
	// 	(`articleId`, `title`, `author`, `category`, `link`,`imgFile`, `content`, `lastModified`, `isFeatured`,
	// 	 `dateWritten`) 
	// 	VALUES (NULL, '$title', '$author', '$category', '$link','$uploadfile', '$content', CURRENT_TIME(), $isFeatured,
	// 	'&dateWritten');");


	// $stmt->execute();


	// $articleadminAddresp="Sucessfully added!";

	try {

			include("includes/db-config.php");

			

			$stmt = $pdo->prepare("INSERT INTO `article` 
				(`articleId`, `title`, `author`, `category`, `link`,`imgFile`, `content`, `lastModified`, `isFeatured`,
				 `dateWritten`) 
				VALUES (NULL, '$title', '$author', '$category', '$link','$uploadfile', 
				'$content', CURRENT_TIME(), $isFeatured, '$dateWritten');");

			// echo("INSERT INTO `article` 
			// 	(`articleId`, `title`, `author`, `category`, `link`,`imgFile`, `content`, `lastModified`, `isFeatured`,
			// 	 `dateWritten`) 
			// 	VALUES (NULL, '$title', '$author', '$category', '$link','$uploadfile', 
			// 	'$content', CURRENT_TIME(), $isFeatured,
			// 	$dateWritten);");


			$stmt->execute();

		
			$lastArticleId = $pdo->lastInsertId();


    // PDO error occouring
		} catch(PDOException $e) {   
				    echo 'Error: ' . $e->getMessage(); 
				    $articleadminAddresp = 'connection failed: ' . $e->getMessage(); 

		};


		
	

		try {

			


				$stmt = $pdo->prepare("SELECT `userid` from `user`;");
				$stmt->execute();

				//insert into a user/article pair in userarticle table when add a new article
					$userArr=[];
					while($row = $stmt->fetch()) {

						array_push($userArr,$row['userid']);
					}

								

				    $pdo->beginTransaction();
				 
				    foreach($userArr as $userid){

				    		$stmt = $pdo->prepare("SELECT `userid` from `user` where ;");
							$stmt->execute();

				    	    $pdo->exec("INSERT INTO `userarticle`
				    	   			  (`userId`,`articleId`, `likeId`)
				    	     	  VALUES ($userid, $lastArticleId, 'n')");

				    	    //echo( $i += 1);

				    	
				    }
				 

				    // commit the transaction
				    $pdo->commit();
				 
		 }	catch(PDOException $e){
					
					    // roll back the transaction if something failed
					    $pdo->rollback();
					     $articleadminAddresp = 'connection failed: ' . $e->getMessage(); 
				    }


				// echo($articleadminAddresp);






			header("Location: articleManaging.php");


	//header("Location: articleAdminAddResponse.php?responsemsg=$articleadminAddresp");

	?>
