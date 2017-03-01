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
$sql = 'INSERT INTO table1 (user,password)
VALUES("'.$name.'","'.$psw.'");';
session_start();
$_SESSION["name"]=$name;
if (!mysqli_query($conn, $sql)) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location:test.php");
$conn->close();

?>
