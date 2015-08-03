<?php
$db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720dyc8av', 'danielcheng','cs4720dyc8av');
if (mysqli_connect_errno()) {
	echo "Connection Error!";
	return;
}

$user = $_GET['compIDlist'];
$ch1 = $_GET['ch1'];
$ch2 = $_GET['ch2'];
$ch3 = $_GET['ch3'];
$ch4 = $_GET['ch4'];



function updatephilread($chapter,$user,$con) {
	$phil = "UPDATE philippians SET $chapter='1' WHERE id='$user'";
	mysqli_query($con, $phil);
}

function updatephilNOTread($chapter,$user,$con) {
	$phil = "UPDATE philippians SET $chapter='0' WHERE id='$user'";
	mysqli_query($con, $phil);
}

if($ch1 == "true") {
	updatephilread("ch1",$user,$db_connection);
}
else {
	updatephilNOTread("ch1",$user,$db_connection);	
}

if($ch2 == "true") {
	updatephilread("ch2",$user,$db_connection);
}
else {
	updatephilNOTread("ch2",$user,$db_connection);	
}

if($ch3 == "true") {
	updatephilread("ch3",$user,$db_connection);
}
else {
	updatephilNOTread("ch3",$user,$db_connection);	
}

if($ch4 == "true") {
	updatephilread("ch4",$user,$db_connection);
}
else {
	updatephilNOTread("ch4",$user,$db_connection);	
}


mysqli_close($db_connection);

?>