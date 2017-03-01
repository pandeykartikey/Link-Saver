<?php
include 'config.php';


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = 'USE test1';
mysqli_query($conn, $sql);
session_start(); 
$save=$_SESSION["name"];
$sql="SELECT link FROM table2 WHERE user='".$save."';" ;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $x=1;
    while($row = mysqli_fetch_assoc($result)) {
        echo "<p class='links'>link".$x.": ".$row["link"]."</p>";
        $x=$x+1;   }
} else {
    echo "0 results";
}
?>
<html>
	<head>
		
<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>

<div class="button"><a href="test.php">Go to Profile</a></div>

<div class="button"><a href="test2.php">Save Links</a></div>
<div class="button"><a href="index.html">Log Out</a></div>


</body></html>