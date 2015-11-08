<?PHP
//cookies antes de session_start
$lifetime = 60000;
session_set_cookie_params($lifetime);
ini_set("session.cookie_lifetime",$lifetime);
ini_set("session.gc_maxlifetime",$lifetime);
ini_set('max_execution_time', $lifetime);

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