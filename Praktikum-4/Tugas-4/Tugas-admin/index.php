<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<?php
      error_reporting(0);
      $hal = $_GET['krupuk'];
      if ($hal == 'home.php') {
        include_once 'home.php';
      } elseif (!empty($hal)) {
        include_once '' . $hal . '.php';
      } else {
        include_once 'home.php';
      }
?>

<?php
include_once 'footer.php';
?>