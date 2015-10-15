<?PHP
  session_start();
  session_destroy();
  unset($_COOKIE);
  unset($_SESSION);
  require_once('desktop/header.php');
?>
    <script>
    $(document).ready(function() {
      deleteAllCookies();
    });
    function deleteAllCookies() {
        var cookies = document.cookie.split(";");
    
        for (var i = 0; i < cookies.length; i++) {
          var cookie = cookies[i];
          var eqPos = cookie.indexOf("=");
          var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
          document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
        }
        window.location="index.php";
    }
    </script>
  </head>
  <body>
  </body>
</html>