<?php session_start();
//process-login.php
$account = $_POST['account'];
$password = $_POST['password'];
//$userid=$_SESSION['userId'];

/**
Check the database for proper login info
If proper login info is found (username and password match),
then remember this user and consider the user logged-in.
*/
include('includes/db-config.php');

$stmt = $pdo->prepare("SELECT * FROM `user` 
	WHERE (`username` = '$account' OR `email`='$account')
	AND `password` = '$password'
	");

// echo("SELECT * FROM `user` 
// 	WHERE (`username` = '$account' OR `email`='$account')
// 	AND `password` = '$password'
// 	");

$stmt->execute();

$row = $stmt->fetch();

if($row){
// 	//S$loginresp="sucessfully logged in !";
 	$_SESSION['userId'] = $row['userId'];
 	$_SESSION['username'] = $row['username'];
 	$userId=$_SESSION['userId'];

 	if ($row['typeId'] == 0) {
     	//echo("you are here");
     	//echo("Location: loginVipResponse.php?userId=$userId");
 		header("Location: loginVipResponse.php?userId=$userId");

 	} else {

 	   header("Location: loginResponse.php?userId=$userId");

	
	}

} else {

		//$loginresp="wrong account/password, please check!";
		 header("Location: loginResponsefail.html");
 };



?>