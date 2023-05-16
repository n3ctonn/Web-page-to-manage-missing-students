<?php  session_start();?>

<?php

if (!isset($_SESSION['Login'])) {
  header("Location: ../index.php");
  exit();
}
?>