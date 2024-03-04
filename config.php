<?php
// Connect to server and select database.
// define('servername', 'sql301.infinityfree.com');
// define('username', 'if0_36019890');
// define('password', 'uuIpafbax7TAFac');
// define('dbname', 'if0_36019890_guestbook');

define('servername', 'localhost');
define('username', 'root');
define('password', '');
define('dbname', 'myhotel');

$objCon = mysqli_connect(servername, username, password,dbname);
?>