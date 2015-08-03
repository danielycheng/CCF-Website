<?php
  $db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720dyc8av', 'danielcheng','cs4720dyc8av');
  if (mysqli_connect_errno()) {
      echo "Connection Error!";
      return;
  }
   // var_dump($_GET);
  $user = $_GET['compIDlist'];
  $ch1 = $_GET['ch1'];
  $ch2 = $_GET['ch2'];
  $ch3 = $_GET['ch3'];
  $ch4 = $_GET['ch4'];
  $ch5 = $_GET['ch5'];
  $ch6 = $_GET['ch6'];

if($ch1 == "true") {
	$eph1 = "UPDATE ephesians SET ch1='1' WHERE id='$user'";
	mysqli_query($db_connection, $eph1);
}
else {
	$eph1 = "UPDATE ephesians SET ch1='0' WHERE id='$user'";
	mysqli_query($db_connection, $eph1);
}

if($ch2 == "true") {
	$eph2 = "UPDATE ephesians SET ch2='1' WHERE id='$user'";
	mysqli_query($db_connection, $eph2);
}
else {
	$eph2 = "UPDATE ephesians SET ch2='0' WHERE id='$user'";
	mysqli_query($db_connection, $eph2);
}

if($ch3 == "true") {
	$eph3 = "UPDATE ephesians SET ch3='1' WHERE id='$user'";
	mysqli_query($db_connection, $eph3);
}
else {
	$eph3 = "UPDATE ephesians SET ch3='0' WHERE id='$user'";
	mysqli_query($db_connection, $eph3);
}

if($ch4 == "true") {
	$eph4 = "UPDATE ephesians SET ch4='1' WHERE id='$user'";
	mysqli_query($db_connection, $eph4);
}
else {
	$eph4 = "UPDATE ephesians SET ch4='0' WHERE id='$user'";
	mysqli_query($db_connection, $eph4);
}

if($ch5 == "true") {
	$eph5 = "UPDATE ephesians SET ch5='1' WHERE id='$user'";
	mysqli_query($db_connection, $eph5);
}
else {
	$eph5 = "UPDATE ephesians SET ch5='0' WHERE id='$user'";
	mysqli_query($db_connection, $eph5);
}

if($ch6 == "true") {
	$eph6 = "UPDATE ephesians SET ch6='1' WHERE id='$user'";
	mysqli_query($db_connection, $eph6);
}
else {
	$eph6 = "UPDATE ephesians SET ch6='0' WHERE id='$user'";
	mysqli_query($db_connection, $eph6);
}



// $eph1 = "SELECT ch1 FROM ephesians WHERE id='$user'";
// $reph1 = mysqli_query($db_connection, $eph1);
// while ($row = mysqli_fetch_array($reph1)) {
// 	echo $row['ch1'];
	// if($row['ch1'] === "1") {
	// 	echo "<div id='ch1e' name='ch1' style='color:gray'>Chapter 1</div>";
	// }
	// else {
	// 	echo "<div id='ch1e' name='ch1' style='color:black'>Chapter 1</div>";
	// }
// }

mysqli_close($db_connection);

?>