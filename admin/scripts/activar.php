<?PHP
include '../../conexioni.php';
$query = $conn->query("UPDATE users SET status='activo' WHERE id='".$_POST["id"]."'") OR die("Error: ".mysqli_error($conn));
?>