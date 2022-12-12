<?php
/*
*Created by Moreish Cafe project developers(group members = Ravindu, Amalshi, Thilani, Jayanga, Rashmi, Pasindu)
*2022-01-11
*/

$servername = '127.0.0.1';
$username = "ravindu";
$password = "P@ssw0rD";
$db = 'Cofee_shop';

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>