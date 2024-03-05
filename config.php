<?php
$hostname = "localhost"; // Change this to your MySQL server hostname
$username = "root";
$password = "";
$database = "id21905082_if0_36019890_guestbook";

// Create connection
$objCon = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$objCon) {
    // If connection fails, output error message and terminate script
    die("Connection failed: " . mysqli_connect_error());
}
?>



<!-- define('servername', 'sql301.infinityfree.com');
define('username', 'if0_36019890');
define('password', 'uuIpafbax7TAFac');
define('dbname', 'if0_36019890_guestbook'); -->