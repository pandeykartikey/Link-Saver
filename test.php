<html>

<head>

<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div ><h1>Welcome <?php session_start(); echo $_SESSION["name"]; ?></h1></div>
<div class="button"><a href="test2.php">Save New Link</a></div>
<div class="button"><a href="show.php">See the Saved Links</a></div>
<div class="button"><a href="index.html">Log Out</a></div>
</body>
</html>