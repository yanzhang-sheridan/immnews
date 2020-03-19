<?php
 	// process contactForm


include("includes/db-config.php");
	
	
	// receive contact variables
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$category = $_POST['category'];
	$role = $_POST['role'];
	$comments = $_POST['comments'];


	//var_dump($_POST);    // debug only

	
// save contact data to database --- connect/ prepare/ execute



	

	$stmt = $pdo->prepare("INSERT INTO `contact`
					 (`contactId`, `firstname`, `lastname`,`email`, `phone`, 
					 `category`,`role`,`comments`,`dateAdded`)


					VALUES (NULL, '$firstname', '$lastname', '$email', '$phone',
					'$category', '$role', '$comments', CURRENT_DATE());" );


	// echo ("INSERT INTO `contact`
	// 				 (`contactId`, `firstname`, `lastname`,`email`, `phone`, 
	// 				 `category`,`role`,`comments`,`dateAdded`)

	// 				VALUES (NULL, '$firstname', '$lastname', '$email', '$phone',
	// 				'$category', '$role', '$comments', CURRENT_DATE());" );

	$stmt->execute();

	// echo($stmt);

	$contactresp = " Thank you for sending us informations!";
	try {
    // PDO error occouring
			} catch(PDOException $e) {   
			    echo 'Error: ' . $e->getMessage(); 
			    $contactresp = 'connection failed: ' . $e->getMessage(); 

	};

	header("Location: ContactResponse.php?responsemsg=$contactresp");
?>



