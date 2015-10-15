<?PHP
  session_start();
  unset($_COOKIE);
  unset($_SESSION);
  header("Location: index.php");
?>