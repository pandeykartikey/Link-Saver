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

$name=$_POST["name"];
$psw=$_POST["psw"];
$sql="SELECT * FROM table1 WHERE user='".$name."'AND password='".$psw."';" ;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
session_start();
$_SESSION["name"]=$name;
header('Location:test.php');

}
else{
header("Location:index.html");
}
	?>
