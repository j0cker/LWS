<?PHP
include '../../conexioni.php';
$query = $conn->query("UPDATE users SET status='bloquer' WHERE id='".$_POST["id"]."'") OR die("Error: ".mysqli_error($conn));
?>