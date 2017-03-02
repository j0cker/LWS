<?php
$servername = "localhost";
//$username = "scrapell_112372";
//$password = "ASD0374lajdfg";
$username = "lwsmx_system";
$password = "weigr32b8q74";
$mydb = "lwsmx_system";
//$mydb = "scrapell_lws";

// Create connection
$conn = new mysqli($servername, $username, $password, $mydb);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: ".$conn->connect_error);
} 
?>