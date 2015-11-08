<?PHP
include '../../conexioni.php';
$user=$_POST["user"];
$passwd=$_POST["passwd"];
$priv=$_POST["priv"];
if($_POST["option"]==1){
  $query = $conn->query("INSERT INTO users (user, passwd, priv, fecha) VALUES ('".$user."','".sha1($passwd)."','".$priv."','".date('d-m-Y')."')") OR die("Error: ".mysqli_error($conn));
  if($query===true){
    echo 'Insertado';
  } else {
    echo 'No Insertado';
  }
} else {
  $query = $conn->query("DELETE FROM users WHERE id='".$id."'");
  $query = $conn->query("INSERT INTO users (user, passwd, priv, fecha) VALUES ('".$user."','".sha1($passwd)."','".$priv."','".date('d-m-Y')."')") OR die("Error: ".mysqli_error($conn));
  if($query===true){
    echo 'Modificado';
  } else {
    echo 'No Modificado';
  }
}
?>