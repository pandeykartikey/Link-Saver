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

if(isset($_POST['submit'])){

$sql = 'INSERT INTO table2 (user,link)
VALUES("'.$save.'","'.$_POST["link"].'");';
if (!(mysqli_query($conn, $sql))) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
<html>
	<head>
		
<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<input type="url" name="link">
<input type="submit" name="submit">
</form>
<div class="button"><a href="test.php">Go to Profile</a></div>
<div class="button"><a href="show.php">See the Saved Links</a></div>
<div class="button"><a href="index.html">Log Out</a></div>

</body>
	</html>