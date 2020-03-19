<?php session_start();
//process-vipp login.php
$account = $_POST['account'];
$password = $_POST['password'];

/**
Check the database for proper login info
If proper login info is found (username and password match),
then remember this user and consider the user logged-in.
*/
include('includes/db-config.php');

$stmt = $pdo->prepare("SELECT * FROM `user` 
	WHERE (`username` = '$account' OR `email`='$account')
	AND `password` = '$password' AND `TypeID`=0
	");

$stmt->execute();

$row = $stmt->fetch();
if($row){
	//S$loginresp="sucessfully logged in !";
	//echo("your username and password matches! You are now logged in.");
	$_SESSION['userId'] = $row['userId'];
	$_SESSION['username'] = $row['username'];

	header("Location: loginVipResponse.php");


}else{

	//S$loginresp="wrong account/password, please check!";
	header("Location: loginVipResponsefail.html");
}



?>S