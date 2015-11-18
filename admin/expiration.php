<?PHP
//cookies antes de session_start
$lifetime = 60000;
session_set_cookie_params($lifetime);
ini_set("session.cookie_lifetime",$lifetime);
ini_set("session.gc_maxlifetime",$lifetime);
ini_set('max_execution_time', $lifetime);
?>