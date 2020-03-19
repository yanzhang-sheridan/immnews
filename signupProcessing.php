<?php
//sigupProcessing.php

//receive user variables
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	//var_dump($_POST);

	//save user data into the database
	include("includes/db-config.php");

	// $stmt = $pdo->prepare("INSERT INTO `user` 
	// 	(`userId`, `username`, `password`, `email`, `typeId`) 
	// 	VALUES (NULL, '$username', '$password', '$email', '1');");

	// echo("INSERT INTO `user` 
	// 	(`userId`, `username`, `password`, `email`, `typeId`) 
	// 	VALUES (NULL, '$username', '$password', '$email', '1');");


	// $stmt->execute();

	// $contactresp = "Sucessfully registered!";

	//."INSERT INTO `user` 
		// (`userId`, `username`, `password`, `email`, `typeId`) 
		// VALUES (NULL, '$username', '$password', '$email', '1');";

	try {


			$stmt = $pdo->prepare("INSERT INTO `user` 
		(`userId`, `username`, `password`, `email`, `typeId`) 
		VALUES (NULL, '$username', '$password', '$email', '1');");

		///////////////echo("INSERT INTO `user` 
		//////////////(`userId`, `username`, `password`, `email`, `typeId`) 
		//////////////////VALUES (NULL, '$username', '$password', '$email', '1');");


		$stmt->execute();

		$contactresp = "Sucessfully registered!";

	    // PDO error occouring
	} catch(PDOException $e) {   
				    //echo 'Error: ' . $e->getMessage(); 
				   $contactresp = 'connection failed: ' . $e->getMessage(); 

	};
			//echo($responsemsg);
			//echo("Location:signupResponse.php?responsemsg=$contactresp");
			header("Location:signupResponse.php?responsemsg=$contactresp");
		//header("Location: signupResponse.php?responsemsg=$contactresp");

	?>

