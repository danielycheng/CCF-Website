<?php
$db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720dyc8av', 'danielcheng','cs4720dyc8av');
if (mysqli_connect_errno()) {
	echo "Connection Error!";
	return;
}

$compID = $_GET["compID"];
$book1 = $_GET["book1"];
$book2 = $_GET["book2"];
$book3 = $_GET["book3"];

$flag = true;

if($compID !=""){
	$insert = "INSERT INTO books (id, book1, book2, book3)
	VALUES ('$compID', '$book1', '$book2', '$book3')
	ON DUPLICATE KEY UPDATE book1='$book1',book2='$book2',book3='$book3'";
	if (!mysqli_query($db_connection,$insert)) {
		die('Error: ' . mysqli_error($db_connection));
	}

	echo "New user added! Please refresh user list below.";
	$flag = false;
}


if($book1 != " "){
	if($book1 =="ephesians") {
		$insertbook1 = "INSERT INTO $book1 (id) VALUES ('$compID') 
		ON DUPLICATE KEY UPDATE ch1='0',ch2='0',ch3='0',ch4='0',ch5='0',ch6='0'";
		if (!mysqli_query($db_connection,$insertbook1)) {
			die('Error: book1' . mysqli_error($db_connection));
		}
	}
	if($book1 =="philippians") {
		$insertbook1 = "INSERT INTO $book1 (id) VALUES ('$compID') 
		ON DUPLICATE KEY UPDATE ch1='0',ch2='0',ch3='0',ch4='0'";
		if (!mysqli_query($db_connection,$insertbook1)) {
			die('Error: book1' . mysqli_error($db_connection));
		}
	}
	if($book1 =="romans") {
		$insertbook1 = "INSERT INTO $book1 (id) VALUES ('$compID') 
		ON DUPLICATE KEY UPDATE ch1='0',ch2='0',ch3='0',ch4='0',ch5='0',ch6='0',ch7='0',
		ch8='0',ch9='0',ch10='0',ch11='0',ch12='0',ch13='0',ch14='0',ch15='0',ch16='0'";
		if (!mysqli_query($db_connection,$insertbook1)) {
			die('Error: book1' . mysqli_error($db_connection));
		}
	}
}


if($book2 != " "){
	if($book2 =="ephesians") {
		$insertbook2 = "INSERT INTO $book2 (id) VALUES ('$compID') 
		ON DUPLICATE KEY UPDATE ch1='0',ch2='0',ch3='0',ch4='0',ch5='0',ch6='0'";
		if (!mysqli_query($db_connection,$insertbook2)) {
			die('Error: book2' . mysqli_error($db_connection));
		}
	}
	if($book2 =="philippians") {
		$insertbook2 = "INSERT INTO $book2 (id) VALUES ('$compID') 
		ON DUPLICATE KEY UPDATE ch1='0',ch2='0',ch3='0',ch4='0'";
		if (!mysqli_query($db_connection,$insertbook2)) {
			die('Error: book2' . mysqli_error($db_connection));
		}
	}
	if($book2 =="romans") {
		$insertbook2 = "INSERT INTO $book2 (id) VALUES ('$compID') 
		ON DUPLICATE KEY UPDATE ch1='0',ch2='0',ch3='0',ch4='0',ch5='0',ch6='0',ch7='0',
		ch8='0',ch9='0',ch10='0',ch11='0',ch12='0',ch13='0',ch14='0',ch15='0',ch16='0'";
		if (!mysqli_query($db_connection,$insertbook2)) {
			die('Error: book2' . mysqli_error($db_connection));
		}
	}
}

if($book3 != " "){
	if($book3 =="ephesians") {
		$insertbook3 = "INSERT INTO $book3 (id) VALUES ('$compID') 
		ON DUPLICATE KEY UPDATE ch1='0',ch2='0',ch3='0',ch4='0',ch5='0',ch6='0'";
		if (!mysqli_query($db_connection,$insertbook3)) {
			die('Error: book1' . mysqli_error($db_connection));
		}
	}
	if($book3 =="philippians") {
		$insertbook3 = "INSERT INTO $book3 (id) VALUES ('$compID') 
		ON DUPLICATE KEY UPDATE ch1='0',ch2='0',ch3='0',ch4='0'";
		if (!mysqli_query($db_connection,$insertbook3)) {
			die('Error: book1' . mysqli_error($db_connection));
		}
	}
	if($book3 =="romans") {
		$insertbook3 = "INSERT INTO $book3 (id) VALUES ('$compID') 
		ON DUPLICATE KEY UPDATE ch1='0',ch2='0',ch3='0',ch4='0',ch5='0',ch6='0',ch7='0',
		ch8='0',ch9='0',ch10='0',ch11='0',ch12='0',ch13='0',ch14='0',ch15='0',ch16='0'";
		if (!mysqli_query($db_connection,$insertbook3)) {
			die('Error: book1' . mysqli_error($db_connection));
		}
	}
}

if($flag) {
	echo "Please enter a computing ID";
}

mysqli_close($db_connection);
?>