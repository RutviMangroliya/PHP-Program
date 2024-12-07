<!DOCTYPE html>
<html>
<head>
<title>Server and Client Information</title>
</head>
<body bgcolor="skyblue">

<?php
echo "<h1>Server Information</h1>";
echo "<p>Server IP Address: " . $_SERVER['SERVER_ADDR'] . "</p>";
echo "<p>Server Name: " . $_SERVER['SERVER_NAME'] . "</p>";
echo "<p>Server Port: " . $_SERVER['SERVER_PORT'] . "</p>";
echo "<p>Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "</p>";

echo "<h1>Client Information</h1>";
echo "<p>Client IP Address: " . $_SERVER['REMOTE_ADDR'] . "</p>";
echo "<p>Client User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "</p>";
echo "<p>Client Request Method: " . $_SERVER['REQUEST_METHOD'] . "</p>";

echo "<h1>URL Information</h1>";
echo "<p>Current URL: " . "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" . "</p>";

echo "<h1>Context Information</h1>";
$hitCount = $_SERVER['REQUEST_TIME'];
echo "Hit Count: $hitCount <br>";
?>

</body>
</html>