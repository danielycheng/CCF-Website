<?php
  $db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720dyc8av', 'danielcheng','cs4720dyc8av');
  if (mysqli_connect_errno()) {
      echo "Connection Error!";
      return;
  }


$getcompid = "SELECT id FROM books";


$result = mysqli_query($db_connection, $getcompid);

echo "<select class='form-control' onchange='getprog(this);' id='compIDlist' name='compIDlist'>";
while ($row = mysqli_fetch_array($result)) {
	 echo "<option value='" . $row['id'] . "'>" . $row['id'] . "</option>";

}
 echo "</select>";

  mysqli_close($db_connection);
?>