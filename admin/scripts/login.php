<?PHP
session_start();  
require_once("../../conexioni.php");
$user = $_POST["user"];
$passwd = sha1($_POST["passwd"]);
$query = $conn->query("SELECT * FROM users WHERE user='".$user."' AND passwd='".$passwd."'");
$row=$query->fetch_assoc();
if($row["id"] && $row["status"]=="activo"){
  session_regenerate_id();
  $_SESSION["priv"] = $row["priv"]; 
  $obj = new stdclass();
  $obj->login = "true";
  echo json_encode($obj);
} else {
  $obj = new stdclass();
  $obj->login = "false";
  echo json_encode($obj);
}
?>