<?php
$servername = "localhost";

/*BLUEHOST*/
//$username = "scrapell_112372";
//$password = "ASD0374lajdfg";
//$mydb = "scrapell_lws";

/*LWS HOST*/
//$username = "lwsmx_system";
//$password = "weigr32b8q74";
//$mydb = "lwsmx_system";

/*LOCALHOST*/
$username = "root";
$password = "";
$mydb = "lws";

// Create connection
$conn = new mysqli($servername, $username, $password, $mydb);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: ".$conn->connect_error);
} 
?>