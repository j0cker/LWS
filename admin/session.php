<?PHP
require_once('expiration.php');
session_start();  

if($_SESSION['priv']){
  setcookie("priv", $_SESSION['priv'], time()+$lifetime);
  $status="OK";
} else {
  // debe de tener cookie si no los primeros sign in fallan
  
  if($_COOKIE['priv']){
    $_SESSION['priv'] = $_COOKIE['priv'];
	$status="OK";
  }
  
}
?>