<?php session_start();
//abouteditprocess.php

//receive user variables
$author = $_SESSION['username'];
$content = $_POST['content'];



// echo("UPDATE `article` 
// 						SET `content` = '$content', `author` = '$author', `dateAdded` = CURRENT_DATE()
// 						WHERE `article`.`category` = 'A';");


//update the database record
include("includes/db-config.php");

$stmt = $pdo->prepare("UPDATE `article` 
						SET `content` = '$content', `author` = '$author', `lastModified` = CURRENT_TIME()
						WHERE `article`.`category` = 'A';");

$stmt->execute();

header("Location: aboutEditing.php");
?>