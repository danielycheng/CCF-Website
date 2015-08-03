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
$ch5 = $_GET['ch5'];
$ch6 = $_GET['ch6'];
$ch7 = $_GET['ch7'];
$ch8 = $_GET['ch8'];
$ch9 = $_GET['ch9'];
$ch10 = $_GET['ch10'];
$ch11 = $_GET['ch11'];
$ch12 = $_GET['ch12'];
$ch13 = $_GET['ch13'];
$ch14 = $_GET['ch14'];
$ch15 = $_GET['ch15'];
$ch16 = $_GET['ch16'];

function updateromread($chapter,$user,$con) {
	$rom = "UPDATE romans SET $chapter='1' WHERE id='$user'";
	mysqli_query($con, $rom);
}

function updateromNOTread($chapter,$user,$con) {
	$rom = "UPDATE romans SET $chapter='0' WHERE id='$user'";
	mysqli_query($con, $rom);
}

if($ch1 == "true") {
	updateromread("ch1",$user,$db_connection);
}
else {
	updateromNOTread("ch1",$user,$db_connection);	
}

if($ch2 == "true") {
	updateromread("ch2",$user,$db_connection);
}
else {
	updateromNOTread("ch2",$user,$db_connection);	
}

if($ch3 == "true") {
	updateromread("ch3",$user,$db_connection);
}
else {
	updateromNOTread("ch3",$user,$db_connection);	
}

if($ch4 == "true") {
	updateromread("ch4",$user,$db_connection);
}
else {
	updateromNOTread("ch4",$user,$db_connection);	
}

if($ch5 == "true") {
	updateromread("ch5",$user,$db_connection);
}
else {
	updateromNOTread("ch5",$user,$db_connection);	
}

if($ch6 == "true") {
	updateromread("ch6",$user,$db_connection);
}
else {
	updateromNOTread("ch6",$user,$db_connection);	
}

if($ch7 == "true") {
	updateromread("ch7",$user,$db_connection);
}
else {
	updateromNOTread("ch7",$user,$db_connection);	
}

if($ch8 == "true") {
	updateromread("ch8",$user,$db_connection);
}
else {
	updateromNOTread("ch8",$user,$db_connection);	
}

if($ch9 == "true") {
	updateromread("ch9",$user,$db_connection);
}
else {
	updateromNOTread("ch9",$user,$db_connection);	
}

if($ch10 == "true") {
	updateromread("ch10",$user,$db_connection);
}
else {
	updateromNOTread("ch10",$user,$db_connection);	
}

if($ch11 == "true") {
	updateromread("ch11",$user,$db_connection);
}
else {
	updateromNOTread("ch11",$user,$db_connection);	
}

if($ch12 == "true") {
	updateromread("ch12",$user,$db_connection);
}
else {
	updateromNOTread("ch12",$user,$db_connection);	
}

if($ch13 == "true") {
	updateromread("ch13",$user,$db_connection);
}
else {
	updateromNOTread("ch13",$user,$db_connection);	
}

if($ch14 == "true") {
	updateromread("ch14",$user,$db_connection);
}
else {
	updateromNOTread("ch14",$user,$db_connection);	
}

if($ch15 == "true") {
	updateromread("ch15",$user,$db_connection);
}
else {
	updateromNOTread("ch15",$user,$db_connection);	
}

if($ch16 == "true") {
	updateromread("ch16",$user,$db_connection);
}
else {
	updateromNOTread("ch16",$user,$db_connection);	
}

mysqli_close($db_connection);

?>