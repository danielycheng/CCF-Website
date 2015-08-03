<?php
$db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720dyc8av', 'danielcheng','cs4720dyc8av');
if (mysqli_connect_errno()) {
	echo "Connection Error!";
	return;
}

$user = $_GET["compIDlist"];

if($user != "") {
echo "<h2>Progress List for $user </h2>";

$eph1 = "SELECT ch1 FROM ephesians WHERE id='$user'";
$eph2 = "SELECT ch2 FROM ephesians WHERE id='$user'";
$eph3 = "SELECT ch3 FROM ephesians WHERE id='$user'";
$eph4 = "SELECT ch4 FROM ephesians WHERE id='$user'";
$eph5 = "SELECT ch5 FROM ephesians WHERE id='$user'";
$eph6 = "SELECT ch6 FROM ephesians WHERE id='$user'";
$reph1 = mysqli_query($db_connection, $eph1);
$reph2 = mysqli_query($db_connection, $eph2);
$reph3 = mysqli_query($db_connection, $eph3);
$reph4 = mysqli_query($db_connection, $eph4);
$reph5 = mysqli_query($db_connection, $eph5);
$reph6 = mysqli_query($db_connection, $eph6);

echo "<div class='row'>";
echo "<div class='col-md-4'>";
echo "<h3>Ephesians</h3>";
echo "<p id='ephesians'>";

while ($row = mysqli_fetch_array($reph1)) {
	if($row['ch1'] === "1") {
		echo "<div style='color:red;text-decoration:line-through;'>Chapter 1</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 1</div>";
	}
}


while ($row = mysqli_fetch_array($reph2)) {
	if($row['ch2'] === "1") {
		echo "<div style='color:red;text-decoration:line-through;'>Chapter 2</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 2</div>";
	}
}

while ($row = mysqli_fetch_array($reph3)) {
	if($row['ch3'] === "1") {
		echo "<div style='color:red;text-decoration:line-through;'>Chapter 3</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 3</div>";
	}
}

while ($row = mysqli_fetch_array($reph4)) {
	if($row['ch4'] === "1") {
		echo "<div style='color:red;text-decoration:line-through;'>Chapter 4</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 4</div>";
	}
}

while ($row = mysqli_fetch_array($reph5)) {
	if($row['ch5'] === "1") {
		echo "<div style='color:red;text-decoration:line-through;'>Chapter 5</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 5</div>";
	}
}

while ($row = mysqli_fetch_array($reph6)) {
	if($row['ch6'] === "1") {
		echo "<div style='color:red;text-decoration: line-through;'>Chapter 6</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 6</div>";
	}
}

echo "</p>";
echo "<button type='submit' class='btn btn-default' data-toggle='modal' 
data-target='#ephModal' id='updateeph'>Update</button>";
echo "</div>";


$phi1 = "SELECT ch1 FROM philippians WHERE id='$user'";
$phi2 = "SELECT ch2 FROM philippians WHERE id='$user'";
$phi3 = "SELECT ch3 FROM philippians WHERE id='$user'";
$phi4 = "SELECT ch4 FROM philippians WHERE id='$user'";
$phi1 = mysqli_query($db_connection, $phi1);
$phi2 = mysqli_query($db_connection, $phi2);
$phi3 = mysqli_query($db_connection, $phi3);
$phi4 = mysqli_query($db_connection, $phi4);

echo "<div class='col-md-4'>";
echo "<h3>Philippians</h3>";
echo "<p id='philippians'>";
while ($row = mysqli_fetch_array($phi1)) {
	if($row['ch1'] === "1") {
		echo "<div style='color:red;text-decoration: line-through;'>Chapter 1</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 1</div>";
	}
}
while ($row = mysqli_fetch_array($phi2)) {
	if($row['ch2'] === "1") {
		echo "<div style='color:red;text-decoration: line-through;'>Chapter 2</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 2</div>";
	}
}
while ($row = mysqli_fetch_array($phi3)) {
	if($row['ch3'] === "1") {
		echo "<div style='color:red;text-decoration: line-through;'>Chapter 3</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 3</div>";
	}
}
while ($row = mysqli_fetch_array($phi4)) {
	if($row['ch4'] === "1") {
		echo "<div style='color:red;text-decoration: line-through;'>Chapter 4</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 4</div>";
	}
}
echo "</p>";
echo "<button type='submit' class='btn btn-default' data-toggle='modal' 
data-target='#philModal' id='updatephil'>Update</button>";
echo "</div>";


$rom1 = "SELECT ch1 FROM romans WHERE id='$user'";
$rom2 = "SELECT ch2 FROM romans WHERE id='$user'";
$rom3 = "SELECT ch3 FROM romans WHERE id='$user'";
$rom4 = "SELECT ch4 FROM romans WHERE id='$user'";
$rom5 = "SELECT ch5 FROM romans WHERE id='$user'";
$rom6 = "SELECT ch6 FROM romans WHERE id='$user'";
$rom7 = "SELECT ch7 FROM romans WHERE id='$user'";
$rom8 = "SELECT ch8 FROM romans WHERE id='$user'";
$rom9 = "SELECT ch9 FROM romans WHERE id='$user'";
$rom10 = "SELECT ch10 FROM romans WHERE id='$user'";
$rom11 = "SELECT ch11 FROM romans WHERE id='$user'";
$rom12 = "SELECT ch12 FROM romans WHERE id='$user'";
$rom13 = "SELECT ch13 FROM romans WHERE id='$user'";
$rom14 = "SELECT ch14 FROM romans WHERE id='$user'";
$rom15 = "SELECT ch15 FROM romans WHERE id='$user'";
$rom16 = "SELECT ch16 FROM romans WHERE id='$user'";
$rom1 = mysqli_query($db_connection, $rom1);
$rom2 = mysqli_query($db_connection, $rom2);
$rom3 = mysqli_query($db_connection, $rom3);
$rom4 = mysqli_query($db_connection, $rom4);
$rom5 = mysqli_query($db_connection, $rom5);
$rom6 = mysqli_query($db_connection, $rom6);
$rom7 = mysqli_query($db_connection, $rom7);
$rom8 = mysqli_query($db_connection, $rom8);
$rom9 = mysqli_query($db_connection, $rom9);
$rom10 = mysqli_query($db_connection, $rom10);
$rom11 = mysqli_query($db_connection, $rom11);
$rom12 = mysqli_query($db_connection, $rom12);
$rom13 = mysqli_query($db_connection, $rom13);
$rom14 = mysqli_query($db_connection, $rom14);
$rom15 = mysqli_query($db_connection, $rom15);
$rom16 = mysqli_query($db_connection, $rom16);

echo "<div class='col-md-4'>";
echo "<h3>Romans</h3>";
echo "<p id='romans'>";
while ($row = mysqli_fetch_array($rom1)) {
	if($row['ch1'] === "1") {
		echo "<div style='color:red;text-decoration: line-through;'>Chapter 1</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 1</div>";
	}
}
while ($row = mysqli_fetch_array($rom2)) {
	if($row['ch2'] === "1") {
		echo "<div style='color:red;text-decoration: line-through;'>Chapter 2</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 2</div>";
	}
}
while ($row = mysqli_fetch_array($rom3)) {
	if($row['ch3'] === "1") {
		echo "<div style='color:red;text-decoration: line-through;'>Chapter 3</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 3</div>";
	}
}
while ($row = mysqli_fetch_array($rom4)) {
	if($row['ch4'] === "1") {
		echo "<div style='color:red;text-decoration: line-through;'>Chapter 4</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 4</div>";
	}
}
while ($row = mysqli_fetch_array($rom5)) {
	if($row['ch5'] === "1") {
		echo "<div style='color:red;text-decoration: line-through;'>Chapter 5</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 5</div>";
	}
}
while ($row = mysqli_fetch_array($rom6)) {
	if($row['ch6'] === "1") {
		echo "<div style='color:red;text-decoration: line-through;'>Chapter 6</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 6</div>";
	}
}
while ($row = mysqli_fetch_array($rom7)) {
	if($row['ch7'] === "1") {
		echo "<div style='color:red;text-decoration: line-through;'>Chapter 7</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 7</div>";
	}
}
while ($row = mysqli_fetch_array($rom8)) {
	if($row['ch8'] === "1") {
		echo "<div style='color:red;text-decoration: line-through;'>Chapter 8</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 8</div>";
	}
}
while ($row = mysqli_fetch_array($rom9)) {
	if($row['ch9'] === "1") {
		echo "<div style='color:red;text-decoration: line-through;'>Chapter 9</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 9</div>";
	}
}
while ($row = mysqli_fetch_array($rom10)) {
	if($row['ch10'] === "1") {
		echo "<div style='color:red;text-decoration: line-through;'>Chapter 10</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 10</div>";
	}
}
while ($row = mysqli_fetch_array($rom11)) {
	if($row['ch11'] === "1") {
		echo "<div style='color:red;text-decoration: line-through;'>Chapter 11</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 11</div>";
	}
}
while ($row = mysqli_fetch_array($rom12)) {
	if($row['ch12'] === "1") {
		echo "<div style='color:red;text-decoration: line-through;'>Chapter 12</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 12</div>";
	}
}
while ($row = mysqli_fetch_array($rom13)) {
	if($row['ch13'] === "1") {
		echo "<div style='color:red;text-decoration: line-through;'>Chapter 13</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 13</div>";
	}
}
while ($row = mysqli_fetch_array($rom14)) {
	if($row['ch14'] === "1") {
		echo "<div style='color:red;text-decoration: line-through;'>Chapter 14</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 14</div>";
	}
}
while ($row = mysqli_fetch_array($rom15)) {
	if($row['ch15'] === "1") {
		echo "<div style='color:red;text-decoration: line-through;'>Chapter 15</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 15</div>";
	}
}
while ($row = mysqli_fetch_array($rom16)) {
	if($row['ch16'] === "1") {
		echo "<div style='color:red;text-decoration: line-through;'>Chapter 16</div>";
	}
	else {
		echo "<div style='color:black'>Chapter 16</div>";
	}
}
echo "</p>";
echo "<button type='submit' class='btn btn-default' data-toggle='modal' 
data-target='#romModal' id='updaterom'>Update</button>";
echo "</div>";
echo "</div>";
}
else {
	echo "Please select a user.";
}

mysqli_close($db_connection);


?>