<nav class="navbar navbar-expand navbar-light bg-light">
  <a href="index.php" class="navbar-brand">Mali Oglasi</a>
  <?php
   if (isset($_SESSION['id'])) {
     require_once 'partials/navbar-logged.php';
   } else {
     require_once 'partials/navbar-login.php';
   }
   ?>
</nav>
