<?php
$servername="";
$username="";
$password="";
$db_name="";

$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check for Connection
if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}

?>